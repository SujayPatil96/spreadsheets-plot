<?php
	// Start the session
	session_start();
	ob_start();

	if (!isset($_SESSION['user'])) {
		header("Location: index.php");
	}
?>

<!DOCTYPE html>
<html lang="en-US">
<head>
  <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
  <title>Admin Panel</title>
  <link rel="stylesheet" type="text/css" media="all" href="css/admin_panel.css">
  <link rel="stylesheet" type="text/css" media="all" href="css/main.css">
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,400i,700,700i" rel="stylesheet">
  <!-- <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> -->
</head>

<body>
  <nav id="fixedbar">
    <ul id="fixednav">
		<!-- add some more tabs to the navbar here -->
    </ul>
  </nav>

  <div id="w">

    <nav id="navigation">
      <ul>
        <!-- add more tabs to the main navbar here -->
      </ul>
    </nav>

    <div id="content">
	<br>
    <h1>Brief Documentation.</h1>
	<form action="process_excelsheets.php" method="post" enctype="multipart/form-data" id="admin_panel">

	<fieldset>
		<legend><span class="number">1</span>Attachments</legend>
	</fieldset>

			<label for="area_sheet">Attach a copy of the Area Excel sheet here:</label>
			<input type="file" id="area_sheet" name="area_sheet" />
			<br /><br />

			<label for="volume_sheet">Attach a copy of the Volume Excel sheet here:</label>
			<input type="file" id="volume_sheet" name="volume_sheet" />
			<br /><br />

			<label for="sphericity">Attach a copy of the Sphericity Excel sheet here:</label>
			<input type="file" id="sphericity_sheet" name="sphericity_sheet" />
			<br /><br />

			<label for="imean1_sheet">Attach a copy of the Intensity Mean (Ch = 1) Excel sheet here:</label>
			<input type="file" id="imean1_sheet" name="imean1_sheet" />
			<br /><br />

			<label for="imean2_sheet">Attach a copy of the Intensity Mean (Ch = 2) Excel sheet here:</label>
			<input type="file" id="imean2_sheet" name="imean2_sheet" />
			<br /><br />

			<label for="imean3_sheet">Attach a copy of the Intensity Mean (Ch = 3) Excel sheet here:</label>
			<input type="file" id="imean3_sheet" name="imean3_sheet" />
			<br /><br />

			<label for="imean4_sheet">Attach a copy of the Intensity Mean (Ch = 4) Excel sheet here:</label>
			<input type="file" id="imean4_sheet" name="imean4_sheet" />
			<br /><br />

			<label for="imean5_sheet">Attach a copy of the Intensity Mean (Ch = 5) Excel sheet here:</label>
			<input type="file" id="imean5_sheet" name="imean5_sheet" />
			<br /><br />

			<label for="imean6_sheet">Attach a copy of the Intensity Mean (Ch = 6) Excel sheet here:</label>
			<input type="file" id="imean6_sheet" name="imean6_sheet" />
			<br /><br /><br /><br />

	  <button type="submit" name="submit" id="submit">Submit</button>
	</form>


</body>
</html>
