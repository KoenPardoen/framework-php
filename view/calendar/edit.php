  <h1>Edit</h1>
  <form action="<?= URL ?>calendar/editSave" method="post">
  <input type="text" placeholder="Naam" name="person" value="<?= $birthday["person"]?>" required>
  <input type="number" name="day" placeholder="Dag" min="1" max="31" value="<?= $birthday["day"]?>">
  <select name="month">
      <option <?php if($birthday["month"] == "1") { ?> selected <?php } ?> value="1">Januari</option>
      <option <?php if($birthday["month"] == "2") { ?> selected <?php } ?> value="2"> Februari</option>
      <option <?php if($birthday["month"] == "3") { ?> selected <?php } ?> value="3"> Maart</option>
      <option <?php if($birthday["month"] == "4") { ?> selected <?php } ?> value="4"> April</option>
      <option <?php if($birthday["month"] == "5") { ?> selected <?php } ?> value="5"> Mei</option>
      <option <?php if($birthday["month"] == "6") { ?> selected <?php } ?> value="6"> Juni</option>
      <option <?php if($birthday["month"] == "7") { ?> selected <?php } ?> value="7"> Juli</option>
      <option <?php if($birthday["month"] == "8") { ?> selected <?php } ?> value="8"> Augustus</option>
      <option <?php if($birthday["month"] == "9") { ?> selected <?php } ?> value="9"> September</option>
      <option <?php if($birthday["month"] == "10") { ?> selected <?php } ?> value="10"> Oktober</option>
      <option <?php if($birthday["month"] == "11") { ?> selected <?php } ?> value="11"> November</option>
      <option <?php if($birthday["month"] == "12") { ?> selected <?php } ?> value="12"> December</option>
  </select>
  <input type="number" name="year" placeholder="Jaar" min="1900" max="<?php echo date("Y");?>" value="<?= $birthday["year"]?>" required><br>
  <input type="hidden" name="id" value="<?= $birthday['id']; ?>">
  <input type="submit" value="Verzenden">
  
  </form>