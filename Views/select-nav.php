<?php
    if( true /* si usuario es admin*/  )
        require_once(VIEWS_PATH."nav-admin.php");
    else
        require_once(VIEWS_PATH."nav.php");
?>