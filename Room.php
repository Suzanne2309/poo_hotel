<?php 

class Room{
    //Propriétés de classe
    private int $_number;
    private int $_nbBeds;
    private float $_price;
    private bool $_wifi; //-------booléan vrai = il ya la wifi et faux = il n'y a pas de wifi ? ou simplement string ?
    private bool $_status; //-----booléan vrai = libre et faux = reservé ? ou simplement string ?
    private Hotel $_hotel; //Une chambre appartient à un seul hôtel (1-1)
    private Client $_client; //Une chambre peut accueilir plusieurs client mais une seule réservation -------- (est-ce qu'on se base pour cet exercice qu'il ya qu'un seul client par réservation/ pas de groupe)

    //Méthode magique : Constructor
    public function __construct($number, $nbBeds, $price, $wifi, $status, $hotel, $client){
        $this->_number = $number;
        $this->_nbBeds = $nbBeds;
        $this->_price = $price;
        $this->_wifi = $wifi;
        $this->_status = $status;
        $this->_hotel = $hotel;
        $this->_client = $client;
    }

    //Getter et Setter
    /* Numéro de chambre */
    public function getNumber(){
        return $this->_number;
    }
    public function setNumber(){
        $this->_number = $number;
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

    /* Statut de la chambre (réservé ou libre) */
    public function getStatus(){
        return $this->_status;
    }
    public function setStatus(){
        $this->_status = $status;
    }

    /* Hôtel */
    public function getHotel(){
        return $this->_hotel;
    }
    public function setHotel(){
        $this->_hotel = $hotel;
    }

    /* Client */
    public function getClient(){
        return $this->_client;
    }
    public function setClient(){
        $this->_client = $client;
    }

    //Méthodes
    //Si chercher plus loin ajouter une méthode appeler l'accueil et/ou Spa ?

    //Méthode magique : toString à ajouter ?
}