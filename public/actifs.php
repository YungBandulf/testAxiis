<?php include 'tete.php'; ?>

<div class="home-content">
    <div class="overview-boxes">
        <div class="box">
            <form action="../model/ajoutActif.php" method="post">

                <label for "date_actif>Date de création:</label>
                <input type="datetime-local" name="date_actif" id="date_actif" placeholder="Saisir la date de création">

                <label for "date_effet">Date de prise d'effet:</label>
                <input type="datetime-local" name="date_effet" id="date" placeholder="Saisir la date de prise d'effet">

                <label for="categoriePrincipale">Catégorie Principale:</label>
                <select id="categoriePrincipale" name="categoriePrincipale">
                    <option value="actifsCourants">Actifs courants</option>
                    <option value="immobilisations">Immobilisations</option>
                </select><br><br>

                <label for="sousCategorie">Sous-Catégorie:</label>
                <select id="sousCategorie" name="sousCategorie">
                    
                </select><br><br>

                <label for="montant">Montant:</label>
                <input type="number" id="montant" name="montant" step="0.01" required><br><br>

                <button type="submit">Ajouter actif</button>
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
        actifsCourants: ['Caisse', 'Banque (comptes courants et d épargne)', 'Clients (comptes débiteurs)', 'Stocks (marchandises, matières premières)', 'Prêts et avances accordés', 'Placements à court terme', 'Autres actifs courants (TVA à récupérer, etc.)'],
        immobilisations: ['Terrains', 'Bâtiments', 'Matériel et outillage', 'Mobilier et matériel de bureau', 'Véhicules', 'Immobilisations incorporelles (brevets, licences, logiciels)', 'Amortissements accumulés']
    };

    var sousCategories = options[categoriePrincipale];
    sousCategories.forEach(function(sousCategorieOption) {
        var option = new Option(sousCategorieOption, sousCategorieOption);
        sousCategorie.add(option);
    });
});
</script>

<?php include 'pied.php'; ?>
