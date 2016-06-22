<?php
class Address{

	private $street;
	private $CEP;
	private $number;
	private $district;
	private $city;
	private $state;


	public function __construct($street=null, $CEP=null, $number=null, $district=null, $city=null, $state=null)
	{
		$this->street = $street;
		$this->CEP = $CEP;
		$this->number = $number;
		$this->district = $district;
		$this->city = $city;
		$this->state = $state;
	}

	
    public function getStreet(){
        return $this->street;
    }

    public function setStreet($street){
        $this->street = $street;
    }
    public function getCEP(){
        return $this->CEP;
    }

    public function setCEP($CEP){
        $this->CEP = $CEP;
    }

    public function setNumber($number){
        $this->number = $number;
    }
    
    public function getNumber(){
        return $this->number;
    }

    public function setDistrict($district){
        $this->district = $district;
    }
    
    public function getDistrict(){
        return $this->district;
    }

    public function setCity($city){
        $this->city = $city;
    }

    
    public function getCity(){
        return $this->city;
    }

    public function setState($state){
        return $this->state = $state;
    }

    public function getState()
    {
        return $this->state;
    }
}
?>