<?php 

    if(isset($_POST['btn-send']))
    {
       $UserName = $_POST['UName'];
       $Email = $_POST['Email'];
       $Subject = $_POST['Subject'];
       $Msg = $_POST['msg'];

       if(empty($UserName) || empty($Email) || empty($Subject) || empty($Msg))
       {
           header('location:kontakt.php?error');
       }
       else
       {
           $to = "admin@lepotazdravlje.com";

           if(mail($to,$Subject,$Msg,$Email))
           {
               header("location:kontakt.php?success");
           }
       }
    }
    else
    {
        header("location:kontakt.php");
    }
?>