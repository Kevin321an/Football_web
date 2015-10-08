<?php
  //Handle the form
  function validateFeedbackForm($arr) {
    extract($arr);

    if(!isset($name, $email)) return;

    if(!$name) {
      return "Please enter your name";
    }

    if(!preg_match("/^\S+@\S+$/", $email)) {
      return "Please enter a valid email address";
    }
  }

  if(isset($_POST['order'])) {
    $errorMsg = validateFeedbackForm($_POST);
  }
?>

<?php
$name = $_POST['name'];
$street = $_POST['street'];
$city = $_POST['city'];
$province = $_POST['province'];
$telephone = $_POST['telephone'];
$Postal = $_POST['Postal'];

$email = $_POST['email'];
//Pizza Size
if (isset($_POST['sizeOption']))   
  $size = $_POST['sizeOption'];    
else
  echo "nothing was selected.";

//Crus Type
if (isset($_POST['typeOption']))   
  $stype = $_POST['typeOption'];    
  echo "nothing was selected.";

//Topping
header("Content-Type: text/plain");
foreach ($_GET['topping'] as $selectedOption)
    $topping = $selectedOption;




$fp = fopen("formdata.txt", "a");
$savestring = $name . "," . $street . "," . $city . "," . $province . "," . $telephone . "," . $Postal . "," . $email . "," . $size . "," . $stype . "," . $topping . "n";
fwrite($fp, $savestring);
fclose($fp);
header('Location: ' . $_SERVER['HTTP_REFERER']);
?>

