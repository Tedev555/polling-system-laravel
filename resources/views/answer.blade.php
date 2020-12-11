<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question - Answers</title>
</head>

<body>
    <ul>
        <li><a href="/">Home</a></li>
        <li><a href="/poll/questions" style="background-color: #4CAF50; color: white">Questions</a></li>
        <li><a href="/poll/votes">Votes</a></li>
        <li><a href="/poll/results">Results</a></li>
    </ul>
    
    <?php
    $question = $data['question'];
    $answers = $data['answers'];
    ?>
    <h1>Q: {{ $question->title }}</h1>

    <form action="/poll/answers?question={{$question->id}}" method="POST">
        @csrf
        <label style="font-weight: bold" for="answer_title">Add a new answer:</label>
        <input type="text" id="answer_title" name="answer_title">
        <input type="submit" value="Save">
    </form>

    @foreach ($answers as $answer)
    <p> {{ $answer->title }} </p>
    @endforeach
</body>

</html>