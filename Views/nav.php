<nav class="navbar navbar-expand-lg  navbar-dark bg-dark">
     <span class="navbar-text">
          <a href="<?php echo FRONT_ROOT?>Home/Index"> Home </a>
     </span>
     <ul class="navbar-nav ml-auto">
          <li class="nav-item">
               <a class="nav-link" href="<?php echo FRONT_ROOT ?>Student/ShowAddView">Add Student</a>
          </li>
          <li class="nav-item">
               <a class="nav-link" href="<?php echo FRONT_ROOT ?>Student/ShowListView">List Student</a>
          </li>
          <li>
               <a class="nav-link" href="<?php echo FRONT_ROOT ?>Student/ShowMyProfile">My profile</a>
          </li>
          <li>
               <a class="nav-link" href="<?php echo FRONT_ROOT ?>Company/ShowListView">List companies</a>
          </li>
     </ul>
     <?php
          include_once "search-bar.php";
     ?>
</nav>