<?php
    namespace Models;

    class Person
    {
        private $name;
        private $surname;
        private $dni;
        private $phone;
        private $gender;
        private $birthDate;
        private $email;

        public function __construct($name='', $surname='', $dni='', $phone='', $gender='', $birthDate='', $email=''){

            $this->setName($name);
            $this->setSurname($surname);
            $this->setDni($dni);
            $this->setPhone($phone);
            $this->setGender($gender);
            $this->setBirthDate($birthDate);
            $this->setEmail($email);
        }

        public function getName(){return $this->name;}
        public function setName($name){$this->name = $name;}

        public function getSurname(){return $this->surname;}
        public function setSurname($surname){$this->surname = $surname;}

        public function getDni(){return $this->dni;}
        public function setDni($dni){$this->dni = $dni;}

        public function getPhone(){return $this->phone;}
        public function setPhone($phone){$this->phone = $phone;}

        public function getGender(){return $this->gender;}
        public function setGender($gender){$this->gender = $gender;}
        
        public function getBirthDate(){return $this->birthDate;}
        public function setBirthDate($birthDate){$this->birthDate = $birthDate;}

        public function getEmail(){return $this->email;}
        public function setEmail($email){$this->email = $email;}
    }
?>