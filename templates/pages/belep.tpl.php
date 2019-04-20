<div class="tartalom1">
    <?php if(isset($row)) { ?>
        <?php if($row) { ?>
            <div class="alert alert-success" role="alert">
                <i class="fa fa-user" aria-hidden="true"></i> A bejelentkezés sikeres volt!</h1>
            </div>
            <div class="alert alert-light" role="alert">
            Azonosító: <strong><?= $row['id'] ?></strong><br><br>
            Név: <strong><?= $row['csaladi_nev']." ".$row['uto_nev'] ?></strong>
            </div>
        <?php } else { ?>
            <div class="alert alert-danger" role="alert">A bejelentkezés nem sikerült!</div>
            <a href="?oldal=belepes" class="btn btn-danger" role="button">Próbálja újra!</a>
        <?php } ?>
    <?php } ?>
    <?php if(isset($errormessage)) { ?>
        <h2><?= $errormessage ?></h2>
    <?php } ?>
</div>