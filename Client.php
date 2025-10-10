<?php 

class Client{
    //Propriétés de classe
    private string $_nom;
    private string $_prenom;
    private string $_reservationDate;
    private Room $_room;
    private Hotel $_hotel;

    //Méthode magique : Constructor
    public function __construct($nom, $prenom, $reservationDate, $room, $client){
        $this->_nom = $nom;
        $this->_prenom = $prenom;
        $this->_reservationDate = $reservationDate;
        $this->_room = $room;
        $this->_client = $client;
    }

    //Getter et Setter
    /* Adress */
    public function getNom(){
        return $this->_nom;
    }
    public function setNom(){
        $this->_nom = $nom;
    }

    /* Number of rooms */
        public function getPrenom(){
        return $this->_prenom;
    }
    public function setPrenom(){
        $this->_prenom = $prenom;
    }

    /* Number of reserved rooms */
        public function getReservationDate(){
        return $this->_reservationDate;
    }
    public function setReservationDate(){
        $this->_reservationDate = $reservationDate;
    }

    /* Room */
    public function getRoom(){
        return $this->_room;
    }
    public function setRoom(){
        $this->_room = $room;
    }

    /* Client */
    public function getClient(){
        return $this->_client;
    }
    public function setClient(){
        $this->_client = $client;
    }

    //Méthodes
    public function arrival(){
        //arrival
    };

    public function departure(){
        //departure
    }

    //Méthode magique : toString à ajouter ?
}