<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AuthController extends Controller
{
    public function create(Request $request)
    {
        return response()->json([
            "statue" => 200,
            "message" => "user created successfully"
            ], 422);
    }
}
