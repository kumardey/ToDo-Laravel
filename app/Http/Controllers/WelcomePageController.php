<?php

namespace App\Http\Controllers;

use App\Models\Roll;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WelcomePageController extends Controller
{
    public function show()
    {
        try {
            return view('welcome');

        } catch (\Exception $e) {

            return view('welcome')->with('error', 'Something was wrong');
        }
    }
}
