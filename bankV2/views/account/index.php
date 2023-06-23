<body style="background-color:grey;">
    <div class="container">
        <div class="col m-5">
            <h1 style="color:crimson; font-weight: bold; text-decoration: underline;" class="display-3">Saskaitos</h1>
        </div>
        <div class="col m-5">
            <a class="btn btn-success" href="/account/create/">Sukurti saskaita</a>
        </div>
        <?php if (empty($accounts)): ?>
            <p>Nera saskaitu.</p>
        <?php else: ?>
            <div class="col">
                <table class="table table-dark table-striped">

                    <thead>
                        <tr>
                            <th scope="col">Vardas</th>
                            <th scope="col">Pavardė</th>
                            <th scope="col">Asmens kodas</th>
                            <th scope="col">Saskaitos numeris</th>
                            <th scope="col">Likutis</th>
                        </tr>
                    </thead>
                    <?php foreach ($accounts as $account): ?>
                        <tbody>
                            <tr>
                                <td>
                                    <?= $account['name'] ?>
                                </td>
                                <td>
                                    <?= $account['lastName'] ?>
                                </td>
                                <td>
                                    <?= $account['personalId'] ?>
                                </td>
                                <td>
                                    LT:
                                    <?= $account['accountNumber'] ?>
                                </td>
                                <td>
                                    <?= $account['balance'] ?>€
                                </td>
                                <td>
                                    <a class="btn btn-primary" href="/account/edit/<?= $account['id'] ?>">redaguoti</a>
                                    <a class="btn btn-danger" href="/account/delete/<?= $account['id'] ?>">ištrinti</a>
                                </td>


                            </tr>
                        </tbody>


                    <?php endforeach ?>
                <?php endif ?>
</body>