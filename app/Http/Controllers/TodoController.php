<?php

namespace App\Http\Controllers;

class TodoController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function index()
    {
        return response()->json([
            'status' => 1,
            'message' => 'Succesfully'
        ], 200);
    }


    public function store()
    {
        return response()->json([
            'status'  => 1,
            'message' => 'Data saved successfully'
        ]);
    }
}
