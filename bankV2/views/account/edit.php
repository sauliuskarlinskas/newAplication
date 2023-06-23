<body style="background-color:grey;">
    <div class="container">
        <div class="col m-5">
            <h2>Saskaitos tvarkymas</h2>
        </div>
        <form action="/account/update/<?= $account['id'] ?>" method="post">
            <div>
                <label for="name">Vardas</label>
                <input type="text" name="name" id="name" value="<?= $account['name'] ?>" required>
            </div>
            <div>
                <label for="lastName">Pavardė</label>
                <input type="text" name="lastName" id="lastName" required>
            </div>
            <div>
                <label for="personalId">Asmens kodas</label>
                <input type="text" name="personalId" id="personalId" required>
            </div>
            <button class="btn btn-success" type="submit">Pakeisti</button>
    </div>
    </form>