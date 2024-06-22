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

    public function index(Request $request)
    {
        $query = Marche::query();

        if ($request->has('search')) {
            $search = $request->input('search');
            $query->where('nom', 'LIKE', "%{$search}%")
                  
                  ->orWhere('produits', 'LIKE', "%{$search}%");
        }

        $marche = $query->get();
        return response()->json($marche);
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

        $marche = Marche::create([
            'nom' => $request->nom,
            'horaires' => $request->horaires,
            'produits' => $request->produits,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
            
        ]);

        return response()->json(['message' => 'Marché created successfully', 'marche' => $marche]);
    }

    public function show($id)
    {
        $parc = Marche::find($id);

        if (!$parc) {
            return response()->json(['message' => 'Marché not found'], 404);
        }

        return response()->json($parc);
    }

    public function update(Request $request, $id)
    {
        $marche = Marche::find($id);

        if (!$marche) {
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

        $marche->update($request->all());

        return response()->json(['message' => 'Marché mis à jour avec succès', 'marche' => $marche]);
    }

    public function getTotalMsisdn()
    {
        
        $totalmarche = Marche::count(); 

        return response()->json([
            'nom' => $totalmarche,
        ]);
    }

    public function destroy($id)
    {
        $marche = Marche::find($id);

        if (!$marche) {
            return response()->json(['message' => 'marché non trouvé'], 404);
        }

        $marche->delete();

        return response()->json(['message' => 'Marché supprimé avec succès']);
    }
}
