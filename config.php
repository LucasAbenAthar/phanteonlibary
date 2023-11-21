<?php
    define('HOST', 'localhost');
    define('USER', 'root');
    define('PASS', '');
    define('BASE', 'biblioteca');
 
    $conn = new mysqli(HOST, USER, PASS, BASE);

    function alert(string $message): void {
        echo '<script> alert("'. $message .'")</script>';
    }
    
    function redirect(string $url): void {
        echo "<script> location.href = '$url'; </script>";
    }
?>
