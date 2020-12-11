<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Votes Poll</title>
</head>

<body>
    <ul>
        <li><a href="/">Home</a></li>
        <li><a href="/poll/questions">Questions</a></li>
        <li><a style="background-color: #4CAF50; color: white" href="/poll/votes">Votes</a></li>
        <li><a href="/poll/results">Results</a></li>
    </ul>

    <h1>Poll Questions</h1>
    <p>Please select a question to vote</p>
    @foreach ($questions as $question)
    <a href="/poll/votes/questions/{{$question->id}}">
        <p>{{ $question->title }}</p>
    </a>
    @endforeach
</body>

</html>