<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WorkerController extends Controller
{
    public function index()
    {
        return 'hi iam Worker Controller';
    }

    public function show()
    {
        return 'hi iam action show - WorkerController';
    }
}
