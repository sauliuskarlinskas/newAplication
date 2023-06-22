<h1>Saskaitos tvarkymas</h1>
<form action="/account/update/<?= $account['id'] ?>" method="post">
    <div>
        <label for="name">Vardas</label>
        <input type="text" name="name" id="name" value="<?= $account['name'] ?>" required>
    </div>
    <div>
        <label for="name">Pavardė</label>
        <input type="text" name="lastName" id="lastName" required>
    </div>
    <div>
        <label for="name">Asmens kodas</label>
        <input type="text" name="personalId" id="personalId" required>
    </div>
        <button type="submit">Pakeisti</button>
    </div>
</form>