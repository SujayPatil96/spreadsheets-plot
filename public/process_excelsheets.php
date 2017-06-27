<!DOCTYPE HTML>
<head>
    <title>Upload Status</title>
</head>
<h1 style="text-align: center;"><u>Upload Status of all the files</u></h1>

<?php
    // fix the working directory
    $target_dir = "data/wd1/";

    // grab the filenames of all the uploaded files
    $target_file_area = $target_dir . basename($_FILES["area_sheet1"]["name"]);
    $target_file_volume = $target_dir . basename($_FILES["volume_sheet1"]["name"]);
    $target_file_sphericity = $target_dir . basename($_FILES["sphericity_sheet1"]["name"]);
    $target_file_imean1 = $target_dir . basename($_FILES["imean1_sheet1"]["name"]);
    $target_file_imean2 = $target_dir . basename($_FILES["imean2_sheet1"]["name"]);
    $target_file_imean3 = $target_dir . basename($_FILES["imean3_sheet1"]["name"]);
    $target_file_imean4 = $target_dir . basename($_FILES["imean4_sheet1"]["name"]);
    $target_file_imean5 = $target_dir . basename($_FILES["imean5_sheet1"]["name"]);
    $target_file_imean6 = $target_dir . basename($_FILES["imean6_sheet1"]["name"]);

    // start the list
    echo "<ul>";
        // for area sheet
        if (move_uploaded_file($_FILES["area_sheet1"]["tmp_name"], $target_file_area)) {
            echo "<li>The file ". basename( $_FILES["area_sheet1"]["name"]). " has been uploaded." . "<br /></li>";
        } else {
            echo "<li>Sorry, there was an error uploading your file." . "<br /></li>";
        }
        // for volume sheet
        if (move_uploaded_file($_FILES["volume_sheet1"]["tmp_name"], $target_file_volume)) {
            echo "<li>The file ". basename( $_FILES["volume_sheet1"]["name"]). " has been uploaded." . "<br /></li>";
        } else {
            echo "<li>Sorry, there was an error uploading your file." . "<br /></li>";
        }
        // for shpericity sheet
        if (move_uploaded_file($_FILES["sphericity_sheet1"]["tmp_name"], $target_file_sphericity)) {
            echo "<li>The file ". basename( $_FILES["sphericity_sheet1"]["name"]). " has been uploaded." . "<br /></li>";
        } else {
            echo "<li>Sorry, there was an error uploading your file." . "<br /></li>";
        }
        // for intensity mean sheet with ch = 1
        if (move_uploaded_file($_FILES["imean1_sheet1"]["tmp_name"], $target_file_imean1)) {
            echo "<li>The file ". basename( $_FILES["imean1_sheet1"]["name"]). " has been uploaded." . "<br /></li>";
        } else {
            echo "<li>Sorry, there was an error uploading your file." . "<br /></li>";
        }
        // for intensity mean sheet with ch = 2
        if (move_uploaded_file($_FILES["imean2_sheet1"]["tmp_name"], $target_file_imean2)) {
            echo "<li>The file ". basename( $_FILES["imean2_sheet1"]["name"]). " has been uploaded." . "<br /></li>";
        } else {
            echo "<li>Sorry, there was an error uploading your file." . "<br /></li>";
        }
        // for intensity mean sheet with ch = 3
        if (move_uploaded_file($_FILES["imean3_sheet1"]["tmp_name"], $target_file_imean3)) {
            echo "<li>The file ". basename( $_FILES["imean3_sheet1"]["name"]). " has been uploaded." . "<br /></li>";
        } else {
            echo "<li>Sorry, there was an error uploading your file." . "<br /></li>";
        }
        // for intensity mean sheet with ch = 4
        if (move_uploaded_file($_FILES["imean4_sheet1"]["tmp_name"], $target_file_imean4)) {
            echo "<li>The file ". basename( $_FILES["imean4_sheet1"]["name"]). " has been uploaded." . "<br /></li>";
        } else {
            echo "<li>Sorry, there was an error uploading your file." . "<br /></li>";
        }
        // for intensity mean sheet with ch = 5
        if (move_uploaded_file($_FILES["imean5_sheet1"]["tmp_name"], $target_file_imean5)) {
            echo "<li>The file ". basename( $_FILES["imean5_sheet1"]["name"]). " has been uploaded." . "<br /></li>";
        } else {
            echo "<li>Sorry, there was an error uploading your file." . "<br /></li>";
        }
        // for intensity mean sheet with ch = 6
        if (move_uploaded_file($_FILES["imean6_sheet1"]["tmp_name"], $target_file_imean6)) {
            echo "<li>The file ". basename( $_FILES["imean6_sheet1"]["name"]). " has been uploaded." . "<br /></li>";
        } else {
            echo "<li>Sorry, there was an error uploading your file." . "<br /></li>";
        }
    echo "</ul>";
?>

<?php
    // fix the working directory
    $target_dir = "data/wd2/";

    // grab the filenames of all the uploaded files
    $target_file_area = $target_dir . basename($_FILES["area_sheet2"]["name"]);
    $target_file_volume = $target_dir . basename($_FILES["volume_sheet2"]["name"]);
    $target_file_sphericity = $target_dir . basename($_FILES["sphericity_sheet2"]["name"]);
    $target_file_imean1 = $target_dir . basename($_FILES["imean1_sheet2"]["name"]);
    $target_file_imean2 = $target_dir . basename($_FILES["imean2_sheet2"]["name"]);
    $target_file_imean3 = $target_dir . basename($_FILES["imean3_sheet2"]["name"]);
    $target_file_imean4 = $target_dir . basename($_FILES["imean4_sheet2"]["name"]);
    $target_file_imean5 = $target_dir . basename($_FILES["imean5_sheet2"]["name"]);
    $target_file_imean6 = $target_dir . basename($_FILES["imean6_sheet2"]["name"]);

    // start the list
    echo "<ul>";
        // for area sheet
        if (move_uploaded_file($_FILES["area_sheet2"]["tmp_name"], $target_file_area)) {
            echo "<li>The file ". basename( $_FILES["area_sheet2"]["name"]). " has been uploaded." . "<br /></li>";
        } else {
            echo "<li>Sorry, there was an error uploading your file." . "<br /></li>";
        }
        // for volume sheet
        if (move_uploaded_file($_FILES["volume_sheet2"]["tmp_name"], $target_file_volume)) {
            echo "<li>The file ". basename( $_FILES["volume_sheet2"]["name"]). " has been uploaded." . "<br /></li>";
        } else {
            echo "<li>Sorry, there was an error uploading your file." . "<br /></li>";
        }
        // for shpericity sheet
        if (move_uploaded_file($_FILES["sphericity_sheet2"]["tmp_name"], $target_file_sphericity)) {
            echo "<li>The file ". basename( $_FILES["sphericity_sheet2"]["name"]). " has been uploaded." . "<br /></li>";
        } else {
            echo "<li>Sorry, there was an error uploading your file." . "<br /></li>";
        }
        // for intensity mean sheet with ch = 1
        if (move_uploaded_file($_FILES["imean1_sheet2"]["tmp_name"], $target_file_imean1)) {
            echo "<li>The file ". basename( $_FILES["imean1_sheet2"]["name"]). " has been uploaded." . "<br /></li>";
        } else {
            echo "<li>Sorry, there was an error uploading your file." . "<br /></li>";
        }
        // for intensity mean sheet with ch = 2
        if (move_uploaded_file($_FILES["imean2_sheet2"]["tmp_name"], $target_file_imean2)) {
            echo "<li>The file ". basename( $_FILES["imean2_sheet2"]["name"]). " has been uploaded." . "<br /></li>";
        } else {
            echo "<li>Sorry, there was an error uploading your file." . "<br /></li>";
        }
        // for intensity mean sheet with ch = 3
        if (move_uploaded_file($_FILES["imean3_sheet2"]["tmp_name"], $target_file_imean3)) {
            echo "<li>The file ". basename( $_FILES["imean3_sheet2"]["name"]). " has been uploaded." . "<br /></li>";
        } else {
            echo "<li>Sorry, there was an error uploading your file." . "<br /></li>";
        }
        // for intensity mean sheet with ch = 4
        if (move_uploaded_file($_FILES["imean4_sheet2"]["tmp_name"], $target_file_imean4)) {
            echo "<li>The file ". basename( $_FILES["imean4_sheet2"]["name"]). " has been uploaded." . "<br /></li>";
        } else {
            echo "<li>Sorry, there was an error uploading your file." . "<br /></li>";
        }
        // for intensity mean sheet with ch = 5
        if (move_uploaded_file($_FILES["imean5_sheet2"]["tmp_name"], $target_file_imean5)) {
            echo "<li>The file ". basename( $_FILES["imean5_sheet2"]["name"]). " has been uploaded." . "<br /></li>";
        } else {
            echo "<li>Sorry, there was an error uploading your file." . "<br /></li>";
        }
        // for intensity mean sheet with ch = 6
        if (move_uploaded_file($_FILES["imean6_sheet2"]["tmp_name"], $target_file_imean6)) {
            echo "<li>The file ". basename( $_FILES["imean6_sheet2"]["name"]). " has been uploaded." . "<br /></li>";
        } else {
            echo "<li>Sorry, there was an error uploading your file." . "<br /></li>";
        }
    echo "</ul>";
?>

<?php
    // PHP script to apply styles to the table
    echo "<style>";
    echo "
        body {
            font-family: Josefin Sans;
        }
        ";
    echo "</style>";

    echo "<head><title>Processed Worksheets</title></head>";
    echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"//fonts.googleapis.com/css?family=Josefin+Sans\" />";
    echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"css/main.css\" />";
    echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"css/admin_.css\" />";
?>

<!DOCTYPE HTML>
<button id="load_php">Click here to process the uploaded files!</button>
<div style="text-align: center">
    <a href="#" onclick="window.history.go(-1); return false" style="">&lt; &lt; GO BACK</a>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
    $('#load_php').click(function(){
       window.open('excel_read.php','_blank');
    });
</script>
