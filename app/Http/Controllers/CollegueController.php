<?php

namespace App\Http\Controllers;

use App\Models\Collegue;

class CollegueController extends Controller
{
    public function showByPhone()
    {
        $collegue = Collegue::where('phone', '9844622904')->first();
        $user = Collegue::with('user')->get();
        return view('collegue.show', compact('collegue'));
    }
}
