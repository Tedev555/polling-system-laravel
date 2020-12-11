<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questions Page</title>
</head>

<ul>
    <li><a href="/">Home</a></li>
    <li><a href="/poll/questions" style="background-color: #4CAF50; color: white">Questions</a></li>
    <li><a href="/poll/votes">Votes</a></li>
    <li><a href="/poll/results">Results</a></li>
</ul>


<body>
    <h2>Create a question</h2>
    <form action="/poll/questions" method="POST">
        @csrf
        <label style="font-weight: bold" for="question">Enter your question:</label>
        <input type="text" id="question" name="question">
        <input type="submit" value="Save">
    </form>

    <!-- 
        Show list of questions
        User can click each question to add a new answer of the question
    -->
    <h3>Questions List:</h3>
    @foreach ($questions as $i=>$question)
    <a href="/poll/answers?question={{ $question->id }}">
        <p>{{ $i+1 }}. {{ $question->title }}</p>
    </a>
    @endforeach
</body>

</html>