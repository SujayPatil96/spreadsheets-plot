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
		<div class="vertical_line_1">

	<fieldset>
		<legend><span class="number">1</span>Attachments</legend>
	</fieldset>
		<div class="vertical_line1">
			<label for="area_sheet">Attach a copy of the Area Excel sheet here:</label>
			<input type="file" id="area_sheet1" name="area_sheet1" />
			<br /><br />

			<label for="volume_sheet">Attach a copy of the Volume Excel sheet here:</label>
			<input type="file" id="volume_sheet1" name="volume_sheet1" />
			<br /><br />

			<label for="sphericity">Attach a copy of the Sphericity Excel sheet here:</label>
			<input type="file" id="sphericity_sheet1" name="sphericity_sheet1" />
			<br /><br />

			<label for="imean1_sheet">Attach a copy of the Intensity Mean (Ch = 1) Excel sheet here:</label>
			<input type="file" id="imean1_sheet1" name="imean1_sheet1" />
			<br /><br />

			<label for="imean2_sheet">Attach a copy of the Intensity Mean (Ch = 2) Excel sheet here:</label>
			<input type="file" id="imean2_sheet1" name="imean2_sheet1" />
			<br /><br />

			<label for="imean3_sheet">Attach a copy of the Intensity Mean (Ch = 3) Excel sheet here:</label>
			<input type="file" id="imean3_sheet1" name="imean3_sheet1" />
			<br /><br />

			<label for="imean4_sheet">Attach a copy of the Intensity Mean (Ch = 4) Excel sheet here:</label>
			<input type="file" id="imean4_sheet1" name="imean4_sheet1" />
			<br /><br />

			<label for="imean5_sheet">Attach a copy of the Intensity Mean (Ch = 5) Excel sheet here:</label>
			<input type="file" id="imean5_sheet1" name="imean5_sheet1" />
			<br /><br />

			<label for="imean6_sheet">Attach a copy of the Intensity Mean (Ch = 6) Excel sheet here:</label>
			<input type="file" id="imean6_sheet1" name="imean6_sheet1" />
		</div>
		<div class="vertical_line2">
			<label for="area_sheet">Attach a copy of the Area Excel sheet here:</label>
			<input type="file" id="area_sheet2" name="area_sheet2" />
			<br /><br />

			<label for="volume_sheet">Attach a copy of the Volume Excel sheet here:</label>
			<input type="file" id="volume_sheet2" name="volume_sheet2" />
			<br /><br />

			<label for="sphericity">Attach a copy of the Sphericity Excel sheet here:</label>
			<input type="file" id="sphericity_sheet2" name="sphericity_sheet2" />
			<br /><br />

			<label for="imean1_sheet">Attach a copy of the Intensity Mean (Ch = 1) Excel sheet here:</label>
			<input type="file" id="imean1_sheet2" name="imean1_sheet2" />
			<br /><br />

			<label for="imean2_sheet">Attach a copy of the Intensity Mean (Ch = 2) Excel sheet here:</label>
			<input type="file" id="imean2_sheet2" name="imean2_sheet2" />
			<br /><br />

			<label for="imean3_sheet">Attach a copy of the Intensity Mean (Ch = 3) Excel sheet here:</label>
			<input type="file" id="imean3_sheet2" name="imean3_sheet2" />
			<br /><br />

			<label for="imean4_sheet">Attach a copy of the Intensity Mean (Ch = 4) Excel sheet here:</label>
			<input type="file" id="imean4_sheet2" name="imean4_sheet2" />
			<br /><br />

			<label for="imean5_sheet">Attach a copy of the Intensity Mean (Ch = 5) Excel sheet here:</label>
			<input type="file" id="imean5_sheet2" name="imean5_sheet2" />
			<br /><br />

			<label for="imean6_sheet">Attach a copy of the Intensity Mean (Ch = 6) Excel sheet here:</label>
			<input type="file" id="imean6_sheet2" name="imean6_sheet2" />
		</div>

	  <button type="submit" name="submit" id="submit">Submit</button>
	</form>

</body>
</html>
