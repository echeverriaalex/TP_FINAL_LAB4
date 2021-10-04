<?php
    namespace Controllers;
    use DAO\CompanyDAO;
    use Models\Company;

    class CompanyController{

        private $companyDAO;

        public function __construct(){$this->companyDAO = new CompanyDAO();}

        public function ShowAddView(){

            require_once(VIEWS_PATH."company-add.php");
        }

        public function ShowListView(){

            $companyList = $this->companyDAO->GetAll();
            require_once(VIEWS_PATH."company-list.php");
        }

        public function Add($name, $address, $cuit, $phone, $id){

            $company = new Company($address, $phone, $cuit, $name);
            $this->companyDAO->Add($company);
            $this->showAddView();
        }
    }
?>