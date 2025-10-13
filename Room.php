<?php 

class Room{
    //Propriétés de classe
    private int $_roomNb;
    private int $_nbBeds;
    private float $_price;
    private bool $_wifi = false; //On choisit un type d evariable booléan ou true = il ya la wifi et false = il n'y a pas de wifi
    private bool $_status = true; //On choisit un type d evariable booléan true = libre et false = reservé
    private array $_reservations; //On définis un tableau associatif contenant toutes les réservations liées à la chambre qui va être crée
    private Hotel $_hotel; //On connecte la variable hotel qui permettra par la suite d'accéder au tableau des chambres de l'hôtel auquel la chambre appartiendra


    //Méthode magique : Constructor
    public function __construct($roomNb, $nbBeds, $price, $wifi, $status, $hotel) {
        $this->_roomNb = $roomNb;
        $this->_nbBeds = $nbBeds;
        $this->_price = $price;
        $this->_wifi = $wifi;
        $this->_status = $status;
        $this->_hotel = $hotel;
        $this->_reservations = []; //On définis le tableau des réservations comme vide (= [] en ne mettant rien entre les crochets) 
        $hotel->addRoom($this); //La nouvelle chambre qui est entrain d'être crée ($this en paramère indique bien que c'est CETTE chambre), on l'ajoute grâce à la fonction addRoom dans le tableau des chambres de l'hôtel correspondant (tableau dans la classe Hotel)
    }

    //Getter et Setter
    /* Numéro de chambre */
    public function getRoomNb(){
        return $this->_roomNb;
    }
    public function setRoomNb(){
        $this->_roomNb = $roomNb;
    }

    /* Numbre de chambre */
        public function getNbBeds(){
        return $this->_nbBeds;
    }
    public function setNbRooms(){
        $this->_nbBeds = $nbBeds;
    }

    /* Prix de la chambre */
        public function getPrice(){
        return $this->_price;
    }
    public function setPrice(){
        $this->_price = $price;
    }

    /* Statut du Wifi */
    public function getWifi(){
        return $this->_wifi;
    }
    public function setWifi(){
        $this->_wifi = $wifi;
    }

    /* Statut de la chambre */
    public function getStatus(){
        return $this->_status;
    }
    public function setStatus(){
        $this->_status = $status;
    }

    /* Hôtel */
    public function getHotel() {
        return $this->_hotel;
    }
    public function setHotel() {
        $this->_hotel = $hotel;
    }

    /* Tableau des réservations pour la chambre */
    public function getReservations() {
        return $this->_reservations;
    }
    public function setReservations() {
        $this->_reservations = $reservations;
    }

    //Méthodes
    public function addReservation(Reservation $reservation) {
        $this->_reservations[] = $reservation;
    }

    //Méthode magique : toString
    public function __toString() {
        return "The room n°" . $this->$_roomNb . " has " . $this->$_nbBeds . " bed(s) and cost " . $this->$_price . "€. " . ($this->_wifi ? "Wifi" : "Sans Wifi") . " " . ($this->_status ? "Libre" : "Réservé") . "<br>";
    }
}