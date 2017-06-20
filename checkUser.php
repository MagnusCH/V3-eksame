<?php
// Henter informationer fra form
//her er de variabler som indenholder de informationer som brugerne indtaster
$formUsername = $_POST['formUsername'];
$formPassword = $_POST['formPassword'];

// laver en forbindelse over til connect.php/databasen
require_once "connect.php";

//så kigger den alle brugere igennem for at se om $formUsername matcher med oplysninger i databasen
// Hent de brugere ud som lige er blevet indtastet
$statement = $DBH->prepare("SELECT * FROM users WHERE dbUsername=?");
$statement->bindParam(1, $formUsername);
$statement->execute();

//Her bliver der lavet et array som indenholder alle de brugere der passer med det indtastede brugernavn
//fetchALL metode hiver alle rækkerne ud af $statement og lager dem i $rows
$rows = $statement->fetchAll(PDO::FETCH_ASSOC);


//hvis brugeren ikke findes altså bruger nav er forkert siger den echo, og går tilbage til index.php
if(empty($rows)){
    echo "<h1>Kan ikke finde bruger!<br>
    Prøv igen. Hvis du er en robot prøv ikke igen!</h1>";
    header("Refresh:3; url=loginsite.php");
}

// Vi kommer ind i else hvis brugernavn passer
else{
//Der findes brugere med det samme brugernavn nu skal PW testes
    //Kør et loop der tester hver række om dbPassword matcher formPassword til det brugernavn der er indtastet
    //For hver række trækker vi en række ud og ser om den passer
    foreach($rows as $row){
        if($row['dbPassword'] == $formPassword){            
        
            //starter en session hvor man kan lagere forskellige værdier i
            //Session starter
            session_start();
            // i min session vil jeg lagere et username som skal være lig med det brugeren har indtastet
            $_SESSION['username'] = $formUsername;
                      
            //Hvis password også passer kommer vi tilbage til index.php
            header("location: index.php");
            
        }
    }
    //Kommer her ned hvis password ikke passer
    echo "<h1>Ikke korrekt password!<br>
    Prøv igen. Hvis du er en robot prøv ikke igen!</h1>";
    header("Refresh:3; url=loginsite.php");
}

$DBH = null;
?>