<body style="background-color:grey;">
    <div class="container">
        <div class="col m-5">
            <h2>Saskaitos tvarkymas</h2>
        </div>
        <form action="/account/update/<?= $account['id'] ?>" method="post">


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
                    <tbody>
                        <tr>
                            <td>
                                <input type="text" name="name" id="name" value="<?= $account['name'] ?>" required>
                            </td>
                            <td>
                                <input type="text" name="lastName" id="lastName" value="<?= $account['lastName'] ?>"
                                    required>
                            </td>
                            <td>
                                <input type="text" name="personalId" id="personalId"
                                    value="<?= $account['personalId'] ?>" required>
                            </td>
                            <td>
                                LT:<input type="text" name="accountNumber" id="accountNumber"
                                    value="<?= $account['accountNumber'] ?>" required>
                            </td>
                            <td>
                                <input type="number" name="balance" id="balance" value="<?= $account['balance'] ?>"
                                    required>
                                <?= $account['balance'] ?>€
                            </td>
                            <td>
                                <button class="btn btn-success" type="submit">Pakeisti</button>
                            </td>


                        </tr>
                    </tbody>
                </table>

            </div>

            <button class="btn btn-success" type="submit">Pakeisti</button>
    </div>
    </form>





    <!-- <div>
                <label for="name">Vardas:<?= $account['name'] ?></label>
                <input type="text" name="name" id="name" value="<?= $account['name'] ?>" required>
            </div>
            <div>
                <label for="lastName">Pavardė</label>
                <input type="text" name="lastName" id="lastName" value="<?= $account['lastName'] ?>" required>
            </div>
            <div>
                <label for="personalId">Asmens kodas</label>
                <input type="text" name="personalId" id="personalId" value="<?= $account['personalId'] ?>" required>
            </div>
            <div>
                <label for="personalId">Saskaitos numeris</label>
                <input type="text" name="accountNumber" id="accountNumber" value="<?= $account['accountNumber'] ?>" required>
            </div>
            <div>
                <label for="personalId">Likutis</label>
                <input type="text" name="balance" id="balance" value="<?= $account['balance'] ?>" required>
            </div> -->