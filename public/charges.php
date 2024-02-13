<?php include 'tete.php'; ?>

<div class="home-content">
    <div class="overview-boxes">
        <div class="box">
            <form action="../model/ajoutCharge.php" method="post">

                <label for "date_charge>Date de création:</label>
                <input type="datetime-local" name="date_charge" id="date_charge" placeholder="Saisir la date de création">

                <label for "date_effet">Date de prise d'effet:</label>
                <input type="datetime-local" name="date_effet" id="date" placeholder="Saisir la date de prise d'effet">

                <label for="categoriePrincipale">Catégorie Principale:</label>
                <select id="categoriePrincipale" name="categoriePrincipale">
                    <option value="achatsChargesExternes">Achats et charges externes</option>
                    <option value="chargesPersonnel">Charges personnel</option>
                    <option value="chargesFinancieres">Charges financieres</option>
                    <option value="amortissementsProvisions">Amortissement et provisions</option>
                    <option value="chargesExceptionnelles">Charges exceptionnelles</option>
                </select><br><br>

                <label for="sousCategorie">Sous-Catégorie:</label>
                <select id="sousCategorie" name="sousCategorie">
                    
                </select><br><br>

                <label for="montant">Montant:</label>
                <input type="number" id="montant" name="montant" step="0.01" required><br><br>

                <button type="submit">Ajouter charge</button>
            </form>
        </div>
    </div>
</div>

<script>
document.getElementById('categoriePrincipale').addEventListener('change', function() {
    var categoriePrincipale = this.value;
    var sousCategorie = document.getElementById('sousCategorie');
    sousCategorie.innerHTML = '';

    var options = {
        achatsChargesExternes: ['Achats de marchandises', 'Frais de sous traitance', 'Loyer et charges locatives', 'Entretien et reparations', 'Assurances', 'Frais de publicité', 'Frais de deplacement', 'Services bancaires'],
        chargesPersonnel: ['Salaires et traitements', 'Charges sociales'],
        chargesFinancieres: ['Interets payes sur emprunts', 'Autres charges financieres'],
        amortissementsProvisions: ['Amortissements des immobilisations', 'Provisions pour depreciation et risques'],
        chargesExceptionnelles: ['Pertes sur creances irrecouvrables', 'Autres charges exceptionnelles']
    };

    var sousCategories = options[categoriePrincipale];
    sousCategories.forEach(function(sousCategorieOption) {
        var option = new Option(sousCategorieOption, sousCategorieOption);
        sousCategorie.add(option);
    });
});
</script>

<?php include 'pied.php'; ?>