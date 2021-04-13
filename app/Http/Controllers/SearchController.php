<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Tag;
use App\Models\Post;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function autocomplete(Request $request) {
        $data = Item::select('name')
                ->where("name", "LIKE", "%{$request->query}%")
                ->get();

        return response()->json($data);
    }
}
