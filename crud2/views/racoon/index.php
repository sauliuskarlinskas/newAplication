<h1>Racoons list</h1>

<a href="/racoon/create/">Create Racoon</a>
<?php if (empty($racoons)) : ?>
    <p>No racoons found.</p>
<?php else: ?>
<?php foreach ($racoons as $racoon) : ?>
    <h2><?= $racoon['name'] ?></h2>
    <p><?= $racoon['description'] ?></p>
    <a href="/racoon/edit/<?= $racoon['id'] ?>">Edit</a>
    <a href="/racoon/delete/<?= $racoon['id'] ?>">Delete</a>
<?php endforeach ?>
<?php endif ?>