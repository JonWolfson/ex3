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
    <div id="bannerarea">
			<img src="nerdxing.jpg" alt="banner logo" /> <br />
			where meek geeks meet
		</div>

    <form action = "signup-submit.php" method="post">
      <fieldset>
        <legend>New User Signup:</legend>

        <strong>Name:</strong> <input name="name" type="text" size="16"> <br />
        <strong>Gender:</strong> Male<input type="radio" name="gender" value="M">
        Female<input type="radio" name="gender" value="F"> <br />
        <strong>Age:</strong><input type="text" name="age" size="6"> <br />
        <strong>Personality type:</strong>
        <input type="text"  name="personality" size="6" maxlength="4">
        <a href="http://www.humanmetrics.com/cgi-win/JTypes2.asp">Dont know your type?</a> <br />
        <strong>Favorite OS:</strong>
        <select name="OS">
          <option value="Windows" selected>Windows</option>
          <option value="Mac OS X">Mac</option>
          <option value="Linux">Linux</option>
        </select> <br />
        <strong>Seeking age:</strong><input type="text" size="6" name="min" value="Min">to
        <input type="text" size="6" name="max" value="Max"> <br />

        <input type="submit" value="Sign Up">
      </fieldset>
    </form>

    <?php
      require_once('common.php');
      footer();
    ?>
	</body>
</html>
