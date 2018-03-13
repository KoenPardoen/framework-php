<?php
      $month = [' ', 'Januari','Februari','Maart','April','Mei','Juni','Juli','Augustus','September','Oktober','November','December'];
      $index = 0;
      $day = 0;
    foreach ($birthdays as $birthday) {
        if ($birthday[month] != $index) {
             $index = $birthday[month];
             echo "<h1>$month[$index]</h1>";
         }
         if ($birthday[day] != $day) {
             $day = $birthday[day];
             echo "<h2>$day</h2>";
         }
?>
<p>
    <a href="calendar/edit/<?php echo $birthday[id];?>"><?php echo $birthday['person'];?> (<?php echo $birthday['year'];?>)</a>
  <a href="calendar/delete/<?php echo $birthday[id];?>">x</a>
</p>
<?php }
 ?>
<p><a href="<?= URL ?>calendar/create">+ Toevoegen</a></p
