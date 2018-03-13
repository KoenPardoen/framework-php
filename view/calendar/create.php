
<form class="inputBirthday" method="post" action="postCreate"  >
  <h1>Naam</h1>
  <input type="text" placeholder="Naam" name="person" required>
  <h1 id="date">Datum</h1>
  <input type="number" name="day" placeholder="Dag" min="1" max="31" required>
  <select name="month">
  <option value="1">Januari</option>
  <option value="2">Februari</option>
  <option value="3">Maart</option>
  <option value="4">April</option>
  <option value="5">Mei</option>
  <option value="6">Juni</option>
  <option value="7">Juli</option>
  <option value="8">Augustus</option>
  <option value="9">September</option>
  <option value="10">Oktober</option>
  <option value="11">November</option>
  <option value="12">December</option>
</select>
  <input type="number" name="year" placeholder="Jaar" min="1900" max="<?php echo date("Y");?>" required><br>
  <input type="submit" value="Toevoegen">
</form>
