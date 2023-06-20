<div class="container">
    <h2>Liste des produits vérifiés</h2>
    <div class="row">
        <?php foreach ($products as $product): ?>
            <div class="col-md-2">
                <div class="card">
                    <img src="<?= $product['thumbnail'] ?>" class="card-img-top" alt="Product Image">
                    <div class="card-body">
                        <h5 class="card-title"><?= $product['title'] ?></h5>
                        <!-- <p class="card-text"><?= $product['description'] ?></p> -->
                        <p class="card-text"><?= $product['trokos'] ?></p>
                        <form method="POST" action="/opentransaction">
                            <input type="hidden" name="productId" value="<?= $product['id'] ?>">
                            <button type="submit" class="btn btn-primary">Valider</button>
                            <a href="/displayDetailsProduct?productId=<?= $product['id'] ?>" class="btn btn-primary">Details</a>
                        </form>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
