<ul>
    <?php foreach ($jokes as $joked) { ?>
        <li>
            <span>Joke <?= $joked['id'] ?></span>
            <a href="/<?= ltrim(explode('?', $_SERVER['REQUEST_URI'])[0], '/') ?>?id=<?= $joked['id'] ?>&action=edit">Edit</a>
            <a href="/<?= ltrim(explode('?', $_SERVER['REQUEST_URI'])[0], '/') ?>?id=<?= $joked['id'] ?>&action=delete">Delete</a>
            <p><?= $joked['joketext'] ?></p>
        </li>
    <?php } ?>
</ul>