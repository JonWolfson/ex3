<?php
  //writes the profile to the singles.txt
  $singles = fopen("singles.txt", "a");
  $profile = $_POST['name'] . "," . $_POST['gender'] . "," .$_POST['age'] . ",". $_POST['personality'];
  $profile = $profile . "," . $_POST['OS'] . "," . $_POST['min'] . "," . $_POST['max'] . "," . "\n";
  fwrite($singles, $profile);
  fclose($singles);
?>
<!DOCTYPE html>
<html>
  <head>
    <title>GeekLuv</title>

    <meta charset="utf-8" />

    <!-- instructor-provided CSS and JavaScript links; do not modify -->
    <link href="heart.gif" type="image/gif" rel="shortcut icon" />
    <link href="Geekluv.css" type="text/css" rel="stylesheet" />
  </head>

	<body>
    <p>
      <strong>Thank you <?php echo $_POST['name'] ?></strong> <br /> <br />

      Now <a href="matches.php">log in to see your matches</a> <br /> <br />
    </p>

    <?php
      require_once('common.php');
      footer();
    ?>
	</body>
</html>
