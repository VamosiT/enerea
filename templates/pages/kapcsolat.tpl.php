<div class="tartalom1">
    <form action="?oldal=kapcsol" method="post" class="form-group">

            <h2><i class="fa fa-envelope" aria-hidden="true"></i> Email küldés</h2>
            <br>
            <label>Email:</label>
            <input type="email" name="email" required class="form-control"><br>
            <label>Tárgy:</label>
            <input type="text" name="targy" required class="form-control"><br>
            <label>Üzenet:</label>
            <textarea name="szoveg" id="szoveg" cols="30" rows="10" required class="form-control"></textarea><br>
            <input type="submit" name="belepes" value="Küldés" class="btn btn-primary">

    </form>
</div>
<div class="tartalom2">
    <h2>Az elküldött emailek lista itt található: </h2>
<h3><a href="?oldal=email" target="_blank" class="btn btn-primary">Email lista</a></h3>
</div>