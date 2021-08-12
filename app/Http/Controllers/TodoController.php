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
            'message' => 'Index'
        ], 200);
    }


    public function store()
    {
        return response()->json([
            'status'  => 1,
            'message' => 'Store'
        ], 200);
    }

    public function edit($id)
    {
        return response()->json([
            'status'  => 1,
            'message' => 'Edit'
        ], 200);
    }
}
