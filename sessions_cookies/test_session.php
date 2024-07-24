<?php

include '../base.php';

# session ---> per browser ??

generatetitle("check if server knows me or not ?? ");

session_start();

print_r($_SESSION);