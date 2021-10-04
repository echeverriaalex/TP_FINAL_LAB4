<?php
    namespace DAO;

    use DAO\ICompanyDAO;
    use Models\Company;

    class CompanyDAO implements ICompanyDAO{

        private $companyList = array();

        public function Add(Company $company){

            $this->RetrieveData();
            array_push($this->companyList, $company);
            $this->SaveData();
        }

        public function GetAll(){
            
            $this->RetrieveData();
            return $this->companyList;
        }
        
        private function SaveData(){

            $arrayToEncode = array();

            foreach($this->companyList as $company){

                $valuesArray['address'] = $company->getAddress();
                $valuesArray['phone'] = $company->getPhone();
                $valuesArray['cuit'] = $company->getCuit();
                $valuesArray['name'] = $company->getName();
                array_push($arrayToEncode, $valuesArray);
            }

            $jsonContent = json_encode($arrayToEncode, JSON_PRETTY_PRINT);
            file_put_contents('Data/companies.json', $jsonContent);
        }

        private function RetrieveData(){

            $this->companyList = array();

            if(file_exists('Data/companies.json')){

                $jsonContent = file_get_contents('Data/companies.json');
                $arrayToDecode = ($jsonContent)? json_decode($jsonContent, true) : array();

                foreach($arrayToDecode as $valuesArray){

                    $company = new Company();
                    $company->setAddress($valuesArray['address']);
                    $company->setPhone($valuesArray['phone']);
                    $company->setCuit($valuesArray['cuit']);
                    $company->setName($valuesArray['name']);
                    array_push($this->companyList, $company);
                }
            }            
        }
    }
?>