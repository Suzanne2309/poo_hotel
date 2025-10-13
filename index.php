<?php

include 'Hotel.php';
include 'Client.php';
include 'Room.php';
include 'Reservation.php';

$hotel1 = new Hotel('Hilton', '10 Route de la Gare', '67000', 'STRASBOURG', 'France', false, false);
$hotel2 = new Hotel('Le Régent', '61 Rue Dauphine', '75006', 'PARIS', 'France', true, true);

var_dump($hotel1);


$room1 = new Room('1', '2', '125', true, true, $hotel1);
$room2 = new Room('2', '1', '90', true, true, $hotel1);

$room3 = new Room('1', '1', '50', false, true, $hotel2);

var_dump($hotel1);

// var_dump($room1);
// var_dump($room2);
// var_dump($room3);

$client1 = new Client('Micka', 'MURMANN');
$client2 = new Client('Jennifer', 'SOLEIL');

var_dump($client1);
var_dump($client2);

$reservation1 = new Reservation('10-13-2025', '2', true, '0', '10-20-2025', '10-25-2025', $room1, $client2);


var_dump($room1);
var_dump($client2);

echo reservationCount();