<?php
 if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $to = "hzaidi852@gmail.com";
    $header = "From: $email";

    if(mail($to,$subject,$message,$header))
    {
      header('Location: response.html');
    }
    else{
      echo "<script>
      alert('Server Error');
      window.location.assign('index.php');
      </script>
      
      ";
    }

 }
?>