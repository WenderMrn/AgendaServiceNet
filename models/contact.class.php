<?php
class Contact{
	private $name;
	private $phone;
	private $address;

	public function __construct($name=null, $phone=null, $address=null){
		$this->name = $name;
		$this->phone = $phone;
		$this->address = $address;
	}

	public function setName($name){
        $this->name;
    }

    public function getName(){
        return $this->name;
    }

    public function setPhone($phone){
        $this->phone;
    }
   
    public function getPhone(){
        return $this->phone;
    }

    public function setAddress($address){
        return $this->address;
    }
    
    public function getAddress(){
        return $this->address;
    }
}
?>