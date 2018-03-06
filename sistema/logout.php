<?php

session_start();

if(isset($_SESSION['sessao'])){
    session_destroy();
}

header("Location: ../index.php");