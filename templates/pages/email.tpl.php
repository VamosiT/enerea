<div class="tartalom1">
    <h2><i class="fa fa-envelope" aria-hidden="true"></i> Emailek</h2>
</div>
<?php
    try {
        require_once("includes/sql.inc.php");
        
        // Felhsználó keresése
        $sqlSelect = "select * from email";
        $sth = $dbh->prepare($sqlSelect);
        $sth->execute();
        //$row = $sth->fetch(PDO::FETCH_ASSOC);
        $i=0;
        while($row = $sth->fetch(PDO::FETCH_ASSOC)) {
            $i++;
            if($i%2==0)
                echo '<div class="tartalom1">';
            else
            echo '<div class="tartalom2">';
            echo "<strong>Email cím<br></strong>".$row["email"] . "<br>" . "<strong>Tárgy</strong><br> ". $row["targy"] . "<br>". "<strong>Üzenet</strong><br>" . $row["szoveg"] . "<br></div>";
        }
    }
    catch (PDOException $e) {
        $errormessage = "Hiba: ".$e->getMessage();
    }      
?>