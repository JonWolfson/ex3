<?php
  //gets the attributes of the current user and all users
  $file = fopen("singles.txt", 'r');
  $profiles = fread($file, filesize("singles.txt"));
  $profile = substr($profiles, strpos($profiles, $_GET['name']));
  $attributes = explode(",", $profile);
  $matches = explode(",", $profiles);
  $nums = [];
  fclose($file);

  //gets the locations of the profiles that match the current user
  for($i = 0; $i * 7 < count($matches) - 1; $i++) {
    if($matches[$i * 7 + 4] == $attributes[4] || ($matches[$i * 7 + 4] == "Mac OS X" &&
      $attributes == "Linux") || ($matches[$i * 7 + 4] == "Linux" && $attributes[4] == "Mac OS X")){
      if($matches[$i * 7 + 2] > $attributes[5] && $matches[$i * 7 + 2] < $attributes[6]) {
        if($attributes[2] > $matches[$i * 7 + 5] && $attributes[2] < $matches[$i * 7 + 6]) {
          if($matches[$i * 7 + 1] != $attributes[1]) {
            if(strpos($matches[$i * 7 + 4], $attributes[4]{1}) || strpos($matches[$i * 7 + 4], $attributes[4]{2}) ||
            strpos($matches[$i * 7 + 4], $attributes[4]{3}) || strpos($matches[$i * 7 + 4], $attributes[4]{4})) {
              array_push($nums, $i);
            }
          }
        }
      }
    }
  }
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
    <h1>Matches for <?php echo $_GET['name'] ?> </h1>

    <div>
      <ul>
        <?php
          //creates an li for each match
          foreach ($nums as $value) {
            if($attributes[1] == "F") {
              echo '<li class="match"> <img src="userm.png" alt="Male">';
            } else {
              echo '<li class="match"> <img src="user.png" alt="Female">';
            }
            echo $matches[$value * 7] . '<br /><br /> <strong>Gender:</strong>' . $matches[$value * 7 + 1];
            echo '<br /> <strong>Age:</strong>' . $matches[$value * 7 + 2];
            echo '<br /> <strong>Type:</strong>' . $matches[$value * 7 + 3];
            echo '<br /> <strong>OS:</strong>' . $matches[$value * 7 + 4] . '</li>';
          }
        ?>
      </ul>
    </div>

    <?php
      require_once('common.php');
      footer();
    ?>
	</body>
</html>
