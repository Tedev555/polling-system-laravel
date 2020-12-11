<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\PollQuestion;
use App\Models\PollVote;
use Illuminate\Http\Request;

class VotesController extends Controller
{
    //Get all questions to show 
    public function index()
    {
        $questions = PollQuestion::all();
        return view('vote', ['questions' => $questions]);
    }

    //Show answer choices for allow use to vote
    public function showVoteAnswers()
    {
        $question_id = request('id');
        $question = PollQuestion::where('id', $question_id)->first();
        $answers = Answer::where('question_id', $question_id)->get();

        $data['question'] = $question;
        $data['answers'] = $answers;

        return view('vote_question', ['data' => $data]);
    }

    //Save use answer to database
    public function submitVoteAnswer()
    {
        $user = session('user');
        $answerId = request('answer');
        $questionId = request('id');

        $vote = new PollVote();
        $vote->answer_id = $answerId;
        $vote->vote_by = $user->id;
        $vote->question_id = $questionId;

        $vote->save();

        return redirect('/poll/votes');
    }
}
