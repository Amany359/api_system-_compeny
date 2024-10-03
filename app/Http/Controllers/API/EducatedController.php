<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Educated;


class EducatedController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $educateds = Educated::all();
        return response()->json($educateds);
    }

    /**
     * Store a newly created resource in storage.
     */
   



    public function store(Request $request)
    {
        $request->validate([
            "name" => ["required", "string"],
            "description" => ["required", "string"],
        ]);

        $educated = Educated::create($request->all());
        return response()->json([
            'message' => 'Educated created successfully.',
            'data' => $educated
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Educated $educated)
    {
        return response()->json($educated);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Educated $educated)
    {
        $request->validate([
            "name" => ["required", "string"],
            "description" => ["required", "string"],
        ]);

        $educated->update($request->all());
        return response()->json([
            'message' => 'Educated updated successfully.',
            'data' => $educated
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Educated $educated)
    {
        $educated->delete();
        return response()->json([
            'message' => 'Educated deleted successfully.'
        ]);
    }
}

