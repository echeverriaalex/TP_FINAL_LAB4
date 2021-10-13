<?php
    namespace Controllers;
    use DAO\CareerDAO;

    class CareerController{

        private $careerDAO;

        public function __construct(){$this->coreerDAO = new CareerDAO();}

        public function ShowListView(){

            $careerList = $this->careerDAO->GetAll();
            require_once(VIEWS_PATH."career-list.php");
        }
    }
?>