<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\PollQuestion;
use Illuminate\Http\Request;

class AnswersController extends Controller
{
    //Get answers of each question to show
    public function getAnswersByQuestion()
    {
        $question_id = request('question');

        $question = PollQuestion::where('id', $question_id)->first();
        $answers = Answer::where('question_id', $question_id)->get();

        $data['question'] = $question;
        $data['answers'] = $answers;

        return view('answer', ['data' => $data]);
    }

    //Add a new answer for each question to database
    public function save() {
        $questionId = request('question');
        $answerTitle = request('answer_title');

        $answer = new Answer();
        $answer->question_id = $questionId;
        $answer->title = $answerTitle;
        $answer->save();

        return redirect('/poll/answers?question=' . $questionId);
    }
}
