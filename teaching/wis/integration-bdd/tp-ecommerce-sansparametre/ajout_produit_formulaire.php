<?php include('header.php'); ?>

<h2>Ajouter un nouveau produit</h2>

<form action="ajout_produit_submit.php" method="POST">
    <div>
        <label for="productCode">Référence</label>
        <input type="number" id="productCode" name="productCode" placeholder="Référence">
    </div>
    <div>
        <label for="productName">Nom</label>
        <input type="text" id="productName" name="productName" placeholder="Nom du produit">
    </div>
    <div>
        <label for="buyPrice">Prix</label>
        <input type="text" id="buyPrice" name="buyPrice" placeholder="Prix en euros">
    </div>
    <div>
        <label for="quantityInStock">Stock</label>
        <input type="text" id="quantityInStock" name="quantityInStock" placeholder="Quantité en stock">
    </div>
    <br>
    <button type="submit">Envoyer</button>
</form>

<?php include('footer.php'); ?>
