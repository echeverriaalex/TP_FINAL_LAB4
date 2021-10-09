<nav class="navbar navbar-expand-lg  navbar-dark bg-dark">
     <span class="navbar-text">
          <a href="<?php echo FRONT_ROOT?>Home/Index"> Home </a>
     </span>
     <ul class="navbar-nav ml-auto">
          <li class="nav-item">
               <a class="nav-link" href="<?php echo FRONT_ROOT ?>Company/ShowAddView">Add company </a>
          </li>
          <li class="nav-item">
               <a class="nav-link" href="<?php echo FRONT_ROOT ?>Company/ShowEditView">Edit company</a>
          </li>
          <li>
               <a class="nav-link" href="<?php echo FRONT_ROOT ?>Company/ShowDeleteView">Delete company</a>
          </li>
          <?php if(isset($_SESSION['userLog'])) { ?>
                           <div class="col-xl-2 col-lg-2 col-md-3">
                               <div class="header-right-btn f-right d-none d-lg-block">
                                   <a href="<?= FRONT_ROOT?>Student/logout" class="btn header-btn">Log Out</a>
                               </div>
                           </div>
          <?php	} ?>
     </ul>
</nav>