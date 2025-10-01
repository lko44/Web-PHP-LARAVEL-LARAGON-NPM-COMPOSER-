<?php

namespace App\Http\Controllers;
use App\Models\Student;

use Illuminate\Http\Request;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $students = Student::all();
        // $students = [
        //    [
        //     "id"=> 1,
        //     "name"=> "Alice",
        //     "Grade"=> "11",
        //     "email"=> "Alice@gmail.com",
        //     "adress"=> "Jakarta",

        //    ],
        //    [
        //     "id"=> 2,
        //     "name"=> "Bob",
        //     "Grade"=> "12",
        //     "email"=> "Bob@gmail.com",
        //     "adress"=> "bandung",

        //    ],
        //    [
        //     "id"=> 3,
        //     "name"=> "Charlie",
        //     "Grade"=> "10",
        //     "email"=> "Charlie@gmail.com",
        //     "adress"=> "Surabaya",
        //    ],
        //    [
        //     "id"=> 4,
        //     "name"=> "David",
        //     "Grade"=> "11",
        //     "email"=> "David@gmail.com",
        //     "adress"=> "Medan",
        //    ],
        //    [
        //     "id"=> 5,
        //     "name"=> "Eve",
        //     "Grade"=> "12",
        //     "email"=> "Eve@gmail.com",
        //     "adress"=> "Yogyakarta ",
        //    ]
        // ];

        return view(
            'students',
            ['title' => 'students',
            'students' => $students
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function students()
    {

    }
}
