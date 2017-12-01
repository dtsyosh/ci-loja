

<form action="<?= base_url() ?>products/store" method="post">
    <div class="row">
        <div class="input-field col s6">
            <input type="text" name="name" id="name">
            <label for="name">Nome do Produto</label>
        </div>

        <div class="input-field col s4">
            <input type="number" name="price" id="price" step=".01" min="0">
            <label for="price">Preço</label>
        </div>

        <div class="input-field col s2">
            <input type="number" name="quantity" id="price" min="1">
            <label for="price">Quantidade</label>
        </div>
    </div>

    <input class="btn waves" type="submit" value="Cadastrar">
</form>