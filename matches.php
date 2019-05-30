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
    <form action="matches-submit.php" +  method="get">
      <fieldset>
        <legend>Returning User:</legend> <br />

        <strong>Name:</strong> <input type="text" name="name" size="16"> <br /> <br />

        <input type="submit" value="View My Matches">
      </fieldset>
    </form>

    <?php
      require_once('common.php');
      footer();
    ?>
	</body>
</html>
