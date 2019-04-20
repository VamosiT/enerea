    <form action = "?oldal=belep" method = "post">
      <div class="tartalom1">
        <div class="form-group" style="width:400px;">
          <legend><i class="fa fa-user" aria-hidden="true"></i> Bejlentkezés</legend>
          <br>
          <label>Felhasználó név:</label>
          <input type="text" name="felhasznalo" class="form-control" required><br>
          <label>Jelszó:</label>
          <input type="password" name="jelszo"  class="form-control" required><br>
          <input type="submit" name="belepes" class="btn btn-primary" value="Belépés">
          
        </div>
      </div>
    </form>


    <form action = "?oldal=regisztral" method = "post">
      <div class="tartalom2">
        <div class="form-group" style="width:400px;">
          <legend><i class="fa fa-user-plus" aria-hidden="true"></i> Regisztráció</legend>
          <br>
          <label>Vezeteknév:</label>
          <input type="text" name="vezeteknev" class="form-control" required><br>
          <label>Keresztnév:</label>
          <input type="text" name="utonev" class="form-control" required><br>
          <label>Felhasználó név:</label>
          <input type="text" name="felhasznalo" class="form-control" required><br>
          <label>Jelszó</label>
          <input type="password" name="jelszo" class="form-control" required><br>
          <input type="submit" name="regisztracio" value="Regisztráció" class="btn btn-primary">
        </div>
      </div>
    </form>
