<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Jobs;

class JobsController extends Controller
{
   public function index(){
    return Inertia::render('Jobs/Index',[
        'jobs' => Jobs::all()
    ]);
   }
}
