<?php
require_once __DIR__ . '/../Controller/ProductController.php';

$products = ProductController::getAllProducts();

foreach ($products as $product) { ?>
    <div class="columns">
        <div class="column"></div>
        <div class="column">
            <div class="card">
                <div class="card-image">
                    <figure class="image is-4by3">
                        <img src="<?= $product->getImageUrl() ?>" alt="Image du produit">
                    </figure>
                </div>
                <div class="card-content">
                    <div class="media">
                        <div class="media-left">
                            <figure class="image is-48x48">
                                <!-- Vous pouvez mettre une image de profil ici si vous en avez une -->
                            </figure>
                        </div>
                        <div class="media-content">
                            <p class="title is-4"><?= $product->getName() ?></p>
                            <!-- Vous pouvez afficher d'autres informations sur le produit ici si nécessaire -->
                        </div>
                    </div>

                    <div class="content">
                        <?= $product->getDescription() ?>
                    </div>

                    <!-- Bouton "Supprimer" -->
                    <div class="content">
                        <a class="button is-danger my-delete-button" href="?page=delete&product_id=<?= $product->getId() ?>">Supprimer</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="column"></div>
    </div>
<?php } ?>
