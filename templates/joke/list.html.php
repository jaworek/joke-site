<ul>
    <?php foreach ($jokes as $joked) { ?>
        <li>
            <span>Joke <?= $joked['id'] ?></span>
            <a href="/joke/edit?id=<?= $joked['id'] ?>">Edit</a>
            <a href="/joke/delete?id=<?= $joked['id'] ?>">Delete</a>
            <p><?= $joked['joketext'] ?></p>
        </li>
    <?php } ?>
</ul>