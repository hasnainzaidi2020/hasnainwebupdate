<?php
 if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    echo $name . $email . $subject .$message;

    
    if(mail('hzaidi852@gmail.com',$subject,$message,$email))
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