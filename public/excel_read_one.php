<?php
    // code to initially count the number of files in a directory
    $directory = "data/wd1/";
    $filecount = 0;
    $files = glob($directory . "*.{xls}", GLOB_BRACE);
    if ($files){
        $filecount = count($files);
    }
    // test
    // echo "There are $filecount files";
    // echo "<br />";
?>

<?php

    //  Include PHPExcel_IOFactory
    include '../includes/PHPExcel/Classes/PHPExcel.php';

    $inputFileName = 'data/wd1/Area.xls';

    //  Read your Excel workbook
    try {
        $inputFileType = PHPExcel_IOFactory::identify($inputFileName);
        $objReader = PHPExcel_IOFactory::createReader($inputFileType);
        $objPHPExcel = $objReader->load($inputFileName);
    } catch(Exception $e) {
        die('Error loading file "'.pathinfo($inputFileName, PATHINFO_BASENAME).'": '.$e->getMessage());
    }

    //  Get worksheet dimensions
    $sheet = $objPHPExcel->getSheet(0);
    $highestRow = $sheet->getHighestRow();
    $highestColumn = $sheet->getHighestColumn();    // returns a char


    // test
    echo "The number of rows in the excel sheet is: " . $highestRow  . "<br />";
    echo "The number of columns in the excel sheet is: " . $highestColumn  . "<br />";
    $rowCount = $highestRow  - 2;
    $colCount = PHPExcel_Cell::columnIndexFromString($highestColumn);
    echo "The number of rows in the excel sheet to be considered: " . $rowCount . "<br />";
    echo "The number of columns in the excel sheet to be considered: " . $colCount . "<br />";

    // Get the column number ,i.e., convert the char to an int
    $colNumber = PHPExcel_Cell::columnIndexFromString($highestColumn);

    $subsetSeq = [];
    $j = 0;
    $comb = [];
    //  Loop through each row of the worksheet in turn
    for ($row = 3; $row <= $highestRow; $row++){
        //  Read a row of data into an array
        $rowData = $sheet->rangeToArray('A' . $row . ':' . $highestColumn . $row, NULL, TRUE, FALSE);

        for ($i=0 ; $i < $colNumber ; $i++) {
            $subsetSeq[$j] = $rowData[0][$i];
            $j++;
        }
    }

    // processing to reverse all the values in associative array
    $k = array_keys($subsetSeq);

    $v = array_values($subsetSeq);

    $rv = array_reverse($v);

    $b = array_combine($k, $rv);

    $array1 = [];
    $array2 = [];
    $array1 = array_slice($b, 0, 5);
    $array2 = array_slice($b, 5, 9);

    // test
    // print_r($array2);
    // echo "<br />";
    // print_r($array1);

    // output the array data into an HTML table
    // echo "<table>";
    //     echo "<tr>";
    //     foreach ($array2 as $row) {
    //         echo "<td>$row</td>";
    //     }
    //     echo "</tr>";
    //
    //     echo "<tr>";
    //     foreach ($array1 as $row) {
    //         echo "<td>$row</td>";
    //     }
    //     echo "</tr>";
    // echo "</table>";
?>

<?php
    $inputFileName = 'data/wd1/Volume.xls';

    //  Read your Excel workbook
    try {
        $inputFileType = PHPExcel_IOFactory::identify($inputFileName);
        $objReader = PHPExcel_IOFactory::createReader($inputFileType);
        $objPHPExcel = $objReader->load($inputFileName);
    } catch(Exception $e) {
        die('Error loading file "'.pathinfo($inputFileName, PATHINFO_BASENAME).'": '.$e->getMessage());
    }

    //  Get worksheet dimensions
    $sheet = $objPHPExcel->getSheet(0);
    $highestRow = $sheet->getHighestRow();
    $highestColumn = $sheet->getHighestColumn();    // returns a char

    // Get the column number ,i.e., convert the char to an int
    $colNumber = PHPExcel_Cell::columnIndexFromString($highestColumn);

    $subsetSeq = [];
    $j = 0;
    $comb = [];
    //  Loop through each row of the worksheet in turn
    for ($row = 3; $row <= $highestRow; $row++){
        //  Read a row of data into an array
        $rowData = $sheet->rangeToArray('A' . $row . ':' . $highestColumn . $row, NULL, TRUE, FALSE);

        for ($i=0 ; $i < $colNumber ; $i++) {
            $subsetSeq[$j] = $rowData[0][$i];
            $j++;
        }
    }

    // echo "<hr />";

    // processing to reverse all the values in associative array
    $k = array_keys($subsetSeq);

    $v = array_values($subsetSeq);

    $rv = array_reverse($v);

    $b = array_combine($k, $rv);

    $array3 = [];
    $array4 = [];
    $array3 = array_slice($b, 0, 5);
    $array4 = array_slice($b, 5, 9);

    // test
    // print_r($array4);
    // echo "<br />";
    // print_r($array3);

    // echo "<hr />";

    // output the array data into an HTML table
    // echo "<table>";
    //     echo "<tr>";
    //     foreach ($array4 as $row) {
    //         echo "<td>$row</td>";
    //     }
    //     echo "</tr>";
    //
    //     echo "<tr>";
    //     foreach ($array3 as $row) {
    //         echo "<td>$row</td>";
    //     }
    //     echo "</tr>";
    // echo "</table>";
?>

<?php
    $inputFileName = 'data/wd1/Sphericity.xls';

    //  Read your Excel workbook
    try {
        $inputFileType = PHPExcel_IOFactory::identify($inputFileName);
        $objReader = PHPExcel_IOFactory::createReader($inputFileType);
        $objPHPExcel = $objReader->load($inputFileName);
    } catch(Exception $e) {
        die('Error loading file "'.pathinfo($inputFileName, PATHINFO_BASENAME).'": '.$e->getMessage());
    }

    //  Get worksheet dimensions
    $sheet = $objPHPExcel->getSheet(0);
    $highestRow = $sheet->getHighestRow();
    $highestColumn = $sheet->getHighestColumn();    // returns a char

    // Get the column number ,i.e., convert the char to an int
    $colNumber = PHPExcel_Cell::columnIndexFromString($highestColumn);

    $subsetSeq = [];
    $j = 0;
    $comb = [];
    //  Loop through each row of the worksheet in turn
    for ($row = 3; $row <= $highestRow; $row++){
        //  Read a row of data into an array
        $rowData = $sheet->rangeToArray('A' . $row . ':' . $highestColumn . $row, NULL, TRUE, FALSE);

        for ($i=0 ; $i < $colNumber ; $i++) {
            $subsetSeq[$j] = $rowData[0][$i];
            $j++;
        }
    }

    // echo "<hr />";

    // processing to reverse all the values in associative array
    $k = array_keys($subsetSeq);

    $v = array_values($subsetSeq);

    $rv = array_reverse($v);

    $b = array_combine($k, $rv);

    $array5 = [];
    $array6 = [];
    $array5 = array_slice($b, 0, 5);
    $array6 = array_slice($b, 5, 9);

    // test
    // print_r($array6);
    // echo "<br />";
    // print_r($array5);

    // echo "<hr />";

    // output the array data into an HTML table
    // echo "<table>";
    //     echo "<tr>";
    //     foreach ($array6 as $row) {
    //         echo "<td>$row</td>";
    //     }
    //     echo "</tr>";
    //
    //     echo "<tr>";
    //     foreach ($array5 as $row) {
    //         echo "<td>$row</td>";
    //     }
    //     echo "</tr>";
    // echo "</table>";
?>

<?php
    $inputFileName = 'data/wd1/Intensity Mean Ch=1.xls';

    //  Read your Excel workbook
    try {
        $inputFileType = PHPExcel_IOFactory::identify($inputFileName);
        $objReader = PHPExcel_IOFactory::createReader($inputFileType);
        $objPHPExcel = $objReader->load($inputFileName);
    } catch(Exception $e) {
        die('Error loading file "'.pathinfo($inputFileName, PATHINFO_BASENAME).'": '.$e->getMessage());
    }

    //  Get worksheet dimensions
    $sheet = $objPHPExcel->getSheet(0);
    $highestRow = $sheet->getHighestRow();
    $highestColumn = $sheet->getHighestColumn();    // returns a char

    // Get the column number ,i.e., convert the char to an int
    $colNumber = PHPExcel_Cell::columnIndexFromString($highestColumn);

    $subsetSeq = [];
    $j = 0;
    $comb = [];
    //  Loop through each row of the worksheet in turn
    for ($row = 3; $row <= $highestRow; $row++){
        //  Read a row of data into an array
        $rowData = $sheet->rangeToArray('A' . $row . ':' . $highestColumn . $row, NULL, TRUE, FALSE);

        for ($i=0 ; $i < $colNumber ; $i++) {
            $subsetSeq[$j] = $rowData[0][$i];
            $j++;
        }
    }

    // echo "<hr />";

    // processing to reverse all the values in associative array
    $k = array_keys($subsetSeq);

    $v = array_values($subsetSeq);

    $rv = array_reverse($v);

    $b = array_combine($k, $rv);

    $array7 = [];
    $array8 = [];
    $array7 = array_slice($b, 0, 6);
    $array8 = array_slice($b, 6, 10);

    // test
    // print_r($array8);
    // echo "<br />";
    // print_r($array7);

    // echo "<hr />";

    // output the array data into an HTML table
    // echo "<table>";
    //     echo "<tr>";
    //     foreach ($array8 as $row) {
    //         echo "<td>$row</td>";
    //     }
    //     echo "</tr>";
    //
    //     echo "<tr>";
    //     foreach ($array7 as $row) {
    //         echo "<td>$row</td>";
    //     }
    //     echo "</tr>";
    // echo "</table>";
?>
<?php
    $inputFileName = 'data/wd1/Intensity Mean Ch=2.xls';

    //  Read your Excel workbook
    try {
        $inputFileType = PHPExcel_IOFactory::identify($inputFileName);
        $objReader = PHPExcel_IOFactory::createReader($inputFileType);
        $objPHPExcel = $objReader->load($inputFileName);
    } catch(Exception $e) {
        die('Error loading file "'.pathinfo($inputFileName, PATHINFO_BASENAME).'": '.$e->getMessage());
    }

    //  Get worksheet dimensions
    $sheet = $objPHPExcel->getSheet(0);
    $highestRow = $sheet->getHighestRow();
    $highestColumn = $sheet->getHighestColumn();    // returns a char

    // Get the column number ,i.e., convert the char to an int
    $colNumber = PHPExcel_Cell::columnIndexFromString($highestColumn);

    $subsetSeq = [];
    $j = 0;
    $comb = [];
    //  Loop through each row of the worksheet in turn
    for ($row = 3; $row <= $highestRow; $row++){
        //  Read a row of data into an array
        $rowData = $sheet->rangeToArray('A' . $row . ':' . $highestColumn . $row, NULL, TRUE, FALSE);

        for ($i=0 ; $i < $colNumber ; $i++) {
            $subsetSeq[$j] = $rowData[0][$i];
            $j++;
        }
    }

    // echo "<hr />";

    // processing to reverse all the values in associative array
    $k = array_keys($subsetSeq);

    $v = array_values($subsetSeq);

    $rv = array_reverse($v);

    $b = array_combine($k, $rv);

    $array9 = [];
    $array10 = [];
    $array9 = array_slice($b, 0, 6);
    $array10 = array_slice($b, 6, 10);

    // test
    // print_r($array10);
    // echo "<br />";
    // print_r($array9);

    // echo "<hr />";

    // output the array data into an HTML table
    // echo "<table>";
    //     echo "<tr>";
    //     foreach ($array10 as $row) {
    //         echo "<td>$row</td>";
    //     }
    //     echo "</tr>";
    //
    //     echo "<tr>";
    //     foreach ($array9 as $row) {
    //         echo "<td>$row</td>";
    //     }
    //     echo "</tr>";
    // echo "</table>";
?>
<?php
    $inputFileName = 'data/wd1/Intensity Mean Ch=3.xls';

    //  Read your Excel workbook
    try {
        $inputFileType = PHPExcel_IOFactory::identify($inputFileName);
        $objReader = PHPExcel_IOFactory::createReader($inputFileType);
        $objPHPExcel = $objReader->load($inputFileName);
    } catch(Exception $e) {
        die('Error loading file "'.pathinfo($inputFileName, PATHINFO_BASENAME).'": '.$e->getMessage());
    }

    //  Get worksheet dimensions
    $sheet = $objPHPExcel->getSheet(0);
    $highestRow = $sheet->getHighestRow();
    $highestColumn = $sheet->getHighestColumn();    // returns a char

    // Get the column number ,i.e., convert the char to an int
    $colNumber = PHPExcel_Cell::columnIndexFromString($highestColumn);

    $subsetSeq = [];
    $j = 0;
    $comb = [];
    //  Loop through each row of the worksheet in turn
    for ($row = 3; $row <= $highestRow; $row++){
        //  Read a row of data into an array
        $rowData = $sheet->rangeToArray('A' . $row . ':' . $highestColumn . $row, NULL, TRUE, FALSE);

        for ($i=0 ; $i < $colNumber ; $i++) {
            $subsetSeq[$j] = $rowData[0][$i];
            $j++;
        }
    }

    // echo "<hr />";

    // processing to reverse all the values in associative array
    $k = array_keys($subsetSeq);

    $v = array_values($subsetSeq);

    $rv = array_reverse($v);

    $b = array_combine($k, $rv);

    $array11 = [];
    $array12 = [];
    $array11 = array_slice($b, 0, 6);
    $array12 = array_slice($b, 6, 10);

    // test
    // print_r($array12);
    // echo "<br />";
    // print_r($array11);

    // echo "<hr />";

    // output the array data into an HTML table
    // echo "<table>";
    //     echo "<tr>";
    //     foreach ($array12 as $row) {
    //         echo "<td>$row</td>";
    //     }
    //     echo "</tr>";
    //
    //     echo "<tr>";
    //     foreach ($array11 as $row) {
    //         echo "<td>$row</td>";
    //     }
    //     echo "</tr>";
    // echo "</table>";
?>
<?php
    $inputFileName = 'data/wd1/Intensity Mean Ch=4.xls';

    //  Read your Excel workbook
    try {
        $inputFileType = PHPExcel_IOFactory::identify($inputFileName);
        $objReader = PHPExcel_IOFactory::createReader($inputFileType);
        $objPHPExcel = $objReader->load($inputFileName);
    } catch(Exception $e) {
        die('Error loading file "'.pathinfo($inputFileName, PATHINFO_BASENAME).'": '.$e->getMessage());
    }

    //  Get worksheet dimensions
    $sheet = $objPHPExcel->getSheet(0);
    $highestRow = $sheet->getHighestRow();
    $highestColumn = $sheet->getHighestColumn();    // returns a char

    // Get the column number ,i.e., convert the char to an int
    $colNumber = PHPExcel_Cell::columnIndexFromString($highestColumn);

    $subsetSeq = [];
    $j = 0;
    $comb = [];
    //  Loop through each row of the worksheet in turn
    for ($row = 3; $row <= $highestRow; $row++){
        //  Read a row of data into an array
        $rowData = $sheet->rangeToArray('A' . $row . ':' . $highestColumn . $row, NULL, TRUE, FALSE);

        for ($i=0 ; $i < $colNumber ; $i++) {
            $subsetSeq[$j] = $rowData[0][$i];
            $j++;
        }
    }

    // echo "<hr />";

    // processing to reverse all the values in associative array
    $k = array_keys($subsetSeq);

    $v = array_values($subsetSeq);

    $rv = array_reverse($v);

    $b = array_combine($k, $rv);

    $array13 = [];
    $array14 = [];
    $array13 = array_slice($b, 0, 6);
    $array14 = array_slice($b, 6, 10);

    // test
    // print_r($array14);
    // echo "<br />";
    // print_r($array13);

    // echo "<hr />";

    // output the array data into an HTML table
    // echo "<table>";
    //     echo "<tr>";
    //     foreach ($array14 as $row) {
    //         echo "<td>$row</td>";
    //     }
    //     echo "</tr>";
    //
    //     echo "<tr>";
    //     foreach ($array13 as $row) {
    //         echo "<td>$row</td>";
    //     }
    //     echo "</tr>";
    // echo "</table>";
?>
<?php
    $inputFileName = 'data/wd1/Intensity Mean Ch=5.xls';

    //  Read your Excel workbook
    try {
        $inputFileType = PHPExcel_IOFactory::identify($inputFileName);
        $objReader = PHPExcel_IOFactory::createReader($inputFileType);
        $objPHPExcel = $objReader->load($inputFileName);
    } catch(Exception $e) {
        die('Error loading file "'.pathinfo($inputFileName, PATHINFO_BASENAME).'": '.$e->getMessage());
    }

    //  Get worksheet dimensions
    $sheet = $objPHPExcel->getSheet(0);
    $highestRow = $sheet->getHighestRow();
    $highestColumn = $sheet->getHighestColumn();    // returns a char

    // Get the column number ,i.e., convert the char to an int
    $colNumber = PHPExcel_Cell::columnIndexFromString($highestColumn);

    $subsetSeq = [];
    $j = 0;
    $comb = [];
    //  Loop through each row of the worksheet in turn
    for ($row = 3; $row <= $highestRow; $row++){
        //  Read a row of data into an array
        $rowData = $sheet->rangeToArray('A' . $row . ':' . $highestColumn . $row, NULL, TRUE, FALSE);

        for ($i=0 ; $i < $colNumber ; $i++) {
            $subsetSeq[$j] = $rowData[0][$i];
            $j++;
        }
    }

    // echo "<hr />";

    // processing to reverse all the values in associative array
    $k = array_keys($subsetSeq);

    $v = array_values($subsetSeq);

    $rv = array_reverse($v);

    $b = array_combine($k, $rv);

    $array15 = [];
    $array16 = [];
    $array15 = array_slice($b, 0, 6);
    $array16 = array_slice($b, 6, 10);

    // test
    // print_r($array16);
    // echo "<br />";
    // print_r($array15);

    // echo "<hr />";

    // output the array data into an HTML table
    // echo "<table>";
    //     echo "<tr>";
    //     foreach ($array16 as $row) {
    //         echo "<td>$row</td>";
    //     }
    //     echo "</tr>";
    //
    //     echo "<tr>";
    //     foreach ($array15 as $row) {
    //         echo "<td>$row</td>";
    //     }
    //     echo "</tr>";
    // echo "</table>";
?>
<?php
    if ($rowCount == 2 && $filecount == 10) {
        $inputFileName = 'data/wd1/Intensity Mean Ch=6.xls';

        //  Read your Excel workbook
        try {
            $inputFileType = PHPExcel_IOFactory::identify($inputFileName);
            $objReader = PHPExcel_IOFactory::createReader($inputFileType);
            $objPHPExcel = $objReader->load($inputFileName);
        } catch(Exception $e) {
            die('Error loading file "'.pathinfo($inputFileName, PATHINFO_BASENAME).'": '.$e->getMessage());
        }

        //  Get worksheet dimensions
        $sheet = $objPHPExcel->getSheet(0);
        $highestRow = $sheet->getHighestRow();
        $highestColumn = $sheet->getHighestColumn();    // returns a char

        // Get the column number ,i.e., convert the char to an int
        $colNumber = PHPExcel_Cell::columnIndexFromString($highestColumn);

        $subsetSeq = [];
        $j = 0;
        $comb = [];
        //  Loop through each row of the worksheet in turn
        for ($row = 3; $row <= $highestRow; $row++){
            //  Read a row of data into an array
            $rowData = $sheet->rangeToArray('A' . $row . ':' . $highestColumn . $row, NULL, TRUE, FALSE);

            for ($i=0 ; $i < $colNumber ; $i++) {
                $subsetSeq[$j] = $rowData[0][$i];
                $j++;
            }
        }

        // echo "<hr />";

        // processing to reverse all the values in associative array
        $k = array_keys($subsetSeq);

        $v = array_values($subsetSeq);

        $rv = array_reverse($v);

        $b = array_combine($k, $rv);

        $array17 = [];
        $array18 = [];
        $array17 = array_slice($b, 0, 6);
        $array18 = array_slice($b, 6, 10);

        // test
        // print_r($array18);
        // echo "<br />";
        // print_r($array17);

        // echo "<hr />";

        // output the array data into an HTML table
        // echo "<table>";
        //     echo "<tr>";
        //     foreach ($array18 as $row) {
        //         echo "<td>$row</td>";
        //     }
        //     echo "</tr>";
        //
        //     echo "<tr>";
        //     foreach ($array17 as $row) {
        //         echo "<td>$row</td>";
        //     }
        //     echo "</tr>";
        // echo "</table>";
    }
    // else {
    //     echo "<hr /><p>There exists no file for Intensity Mean Ch = 6</p>" ;
    // }
?>

<?php
    echo "<hr />";
    echo "<p>Combining values from individual tables above:</p>";
    // this segment of the sript is meant to combine the individual arrays into a single table
    echo "<table id=\"table_wd1\">";
        // all the row/column processing code goes here
        if ($rowCount == 2 && $filecount == 9) {
            echo "<thead>";
            echo "<tr>";
                echo "<th>ID</th>";
                echo "<th>Area</th>";
                echo "<th>Volume</th>";
                echo "<th>Sphericity</th>";
                echo "<th>intensity Mean Ch = 1</th>";
                echo "<th>intensity Mean Ch = 2</th>";
                echo "<th>intensity Mean Ch = 3</th>";
                echo "<th>intensity Mean Ch = 4</th>";
                echo "<th>intensity Mean Ch = 5</th>";
                echo "<th>intensity Mean Ch = 6</th>";
            echo "</tr>";
            echo "</thead>";

            echo "<tr>";
                echo "<td>$array2[0]</td>";
                echo "<td>$array2[4]</td>";
                echo "<td>$array4[4]</td>";
                echo "<td>$array6[4]</td>";
                echo "<td>$array8[5]</td>";
                echo "<td>$array10[5]</td>";
                echo "<td>$array12[5]</td>";
                echo "<td>$array14[5]</td>";
                echo "<td>$array16[5]</td>";
                echo "<td>$array18[5]</td>";
            echo "</tr>";
                echo "<td>$array1[0]</td>";
                echo "<td>$array1[4]</td>";
                echo "<td>$array3[4]</td>";
                echo "<td>$array5[4]</td>";
                echo "<td>$array7[5]</td>";
                echo "<td>$array9[5]</td>";
                echo "<td>$array11[5]</td>";
                echo "<td>$array13[5]</td>";
                echo "<td>$array15[5]</td>";
                echo "<td>$array17[5]</td>";
        } elseif ($rowCount == 1) {
            // all the row/column processing code goes here
            echo "<thead>";
            echo "<tr>";
                echo "<th>ID</th>";
                echo "<th>Area</th>";
                echo "<th>Volume</th>";
                echo "<th>Sphericity</th>";
                echo "<th>intensity Mean Ch = 1</th>";
                echo "<th>intensity Mean Ch = 2</th>";
                echo "<th>intensity Mean Ch = 3</th>";
                echo "<th>intensity Mean Ch = 4</th>";
                echo "<th>intensity Mean Ch = 5</th>";
            echo "</tr>";
            echo "</thead>";

                echo "<td>$array1[0]</td>";
                echo "<td>$array1[4]</td>";
                echo "<td>$array3[4]</td>";
                echo "<td>$array5[4]</td>";
                echo "<td>$array7[5]</td>";
                echo "<td>$array9[5]</td>";
                echo "<td>$array11[5]</td>";
                echo "<td>$array13[5]</td>";
                echo "<td>$array15[5]</td>";
        } elseif ($rowCount == 2 && $filecount == 8) {
            echo "<thead>";
            echo "<tr>";
                echo "<th>ID</th>";
                echo "<th>Area</th>";
                echo "<th>Volume</th>";
                echo "<th>Sphericity</th>";
                echo "<th>intensity Mean Ch = 1</th>";
                echo "<th>intensity Mean Ch = 2</th>";
                echo "<th>intensity Mean Ch = 3</th>";
                echo "<th>intensity Mean Ch = 4</th>";
                echo "<th>intensity Mean Ch = 5</th>";
            echo "</tr>";
            echo "</thead>";

            echo "<tr>";
                echo "<td>$array2[0]</td>";
                echo "<td>$array2[4]</td>";
                echo "<td>$array4[4]</td>";
                echo "<td>$array6[4]</td>";
                echo "<td>$array8[5]</td>";
                echo "<td>$array10[5]</td>";
                echo "<td>$array12[5]</td>";
                echo "<td>$array14[5]</td>";
                echo "<td>$array16[5]</td>";
            echo "</tr>";
                echo "<td>$array1[0]</td>";
                echo "<td>$array1[4]</td>";
                echo "<td>$array3[4]</td>";
                echo "<td>$array5[4]</td>";
                echo "<td>$array7[5]</td>";
                echo "<td>$array9[5]</td>";
                echo "<td>$array11[5]</td>";
                echo "<td>$array13[5]</td>";
                echo "<td>$array15[5]</td>";
        }
    echo "</table>";
    echo "<br />";
?>

<?php
    // PHP script to apply styles to the table
    echo "<style>";
    echo "
        p {
            font-family: Josefin Sans;
            font-weight: bold;
        }
        table {
            font-family: Josefin Sans;
        }
        th {
            background-color: yellow;
            font-weight: bold;
        }
        th, tr, td {
            border: 2px solid black;
            padding: 10px 10px 10px 10px;
            font-family: Josefin Sans;
        }

        th, td {
            height: 30px;
            font-family: Josefin Sans;
        }";
    echo "</style>";

    echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"//fonts.googleapis.com/css?family=Josefin+Sans\" />";
    echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"css/main.css\" />";
    echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"css/admin_.css\" />";
    echo "<head><title>Processed Worksheets</title></head>";
?>

<!DOCTYPE HTML>
<!-- including all the necessary libraries -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="../includes/TableExport/tableExport.js"></script>
<script type="text/javascript" src="../includes/TableExport/jquery.base64.js"></script>
<!-- <button  onclick="tablesToExcel(['table_wd1'], ['TableFromWD1'], 'TableFromWD1.xls', 'Excel')">Export to Excel</button> -->
<button  onclick="$('#table_wd1').tableExport({type:'excel', escape:'false', fileName: 'TableWD1'});">Export to Excel</button>
<hr />
