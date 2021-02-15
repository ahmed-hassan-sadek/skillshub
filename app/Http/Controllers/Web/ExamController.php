<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Exam;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ExamController extends Controller
{
    public function show($id)
    {
        $data['exam'] = Exam::findOrFail($id);

        return view('web.exams.show')->with($data);
    }

    public function start($examId)
    {
       $user = Auth::user();
       $user->exams()->attach($examId);

       return redirect( url("exams/questies/$examId") );
    }

    public function questions($id)
    {
        $data['exam'] = Exam::findOrFail($id);
        return view('web.exams.questions')->with($data);
    }
}
