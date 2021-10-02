<?php
    require_once "nav.php";
    use DAO\StudentDAO;

    $StudentDAO = new StudentDAO();
    $students = $StudentDAO->GetAll();

?>

<div>

    <?php
        foreach($students as $student){
    ?>      
    <main class="py-5">
        <section id="listado" class="mb-5">
            <div class="container">
    
                <div class="col-lg-4">
                    <h2> <?php echo $student->getName()." ".$student->getSurname(); ?> </h2>
                    
                </div>

                <div>
                    <a href="<?php echo FRONT_ROOT ?>Student/EditProfile">Edit profile</a>
                </div>

                <div class="col-lg-4">
                    <a> Phone  <?php echo $student->getPhone(); ?> </a>
                </div>

                <div class="col-lg-4">
                    <a> DNI <?php echo $student->getDNI();?></a>
                </div>

                <div class="col-lg-4">
                    <a> ID <?php echo $student->getId();?></a>
                </div>
            </div>
        </section>    
    </main>

    <?php
        }
    ?>
</div>