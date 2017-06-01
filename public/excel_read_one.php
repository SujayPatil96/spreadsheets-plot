<?php

    //  Include PHPExcel_IOFactory
    include '../includes/PHPExcel/Classes/PHPExcel.php';

    $inputFileName = 'data/one_row/Area.xls';

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

    echo "The number of rows in the excel sheet is: " . $highestRow  . "<br />";

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

        // print_r($rowData[0]);
        // echo "<br />";

        for ($i=0 ; $i < $colNumber ; $i++) {
            $subsetSeq[$j] = $rowData[0][$i];
            $j++;
        }
    }

    echo "<hr />";

    // processing to reverse all the values in associative array
    $k = array_keys($subsetSeq);

    $v = array_values($subsetSeq);

    $rv = array_reverse($v);

    $b = array_combine($k, $rv);

    $array1 = [];
    $array2 = [];
    $array1 = array_slice($b, 0, 5);
    $array2 = array_slice($b, 5, 9);

    print_r($array2);
    echo "<br />";
    print_r($array1);

    echo "<hr />";

    // output the array data into an HTML table
    echo "<table>";
        echo "<tr>";
        foreach ($array2 as $row) {
            echo "<td>$row</td>";
        }
        echo "</tr>";

        echo "<tr>";
        foreach ($array1 as $row) {
            echo "<td>$row</td>";
        }
        echo "</tr>";
    echo "</table>";
?>

<?php
    $inputFileName = 'data/one_row/Volume.xls';

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

    echo "<hr />";

    // processing to reverse all the values in associative array
    $k = array_keys($subsetSeq);

    $v = array_values($subsetSeq);

    $rv = array_reverse($v);

    $b = array_combine($k, $rv);

    $array3 = [];
    $array4 = [];
    $array3 = array_slice($b, 0, 5);
    $array4 = array_slice($b, 5, 9);

    print_r($array4);
    echo "<br />";
    print_r($array3);

    echo "<hr />";

    // output the array data into an HTML table
    echo "<table>";
        echo "<tr>";
        foreach ($array4 as $row) {
            echo "<td>$row</td>";
        }
        echo "</tr>";

        echo "<tr>";
        foreach ($array3 as $row) {
            echo "<td>$row</td>";
        }
        echo "</tr>";
    echo "</table>";
?>

<?php
    $inputFileName = 'data/one_row/Sphericity.xls';

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

    echo "<hr />";

    // processing to reverse all the values in associative array
    $k = array_keys($subsetSeq);

    $v = array_values($subsetSeq);

    $rv = array_reverse($v);

    $b = array_combine($k, $rv);

    $array5 = [];
    $array6 = [];
    $array5 = array_slice($b, 0, 5);
    $array6 = array_slice($b, 5, 9);

    print_r($array6);
    echo "<br />";
    print_r($array5);

    echo "<hr />";

    // output the array data into an HTML table
    echo "<table>";
        echo "<tr>";
        foreach ($array6 as $row) {
            echo "<td>$row</td>";
        }
        echo "</tr>";

        echo "<tr>";
        foreach ($array5 as $row) {
            echo "<td>$row</td>";
        }
        echo "</tr>";
    echo "</table>";
?>

<?php
    $inputFileName = 'data/one_row/Intensity Mean Ch=1.xls';

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

    echo "<hr />";

    // processing to reverse all the values in associative array
    $k = array_keys($subsetSeq);

    $v = array_values($subsetSeq);

    $rv = array_reverse($v);

    $b = array_combine($k, $rv);

    $array7 = [];
    $array8 = [];
    $array7 = array_slice($b, 0, 6);
    $array8 = array_slice($b, 6, 10);

    print_r($array8);
    echo "<br />";
    print_r($array7);

    echo "<hr />";

    // output the array data into an HTML table
    echo "<table>";
        echo "<tr>";
        foreach ($array8 as $row) {
            echo "<td>$row</td>";
        }
        echo "</tr>";

        echo "<tr>";
        foreach ($array7 as $row) {
            echo "<td>$row</td>";
        }
        echo "</tr>";
    echo "</table>";
?>
<?php
    $inputFileName = 'data/one_row/Intensity Mean Ch=2.xls';

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

    echo "<hr />";

    // processing to reverse all the values in associative array
    $k = array_keys($subsetSeq);

    $v = array_values($subsetSeq);

    $rv = array_reverse($v);

    $b = array_combine($k, $rv);

    $array9 = [];
    $array10 = [];
    $array9 = array_slice($b, 0, 6);
    $array10 = array_slice($b, 6, 10);

    print_r($array10);
    echo "<br />";
    print_r($array9);

    echo "<hr />";

    // output the array data into an HTML table
    echo "<table>";
        echo "<tr>";
        foreach ($array10 as $row) {
            echo "<td>$row</td>";
        }
        echo "</tr>";

        echo "<tr>";
        foreach ($array9 as $row) {
            echo "<td>$row</td>";
        }
        echo "</tr>";
    echo "</table>";
?>
<?php
    $inputFileName = 'data/one_row/Intensity Mean Ch=3.xls';

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

    echo "<hr />";

    // processing to reverse all the values in associative array
    $k = array_keys($subsetSeq);

    $v = array_values($subsetSeq);

    $rv = array_reverse($v);

    $b = array_combine($k, $rv);

    $array11 = [];
    $array12 = [];
    $array11 = array_slice($b, 0, 6);
    $array12 = array_slice($b, 6, 10);

    print_r($array12);
    echo "<br />";
    print_r($array11);

    echo "<hr />";

    // output the array data into an HTML table
    echo "<table>";
        echo "<tr>";
        foreach ($array12 as $row) {
            echo "<td>$row</td>";
        }
        echo "</tr>";

        echo "<tr>";
        foreach ($array11 as $row) {
            echo "<td>$row</td>";
        }
        echo "</tr>";
    echo "</table>";
?>
<?php
    $inputFileName = 'data/one_row/Intensity Mean Ch=4.xls';

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

    echo "<hr />";

    // processing to reverse all the values in associative array
    $k = array_keys($subsetSeq);

    $v = array_values($subsetSeq);

    $rv = array_reverse($v);

    $b = array_combine($k, $rv);

    $array13 = [];
    $array14 = [];
    $array13 = array_slice($b, 0, 6);
    $array14 = array_slice($b, 6, 10);

    print_r($array14);
    echo "<br />";
    print_r($array13);

    echo "<hr />";

    // output the array data into an HTML table
    echo "<table>";
        echo "<tr>";
        foreach ($array14 as $row) {
            echo "<td>$row</td>";
        }
        echo "</tr>";

        echo "<tr>";
        foreach ($array13 as $row) {
            echo "<td>$row</td>";
        }
        echo "</tr>";
    echo "</table>";
?>
<?php
    $inputFileName = 'data/one_row/Intensity Mean Ch=5.xls';

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

    echo "<hr />";

    // processing to reverse all the values in associative array
    $k = array_keys($subsetSeq);

    $v = array_values($subsetSeq);

    $rv = array_reverse($v);

    $b = array_combine($k, $rv);

    $array15 = [];
    $array16 = [];
    $array15 = array_slice($b, 0, 6);
    $array16 = array_slice($b, 6, 10);

    print_r($array16);
    echo "<br />";
    print_r($array15);

    echo "<hr />";

    // output the array data into an HTML table
    echo "<table>";
        echo "<tr>";
        foreach ($array16 as $row) {
            echo "<td>$row</td>";
        }
        echo "</tr>";

        echo "<tr>";
        foreach ($array15 as $row) {
            echo "<td>$row</td>";
        }
        echo "</tr>";
    echo "</table>";
?>

<?php

    echo "<hr />";
    echo "<p>Combining values from individual tables above:</p>";
    // this segment of the sript is meant to combine the individual arrays into a single table
    echo "<table>";
        // all the row/column processing code goes here
        echo "<tr>";
            echo "<th>ID</th>";
            echo "<th>Area</th>";
            echo "<th>Sphericity</th>";
            echo "<th>Volume</th>";
            echo "<th>intensity Mean Ch = 1</th>";
            echo "<th>intensity Mean Ch = 2</th>";
            echo "<th>intensity Mean Ch = 3</th>";
            echo "<th>intensity Mean Ch = 4</th>";
            echo "<th>intensity Mean Ch = 5</th>";
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
    echo "</table>";
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
?>
