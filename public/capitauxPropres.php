<?php    
include 'tete.php'
?>

<div class="home-content">
    <div class="overview-boxes">
        <div class="box">
            <form action="../model/ajoutCapitauxPropres.php" method="post">

                <label for "date_capitauxPropres>Date de création </label>
                <input type="datetime-local" name="date_capitauxPropres" id="date_capitauxPropres" placeholder="Saisir la date de création">

                <label for "date_effet">Date de prise d'effet </label>
                <input type="datetime-local" name="date_effet" id="date" placeholder="Saisir la date de prise d'effet">

                <label for="categorie">Categorie:</label>
                <select id="categorie" name="categorie">
                    <option value="Capital social ou individuel">capitalSocial</option>
                    <option value="Reserves">reserves</option>
                    <option value="Report a nouveau">report</option>
                    <option value="Resultat de l'exercice (benefice ou perte)">resultat</option>
                </select><br><br>
                
                <label for="montant">Montant:</label>
                <input type="number" id="montant" name="montant" step="0.01" required><br><br>

                <button type="submit">Ajouter capital propre</button>

            </form>
        </div>

    </div>

</div>
</section>

<?php    
include 'pied.php'
?>