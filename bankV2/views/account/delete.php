<h1>Saskaitos trynimas</h1>
<form action="/account/destroy/<?= $account['id'] ?>" method="post">
    <div>
        <p>Ar tikrai norite istrinti saskaita?</p>
        <h2><?= $account['name'] ?></h2>
    </div>
    <div>
        <button type="submit">Istrinti</button>
    </div>
    <div>
        <a href="/account">atsaukti</a>
    </div>
</form>