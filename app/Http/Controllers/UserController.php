<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $user = User::with('role')->orderBy('id', 'desc')->get();
        return response()->json([
            "data" => $user
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            "full_name" => "required",
            "email" => "required",
            "password" => "required|confirmed",
            "role_id" => "required",
        ]);
        $user = User::create([
            "nom" => $request->nom,
            "prenom" => $request->prenom,
            "email" => $request->email,
            "password" => Hash::make($request->password),
            "role_id" => $request->role_id,
        ]);
        return response()->json([
            "data" => $user
        ]);
    }

    public function show($id)
    {
        $user = User::with(['role','blogs'])->find($id);
        return response()->json([
            "data" => $user
        ]);
    }

    public function update(Request $request, $id)
    {
        $data = User::find($id);
        $user = $data->update($request->all());
        return response()->json([
            "data" => $user
        ]);
    }

    public function destroy($id)
    {
        $data = User::with(['role', 'blogs'])->find($id);
        $user = $data->delete();
        return response()->json([
            "data" => $user
        ]);
    }

    public function Login(Request $request)
    {

        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $credentials = $request->only('email', 'password');

        if (!Auth::attempt($credentials)) {
            return response()->json([
                "message" => "Email ou mot de passe incorrect"
            ], 401);
        }

        $user = Auth::user();

        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            "user" => $user,
            "token" => $token
        ], 200);
    }

    public function User()
    {
        $user = User::with('role')->find(Auth::id());
        return response()->json([
            "user" => $user
        ]);
    }

    public function Logout(Request $request)
    {
        $user = Auth::user();

        if ($user) {
            $token = $request->user()->currentAccessToken();

            if ($token && method_exists($token, 'delete')) {
                $token->delete();
            }

            return response()->json([
                "message" => "Déconnexion réussie"
            ], 200);
        }

        return response()->json([
            "message" => "Aucun utilisateur connecté"
        ], 401);
    }

    public function changePassword(Request $request, $id)
    {
        $request->validate([
            "current_password" => "required",
            "new_password" => "required|confirmed"
        ]);

        // Récupérer l'utilisateur par son ID
        $user = User::find($id);

        if (!Hash::check($request->current_password, $user->password)) {
            return response()->json([
                'error' => 'Le mot de passe actuel est incorrect.'
            ], 403);
        }

        $user->update([
            'password' => Hash::make($request->new_password),
        ]);

        // Retourner une réponse de succès
        return response()->json([
            'message' => 'Le mot de passe a été changé avec succès.'
        ]);
    }


    public function verifyResetCode(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'reset_code' => 'required'
        ]);

        $user = User::where('email', $request->email)->where('reset_code', $request->reset_code)->first();

        if (!$user) {
            return response()->json(['message' => 'Code invalide.'], 400);
        } else {
            $user->reset_code = null;
            $user->save();

            $token = $user->createToken('auth_token')->plainTextToken;

            return response()->json([
                "message" => "Code vérifié avec succès et connexion effectuée",
                "user" => $user,
                "token" => $token
            ]);
        }
    }

    public function resetPassword(Request $request, $id)
    {
        $request->validate([
            'password' => 'required|confirmed',
        ]);

        // Récupérer l'utilisateur par son ID
        $user = User::find($id);

        $user->update([
            'password' => Hash::make($request->password),
        ]);

        // Retourner une réponse de succès
        return response()->json([
            'message' => 'Le mot de passe a été changé avec succès.'
        ]);
    }

}
