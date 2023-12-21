
<div class="columns">
    <div class="column"></div>
    <div class="column">
        <div class="card">
            <form method="post" action="./?page=register">
                <div class="card-content">
                    <div class="media">
                        <div class="media-content">
                            <p class="title is-4">Ajouter Produit</p>
                        </div>
                    </div>

                    <div class="content">
                        <div class="field">
                            <label class="label">Nom</label>
                            <div class="control">
                                <input class="input" type="text" name="create-product-name">
                            </div>
                        </div>

                        <div class="field">
                            <label class="label">Description</label>
                            <div class="control">
                                <textarea class="textarea" name="create-product-description"></textarea>
                            </div>
                        </div>

                        <div class="field">
                            <label class="label">Lien Produit</label>
                            <div class="control">
                                <input class="input" type="text" name="create-product-link">
                            </div>
                        </div>

                        <div class="field">
                            <label class="label">Prix</label>
                            <div class="control">
                                <input class="input" type="number" name="create-product-price">
                            </div>
                        </div>

                        <div class="field">
                            <label class="label">Image URL</label>
                            <div class="control">
                                <input class="input" type="text" name="create-product-image-url">
                            </div>
                        </div>

                        <button class="button is-danger my-delete-button" type="submit"> Envoyer au Père Noel </button>

                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="column"></div>
</div>