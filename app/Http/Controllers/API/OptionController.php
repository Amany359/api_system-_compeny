<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Option;
use Illuminate\Http\Request;

class OptionController extends Controller
{
    public function index()
    {
        $options = Option::all();
        return response()->json($options);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
        ]);

        $option = Option::create($request->all());

        return response()->json([
            'success' => true,
            'data' => $option,
        ]);
    }

    public function update(Request $request, $id)
    {
        $option = Option::find($id);

        if (!$option) {
            return response()->json(['message' => 'Option not found'], 404);
        }

        $request->validate([
            'title' => 'required|string',
        ]);

        $option->update($request->all());

        return response()->json([
            'success' => true,
            'message' => 'Option updated successfully.',
            'data' => $option,
        ]);
    }
    public function show($id)
    {
        $option = Option::find($id);

        if (!$option) {
            return response()->json([
                'success' => false,
                'message' => 'Option not found',
            ], 404);
        }

        return response()->json([
            'success' => true,
            'data' => $option,
        ]);
    }

    public function destroy($id)
    {
        $option = Option::find($id);

        if (!$option) {
            return response()->json(['message' => 'Option not found'], 404);
        }

        $option->delete();

        return response()->json([
            'success' => true,
            'message' => 'Option deleted successfully.',
        ]);
    }

    // Ensure there are no extra method declarations or missing braces below this line.
}
