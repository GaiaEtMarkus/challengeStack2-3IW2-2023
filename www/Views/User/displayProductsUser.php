<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#productsModal">
    Afficher les produits
</button>

<div class="modal fade" id="productsModal" tabindex="-1" role="dialog" aria-labelledby="productsModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="productsModalLabel">Produits disponibles</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <?php foreach ($products as $product): ?>
                        <div class="col-md-6">
                            <div class="card">
                                <img src="<?= $product['thumbnail'] ?>" class="card-img-top" alt="<?= $product['title'] ?>">
                                <div class="card-body">
                                    <h5 class="card-title"><?= $product['title'] ?></h5>
                                    <p class="card-text">Trokos : <?= $product['trokos'] ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
            </div>
        </div>
    </div>
</div>