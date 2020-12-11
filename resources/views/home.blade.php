<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
</head>

<body>
    <h1>Home Page</h1>
    <form action="/identify" method="POST">
        @csrf
        <label for="username">Enter your username:</label>
        <input type="text" id="username" name="username">
        <input type="submit" value="Submit">
    </form>
</body>

</html>