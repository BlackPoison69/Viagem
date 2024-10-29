<?php
require "fixo/cabecalho.php";
$pacote = isset($_GET['pacote']) ? $_GET['pacote'] : 'indefinido';
?>

<div class="d-flex justify-content-center bg-dark text-white" style="margin-top: 4vh;">
    <h1 class="text-center">7-Day Travel Package to Campos do Jordão</h1>
</div>

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
                    <li class="list-group-item"><strong>Accommodation:</strong> 7 nights in a 3 to 5 star hotel with breakfast.</li>
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
                    <p class="card-text"><strong>Attractions:</strong> Snow activities and cozy fondue dinners.</p>
                    <p class="card-text"><strong>Activities:</strong> Enjoying the Christmas festival and winter hikes.</p>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">In Summer</h5>
                    <p class="card-text"><strong>Attractions:</strong> Outdoor events and summer festivals.</p>
                    <p class="card-text"><strong>Activities:</strong> Hiking and exploring local markets.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="activities mb-5">
        <h2 class="text-info">What to Do in Campos do Jordão in 7 Days</h2>
        <ul class="list-group">
            <li class="list-group-item">Explore nature trails and parks.</li>
            <li class="list-group-item">Visit local breweries and taste craft beers.</li>
            <li class="list-group-item">Try regional cuisine and gourmet restaurants.</li>
            <li class="list-group-item">Attend cultural events and festivals.</li>
            <li class="list-group-item">Relax at spas and wellness centers.</li>
            <li class="list-group-item">Discover local artisan shops.</li>
            <li class="list-group-item">Enjoy the vibrant nightlife.</li>
        </ul>
    </section>
</main>



<?php
require "fixo/rodape.php";
?>