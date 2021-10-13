<?php
    namespace DAO;
    use Models\Career;

    class CareerDAO{

        private $careerList = array();

        public function GetAll(){

            $this->RetrieveDataAPI();
            return $this->careerList;
        }

        public function RetrieveDataAPI(){

            $opt = array(
                    "http"=> array(
                            "method" => "GET",
                            "header" => "x-api-key: 4f3bceed-50ba-4461-a910-518598664c08\r\n"
                )
            );
    
            $ctx = stream_context_create($opt);
            $jsonContent = file_get_contents('https://utn-students-api.herokuapp.com/api/Career', false, $ctx);
    
            $this->careerList = array();
            $arrayToDecode = ($jsonContent)? json_decode($jsonContent, true) : array ();
    
            foreach($arrayToDecode as $valuesArray){

                $career = new Career($valuesArray['careerId'], $valuesArray['description'], $valuesArray['active']);
                array_push($this->careerList, $career);
            }
        }

    }
?>