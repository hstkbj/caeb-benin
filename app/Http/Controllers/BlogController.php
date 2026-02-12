<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    public function index(){
        $data = Blog::with('category')->orderBy('id','desc')->get();
        return response()->json([
            'data'=>$data
        ]);
    }

    public function allBlog(){
        $data = Blog::with('category')->orderBy('id','desc')->paginate(9);
        return response()->json([
            'data'=>$data
        ]);
    }

    // Enregistrer un blog
    public function store(Request $request)
    {
        $request->validate([
            'title'       => 'required|string|max:255',
            'image'       => 'nullable|image|max:2048',
            'description' => 'required|string',
            'content'     => 'required|string',
            'category_id' => 'required|exists:categories,id',
            'status'      => 'nullable|in:draft,progress,valid',
        ]);

        // Upload image
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('blogs', 'public');
        }

        $blog = Blog::create([
            'title'       => $request->title,
            'slug'        => Str::slug($request->title),
            'image'       => $imagePath,
            'description' => $request->description,
            'content'     => $request->content,
            'category_id' => $request->category_id,
            'user_id'     => auth()->id(), // auteur connecté
            'status'      => $request->status ?? 'draft',
        ]);

        return response()->json([
            'message' => 'Blog created successfully',
            'blog' => $blog
        ], 200);
    }

    // Afficher un blog
    public function show($id)
    {
        $blog = Blog::with(['category', 'user'])->findOrFail($id);
        return response()->json($blog);
    }

    public function showSlug($slug){
        $data = Blog::where('slug',$slug)->first();
        return response()->json($data);
    }

    // Mettre à jour un blog
    public function update(Request $request, $id)
    {
        $blog = Blog::findOrFail($id);

        $request->validate([
            'title'       => 'sometimes|required|string|max:255',
            'image'       => 'nullable|image|max:2048',
            'description' => 'sometimes|required|string',
            'content'     => 'sometimes|required|string',
            'category_id' => 'sometimes|required|exists:categories,id',
            'status'      => 'nullable|in:draft,progress,valid',
        ]);

        // Nouvelle image
        if ($request->hasFile('image')) {
            if ($blog->image && Storage::disk('public')->exists($blog->image)) {
                Storage::disk('public')->delete($blog->image);
            }
            $blog->image = $request->file('image')->store('blogs', 'public');
        }

        // Mise à jour des champs
        if ($request->has('title')) {
            $blog->title = $request->title;
            $blog->slug = Str::slug($request->title);
        }

        if ($request->has('description')) $blog->description = $request->description;
        if ($request->has('content')) $blog->content = $request->content;
        if ($request->has('category_id')) $blog->category_id = $request->category_id;
        if ($request->has('status')) $blog->status = $request->status;

        $blog->save();

        return response()->json([
            'message' => 'Blog updated successfully',
            'blog' => $blog
        ]);
    }

    // Supprimer un blog
    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);

        if ($blog->image && Storage::disk('public')->exists($blog->image)) {
            Storage::disk('public')->delete($blog->image);
        }

        $blog->delete();

        return response()->json([
            'message' => 'Blog deleted successfully'
        ]);
    }
}
