<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use App\Models\Trainer;

class TrainerController extends Controller
{
    public function getTrainers(Request $request) {

        $categories = Category::all();
        $per_page = $request->input('per_page');

        $obj = new Trainer();
        $trainers = $obj->paginate($per_page);
        
        return view('trainers', ['trainers' => $trainers, 'categories' => $categories]);
    }
}
