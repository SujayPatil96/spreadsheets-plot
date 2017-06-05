<!DOCTYPE HTML>
<head>
    <title>Upload Status</title>
</head>

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

    // for area sheet
    if (move_uploaded_file($_FILES["area_sheet1"]["tmp_name"], $target_file_area)) {
        echo "The file ". basename( $_FILES["area_sheet1"]["name"]). " has been uploaded." . "<br />";
    } else {
        echo "Sorry, there was an error uploading your file." . "<br />";
    }
    // for volume sheet
    if (move_uploaded_file($_FILES["volume_sheet1"]["tmp_name"], $target_file_volume)) {
        echo "The file ". basename( $_FILES["volume_sheet1"]["name"]). " has been uploaded." . "<br />";
    } else {
        echo "Sorry, there was an error uploading your file." . "<br />";
    }
    // for shpericity sheet
    if (move_uploaded_file($_FILES["sphericity_sheet1"]["tmp_name"], $target_file_sphericity)) {
        echo "The file ". basename( $_FILES["sphericity_sheet1"]["name"]). " has been uploaded." . "<br />";
    } else {
        echo "Sorry, there was an error uploading your file." . "<br />";
    }
    // for intensity mean sheet with ch = 1
    if (move_uploaded_file($_FILES["imean1_sheet1"]["tmp_name"], $target_file_imean1)) {
        echo "The file ". basename( $_FILES["imean1_sheet1"]["name"]). " has been uploaded." . "<br />";
    } else {
        echo "Sorry, there was an error uploading your file." . "<br />";
    }
    // for intensity mean sheet with ch = 2
    if (move_uploaded_file($_FILES["imean2_sheet1"]["tmp_name"], $target_file_imean2)) {
        echo "The file ". basename( $_FILES["imean2_sheet1"]["name"]). " has been uploaded." . "<br />";
    } else {
        echo "Sorry, there was an error uploading your file." . "<br />";
    }
    // for intensity mean sheet with ch = 3
    if (move_uploaded_file($_FILES["imean3_sheet1"]["tmp_name"], $target_file_imean3)) {
        echo "The file ". basename( $_FILES["imean3_sheet1"]["name"]). " has been uploaded." . "<br />";
    } else {
        echo "Sorry, there was an error uploading your file." . "<br />";
    }
    // for intensity mean sheet with ch = 4
    if (move_uploaded_file($_FILES["imean4_sheet1"]["tmp_name"], $target_file_imean4)) {
        echo "The file ". basename( $_FILES["imean4_sheet1"]["name"]). " has been uploaded." . "<br />";
    } else {
        echo "Sorry, there was an error uploading your file." . "<br />";
    }
    // for intensity mean sheet with ch = 5
    if (move_uploaded_file($_FILES["imean5_sheet1"]["tmp_name"], $target_file_imean5)) {
        echo "The file ". basename( $_FILES["imean5_sheet1"]["name"]). " has been uploaded." . "<br />";
    } else {
        echo "Sorry, there was an error uploading your file." . "<br />";
    }
    // for intensity mean sheet with ch = 6
    if (move_uploaded_file($_FILES["imean6_sheet1"]["tmp_name"], $target_file_imean6)) {
        echo "The file ". basename( $_FILES["imean6_sheet1"]["name"]). " has been uploaded." . "<br />";
    } else {
        echo "Sorry, there was an error uploading your file." . "<br />";
    }
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

    // for area sheet
    if (move_uploaded_file($_FILES["area_sheet2"]["tmp_name"], $target_file_area)) {
        echo "The file ". basename( $_FILES["area_sheet2"]["name"]). " has been uploaded." . "<br />";
    } else {
        echo "Sorry, there was an error uploading your file." . "<br />";
    }
    // for volume sheet
    if (move_uploaded_file($_FILES["volume_sheet2"]["tmp_name"], $target_file_volume)) {
        echo "The file ". basename( $_FILES["volume_sheet2"]["name"]). " has been uploaded." . "<br />";
    } else {
        echo "Sorry, there was an error uploading your file." . "<br />";
    }
    // for shpericity sheet
    if (move_uploaded_file($_FILES["sphericity_sheet2"]["tmp_name"], $target_file_sphericity)) {
        echo "The file ". basename( $_FILES["sphericity_sheet2"]["name"]). " has been uploaded." . "<br />";
    } else {
        echo "Sorry, there was an error uploading your file." . "<br />";
    }
    // for intensity mean sheet with ch = 1
    if (move_uploaded_file($_FILES["imean1_sheet2"]["tmp_name"], $target_file_imean1)) {
        echo "The file ". basename( $_FILES["imean1_sheet2"]["name"]). " has been uploaded." . "<br />";
    } else {
        echo "Sorry, there was an error uploading your file." . "<br />";
    }
    // for intensity mean sheet with ch = 2
    if (move_uploaded_file($_FILES["imean2_sheet2"]["tmp_name"], $target_file_imean2)) {
        echo "The file ". basename( $_FILES["imean2_sheet2"]["name"]). " has been uploaded." . "<br />";
    } else {
        echo "Sorry, there was an error uploading your file." . "<br />";
    }
    // for intensity mean sheet with ch = 3
    if (move_uploaded_file($_FILES["imean3_sheet2"]["tmp_name"], $target_file_imean3)) {
        echo "The file ". basename( $_FILES["imean3_sheet2"]["name"]). " has been uploaded." . "<br />";
    } else {
        echo "Sorry, there was an error uploading your file." . "<br />";
    }
    // for intensity mean sheet with ch = 4
    if (move_uploaded_file($_FILES["imean4_sheet2"]["tmp_name"], $target_file_imean4)) {
        echo "The file ". basename( $_FILES["imean4_sheet2"]["name"]). " has been uploaded." . "<br />";
    } else {
        echo "Sorry, there was an error uploading your file." . "<br />";
    }
    // for intensity mean sheet with ch = 5
    if (move_uploaded_file($_FILES["imean5_sheet2"]["tmp_name"], $target_file_imean5)) {
        echo "The file ". basename( $_FILES["imean5_sheet2"]["name"]). " has been uploaded." . "<br />";
    } else {
        echo "Sorry, there was an error uploading your file." . "<br />";
    }
    // for intensity mean sheet with ch = 6
    if (move_uploaded_file($_FILES["imean6_sheet2"]["tmp_name"], $target_file_imean6)) {
        echo "The file ". basename( $_FILES["imean6_sheet2"]["name"]). " has been uploaded." . "<br />";
    } else {
        echo "Sorry, there was an error uploading your file." . "<br />";
    }
?>
