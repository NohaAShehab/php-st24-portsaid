<?php

include 'base.php';

generatetitle("Read data from file" , 'green');

function read_data($filename){
    # 1- file name ?
    # 2- mode of file
    # if file doesn't exist --> warning >>
    $fileobj=fopen($filename, 'r');
    var_dump($fileobj);
    var_dump(is_resource($fileobj));

    # to read data
    if($fileobj){
        # 1- get file size ?
        generatetitle("read file in string",'blue', 3);
        $size = filesize($filename);
//        var_dump($size); # 44 byte
//        # 2- read content of file
        $data = fread($fileobj, $size);
        var_dump($data); # read data into one string


        # reset cursor to the beginning of the file
        generatetitle("reset cursor",'red', 3);
        fseek($fileobj, 10);


        # read data line by line ?
        generatetitle("read line by line",'purple', 3);
//
        while(!feof($fileobj)){
            $line = fgets($fileobj);
            var_dump($line);
        }

        # close file
        fclose($fileobj);
    }

}

//read_data('students.txt');

###################################################
generatetitle("readfile function");

readfile('students.txt');

generatetitle("fget content" , 'blue', 3);
$data=file_get_contents('students.txt');
var_dump($data);


#########################################

generatetitle("using file function", 'darkred');

$data = file('students.txt');
var_dump($data);  # read file content to an array
generatetitle("explode string",'green',4);
# convert data to fields
$data_table = [];
foreach($data as $row){
    # remove \n
    $row=trim($row);
//    var_dump($row);
    $row_data = explode(":", $row);
//    var_dump($row_data);
    # add data to the datatable
    array_push($data_table, $row_data);

}
generatetitle("display datatable",'green',4);
var_dump($data_table);
function displaydatatable($anyarray)
{
    echo "<table class='table'>
        <tr><th>ID</th><th>Name</th></tr>";
        foreach($anyarray as $rowvals){
            # first option
//            echo "<tr>
//              <td> {$rowvals[0]}</td>
//              <td> {$rowvals[1]}</td>
//            </tr>";

            # second option ??
            echo "<tr>";
            foreach ($rowvals as $val){
                echo "<td>$val</td>";
            }
            echo "</tr>";

        }

    echo "</table>";
}


displaydatatable($data_table);
//









