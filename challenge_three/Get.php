<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

if(isset($_POST['btn-get']))
{
         include 'db-data.php';// ~ connect to db and account obj

         $id = $_POST['id'];
         
            if($data->getStuff($id)){
                echo $data->getStuff($id);
                   
            }else{
                $msg = $error = true; 
                echo "error";
            }
}

?>
<html>
<body>
    <form method="post">
        <input type="text" class="" name="id" placeholder="id" value="" maxlength="45"/>
         <input type="submit" name="btn-get" value="Get Data">
    </form>
    
    
    
    <h1>Enter Country</h1>
<?php
if ( 'post' === strtolower($_SERVER['REQUEST_METHOD'])) {
   if(isset($_POST['country']))
    {
       $c = $_POST['country'];
   }
?>
    <h2><?php echo file_get_contents('http://universities.hipolabs.com/search?country='.$c); ?></h2>
<?php
} else {
    ?>
    <form method="post">
        <input type="text" class="" name="country" placeholder="country" value="" maxlength="45"/>
         <input type="submit" value="Get Universities">
    </form>
<?php
}?>
</body>
</html>