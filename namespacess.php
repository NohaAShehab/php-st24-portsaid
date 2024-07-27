<?php
include 'base.php';
include 'file1.php';
include 'file2.php';

echo "hii";

$e = new Employee();

# to use Employee of f1

use f1\Employee;

$e2 = new f1\Employee();
