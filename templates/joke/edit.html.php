<form method="post">
    <label><?= $action ?> a joke:</label>
    <input type="hidden" name="joke[id]" value="<?= $joke['id'] ?? '' ?>">
    <label for="authorName">Author name:</label>
    <input id="authorName" name="joke[authorName]" type="text" value="<?= $joke['authorName'] ?? '' ?>">
    <label for="joketext">Content:</label>
    <textarea id="joketext" name="joke[joketext]" rows="3" cols="40"><?= $joke['joketext'] ?? '' ?></textarea>
    <input type="submit" name="submit" value="<?= $action ?>">
</form>