<?php require "fixo/cabecalho.php"; ?>
<div id="home" ></div>
<br>

<!-- Seção de boas-vindas com imagem de fundo fixa -->
<section  class="banner text-center py-5 ">
  

    <div class="container">

    <audio id="background-music" autoplay loop>
        <source src="Simon Berggren - Ephemeraldas Ballroom.mp3" type="audio/mp3">
        Seu navegador não suporta o elemento de áudio.
    </audio>

    <script>
        window.onload = function() {
            var music = document.getElementById("background-music");
            music.volume = 0.1; // Ajuste o volume de 0.0 (mudo) a 1.0 (máximo)
        };
    </script>

    <div class="container mt-4">
        <button id="toggle-music" class="btn btn-primary">Tocar Música</button>
    </div>

    <script>
        const music = document.getElementById("background-music");
        const toggleButton = document.getElementById("toggle-music");

        toggleButton.addEventListener("click", function() {
            if (music.paused) {
                music.play();
                toggleButton.textContent = "Parar Música";
            } else {
                music.pause();
                toggleButton.textContent = "Tocar Música";
            }
        });
    </script>  

        <section class="container mt-4 text-center campo-vidro">
            <h1 class="shadow">Welcome to our travel agency</h1>
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
    </div>
</section>

<!-- Seção de pacotes para Portugal com detalhes do itinerário -->
<section class="container my-5">
    <h3>Portugal Package</h3>
    <p class="lead">A 6-day package exploring the best of Portugal, covering all accommodation, transportation, activities, and climate considerations.</p>

    <!-- Imagem ilustrativa -->
    <div class="text-center">
        <img src="img/portugal.jpg" alt="Illustrative image of Portugal" style="border-radius: 10px;width: 600px;">
    </div>

    <!-- Tabela com informações do pacote -->
    <table class="table table-bordered mt-4 bg-white">
        <thead class="thead-dark bg-white">
            <tr>
                <th>Aspect</th>
                <th>Details</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Destination</td>
                <td>Lisbon and Porto, Portugal</td>
            </tr>
            <tr>
                <td>Duration</td>
                <td>6 days</td>
            </tr>
            <tr>
                <td>Accommodations</td>
                <td>4-star hotels in central Lisbon and Porto, with breakfast included.</td>
            </tr>
            <tr>
                <td>Transport</td>
                <td>Airport-hotel transfer, Lisbon-Porto train, and local transportation.</td>
            </tr>
            <tr>
                <td>Expected Climate</td>
                <td>Mild weather with temperatures between 15°C and 25°C; possibility of light rain.</td>
            </tr>
            <tr>
                <td>Checklist</td>
                <td>Light clothes, umbrella, comfortable shoes, sunscreen.</td>
            </tr>
            <tr>
                <td>Expected Expenses</td>
                <td>The package includes accommodation, breakfast, and guided tours. Additional estimated expenses around $1,200 for meals, souvenirs, and optional activities.</td>
            </tr>
        </tbody>
    </table>

    <!-- Itinerário detalhado com gasto médio por dia -->
    <h4 class="mt-5">Detailed Itinerary</h4>
    <ul class="list-group">
        <li class="list-group-item"><strong>Day 1:</strong> Arrival in Lisbon, check-in, and welcome dinner</li>
        <li class="list-group-item"><strong>Day 2:</strong> Guided tour in Lisbon, visit the Jerónimos Monastery and the Belém Tower</li>
        <li class="list-group-item"><strong>Day 3:</strong> Visit to Sintra and Pena Palace</li>
        <li class="list-group-item"><strong>Day 4:</strong> Train trip to Porto, check-in, and city center tour</li>
        <li class="list-group-item"><strong>Day 5:</strong> Visit to Porto wine cellars and Douro River cruise</li>
        <li class="list-group-item"><strong>Day 6:</strong> Free time to explore Porto before airport transfer</li>
    </ul>

    <!-- Acomodações recomendadas -->
    <h4 class="mt-5">Suggested Accommodations</h4>
    <ul>
        <li><strong>Lisbon:</strong> Avenida Palace Hotel (City Center) - Elegant and close to tourist spots.</li>
        <li><strong>Porto:</strong> Infante Sagres Hotel (City Center) - Luxurious, ideal for exploring the historic center.</li>
    </ul>

    <!-- Recomendações de refeições e atividades opcionais -->
    <h4 class="mt-5">Meals and Leisure Activities</h4>
    <p>Each day includes suggestions for authentic local restaurants, with options for light meals on warmer days and more substantial dishes for colder days.
        There are also optional activities, such as museum visits on cooler days.</p>

    <!-- Dicas para viagem -->
    <h4 class="mt-5">Travel Tips</h4>
    <ul>
        <li><strong>Cold Weather:</strong> Bring jackets and enjoy indoor activities such as museums and theaters in Lisbon and Porto.</li>
        <li><strong>Warm Weather:</strong> Wear light clothes and take advantage of exploring Cascais beaches (Lisbon) and Douro riversides (Porto).</li>
        <li>Book dinners and tours in advance, especially during high season.</li>
        <li>Public transportation is efficient in both cities; experience local travel options.</li>
    </ul>

    <!-- Roteiro sugerido com gasto médio -->
    <h4 class="mt-5">Suggested Route</h4>
    <ol>
        <li><strong>Lisbon:</strong> Start exploring the historic center, visiting Praça do Comércio, Rua Augusta, and the Santa Justa Elevator. Then, head to the Belém Tower and Jerónimos Monastery, where you can try the famous pastéis de Belém.
            <ul>
                <li>Average cost: €50 for transport, entry tickets, and snacks.</li>
            </ul>
        </li>
        <li><strong>Sintra:</strong> In Sintra, explore Pena Palace and its lush gardens, walk through the historic center, and visit Quinta da Regaleira if time permits.
            <ul>
                <li>Average cost: €70 for transport, entry fees, and food.</li>
            </ul>
        </li>
        <li><strong>Lisbon - Bairro Alto:</strong> Return to Lisbon and enjoy an evening in Bairro Alto, known for its bars, restaurants, and lively nightlife.
            <ul>
                <li>Average cost: €40 to €60 for dinner and drinks.</li>
            </ul>
        </li>
        <li><strong>Porto:</strong> Travel to Porto and start the day exploring the historic center, including Porto Cathedral, Church of São Francisco, and São Bento station with its famous tiles.
            <ul>
                <li>Average cost: €60 for transport, entry tickets, and meals.</li>
            </ul>
        </li>
        <li><strong>Wine Cellars and Douro River:</strong> Visit Porto wine cellars in Vila Nova de Gaia for a wine tasting, followed by a river cruise on the Douro.
            <ul>
                <li>Average cost: €50 to €80 for tasting and boat tour.</li>
            </ul>
        </li>
        <li><strong>Rest Day:</strong> Relax and enjoy the local cuisine. Try dishes such as bacalhau à Brás and caldo verde in a traditional Porto restaurant.
            <ul>
                <li>Average cost: €30 to €50 for meals and small purchases.</li>
            </ul>
        </li>
    </ol>

    <p class="mt-4">We are committed to providing a comfortable and unforgettable experience, regardless of weather conditions. 
        Contact us for more details or to make a reservation!</p>
</section>

<!-- Seção com pacotes em destaque -->
<section id="pacotes" class="pacotes py-5">
    <div class="container">
        <h3 class="text-center mb-5">Featured Travel Packages</h3>
        <div class="row">
            <?php
            // Array com pacotes de viagem
                $pacotes = [
                    [
                        "imagem" => "img/caribe.jpg",
                        "titulo" => "Caribbean Paradise",
                        "descricao" => "6 days in the Caribbean",
                        "preco" => 8187, // Armazenando como número para formatação futura
                        "link" => "https://www.trivago.com.br/pt-BR/lm/hotéis-caribe?search=200-15625;dr-20241101-20241107-s"
                    ],
                    [
                        "imagem" => "img/campos.webp",
                        "titulo" => "Campos do Jordão",
                        "descricao" => "6 days of relaxation",
                        "preco" => 1942,
                        "link" => "https://www.trivago.com.br/pt-BR/lm/hotéis-campos-do-jordão-brasil?search=200-60130;dr-20241101-20241107-s"
                    ],
                    [
                        "imagem" => "img/novaiorque.jpg",
                        "titulo" => "New York Adventure",
                        "descricao" => "6 days in New York",
                        "preco" => 9579,
                        "link" => "https://www.trivago.com.br/pt-BR/lm/hotéis-nova-iorque-nova-york?search=200-14734;dr-20241031-20241113-s"
                    ],
                    [
                        "imagem" => "img/paris.jpg",
                        "titulo" => "Paris Escape",
                        "descricao" => "5 days in Paris",
                        "preco" => 4975,
                        "link" => "https://www.trivago.com.br/pt-BR/lm/hotéis-paris-frança?search=200-22235;dr-20241101-20241107-s"
                    ],
                    [
                        "imagem" => "img/tailandia.jpg",
                        "titulo" => "Thailand Expedition",
                        "descricao" => "6 days in Thailand",
                        "preco" => 7301,
                        "link" => "https://www.trivago.com.br/pt-BR/lm/hotéis-tailândia?search=200-196;dr-20241101-20241107-s"
                    ],
                    [
                        "imagem" => "img/suica.jpg",
                        "titulo" => "Suíça Expedition",
                        "descricao" => "6 days in Switzerland",
                        "preco" => 5165,
                        "link" => "https://www.trivago.com.br/pt-BR/lm/hotéis-suíça?search=200-174;dr-20241101-20241107-s"
                    ]
                ];
                
                foreach ($pacotes as $pacote) {
                    echo '<div class="col-md-4 mb-4 aumentar">';
                    echo '<div class="card shadow-sm">';
                    echo '<img src="' . htmlspecialchars($pacote["imagem"]) . '" class="card-img-top" alt="' . htmlspecialchars($pacote["titulo"]) . '" style="height: 200px; object-fit: cover;">';
                    echo '<div class="card-body text-center">';
                    echo '<h3 class="card-title">' . htmlspecialchars($pacote["titulo"]) . '</h3>';
                    echo '<p class="card-text">' . htmlspecialchars($pacote["descricao"]) . '</p>';
                    echo '<p class="card-text"><strong>Price: $' . number_format($pacote["preco"], 2, ',', '.') . ' USD</strong></p>';
                    echo '<a href="' . htmlspecialchars($pacote["link"]) . '" class="btn btn-primary" target="_blank">Learn More</a>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                }
                ?>
                
        </div>
    </div>
</section>

<?php require "fixo/rodape.php"; ?>