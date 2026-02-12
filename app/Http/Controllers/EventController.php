<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class EventController extends Controller
{
    public function index()
    {
        $today = Carbon::today();

        // Mettre à jour le statut des événements déjà passés
        Event::where('date', '<', $today)
            ->where('status', 'upcoming') // uniquement les événements qui étaient encore "upcoming"
            ->update(['status' => 'past']);

        // Récupérer tous les événements, triés par date décroissante
        $data = Event::orderBy('date', 'desc')->get();

        return response()->json($data);
    }

    
    public function allEvent()
    {
        $today = Carbon::today();

        // Mettre à jour le statut des événements déjà passés
        Event::where('date', '<', $today)
            ->where('status', 'upcoming')
            ->update(['status' => 'past']);

        // Récupérer les événements à venir avec pagination
        $data = Event::where('date', '>=', $today)
                    ->orderBy('date', 'asc')
                    ->paginate(9);

        return response()->json($data);
    }

    public function show($id){
        $data = Event::find($id);
        return response()->json($data);
    }

    public function showSlug($slug){
        $data = Event::where('slug',$slug)->first();
        return response()->json($data);
    }

    // Enregistrer un nouvel événement
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'location' => 'required|string|max:255',
            'image' => 'nullable|image|max:2048', // max 2MB
            'date' => 'required|date',
            'status' => 'nullable|in:upcoming,past',
        ]);

        // Upload image
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('events', 'public');
        }

        $event = Event::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title), // slug automatique
            'description' => $request->description,
            'location' => $request->location,
            'image_path' => $imagePath,
            'date' => $request->date,
            'status' => $request->status ?? 'upcoming',
        ]);

        return response()->json([
            'message' => 'Event created successfully',
            'event' => $event
        ]);
    }

    // Mettre à jour un événement
    public function update(Request $request, $id)
    {
        $event = Event::findOrFail($id);

        $request->validate([
            'title' => 'sometimes|required|string|max:255',
            'description' => 'nullable|string',
            'location' => 'sometimes|required|string|max:255',
            'image' => 'nullable|image|max:2048',
            'date' => 'sometimes|required|date',
            'status' => 'nullable|in:upcoming,past',
        ]);

        // Upload nouvelle image et supprimer l'ancienne
        if ($request->hasFile('image')) {
            if ($event->image_path && Storage::disk('public')->exists($event->image_path)) {
                Storage::disk('public')->delete($event->image_path);
            }
            $event->image_path = $request->file('image')->store('events', 'public');
        }

        // Mettre à jour les autres champs
        if ($request->has('title')) {
            $event->title = $request->title;
            $event->slug = Str::slug($request->title);
        }
        if ($request->has('description')) $event->description = $request->description;
        if ($request->has('location')) $event->location = $request->location;
        if ($request->has('date')) $event->date = $request->date;
        if ($request->has('status')) $event->status = $request->status;

        $event->save();

        return response()->json([
            'message' => 'Event updated successfully',
            'event' => $event
        ]);
    }

    // Supprimer un événement
    public function destroy($id)
    {
        $event = Event::findOrFail($id);

        if ($event->image_path && Storage::disk('public')->exists($event->image_path)) {
            Storage::disk('public')->delete($event->image_path);
        }

        $event->delete();

        return response()->json([
            'message' => 'Event deleted successfully'
        ]);
    }
}
