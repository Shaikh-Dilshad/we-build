<?php 
include('insert.php');
$msg = '';
if(isset($_POST['submit'])){
   $product_name=$_POST['product_name'];
   $product_price=$_POST['product_price'];
   $_SESSION['ADD'] = ' ';  //to run my if statement which is in mian.php
//    $car_name = $_POST['cars'];
   $target_dir="images/";
   $target_file=$target_dir.basename($_FILES['product_image']['name']); //its means images/which ever is select from input and its name is equal to $targer file
   move_uploaded_file($_FILES['product_image']['tmp_name'],$target_file); //its query which upload image on images directory

   
    if($_POST['cars'] == 'Recently'){
   $sql = "INSERT INTO productdata(product_name,product_price,product_image) VALUE('$product_name','$product_price','$target_file')";
   mysqli_query($conn , $sql);
}
elseif ($_POST['cars'] == 'bestseller') {
   $sql = "INSERT INTO bestsellerdb(product_name,product_price,product_image) VALUE('$product_name','$product_price','$target_file')";
   mysqli_query($conn , $sql);
    
}
elseif ($_POST['cars'] == 'under500') {
    $sql = "INSERT INTO under500db(product_name,product_price,product_image) VALUE('$product_name','$product_price','$target_file')";
    mysqli_query($conn , $sql);
     
 }
}

echo "<script>
window.location.href='main.php'
</script>";

?>
