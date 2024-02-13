<?php    
include 'tete.php'
?>

<div class="home-content">
    <div class="overview-boxes">
        <div class="box">
            <form action="../model/ajoutProduit.php" method="post">

                <label for "date_facture>Date de création:</label>
                <input type="datetime-local" name="date_facture" id="date_facture" placeholder="Saisir la date de création">

                <label for "date_effet">Date de prise d'effet:</label>
                <input type="datetime-local" name="date_effet" id="date" placeholder="Saisir la date de prise d'effet">

                <label for="categorie">Categorie:</label>
                <select id="categorie" name="categorie">
                    <option value="Vente">Vente de bien ou de service</option>
                    <option value="Produit Financier">Produit Financier</option>
                    <option value="Autres (subvientions, indémnités d'assurance...)">Autres</option>
                </select><br><br>
                
                <label for="montant">Montant:</label>
                <input type="number" id="montant" name="montant" step="0.01" required><br><br>

                <button type="submit">Ajouter produit</button>

            </form>
        </div>

    </div>

</div>
</section>

<?php    
include 'pied.php'
?>