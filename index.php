<?php

include 'Hotel.php';
include 'Client.php';
include 'Room.php';
include 'Reservation.php';

$hotel1 = new Hotel('Hilton', '10 Route de la Gare', '67000', 'STRASBOURG', 'France', false, false);
$hotel2 = new Hotel('Le Régent', '61 Rue Dauphine', '75006', 'PARIS', 'France', true, true);

$room1 = new Room('1', '2', '125', true, false, $hotel1, []);
$room2 = new Room('2', '1', '90', true, false, $hotel1, []);
$room3 = new Room('3', '3', '150', false, true, $hotel1, []);

$room4 = new Room('1', '1', '50', false, true, $hotel2);

$client1 = new Client('Micka', 'MURMANN');
$client2 = new Client('Jennifer', 'SOLEIL');

$reservation1 = new Reservation('10-13-2025', '2', true, '0', '10-20-2025', '10-25-2025', $room2, $client2);
$reservation2 = new Reservation('10-16-2025', '1', false, '1', '11-05-2025', '11-15-2025', $room1, $client1);


//echo $hotel1->hotelReservations();

//echo $hotel2->hotelReservations();

//echo $client1->clientReservations();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hôtels</title>
    <meta name="description" content="Exercice PHP - Application POO">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="uikit/css/uikit.min.css" />
    <script src="uikit/js/uikit.min.js"></script>
    <script src="uikit/js/uikit-icons.min.js"></script>
</head>
<body>
    
    <header>
        <h1>Exercice PHP - Application POO</h1>
    </header>

    <main>

        <h2>Hilton **** Strasbourg</h2>
        <p><?php print $hotel1; ?></p>

        <h2>Réservations de l'hôtel Hilton **** Strasbourg</h2>
        <p><?php echo $hotel1->hotelReservations(); ?></p>

        <h2>Réservations de l'hôtel Regent **** Paris</h2>
        <p><?php echo $hotel2->hotelReservations(); ?></p>

        <h2>Réservations de <?php print $client1; ?></h2>
        <p><?php echo $client1->clientReservations(); ?></p>

        <div class="table">
            <table id="tableChambre" class="uk-table uk-table-striped">
                <caption>Status des chambres de <strong>Hilton **** Strasbourg<strong></caption>
                <thead>
                    <tr>
                        <th>CHAMBRE</th>
                        <th>PRIX</th>
                        <th>WIFI</th>
                        <th>ETAT</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php echo $room1->getRoomNb() ?></td>
                        <td><?php echo $room1->getPrice() ?></td>
                        <td><?php echo $room1->getWifi() ? "<span uk-icon='icon: rss; ratio: 1'></span>" : " " ?>
                        <td><?php echo $room1->getStatus() ? "<button id='libre' class='uk-button uk-button-default uk-button-small'> Libre</button>" : "<button id='reserve' class='uk-button uk-button-default uk-button-small'>Réservé</button>" ?></td>
                    </tr>
                    <tr>
                        <td><?php echo $room2->getRoomNb() ?></td>
                        <td><?php echo $room2->getPrice() ?></td>
                        <td><?php echo $room2->getWifi() ? "<span uk-icon='icon: rss; ratio: 1'></span>" : " " ?></td>
                        <td><?php echo $room2->getStatus() ? "<button id='libre' class='uk-button uk-button-default uk-button-small'> Libre</button>" : "<button id='reserve' class='uk-button uk-button-default uk-button-small'>Réservé</button>" ?></td>
                    </tr>
                    <tr>
                        <td><?php echo $room3->getRoomNb() ?></td>
                        <td><?php echo $room3->getPrice() ?></td>
                        <td><?php echo $room3->getWifi() ? "<span uk-icon='icon: rss; ratio: 1'></span>" : " " ?></td>
                        <td><?php echo $room3->getStatus() ? "<button id='libre' class='uk-button uk-button-default uk-button-small'> Libre</button>" : "<button id='reserve' class='uk-button uk-button-default uk-button-small'>Réservé</button>" ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
        
    </main>
    <footer>

    </footer>

</body>
</html>