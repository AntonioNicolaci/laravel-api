<?php

namespace App\Http\Controllers\Api;

use App\Models\Work;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WorkController extends Controller
{
    public function index()
    {
        $works = Work::all();

        return response()->json($works);

    }
}
