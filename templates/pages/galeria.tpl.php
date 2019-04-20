<?php
    include('includes/galeria.inc.php');
    
    $kepek = array();
    $olvaso = opendir($MAPPA);
    while (($fajl = readdir($olvaso)) !== false) {
        if (is_file($MAPPA.$fajl)) {
            $vege = strtolower(substr($fajl, strlen($fajl)-4));
            if (in_array($vege, $TIPUSOK)) {
                $kepek[$fajl] = filemtime($MAPPA.$fajl);
            }
        }
    }
    closedir($olvaso);
?>
<br>
<div id="galeria">
<h1>
<i class="fa fa-camera" aria-hidden="true"></i>
    Galéria
</h1>
<?php
arsort($kepek);
foreach($kepek as $fajl => $datum)
{
?>
    <div class="kep">
        <a href="<?php echo $MAPPA.$fajl ?>" target="_blank">
            <img src="<?php echo $MAPPA.$fajl ?>">
        </a>            
        <p>Név:  <?php echo $fajl; ?></p>
        <p>Dátum:  <?php echo date($DATUMFORMA, $datum); ?></p>
    </div>
<?php
}
?>
<br>
<a href="?oldal=feltolt" class="btn btn-info" role="button">Képfeltöltés</a>
<br>
<br>

</div>

