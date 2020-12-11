<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poll Results</title>
</head>

<body>
    <?php
    $questions = $data['questions'];
    $answers = $data['answers'];
    ?>
    <ul>
        <li><a href="/">Home</a></li>
        <li><a href="/poll/questions">Questions</a></li>
        <li><a href="/poll/votes">Votes</a></li>
        <li><a style="background-color: #4CAF50; color: white" href="/poll/results">Results</a></li>
    </ul>
    <h1>Poll Results</h1>
    @foreach ($questions as $question)
    <h3> Q: {{ $question->title }} </h3>

    @foreach ($answers as $answer)
    @if($answer->question_id == $question->id)
    <p>Answer: {{ $answer->title}} </p>
    @endif
    @endforeach

    @endforeach
</body>

</html>