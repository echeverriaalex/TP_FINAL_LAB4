<?php
    namespace Models;

    class Company{

        private $address;
        private $phone;
        private $cuit;
        private $name;

        public function __construct($address= '', $phone= '', $cuit= '', $name= ''){

            $this->setAddress($address);
            $this->setPhone($phone);
            $this->setCuit($cuit);
            $this->setName($name);
        }

        public function setAddress($address){$this->address = $address;}
        public function getAddress(){return $this->address;}

        public function setPhone($phone){$this->phone = $phone;}
        public function getPhone(){return $this->phone;}

        public function setCuit($cuit){$this->cuit = $cuit;}
        public function getCuit(){return $this->cuit;}

        public function setName($name){$this->name = $name;}
        public function getName(){return $this->name;}
    }
?>