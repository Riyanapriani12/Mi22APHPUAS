<?php
     /**
     * NIM : 2257401026
     * NAMA : riyan apriani
     * KELAS MI22A
     */ 
    session_start();
    session_destroy();
    session_unset();

    header('location:login.php');
?>