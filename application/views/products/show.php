<h2><?= $title ?></h2>

<div class="row">
    <div class="col s6">
        <p><?= $product -> name ?></p>
        <p><?= $product -> price ?></p>
        <p><?= $product -> quantity ?></p>
    </div>

    <div class="col s6">
        <form action="<?= base_url() ?>products/update" method="post">
            <div class="row">
                <div class="input-field col s6">
                    <input type="text" name="name" id="name" value="<?= $product -> name ?>">
                    <label for="name">Nome do Produto</label>
                </div>

                <div class="input-field col s4">
                    <input type="number" name="price" id="price" step=".01" min="0" value="<?= $product -> price ?>">
                    <label for="price">Preço</label>
                </div>

                <div class="input-field col s2">
                    <input type="number" name="quantity" id="price" min="1" value="<?= $product -> quantity ?>">
                    <label for="price">Quantidade</label>
                </div>
            </div>

            <input type="hidden" name="id" value="<?= $product -> id ?>">
            <input class="btn waves" type="submit" value="Atualizar">
        </form>
    </div>
</div>