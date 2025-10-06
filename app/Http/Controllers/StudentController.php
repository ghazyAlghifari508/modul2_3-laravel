<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = [
            [
                'name' => 'Andi',
                'major' => 'Teknik Informatika',
                'age' => 23,
                'courses' => ['Pemrograman Web', 'Basis Data', 'Jaringan']
            ],
            [
                'name' => 'Budi',
                'major' => 'Sistem Informasi',
                'age' => 21,
                'courses' => ['Analisis Sistem', 'UI/UX']
            ],
            [
                'name' => 'Citra',
                'major' => 'Teknik Komputer',
                'age' => 22,
                'courses' => []
            ]
        ];

        return view('students.index', compact('students'));
    }
}
