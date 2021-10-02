<?php
    namespace Models;

    use Models\Person as Person;

    class Student extends Person
    {        
        private $id;

        public function __construct($name='', $surname='', $dni='', $phone='', $id = ''){
            parent::__construct($name,$surname, $dni, $phone);
            $this->setId($id);
        }

        public function getId(){return $this->id;}
        public function setId($id){$this->id = $id;}
    }
?>