<?php
require "fixo/cabecalho.php";
$pacote = isset($_GET['pacote']) ? $_GET['pacote'] : 'indefinido';
?>

<div class="d-flex justify-content-center bg-dark text-white" style="margin-top: 4vh;">
    <h1 class="text-center">7-Day New York Travel Package</h1>
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
                    <td>Arrival and check-in at the hotel - Free time to explore Times Square.</td>
                </tr>
                <tr>
                    <td>Day 2</td>
                    <td>Stroll through Central Park and visit the Metropolitan Museum of Art (MET).</td>
                </tr>
                <tr>
                    <td>Day 3</td>
                    <td>Tour of the Statue of Liberty and Ellis Island - Panoramic view from One World Observatory.</td>
                </tr>
                <tr>
                    <td>Day 4</td>
                    <td>Exploration of the Manhattan neighborhood - Visit to Fifth Avenue and Rockefeller Center.</td>
                </tr>
                <tr>
                    <td>Day 5</td>
                    <td>Visit to the Empire State Building and afternoon shopping in SoHo.</td>
                </tr>
                <tr>
                    <td>Day 6</td>
                    <td>Gastronomic tour - Experience in local restaurants and markets.</td>
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
                <p><strong>Price per person:</strong> US$2,000 to US$5,000 depending on accommodation and time of year.</p>
                <p><strong>Additional fees:</strong> Tickets for Broadway shows and museum visits.</p>
            </div>
        </div>
    </section>

    <section class="suggestions mb-5">
        <h2 class="text-info">Places to Visit</h2>
        <div class="card-deck">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">In Winter</h5>
                    <p class="card-text"><strong>Attractions:</strong> Ice skating at Rockefeller Center and Christmas festivities.</p>
                    <p class="card-text"><strong>Activities:</strong> Visit Christmas markets and watch winter shows.</p>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">In Summer</h5>
                    <p class="card-text"><strong>Attractions:</strong> Outdoor events in Central Park and shows on Broadway.</p>
                    <p class="card-text"><strong>Activities:</strong> Bike rides and cruises along the Hudson River.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="activities mb-5">
        <h2 class="text-info">What to Do in New York in 7 Days</h2>
        <ul class="list-group">
            <li class="list-group-item">Explore museums and art galleries.</li>
            <li class="list-group-item">Shop at famous boutiques.</li>
            <li class="list-group-item">Try the varied cuisine.</li>
            <li class="list-group-item">Participate in cultural events and shows.</li>
            <li class="list-group-item">Visit historical and tourist landmarks.</li>
            <li class="list-group-item">Guided tours through iconic neighborhoods.</li>
            <li class="list-group-item">Enjoy the vibrant nightlife.</li>
        </ul>
    </section>
</main>



<?php
require "fixo/rodape.php";
?>