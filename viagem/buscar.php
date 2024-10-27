<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado da Busca - Sua Agência de Turismo</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <div class="logo">
            <h1>Sua Agência de Turismo</h1>
        </div>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="index.php#pacotes">Pacotes</a></li>
                <li><a href="index.php#destinos">Destinos</a></li>
                <li><a href="index.php#contato">Contato</a></li>
            </ul>
        </nav>
    </header>

    <section id="resultados" class="pacotes">
        <h2>Resultados da Busca</h2>
        <?php
        $destino = isset($_GET['destino']) ? $_GET['destino'] : '';

       
        if (empty($destino)) {
            echo "<p>Por favor, insira um destino para buscar.</p>";
        } else {
            echo "<p>Resultados para: <strong>" . htmlspecialchars($destino) . "</strong></p>";

          
            echo "<div class='pacote'>
                    <img src='imagem4.jpg' alt='Pacote Exemplo'>
                    <h3>Pacote para " . htmlspecialchars($destino) . "</h3>
                    <p>7 dias e 6 noites</p>
                    <button>Saiba Mais</button>
                  </div>";
        }
        ?>
    </section>

   
</body>
</html>
