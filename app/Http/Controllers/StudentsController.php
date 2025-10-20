<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentsController extends Controller
{
    public function index() {
        $students = [
            [
                'name' => "Wahyudi",
                'major' => 'Informatika',
                'age' => '22',
                'courses' => ['Pemrograman web', 'Database', 'Cloud Computing'],
            ],
            [
                'name' => "Siti",
                'major' => 'Sistem informasi',
                'age' => '21',
                'courses' => ['UI/UX Design', 'Manpro', 'IoT'],
            ]
        ];
        return view('students.index', compact('students'));
    }
}
