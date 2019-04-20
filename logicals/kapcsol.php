<?php
if(isset($_POST['email']) && isset($_POST['targy']) && isset($_POST['szoveg'])) 
{
    if(!empty($_POST['email']) && !empty($_POST['targy']) && !empty($_POST['szoveg']) && strpos($_POST['email'], '@') !== false)
    {
        try 
        {
            $dbh = new PDO('mysql:host=localhost;dbname=gyakorlat7', 'root', 'root',
                            array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
            $dbh->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');
            
            $sqlInsert = "insert into email(id, email, targy, szoveg)
                            values(0, :email, :targy, :szoveg)";
            $stmt = $dbh->prepare($sqlInsert); 
            $stmt->execute(array(':email' => $_POST['email'], ':targy' => $_POST['targy'],
                                    ':szoveg' => $_POST['szoveg'])); 
            if($count = $stmt->rowCount()) {
                $newid = $dbh->lastInsertId();
                $uzenet = '<div class="alert alert-success" role="alert">Az email küldése sikeres volt!</div>'.
                '<div class="alert alert-info" role="alert">'."<strong>Email</strong><br> ". $_POST["email"]."<br><strong>Tárgy</strong><br> ".$_POST["targy"]."<br><strong>Üzenet</strong><br>".$_POST["szoveg"].'</div>';                     
                $ujra = false;
            }
            else {
                $uzenet = "Az email küldés sikerestelen.";  
                $ujra = true;
            }
            
        }
        catch (PDOException $e) {
            $uzenet = "Hiba: ".$e->getMessage();
            $ujra = true;
        }   
    }
    else
    {
        $uzenet = "Hiba: Nem megfelelően töltötted ki a mezőket";
        $ujra = true;
    }   
}
?>

