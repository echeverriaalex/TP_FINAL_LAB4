<?php
    namespace Controllers;

    use DAO\StudentDAO as StudentDAO;
    use Models\Student as Student;

    class StudentController
    {
        private $studentDAO;

        public function __construct(){$this->studentDAO = new StudentDAO();}

        public function ShowAddView(){
            require_once(VIEWS_PATH."student-add.php");
        }

        public function ShowListView(){

            $studentList = $this->studentDAO->GetAll();
            require_once(VIEWS_PATH."student-list.php");
        }

        public function ShowMyProfile(){


            require_once(VIEWS_PATH."profile.php");
        }

        public function EditProfile(){

            require_once(VIEWS_PATH."edit-profile.php");

        }

        public function Add($name, $surname, $dni, $phone, $id){

            //$student = new Student($name, $surname, $dni, $phone, $id);

            $student = new Student();
            $student->setName($name);
            $student->setSurname($surname);
            $student->setDni($dni);
            $student->setPhone($phone);
            $student->setId($id);

            $this->studentDAO->Add($student);
            $this->ShowAddView();
        }
    }
?>