<?php include('header.php'); ?>

<h2>Ajouter un nouveau produit</h2>

<form action="add_product_submit.php" method="POST">
    <div>
        <label for="name">Nom</label>
        <input type="text" id="name" name="name" placeholder="Nom du produit">
    </div>
    <div>
        <label for="description">Description</label>
        <input type="text" id="description" name="description" placeholder="Description">
    </div>
    <div>
        <label for="price">Prix</label>
        <input type="number" id="price" name="price" placeholder="Prix en euros">
    </div>
        <div>
        <label for="image">Image (URL)</label>
        <input type="text" id="image" name="image" placeholder="URL de l'image">
    </div>
    <br>
    <button type="submit">Envoyer</button>
</form>

<?php include('footer.php'); ?>
