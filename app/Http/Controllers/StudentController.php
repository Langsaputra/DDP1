<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    // method untuk menampilkan halaman student
    public function index(){
        // mendapatkan data student dari database
        $Student = Student::all();

        // panggil view dan kirim data ke view
        return view('admin.contents.student.index', [
            'students' => $Student
        ]);
    }
}
