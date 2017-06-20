<?php 
//starter session
session_start();
//tjekker om logout findes
if(isset($_GET['logout'])){    
//tjekker om logout er true
if($_GET['logout']==true){
    //Hvis logud er true ødelægger vi session og kommer tilbage til index.php
   session_destroy();
    header("location: index.php");
} else {
    echo "Fejl";
}
}
?>