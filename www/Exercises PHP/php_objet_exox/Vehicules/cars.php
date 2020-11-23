<?php

/**
 * creation de la class cars avec constructeur 
 * 
 * 
 */

class Cars
{
    protected $_im_car;
    protected $_car_name;
    protected $_car_model;
    protected $_car_weight;


    public function __construct($car_name, $car_model, $car_weight)
    {
        $this->_car_name = $car_name;
        $this->_car_model = $car_model;
        $this->_car_weight = $car_weight;
    }



    public function infoCar()
    {
    }


    // getter
    public function getcar_name($car_name)
    {

        $this->_car_name = $car_name;
    }
    public function getcar_model($car_model)
    {

        $this->_car_model = $car_model;
    }
    public function getcar_weight($car_weight)
    {

        $this->_car_weight = $car_weight;
    }


    //setter
    public function setcar_name($car_name)
    {
    }
    public function setcar_model($car_model)
    {
    }
    public function setcar_weight($car_weight)
    {
    }
}
