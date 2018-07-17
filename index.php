<?php

   $view = empty($_GET['view']) ? 'index2' : $_GET['view'];
   include($view.'.php');

?>