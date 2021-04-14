<?php 

    if(isset($_POST['btn-send']))
    {

       $Email = $_POST['email'];

       if(empty(empty($Email) )
       {
           header('location:Unt.php?error');
       }
       else
       {
           $to = "nisp@gift.edu.in";

           if(mail($Email)
           {
               header("location:Unt.php?success");
           }
       }
    }
    else
    {
        header("location:Unt.php");
    }
?> 