<?php
$host = "localhost";
$database = "connectivit";
$user = "root";
$password = "";
$connection = mysqli_connect($host, $user, $password, $database);
$error = mysqli_connect_error();
function function_alert($message) {
      
    echo "<script>alert('$message');</script>";
}
if($error != null)
{
  $output = "<p>Unable to connect to database!</p>";
  exit($output);
}
else
{
    if(!empty($_POST))
    {
        $fname = $_REQUEST['firstName'];
        $lname = $_REQUEST['lastName'];
        $city = $_REQUEST['city'];
        $email = $_REQUEST['email'];
        $address = $_REQUEST['firstAddress'];
        $postalCode = $_REQUEST['postalCode'];
        $phoneNumber = $_REQUEST['phone'];
        $province = $_REQUEST['province'];
        $sql1 = "INSERT INTO volunteers VALUES ('$city', '$fname', '$lname', '$email', '$address', '$postalCode', '$phoneNumber', '$province')";
        if(mysqli_query($connection,$sql1))
        {
            echo '<script type="text/javascript">
                alert("Thank your for the request, we will get back to you soon!");
                location="volunteer.html";
                </script>';
        }
        else
        {
            echo "Error ". mysqli_error($connection);
        }
    }
    
}
?>