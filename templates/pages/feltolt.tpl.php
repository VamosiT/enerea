<?php
    // Alkalmazás logika:
    include('includes/galeria.inc.php');
    $uzenet = array();   

    // Űrlap ellenőrzés:
    if (isset($_POST['kuld'])) {
        //print_r($_FILES);
        foreach($_FILES as $fajl) {
            if ($fajl['error'] == 4);   // Nem töltött fel fájlt
            elseif (!in_array($fajl['type'], $MEDIATIPUSOK))
                $uzenet[] = " Nem megfelelő típus: " . $fajl['name'];
            elseif ($fajl['error'] == 1   // A fájl túllépi a php.ini -ben megadott maximális méretet
                        or $fajl['error'] == 2   // A fájl túllépi a HTML űrlapban megadott maximális méretet
                        or $fajl['size'] > $MAXMERET) 
                $uzenet[] = " Túl nagy állomány: " . $fajl['name'];
            else {
                $vegsohely = $MAPPA.strtolower($fajl['name']);
                if (file_exists($vegsohely))
                    $uzenet[] = " Már létezik: " . $fajl['name'];
                else {
                    move_uploaded_file($fajl['tmp_name'], $vegsohely);
                    $uzenet[] = ' Ok: ' . $fajl['name'];
                }
            }
        }        
    }
    // Megjelenítés logika:
?>
    <style type="text/css">
        label { display: block; }
    </style>
<div class="tartalom1">
<h1><i class="fa fa-upload" aria-hidden="true"></i>Feltöltés a galériába</h1>
</h1>
</div>
<div class="tartalom2">
    <?php
        if (!empty($uzenet))
        {
            foreach($uzenet as $u)
                echo '<div class="alert alert-primary" role="alert">'."$u".'</div>';
        }
    ?>
    <div style="width:500px;">
    <form action="?oldal=feltolt" method="post" enctype="multipart/form-data">
        <label>Első:
            <input type="file" name="elso" class="form-control" required>
        </label>
        <label>Második:
            <input type="file" name="masodik" class="form-control" >
        </label>
        <label>Harmadik:
            <input type="file" name="harmadik" class="form-control" >
        </label>        
        <input type="submit" name="kuld" class="btn btn-success">
        </form> 
    </div>   
</div>