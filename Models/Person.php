<?php
    namespace Models;

    class Person
    {
        private $name;
        private $surname;
        private $dni;
        private $phone;

        public function __construct($name='', $surname='', $dni='', $phone=''){

            $this->setName($name);
            $this->setSurname($surname);
            $this->setDni($dni);
            $this->setPhone($phone);
        }

        public function getName(){return $this->name;}
        public function setName($name){$this->name = $name;}

        public function getSurname(){return $this->surname;}
        public function setSurname($surname){$this->surname = $surname;}

        public function getDni(){return $this->dni;}
        public function setDni($dni){$this->dni = $dni;}

        public function getPhone(){return $this->phone;}
        public function setPhone($phone){$this->phone = $phone;}
    }
?>