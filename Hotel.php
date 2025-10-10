<?php 

class Hotel{
    //Propriétés de classe
    private string $_adress;
    private int $_nbRooms;
    private int $_nbReservedRooms;
    private int $_nbFreeRooms;
    private Room $_room; //Un hôtel peut avoir plusieurs chambres mais une chambre appartiendra à un hôtel (1-n mais 1-1)
    private Client $_client; //Un hôtel peut avoir plusieurs clients et un client peut réserver dans plusieurs hôtels (0-n et 0-n)

    //Méthode magique : Constructor
    public function __construct($adress, $nbRooms, $nbReservedRooms, $nbFreeRooms,$room, $client){
        $this->_adress = $adress;
        $this->_nbRooms = $nbRooms;
        $this->_nbReservedRooms = $nbReservedRooms;
        $this->_nbFreeRooms = $nbFreeRooms;
        $this->_room = $room;
        $this->_client = $client;
    }

    //Getter et Setter
    /* Adress */
    public function getAdress(){
        return $this->_adress;
    }
    public function setAdress(){
        $this->_adress = $adress;
    }

    /* Number of rooms */
        public function getNbRooms(){
        return $this->_nbRooms;
    }
    public function setNbRooms(){
        $this->_nbRooms = $nbRooms;
    }

    /* Number of reserved rooms */
        public function getNbReservedRooms(){
        return $this->_nbReservedRooms;
    }
    public function setNbReservedRooms(){
        $this->_nbReservedRooms = $nbReservedRooms;
    }

    /* Number of free rooms */
    public function getNbFreeRooms(){
        return $this->_nbFreeRooms;
    }
    public function setNbFreeRooms(){
        $this->_nbFreeRooms = $nbFreeRooms;
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
    public function reservation(){
        //reservation
    };

    //Si chercher plus loin ajouter une méthode restaurant et/ou Spa ?

    //Méthode magique : toString à ajouter ?
}