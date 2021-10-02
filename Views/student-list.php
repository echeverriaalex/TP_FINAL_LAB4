<?php
    require_once('nav.php');
?>
<main class="py-5">
     <section id="listado" class="mb-5">
          <div class="container">
               <h2 class="mb-4">Students list </h2>
               <table class="table bg-light-alpha">
                    <thead>
                         <th>ID</th>
                         <th>Name</th>
                         <th>Surname</th>
                         <th>DNI</th>
                         <th>Phone</th>
                    </thead>
                    <tbody>
                         <?php
                              foreach($studentList as $student){
                         ?>
                                   <tr>
                                        <td><?php echo $student->getId(); ?></td>
                                        <td><?php echo $student->getName(); ?></td>
                                        <td><?php echo $student->getSurname(); ?></td>
                                        <td><?php echo $student->getDni(); ?></td>
                                        <td><?php echo $student->getPhone(); ?></td>
                                    </tr>
                         <?php
                              }
                         ?>
                         </tr>
                    </tbody>
               </table>
          </div>
     </section>
</main>