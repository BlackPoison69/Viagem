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
        <h1>7-Day Caribbean Travel Package</h1>
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
                        <td>Arrival and relaxation on the beach - Transfer to the hotel and enjoy the resort.</td>
                    </tr>
                    <tr>
                        <td>Day 2</td>
                        <td>Cultural and historical exploration - Visits to historic sites and local towns.</td>
                    </tr>
                    <tr>
                        <td>Day 3</td>
                        <td>Boat and snorkel trip - Tour to nearby islands and water activities.</td>
                    </tr>
                    <tr>
                        <td>Day 4</td>
                        <td>Outdoor Adventure - Exploring caves, cenotes or trails.</td>
                    </tr>
                    <tr>
                        <td>Day 5</td>
                        <td>Relaxation at the resort or spa - Free day for activities at the resort.</td>
                    </tr>
                    <tr>
                        <td>Day 6</td>
                        <td>Visit to urban attractions - Nightlife and cultural attractions.</td>
                    </tr>
                    <tr>
                        <td>Day 7</td>
                        <td>Farewell and return - Free morning and transfer to the airport.</td>
                    </tr>
                </tbody>
            </table>
        </section>

        <section class="package-details mb-5">
            <h2 class="text-info">Package Details</h2>
            <div class="row">
                <div class="col-md-6">
                    <ul class="list-group">
                        <li class="list-group-item"><strong>Accommodation:</strong> 7 nights in an all-inclusive hotel (3 to 5 stars).</li>
                        <li class="list-group-item"><strong>Transport:</strong> Airport and tour transfers.</li>
                        <li class="list-group-item"><strong>Food:</strong> Breakfast, lunch and dinner included.</li>
                        <li class="list-group-item"><strong>Activities:</strong> Tours mentioned in the itinerary.</li>
                        <li class="list-group-item"><strong>Travel insurance:</strong> Basic coverage.</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <h4 class="text-primary">Estimated Prices</h4>
                    <p><strong>Price per person:</strong> US$1,500 to US$3,500 depending on destination and time of year.</p>
                    <p><strong>Additional fees:</strong> Optional excursions and spa treatments.</p>
                </div>
            </div>
        </section>

        <section class="suggestions mb-5">
            <h2 class="text-info">Places to Visit</h2>
            <div class="card-deck">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">When It's Cold</h5>
                        <p class="card-text"><strong>Northern Caribbean Islands:</strong> Bahamas and Bermuda.</p>
                        <p class="card-text"><strong>Activities:</strong> Cultural, historical and spa tours.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">When It's Hot</h5>
                        <p class="card-text"><strong>Southern Caribbean Islands:</strong> Aruba, Curacao and Barbados.</p>
                        <p class="card-text"><strong>Activities:</strong> Water sports, snorkeling and trails.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="activities mb-5">
            <h2 class="text-info">What to Do in the Caribbean in 7 Days</h2>
            <ul class="list-group">
                <li class="list-group-item">Relax on paradisiacal beaches.</li>
                <li class="list-group-item">Water activities: snorkeling, diving, swimming with dolphins.</li>
                <li class="list-group-item">Explore local culture: colonial cities, markets and gastronomy.</li>
                <li class="list-group-item">Nightlife and entertainment: bars, clubs and shows.</li>
                <li class="list-group-item">Excursions to nearby islands.</li>
                <li class="list-group-item">Natural parks and reserves.</li>
                <li class="list-group-item">Shopping and souvenirs.</li>
            </ul>
        </section>
    </main>
    

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    

</body>
</html>