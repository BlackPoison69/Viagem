<?php
require "fixo/cabecalho.php";
?>

<div class="container my-5">
    <h1 class="text-center mb-4">Add New Travel Package</h1>

    <!-- Formulário para inserção de novo pacote -->
    <form action="gravarPacote.php" method="POST">
        <div class="form-group mb-3">
            <label for="package_name">Package Name:</label>
            <input type="text" name="package_name" id="package_name" class="form-control" required>
        </div>

        <div class="form-group mb-3">
            <label for="duration">Duration (days):</label>
            <input type="number" name="duration" id="duration" class="form-control" required>
        </div>

        <div class="form-group mb-3">
            <label for="price">Price (USD):</label>
            <input type="number" name="price" id="price" class="form-control" step="0.01" required>
        </div>

        <div class="form-group mb-3">
            <label for="image_url">Package Image URL:</label>
            <input type="url" name="image_url" id="image_url" class="form-control" placeholder="https://example.com/image.jpg" required>
        </div>

        <div class="form-group mb-3">
            <label for="redirect_url">Redirect URL:</label>
            <input type="url" name="redirect_url" id="redirect_url" class="form-control" placeholder="https://example.com" required>
        </div>

        <div class="text-center">
            <button type="submit" name="submit" class="btn btn-primary mt-3">Add Package</button>
        </div>
    </form>
</div>

<?php
require "fixo/rodape.php";
?>
