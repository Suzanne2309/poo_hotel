<?php 

class Hotel{
    //Propriétés de classe
    private string $_name;
    private string $_adress;
    private string $_postcode; //On met le code postale en string car à l'international, il peut y avoir des codes postaux avec des lettres
    private string $_city;
    private string $_country;
    private bool $_spa = false; //On met la variable en type boolean car s'il y a un spa ce sera true et s'il y en pas la declaration est false
    private bool $_restaurant = false; //On met la variable en type boolean car s'il y a un spa ce sera true et s'il y en pas la declaration est false
    private array $_rooms; //Un hôtel aura un tableau de chambres lui appartenant

    //Méthode magique : Constructor
    public function __construct($name, $adress, $postcode, $city, $country, $spa, $restaurant) {
        $this->_name = $name;
        $this->_adress = $adress;
        $this->_postcode = $postcode;
        $this->_city = $city;
        $this->_country = $country;
        $this->_spa = $spa;
        $this->_restaurant = $restaurant;
        $this->_rooms = []; //On définis le tableau rooms comme vide (en ne mettant rien dans les [])
    }

    //Getter et Setter
    /* Nom de l'hôtel */
    public function getName() {
        return $this->$_name;
    }
    public function setName() {
        $this->_name = $name;
    }

    /* Adress */
    public function getAdress() {
        return $this->$_adress;
    }
    public function setAdress() {
        $this->_adress = $adress;
    }

    /* Postcode */
    public function getPostcode() {
        return $this->$_postcode;
    }
    public function setPostcode() {
        $this->_postcode = $postcode;
    }

    /* City */
    public function getCity() {
        return $this->$_city;
    }
    public function setCity() {
        $this->_city = $city;
    }

    /* Country */
    public function getCountry() {
        return $this->$_country;
    }
    public function setCountry() {
        $this->_country = $country;
    }

    /* Spa */
    public function getSpa() {
        return $this->$_spa;
    }
    public function setSpa() {
        $this->_spa = $spa;
    }

    /* Restaurant */
    public function getRestaurant() {
        return $this->$_restaurant;
    }
    public function setRestaurant() {
        $this->_restaurant = $restaurant;
    }

    //Méthodes
    public function addRoom(Room $room){ //On crée la fonction pour ajouter chaque nouvelle chambre dans le tableau de l'hôtel correspondant. On va mettre la variable $room de la classe Room en paramètre, ainsi lorsqu'on y fera appel dans le constructor de Room il $this indiquera que la chambre qui est entrain d'être crée devra être ajouter dans le tableau
        $this->_rooms[] = $room; //Dans cet hôtel ($this) on va ajouter la nouvelle chambre dans le tableau rooms
    }

    public function showRooms() {
        $result = "";
        foreach($this->_rooms as $room) {
            $result .= $room . "<br>";
        }
        return $result;
    }

    public function nbRooms() { //On calcule le nombre de chambres dans le tableau rooms puis on affiche le total
//        $nbRooms = count($_rooms);
//        return $nbRooms;
    }
    
    public function nbReservedRooms() { //On compte le nombres de chambres avec le status "reservé"

    }
    
    public function nbFreeRooms() { //On compte le nombre de chambres avec le status "libre"

    }

    public function reservationCount() {
        //Un hôtel va accéder aux tableaux de réservations de chaque chambre lui appartenant, pour compter le nombre de chambre et faire le total des réservations
        foreach($this->_rooms as $room) {
           
            foreach($room->getReservations as $reservation){

                print $reservation;
            }
        }
    }

    //Méthode magique : toString
    public function __toString() {
        return  "Hôtel " . $this->_name . " à "  . $this->$_adress . ", " . $this->$_city . ", " . $this->$_postcode . ", " . $this->$_country . "<br>"; 
    }
}