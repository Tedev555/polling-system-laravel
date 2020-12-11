<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\PollQuestion;
use App\Models\PollVote;
use Illuminate\Http\Request;

class PollResultsController extends Controller
{
    public function index() {
        $questions = array();
        $ansers = array();
        $user = session('user');
        $votes = PollVote::where('vote_by', $user->id)->get();
        foreach ($votes as $vote) {
            $question = PollQuestion::where('id', $vote->question_id)->first();
            $answer = Answer::where('id', $vote->answer_id)->first();
            $questions[] = $question;
            $ansers[] = $answer;
        }
        $data['questions'] = $questions;
        $data['answers'] = $ansers;
        return view('result', ['data' => $data]);
    }
}
