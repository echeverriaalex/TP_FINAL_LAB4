<?php
    namespace Models;

    use Models\Person as Person;

    class Student extends Person
    {        
        private $studentId;
        private $carrerId;
        private $fileNumber;
        private $active;

        public function __construct($name='', $surname='', $dni='', $phone='', $gender='', $birthDate='', $email='', $studentId='', $carrerId='', $fileNumber='', $active=''){

            parent::__construct($name,$surname, $dni, $phone, $gender, $birthDate, $email);
            $this->setStudentId($studentId);
            $this->setCarrerId($carrerId);
            $this->setFileNumber($fileNumber);
            $this->setActive($active);
        }
    
        public function getStudentId(){return $this->studentId;}
        public function setStudentId($studentId){$this->studentId = $studentId;}

        public function getCarrerId(){return $this->carrerId;}
        public function setCarrerId($carrerId){$this->carrerId = $carrerId;}

        public function getFileNumber(){return $this->fileNumber;}
        public function setFileNumber($fileNumber){$this->fileNumber = $fileNumber;}

        public function getActive(){return $this->active;}
        public function setActive($active){$this->active = $active;}
    }
?>