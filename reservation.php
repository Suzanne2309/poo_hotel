<?php 

class Reservation{
    //Propriétés de classe
    private string $_reservationDate;
    private int $_nbPeoples;
    private bool $_breakfast = false;
    private int $_kids;
    private string $_startDate;
    private string $_endDate;
    private Room $_room;
    private Client $_client;

    //méthode magique : Constructor
    public function __construct($reservationDate, $nbPeoples, $breakfast, $kids, $startDate, $endDate, $room, $client) {
        $this->_reservationDate = $reservationDate;
        $this->_nbPeoples = $nbPeoples;
        $this->_breakfast = $breakfast;
        $this->_kids = $kids;
        $this->_startDate = $startDate;
        $this->_endDate = $endDate;
        $this->_room = $room;
        $this->_client = $client;
        $client->addReservation($this);
        $room->addReservation($this);
    }

    //Getter et Setter
    /* Date de réservation */
    public function getReservationDate(){
        return $this->_reservationDate;
    }
    public function setReservationDate(){
        $this->_reservationDate = $reservationDate;
    }

    /* Nombre de personnes dans la chambre */
    public function getNbPeoples(){
        return $this->_nbPeoples;
    }
    public function setNbPeoples(){
        $this->_nbPeoples = $nbPeoples;
    }

    /* Option petit-déjeuner */
    public function getBreakfast(){
        return $this->_breakfast;
    }
    public function setBreakfast(){
        $this->_breakfast = $breakfast;
    }

    /* Nombre d'enfants */
    public function getKids(){
        return $this->_kids;
    }
    public function setKids(){
        $this->_kids = $kids;
    }

    /* Date de début du séjour */
    public function getStartDate(){
        return $this->_startDate;
    }
    public function setStartDate(){
        $this->_startDate = $startDate;
    }

    /* Date de fin du séjour */
    public function getEndDate(){
        return $this->_endDate;
    }
    public function setEndDate(){
        $this->_endDate = $endDate;
    }

    /* Chambre reservé */
    public function getRoom(){
        return $this->_room;
    }
    public function setRoom(){
        $this->_room = $room;
    }

    /* Client ayant effectué la réservation */
    public function getClient(){
        return $this->_client;
    }
    public function setClient(){
        $this->_client = $client;
    }

    //Méthodes


    //méthode magique : toString
    public function __toString() {
        return " Réservation du " . $this->_reservationDate . " par " . $this->_client . " à " . $this->_room . ". La réservation est pour " . $this->_nbPeoples . " personnes, du " . $this->_startDate . " au " . $this->_endDate . ".";
    }
}