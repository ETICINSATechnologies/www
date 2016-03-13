<?php 

session_start(); 

// ajout du header à la page
echo file_get_contents("../header/header.php");

?>
<form method="post" action="">
    .. form elements
    
    <div>
        <?php
            require_once '../securimage/securimage.php';
            echo Securimage::getCaptchaHtml();
        ?>
    </div>
</form>

