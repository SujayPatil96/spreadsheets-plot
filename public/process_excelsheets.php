<!DOCTYPE HTML>
<head>
    <title>Upload Status</title>
</head>

<?php
    // fix the working directory
    $target_dir = "data/wd1/";

    // grab the filenames of all the uploaded files
    $target_file_area = $target_dir . basename($_FILES["area_sheet"]["name"]);
    $target_file_volume = $target_dir . basename($_FILES["volume_sheet"]["name"]);
    $target_file_sphericity = $target_dir . basename($_FILES["sphericity_sheet"]["name"]);
    $target_file_imean1 = $target_dir . basename($_FILES["imean1_sheet"]["name"]);
    $target_file_imean2 = $target_dir . basename($_FILES["imean2_sheet"]["name"]);
    $target_file_imean3 = $target_dir . basename($_FILES["imean3_sheet"]["name"]);
    $target_file_imean4 = $target_dir . basename($_FILES["imean4_sheet"]["name"]);
    $target_file_imean5 = $target_dir . basename($_FILES["imean5_sheet"]["name"]);
    $target_file_imean6 = $target_dir . basename($_FILES["imean6_sheet"]["name"]);

    // $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
    // Check if image file is a actual xls file or not
    // if(isset($_POST["submit"])) {
    //     $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    //     if($check !== false) {
    //         echo "File is an image - " . $check["mime"] . ".";
    //         $uploadOk = 1;
    //     } else {
    //         echo "File is not an image.";
    //     }
    // }

    // Check if file already exists
    // if (file_exists($target_file)) {
    //     echo "Sorry, file already exists.";
    // }
    // Check file size
    // if ($_FILES["fileToUpload"]["size"] > 500000) {
    //     echo "Sorry, your file is too large.";
    // }
    // Allow certain file formats
    // if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    // && $imageFileType != "gif" ) {
    //     echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    // }

    // for area sheet
    if (move_uploaded_file($_FILES["area_sheet"]["tmp_name"], $target_file_area)) {
        echo "The file ". basename( $_FILES["area_sheet"]["name"]). " has been uploaded." . "<br />";
    } else {
        echo "Sorry, there was an error uploading your file." . "<br />";
    }
    // for volume sheet
    if (move_uploaded_file($_FILES["volume_sheet"]["tmp_name"], $target_file_volume)) {
        echo "The file ". basename( $_FILES["volume_sheet"]["name"]). " has been uploaded." . "<br />";
    } else {
        echo "Sorry, there was an error uploading your file." . "<br />";
    }
    // for shpericity sheet
    if (move_uploaded_file($_FILES["sphericity_sheet"]["tmp_name"], $target_file_sphericity)) {
        echo "The file ". basename( $_FILES["sphericity_sheet"]["name"]). " has been uploaded." . "<br />";
    } else {
        echo "Sorry, there was an error uploading your file." . "<br />";
    }
    // for intensity mean sheet with ch = 1
    if (move_uploaded_file($_FILES["imean1_sheet"]["tmp_name"], $target_file_imean1)) {
        echo "The file ". basename( $_FILES["imean1_sheet"]["name"]). " has been uploaded." . "<br />";
    } else {
        echo "Sorry, there was an error uploading your file." . "<br />";
    }
    // for intensity mean sheet with ch = 2
    if (move_uploaded_file($_FILES["imean2_sheet"]["tmp_name"], $target_file_imean2)) {
        echo "The file ". basename( $_FILES["imean2_sheet"]["name"]). " has been uploaded." . "<br />";
    } else {
        echo "Sorry, there was an error uploading your file." . "<br />";
    }
    // for intensity mean sheet with ch = 3
    if (move_uploaded_file($_FILES["imean3_sheet"]["tmp_name"], $target_file_imean3)) {
        echo "The file ". basename( $_FILES["imean3_sheet"]["name"]). " has been uploaded." . "<br />";
    } else {
        echo "Sorry, there was an error uploading your file." . "<br />";
    }
    // for intensity mean sheet with ch = 4
    if (move_uploaded_file($_FILES["imean4_sheet"]["tmp_name"], $target_file_imean4)) {
        echo "The file ". basename( $_FILES["imean4_sheet"]["name"]). " has been uploaded." . "<br />";
    } else {
        echo "Sorry, there was an error uploading your file." . "<br />";
    }
    // for intensity mean sheet with ch = 5
    if (move_uploaded_file($_FILES["imean5_sheet"]["tmp_name"], $target_file_imean5)) {
        echo "The file ". basename( $_FILES["imean5_sheet"]["name"]). " has been uploaded." . "<br />";
    } else {
        echo "Sorry, there was an error uploading your file." . "<br />";
    }
    // for intensity mean sheet with ch = 6
    if (move_uploaded_file($_FILES["imean6_sheet"]["tmp_name"], $target_file_imean6)) {
        echo "The file ". basename( $_FILES["imean6_sheet"]["name"]). " has been uploaded." . "<br />";
    } else {
        echo "Sorry, there was an error uploading your file." . "<br />";
    }
?>
