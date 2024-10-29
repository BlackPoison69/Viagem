<?php
require "fixo/cabecalho.php";
?>

<section id="home" class="banner text-center py-5 bg-light"> <!-- Search section -->
    <div class="container">
        <h2 class="display-4">Find the Perfect Travel Package for You</h2>
        <p class="lead">Explore exclusive destinations and packages with the best offers.</p>

        <form class="search-form form-inline justify-content-center mt-4" method="post" action="buscar.php">
            <input type="text" name="destino" class="form-control mr-2" placeholder="Enter your destination" />
            <button type="submit" class="btn btn-primary">Search</button>
        </form>
    </div>
</section>

<section class="container mt-4 text-center">
    <h1>Welcome to our travel agency</h1>
    <h2>Here you will find a company</h2>
    <ul class="list-unstyled mt-3">
        <li>Organized and customer-focused</li>
        <li>Committed to providing unique and personalized experiences</li>
        <li>With packages to paradise destinations and vibrant cities</li>
        <li>That values safety and comfort in every trip</li>
        <li>Offering dedicated service and support at every step</li>
        <li>That turns the dream of a perfect trip into reality</li>
    </ul>
    <p class="mt-3">
        Our team is passionate about travel and always seeks the best offers and destinations to provide you
        with memorable experiences. Let us be part of your next adventure and discover the world with all the comfort
        and confidence that our agency provides.
    </p>
</section>

<br>
<hr>

<section id="pacotes" class="pacotes py-5">
    <div class="container">
        <h2 class="text-center mb-5">Featured Travel Packages</h2>
        <div class="row">
            <?php
            $pacotes = [
                [
                    "imagem" => "img/imagem1.jpg",
                    "titulo" => "Caribbean Package",
                    "descricao" => "7 days",
                    "link" => "caribe.php?pacote=caribe"
                ],
                [
                    "imagem" => "img/imagem2.jpg",
                    "titulo" => "Campos do Jordão Package",
                    "descricao" => "5 days",
                    "link" => "campos_do_jordao.php?pacote=campos-do-jordao"
                ],
                [
                    "imagem" => "img/imagem3.jpg",
                    "titulo" => "New York Package",
                    "descricao" => "6 days",
                    "link" => "novayork.php?pacote=nova-york"
                ]
            ];

            foreach ($pacotes as $pacote) {
                echo '<div class="col-md-4 mb-4 aumentar">';
                echo '<div class="card shadow-sm">';
                echo '<img src="' . $pacote["imagem"] . '" class="card-img-top" alt="' . $pacote["titulo"] . '">';
                echo '<div class="card-body text-center">';
                echo '<h3 class="card-title">' . $pacote["titulo"] . '</h3>';
                echo '<p class="card-text">' . $pacote["descricao"] . '</p>';
                echo '<a href="' . $pacote["link"] . '" class="btn btn-primary">Learn More</a>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
            }
            ?>
        </div>
    </div>
</section>

<?php
require "fixo/rodape.php";
?>