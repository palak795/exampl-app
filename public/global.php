
<!DOCTYPE html>

<html>

<body>

<h1> php Super Global Functions </h1>
<br>

<br>
<h2> PHP Superglobal - $_SERVER </h2>

<br>


<?php

echo "<I>";

echo " <h3> PHP_SELF </h3> ";

echo $_SERVER['PHP_SELF'];

echo "<br>";

echo "<br>";


echo " <h3> SERVER_NAME </h3> ";

echo $_SERVER['SERVER_NAME'];

echo "<br>";

echo "<br>";


echo " <h3> HTTP_HOST </h3> ";

echo $_SERVER['HTTP_HOST'];

echo "<br>";

echo "<br>";


echo " <h3> HTTP_REFERER </h3> ";

echo $_SERVER['HTTP_REFERER'];

echo "<br>";

echo "<br>";


echo " <h3> HTTP_USER_AGENT </h3> ";

echo $_SERVER['HTTP_USER_AGENT'];

echo "<br>";

echo "<br>";


echo " <h3> SCRIPT_NAME </h3> ";

echo $_SERVER['SCRIPT_NAME'];

echo "<br>";

echo "<br>";

echo "</I>";

?>

<h2> PHP $_POST </h2>


<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">

  Student_Name: <input type="text" name="studentname">


  <input type="submit">

</form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {


    // collect value of input field
    $name = $_POST['studentname'];

    if (empty($name)) {

        echo "Student Name is empty";

    }

     else {


        echo $name;

        echo "<br>";

        echo "<br>";

    }

}

?>



<h2> PHP $GLOBALS </h2>


<?php 

$x = 275;

$y = 325; 

function addition() {


  $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];


}


addition();


echo $z;

echo "<br>";

echo "<br>";

?>




<h2> PHP Superglobal - $_REQUEST </h2>


<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">


  Name: <input type="text" name="fname">


  <input type="submit">


</form>

<?php

echo "<br>";

echo "<br>";

echo "<br>";


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // collect value of input field

    $name = htmlspecialchars($_REQUEST['fname']);


    if (empty($name)) {

        echo "Name is empty";

    }

     else {

        echo $name;
    }

}

?>


</body>

</html>



<h1> Regular Expression Functions </h1>

<br> 

<br> 

<!DOCTYPE html>

<html>

<body>

<h3> preg_match </h3>	

<?php

$str = "Visit W3Schools";

$pattern = "/w3schools/i";

echo preg_match($pattern, $str);

?>


<h3> preg_match_all </h3>

<?php

$str = "The rain in SPAIN falls mainly on the plains.";

$pattern = "/ain/i";

echo preg_match_all($pattern, $str);

?>


<h3> preg_replace </h3>

<?php

$str = "Visit Microsoft!";

$pattern = "/microsoft/i";

echo preg_replace($pattern, "W3Schools", $str);


?>


</body>

</html>




