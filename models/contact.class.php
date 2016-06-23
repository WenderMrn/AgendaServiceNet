<?php
class Contact implements JsonSerializable{

    private $id;
    private $iduser;
    private $name;
    private $phone;
	private $street;
	private $CEP;
	private $number;
	private $district;
	private $city;
	private $state;


	public function __construct($name=null,$phone=null,$street=null, $CEP=null, $number=null, $district=null,$city=null, $state=null)
	{
        $this->name = $name;
        $this->phone = $phone;
		$this->street = $street;
		$this->CEP = $CEP;
		$this->number = $number;
		$this->district = $district;
		$this->city = $city;
		$this->state = $state;
	}


    public function getIduser(){
       return $this->iduser; 
    }

    public function setIduser($iduser){
       $this->iduser = $iduser; 
    }

    public function getId(){
       return $this->id; 
    }

    public function setId($id){
       $this->id = $id; 
    }

    public function setName($name){
        $this->name = $name;
    }

    public function getName(){
        return $this->name;
    }

    public function setPhone($phone){
        $this->phone = $phone;
    }
   
    public function getPhone(){
        return $this->phone;
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

    public function jsonSerialize () {
        return array(
        'id'=> $this->id,
        'iduser'=> $this->iduser,   
        'name'=> $this->name,
        'phone'=> $this->phone,
        'street'=> $this->street,
        'CEP'=> $this->CEP,
        'number'=> $this->number,
        'district'=> $this->district,
        'city'=> $this->city,
        'state'=> $this->state
        );
    }
}
?>