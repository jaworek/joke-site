<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/css/jokes.min.css">
    <title><?= $title ?></title>
</head>
<body>
<nav>
    <header>
        <h1>Internet Joke Database</h1>
    </header>
    <ul>
        <li><a href="/">Home</a></li>
        <li><a href="/joke/jokes">Jokes list</a></li>
        <li><a href="/joke/modify">Modify a Joke</a></li>
    </ul>
</nav>

<main>
    <?= $output ?>
</main>

<footer>
    &copy; IJDB 2018
</footer>
</body>
</html>
