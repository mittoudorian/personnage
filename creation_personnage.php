<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="personnage.php">
        <fieldset>
            <legend>Création de personnage</legend>
            <div class="nom-form">
            <label>Nom du personnage</label> <input type="text" name="fname" minlength="3" maxlength="10" required><br>

            </div>
            <div class="race-form">
                <input type="radio" name="frace" value="Humain" checked="checked"><label>Humain</label><br>
                <input type="radio" name="frace" value="Elfe"><label>Elfe</label><br>
                <input type="radio" name="frace" value="Ogre"><label>Ogre</label><br>
                <input type="radio" name="frace" value="Nain"><label>Nain</label>
            </div>

            <div class="classe-form" name="classe">
                <select name="fclasse">
                    <option value="guerrier" checked="checked">Guerrier</option>
                    <option value="boleur">Voleur</option>
                    <option value="mage">Mage</option>
                    <option value="chasseur">Chasseur</option>
                </select>
            </div>

            <div class="niveau-form">
                <input type="number" value="1" readonly="readonly" name="fniv">
            </div>

            <div class="capacite-form">
                <label>Point de vie</label><input type="range" min="10" max="50" name="fvie"><br>
                <label>Force</label><input type="range" min="10" max="50" name="fforce"><br>
                <label>Dextérité</label><input type="range" min="10" max="50" name="fdext"><br>
                <label>Intelligence</label><input type="range" min="10" max="50" name="fintel"><br>
                <label>Sagesse</label><input type="range" min="10" max="50" name="fsage">
            </div>

            <div class="submit">
                <input type="submit" name="submit" value="Créer">
                <input type="reset" value="Annuler">
            </div>
        </fieldset>
    </form>
</body>
</html>