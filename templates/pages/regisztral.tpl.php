<div class="tartalom1">
<?php if(isset($uzenet)) { ?>
    <div class="alert alert-primary" role="alert"><?= $uzenet ?></div>
    <?php if($ujra) { ?>
        <a href="?oldal=belepes" class="btn btn-danger" role="button">Próbálja újra!</a>
    <?php } ?>
<?php } ?>
</div>