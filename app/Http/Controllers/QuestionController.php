<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\PollQuestion;
use Illuminate\Http\Request;
use Symfony\Component\Console\Question\Question;

class QuestionController extends Controller
{
    public function index()
    {
        $questions = PollQuestion::all();
        return view('question', ['questions' => $questions]);
    }

    public function save()
    {
        $title = request('question');

        $question = new PollQuestion();
        $question->title = $title;
        $question->save();

        return redirect('/poll/questions');
    }

    public function answers()
    {
        $question_id = request('id');

        $question = PollQuestion::where('id', $question_id)->first();
        $answers = Answer::where('question_id', $question_id)->get();

        $data['question'] = $question;
        $data['answers'] = $answers;

        return view('answer', ['data' => $data]);
    }
}
