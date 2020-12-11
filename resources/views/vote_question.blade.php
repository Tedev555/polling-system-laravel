<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vote Question</title>
</head>

<body>
    <ul>
        <li><a href="/">Home</a></li>
        <li><a href="/poll/questions">Questions</a></li>
        <li><a href="/poll/votes" style="background-color: #4CAF50; color: white">Votes</a></li>
        <li><a href="/poll/results">Results</a></li>
    </ul>

    <?php
    $question = $data['question'];
    $answers = $data['answers'];
    ?>
    <h1>Q: {{ $question->title }} </h1>

    <form action="/poll/votes/questions/{{$question->id}}" method="POST">
        @csrf
        <p>Please select your answer:</p>
        @foreach ($answers as $answer)
        <input type="radio" id="answer" name="answer" value="{{$answer->id}}">
        <label for="answer"> {{ $answer->title }} </label><br>
        @endforeach
        <br>
        <input type="submit" value="Submit">
    </form>
</body>

</html>