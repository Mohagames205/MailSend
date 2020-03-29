
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style/welcome.css">
    <title>Mohamed El Yousfi</title>
</head>
<body>
<div class="banner">
    <h1> Mohamed El Yousfi</h1>
</div>
<div class="text">

    <form method="post">
        @csrf

        <p>Email</p>
        <input type="email" name="email">
        <p>Naam</p>
        <input type="text" name="name"><br>
        <button type="submit">Verzenden</button>
    </form>


    <br>
    @if(session("message"))

        <p> {{ session("message") }}</p>

    @endif

</div>


</body>
</html>
