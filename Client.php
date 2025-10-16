<?php 

class Client{
    //Propriétés de classe
    private string $_firstName;
    private string $_lastName;
    private array $_reservations;

    //Méthode magique : Constructor
    public function __construct($firstName, $lastName){
        $this->_firstName = $firstName;
        $this->_lastName = $lastName;
        $this->_reservations = [];
    }

    //Getter et Setter
    /* Prénom */
    public function getFirstName(){
        return $this->_firstName;
    }
    public function setFirstName(){
        $this->_firstName = $firstName;
    }

    /* Nom de famille */
    public function getLastName(){
        return $this->_lastName;
    }
    public function setLastName(){
        $this->_lastName = $lastName;
    }

    //Méthodes
    public function addReservation(Reservation $reservation) {
        $this->_reservations[] = $reservation;
    }

    public function clientReservations() {
        //On souhaite afficher les réservations du client
        $afficher = "";
        foreach($this->_reservations as $reservation) {

                $afficher .= $reservation . ",<br>";
        };
        return "" . $afficher . "";
    }

    
    //Méthode magique : toString
    public function __toString() {
        return "" . $this->_firstName . " " . $this->_lastName . " ";
    }
}