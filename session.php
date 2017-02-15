<?php
session_start();

   if(isset($_POST["nickName"])){
       $_SESSION['nickName'] = $_POST["nickName"];
   }

       if( !isset($_SESSION["nickName"])) { // start of if
?>
           <form action="" method="post">
               Enter Your Nick Name:
               <input type="text" name="nickName">

               <input type="submit">
           </form>
<?php
       }// end of if

    else{
        echo "Welcome ".$_SESSION['nickName']."!";
    }
?>
