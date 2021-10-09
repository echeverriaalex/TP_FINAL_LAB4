<?php
    namespace Controllers;

    class HomeController{

        public function viewHomeAdmin(){
       
            if($this->adminIsLogged()){
      
                require_once(VIEWS_PATH."header.php");
                require_once(VIEWS_PATH."nav-admin.php");
                require(VIEWS_ADMIN_PATH.'index.php');
                require_once(VIEWS_PATH."footer.php");
            }else{
              echo '<script>alert("No tiene acceso para entrar en esta pagina");</script>';
              $this->Index();
            }
         
        }

        //============================================================
        //=========================== HOME ===========================
        //============================================================
        public function Index()
        {
            require_once(VIEWS_PATH."header.php");
            require_once(VIEWS_PATH."nav.php");
            //require(VIEWS_PATH."signUp.php");
            require(VIEWS_PATH."home.php");
            //require(VIEWS_PATH."signIn.php");
            require_once(VIEWS_PATH."footer.php");
        }    

        //============================================================
        //=========================== LOGIN ==========================
        //============================================================
        public function viewSignIn()
        {
            require_once(VIEWS_PATH."header.php");
            require_once(VIEWS_PATH."nav.php");
            require(VIEWS_PATH."signIn.php");
            require_once(VIEWS_PATH."footer.php");
        }      
        
        public function viewSignUp()
        {
            require_once(VIEWS_PATH."header.php");
            require_once(VIEWS_PATH."nav.php");
            require(VIEWS_PATH."signUp.php");
            require_once(VIEWS_PATH."footer.php");
        }
        
        
        public function viewProfile()
        {
            require_once(VIEWS_PATH."header.php");
            require(VIEWS_PATH."profile.php");
            require_once(VIEWS_PATH."footer.php");
        }   

    }
?>