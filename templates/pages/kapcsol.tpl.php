<div class="tartalom1">
<?php if(isset($uzenet)) { ?>
    <?= $uzenet ?>
    <?php if($ujra) { ?>
        <div class="alert alert-danger" role="alert"> <a href="?oldal=kapcsolat">Próbálja újra!</a></div>
    <?php } ?>
<?php } ?>
</div>