<?php

    //  Include PHPExcel_IOFactory
    include '../includes/PHPExcel/Classes/PHPExcel.php';

    $inputFileNameHc = 'data/Area.xls';

    function excel_to_array($inputFileName, $row_callback=null){
        if (!class_exists('PHPExcel')) return false;
        try {
            $inputFileType = PHPExcel_IOFactory::identify($inputFileName);
            $objReader = PHPExcel_IOFactory::createReader($inputFileType);
            $objPHPExcel = $objReader->load($inputFileName);
        } catch(Exception $e) {
            return ('Error loading file "'.pathinfo($inputFileName,PATHINFO_BASENAME).'": '.$e->getMessage());
        }
        $sheet = $objPHPExcel->getSheet(0);
        $highestRow = $sheet->getHighestRow();
        $highestColumn = $sheet->getHighestColumn();
        $keys = array();
        $results = array();
        if(is_callable($row_callback)){
            for ($row = 1; $row <= $highestRow; $row++){
                $rowData = $sheet->rangeToArray('A' . $row . ':' . $highestColumn . $row,null,true,false);
                if ($row === 1){
                    $keys = $rowData[0];
                } else {
                    $record = array();
                    foreach($rowData[0] as $pos=>$value) $record[$keys[$pos]] = $value;
                    $row_callback($record);
                }
            }
        } else {
            for ($row = 1; $row <= $highestRow; $row++){
                $rowData = $sheet->rangeToArray('A' . $row . ':' . $highestColumn . $row,null,true,false);
                if ($row === 1){
                    $keys = $rowData[0];
                } else {
                    $record = array();
                    foreach($rowData[0] as $pos=>$value) $record[$keys[$pos]] = $value;
                    $results[] = $record;
                }
            }
            return $results;
        }
    }

    print_r(excel_to_array($inputFileNameHc)[2]["Area"]);
    echo "<br /><br />";

    $array = excel_to_array($inputFileNameHc);

    foreach ($array as $key => $value) {
        print_r($value);
        echo "<br />";
    }
?>
