<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Marche;
use Illuminate\Support\Facades\Validator;

class MarcheController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
        $this->middleware('auth:sanctum');
    }

    public function index()
    {
        $marches = Marche::all();
        return view('admin.index', compact('marches'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nom' => 'required|string|max:255',
            'horaires' => 'required|string',
            'produits' => 'required|string',
            'latitude' => 'required|string',
            'longitude' => 'required|string',
            
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $marches = Marche::create([
            'nom' => $request->nom,
            'horaires' => $request->horaires,
            'produits' => $request->produits,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
            
        ]);

        return response()->json(['message' => 'Marché created successfully', 'marche' => $marches]);
    }

    public function show($id)
    {
        $marches = Marche::find($id);

        if (!$marches) {
            return response()->json(['message' => 'Marché not found'], 404);
        }

        return response()->json($marches);
    }

    public function update(Request $request, $id)
    {
        $marches = Marche::find($id);

        if (!$marches) {
            return response()->json(['message' => 'marché non trouvé'], 404);
        }

        $validator = Validator::make($request->all(), [
            'nom' => 'required|string|max:255',
            'horaires' => 'required|string',
            'produits' => 'required|string',
            'latitude' => 'required|string',
            'longitude' => 'required|string',
            
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $marches->update($request->all());

        return response()->json(['message' => 'Marché mis à jour avec succès', 'marche' => $marches]);
    }

    public function marches()
    {
        $marches = Marche::all(); // Récupère tous les marchés
        return view('admin.index', compact('marches')); // Renvoie les marchés à la vue
    }
    public function getTotalMsisdn()
    {
        
        $totalmarches = Marche::count(); 

        return response()->json([
            'nom' => $totalmarches,
        ]);
    }

    public function destroy($id)
    {
        $marches = Marche::find($id);

        if (!$marches) {
            return response()->json(['message' => 'marché non trouvé'], 404);
        }

        $marches->delete();

        return response()->json(['message' => 'Marché supprimé avec succès']);
    }
}
