<h1>Naujos sąskaitos sukūrimas</h1>
<form action="/account/store" method="post">
    <div>
        <label for="name">Vardas</label>
        <input type="text" name="name" id="name" required>
    </div>
    <div>
        <label for="lastName">Pavardė</label>
        <input type="text" name="lastName" id="lastName" required>
    </div>
    <div>
        <label for="personalId">Asmens kodas</label>
        <input type="text" name="personalId" id="personalId" required>
    </div>
    
        <button type="submit">Sukurti naują saskaitą</button>
    </div>
</form>