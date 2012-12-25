<!DOCTYPE html>
<html>
<head>
<title>40-per-row Random Decimal Numbers for Synesthesia Training</title>
<meta name="robots" content="noindex,nofollow">
<style>

</style>
</head>
<body>

<h1>40-per-row Random Decimal Number Generator (Synesthesia Version)</h1>
<p>Random digits colorized for synesthesia experimentation. See <a href="http://mnemotechnics.org/forums/synesthesia-training-program-letters-and-numbers-3005.html">this post</a> for details. Reload the page (F5) to reset the numbers. Or try the other <a href="/training">memory training scripts</a>.</p>
<p style="font-size:1.4em; font-family:Arial,Helvetica,sans-serif;">
<?php
for ($x = 0; $x <25; $x++) {
  for ($i = 0; $i <= 39; $i++) {
    $mnem_digit = mt_rand(0, 9);
    switch ($mnem_digit) {
    case 0:
      echo "<span style='color:#ffffff;text-shadow: #666 0.03em 0.03em 0.09em'>$mnem_digit</span>";
      break;
    case 1:
      echo "<span style='color:#ffea00;text-shadow: #ff6633 0.03em 0.03em 0.09em;'>$mnem_digit</span>";
      break;
    case 2:
      echo "<span style='color:#0066ff;'>$mnem_digit</span>";
      break;
    case 3:
      echo "<span style='color:#009900;'>$mnem_digit</span>";
      break;
    case 4:
      echo "<span style='color:#090909;'>$mnem_digit</span>";
      break;
    case 5:
      echo "<span style='color:#804000;'>$mnem_digit</span>";
      break;
    case 6:
      echo "<span style='color:#535046;'>$mnem_digit</span>";
      break;
    case 7:
      echo "<span style='color:#ff6633;'>$mnem_digit</span>";
      break;
    case 8:
      echo "<span style='color:#660099;'>$mnem_digit</span>";
      break;
    case 9:
      echo "<span style='color:#ff0033;'>$mnem_digit</span>";
      break;
    }
    
    echo " ";
  }
  echo '<br>';
}
?>
</p>

</body>
</html>
