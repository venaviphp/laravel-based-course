<?php

namespace App\Http\Controllers;

use App\Models\Worker;
use Illuminate\Http\Request;

class WorkerController extends Controller
{
    public function index()
    {
        $workers = Worker::all();
        foreach ($workers as $worker) {
            dump($worker->name);
        }
    }

    public function show()
    {
        $worker = Worker::find(2);
        dump($worker->name);
    }

    public function create()
    {
        $worker = [
            'name' => 'ivan',
            'surname' => 'Markov',
            'email' => 'markov@mail.ru',
            'age' => 33,
            'description' => 'Markov liked laravel',
            'is_married' => false,
        ];

        Worker::create($worker);

        return  "Ivan created ";
    }

    public function update()
    {
        $worker = Worker::find(2);
        $worker->update([
            'name' => 'Karl',
            'surname' => 'Petrov'
        ]);

        return 'was updated';
    }

    public function delete()
    {
        $worker = Worker::find(3);
        $worker->delete();
        return 'was deleted';
    }
}
