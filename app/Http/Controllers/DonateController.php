<?php

namespace App\Http\Controllers;

use App\Models\Donate;
use Illuminate\Http\Request;

class DonateController extends Controller
{
    // Liste des dons (admin)
    public function index()
    {
        $donates = Donate::orderBy('created_at', 'desc')->get();
        return response()->json($donates);
    }

    // Enregistrer un don
    public function store(Request $request)
    {
        $request->validate([
            'full_name'       => 'required|string|max:255',
            'email'           => 'required|email|max:255',
            'method_paiement' => 'required|string|max:100',
            'amount'          => 'required|numeric|min:1',
        ]);

        $donate = Donate::create([
            'full_name'       => $request->full_name,
            'email'           => $request->email,
            'method_paiement' => $request->method_paiement,
            'amount'          => $request->amount,
        ]);

        return response()->json([
            'message' => 'Donation created successfully',
            'donate'  => $donate
        ], 201);
    }

    // Afficher un don
    public function show($id)
    {
        $donate = Donate::findOrFail($id);
        return response()->json($donate);
    }

    // Supprimer un don (admin)
    public function destroy($id)
    {
        $donate = Donate::findOrFail($id);
        $donate->delete();

        return response()->json([
            'message' => 'Donation deleted successfully'
        ]);
    }
}
