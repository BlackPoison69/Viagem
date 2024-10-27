<?php
require "fixo/cabecalho.php";
?>

<section id="home" class="banner">
    <h2>Find the perfect travel package for you</h2>
    <p>Explore our exclusive destinations and packages with the best offers.</p>
    <form class="search-form" method="post" action="buscar.php">
        <input type="text" name="destino" placeholder="Enter your destination" />
        <button type="submit">Search</button>
    </form>
</section>

<section id="pacotes" class="pacotes">
    <h2>Featured Travel Packages</h2>
    <?php
    $pacotes = [
        [
            "imagem" => "img's/imagem1.jpg",
            "titulo" => "Caribbean Package",
            "descricao" => "7 days",
            "link" => "caribe.php?pacote=caribe"
        ],
        [
            "imagem" => "img's/imagem2.jpg",
            "titulo" => "Package to Campos do Jordão",
            "descricao" => "5 days",
            "link" => "campos_do_jordao.php?pacote=campos-do-jordao"
        ],
        [
            "imagem" => "img's/imagem3.jpg",
            "titulo" => "Package to New York",
            "descricao" => "6 days",
            "link" => "novayork.php?pacote=nova-york"
        ]
    ];

    foreach ($pacotes as $pacote) {
        echo '<div class="pacote">';
        echo '<img src="' . $pacote["imagem"] . '" alt="' . $pacote["titulo"] . '">';
        echo '<h3>' . $pacote["titulo"] . '</h3>';
        echo '<p>' . $pacote["descricao"] . '</p>';
        echo '<a href="' . $pacote["link"] . '"><button>Learn More</button></a>';
        echo '</div>';
    }
    ?>
</section>

<?php
require "fixo/footer.php";
?>