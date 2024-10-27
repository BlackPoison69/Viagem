<?php
$pacote = isset($_GET['pacote']) ? $_GET['pacote'] : 'indefinido';
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Package Details - <?php echo htmlspecialchars($pacote); ?></title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <header>
        <div class="logo">
            <h1>Your Tourism Agency</h1>
        </div>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="index.php#pacotes">Packages</a></li>
                <li><a href="index.php#destinos">Destinations</a></li>
                <li><a href="index.php#contato">Contact</a></li>
            </ul>
        </nav>
    </header>

    <header class="bg-primary text-white text-center py-4">
        <h1>7-Day Travel Package to Campos do Jordão</h1>
    </header>
    <main class="container my-5">
        <section class="itinerary mb-5">
            <h2 class="text-info">Itinerary</h2>
            <table class="table table-striped table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th>Day</th>
                        <th>Description</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Day 1</td>
                        <td>Arrival and check-in at the hotel - Free time to explore the tourist center.</td>
                    </tr>
                    <tr>
                        <td>Day 2</td>
                        <td>Train ride to the Capivari neighborhood - Visit to craft stores and local restaurants.</td>
                    </tr>
                    <tr>
                        <td>Day 3</td>
                        <td>Visit to Amantikir Park - Exploration of the gardens and contact with nature.</td>
                    </tr>
                    <tr>
                        <td>Day 4</td>
                        <td>Outdoor trail and adventure - Ecotourism activities in the mountains.</td>
                    </tr>
                    <tr>
                        <td>Day 5</td>
                        <td>Relax at the hotel and visit the Felícia Leirner Museum - Enjoy the spa or swimming pool.</td>
                    </tr>
                    <tr>
                        <td>Day 6</td>
                        <td>Gastronomic tour - Experience in restaurants and craft breweries.</td>
                    </tr>
                    <tr>
                        <td>Day 7</td>
                        <td>Farewell and return - Free morning for shopping and check-out.</td>
                    </tr>
                </tbody>
            </table>
        </section>

        <section class="package-details mb-5">
            <h2 class="text-info">Package Details</h2>
            <div class="row">
                <div class="col-md-6">
                    <ul class="list-group">
                        <li class="list-group-item"><strong>Accommodation:</strong>7 nights in a 3 to 5 star hotel with breakfast.</li>
                        <li class="list-group-item"><strong>Transport:</strong> Hotel transfers for tours included.</li>
                        <li class="list-group-item"><strong>Food:</strong> Breakfast included.</li>
                        <li class="list-group-item"><strong>Activities:</strong> Tours mentioned in the itinerary.</li>
                        <li class="list-group-item"><strong>Travel insurance:</strong> Basic coverage.</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <h4 class="text-primary">Estimated Prices</h4>
                    <p><strong>Price per person:</strong> R$2,000 to R$4,500, depending on accommodation and time of year.</p>
                    <p><strong>Additional fees:</strong> Optional activities and spa treatments.</p>
                </div>
            </div>
        </section>

        <section class="suggestions mb-5">
            <h2 class="text-info">Places to Visit</h2>
            <div class="card-deck">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">In Winter</h5>
                        <p class="card-text"><strong>Attractions:</strong>Winter festivals, chocolate shops and fondue.</p>
                        <p class="card-text"><strong>Activities:</strong> Ice skating and cable car ride.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">In summer</h5>
                        <p class="card-text"><strong>Attractions:</strong> Parks and hiking trails.</p>
                        <p class="card-text"><strong>Activities:</strong> Ecotourism and horse riding.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="activities mb-5">
            <h2 class="text-info">What to do in Campos do Jordão in 7 days</h2>
            <ul class="list-group">
                <li class="list-group-item">Explore the European architecture and charm of the city.</li>
                <li class="list-group-item">Visit parks and go hiking.</li>
                <li class="list-group-item">Try local cuisine.</li>
                <li class="list-group-item">Enjoy festivals and cultural events.</li>
                <li class="list-group-item">Tours of craft stores.</li>
                <li class="list-group-item">Visit museums and art galleries.</li>
                <li class="list-group-item">Relax in spas and cozy hotels.</li>
            </ul>
        </section>
    </main>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
