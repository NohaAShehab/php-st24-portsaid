<?php


include 'base.php';

generatetitle("Write data to file" , 'green');

# when you try to open file
# with write mode ??
# if file doesn't exist >>
# php will try to create it.

# w mode --> open file from the beginning
# remove old content

function save_data($filename){

    $fileobj = fopen($filename, "w");
    var_dump($fileobj);
    if($fileobj){
        ## save data to the file ?
        fwrite($fileobj, "Ahmed\nAli\n");
        fwrite($fileobj, "Bob\n");
        fwrite($fileobj, "Fred\n");
        fclose($fileobj);
    }

    readfile('users.txt');
}


//save_data("users.txt");


generatetitle("using fputcontent");
file_put_contents('users.txt',"iti");


file_put_contents('users.txt',
['Ahmed\n','Mohamed\n', 'Ali\n']);

readfile('users.txt');









