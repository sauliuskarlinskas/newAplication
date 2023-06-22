<h1>Saskaitos</h1>

<a href="/account/create/">Sukurti saskaita</a>
<?php if (empty($racoons)) : ?>
    <p>Nera saskaitu.</p>
<?php else: ?>
<?php foreach ($accounts as $account) : ?>
    <h2><?= $account['name'] ?></h2>
    <a href="/account/edit/<?= $account['id'] ?>">redaguoti</a>
    <a href="/account/delete/<?= $account['id'] ?>">istrinti</a>
<?php endforeach ?>
<?php endif ?>