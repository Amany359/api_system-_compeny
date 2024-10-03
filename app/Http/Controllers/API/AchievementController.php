<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Achievement;

class AchievementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $achievements = Achievement::all();
        return response()->json($achievements, 200);
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

        $achievement = Achievement::create($request->all());

        return response()->json([
            'message' => 'Achievement created successfully.',
            'achievement' => $achievement
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $achievement = Achievement::find($id);

        if (!$achievement) {
            return response()->json(['message' => 'Achievement not found'], 404);
        }

        return response()->json($achievement, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Achievement $achievement)
    {
        $request->validate([
            "name" => ["required", "string"],
            "description" => ["required", "string"],
        ]);

        $achievement->update($request->all());

        return response()->json([
            'message' => 'Achievement updated successfully.',
            'achievement' => $achievement
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Achievement $achievement)
    {
        $achievement->delete();

        return response()->json(['message' => 'Achievement deleted successfully'], 200);
    }
}
