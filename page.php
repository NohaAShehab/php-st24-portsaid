<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>

    <style>
        body{
            background-color: burlywood;
        }
    </style>


</head>
<body>
    <h1 style="text-align: center; color: green;"> Home page  </h1>

    <h2>Part 01  </h2>
    <p> Any content </p>

    <?php 
         echo "Welcome to your first php line ";

         echo "<h1> this h1 </h1>";

         # this is a comment 
         // this is another comment 
         /**
          * this is a multi-line comment
          *
          */
         echo "<h1 style='color:red;text-align:center;'> Hello world </h1> ";
         
         echo 'Hello';
         echo 'world';


         echo  "<hr style:'color:black;'>";

         echo 'hello\n';
         echo 'world';

         echo '<hr>';

         echo 'hello<br>';
         echo 'world';

         echo "<h3>Now, It is ";
         echo date('H:i , jS F Y');
         echo "</h3>"; 
    ?>

<!-- 
    <script> 
        alert("welcome to first php page")
    </script>  -->


</body>
</html>