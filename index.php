<?php

//setcookie("customerid","1234567890", time()+60*60*24);
//echo $_COOKIE["customerid"];
//$cusid = $_COOKIE["customerid"];


//if ($_POST) {
    
//    echo $_POST["quantity"];
//    $quant = $_POST["quantity"];

    $link=mysqli_connect("sdb-54.hosting.stackcp.net","database_1-353030360618","b383n9a2eb","database_1-353030360618");
    echo mysqli_connect_error();
    
//    $query = "INSERT INTO `users` (`cookie_id`, `date` , `success`) VALUES ($cusid, CURRENT_DATE, $quant )";
    
//    mysqli_query($link,$query);
    
    $query = "SELECT count(*), sum(`success`) FROM `users` WHERE `cookie_id` = '1234567890'";
    
    if ($result=mysqli_query($link,$query)) {
        while($arr=mysqli_fetch_array($result)) {
            echo $arr[1]/$arr[0];
        }
    }

//}

?>

<form>
  <label for="quantity">Quantity (between 0 and 10):</label>
  <input type="number" id="quantity" name="quantity" min="0" max="10">
  <input type="submit" value="Submit" formmethod="post">
</form>
<p>Your average number is </p>

<?php echo file_get_contents("html/header.html"); ?>
<?php echo file_get_contents("html/body.html"); ?>
<?php echo file_get_contents("html/footer.html"); ?>
<p>Copyright © I McDonald <?php echo date("Y"); ?></p> 
