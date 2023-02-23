
<?php  
$servername = 'localhost:4306';
$username = 'root';
$password = '';
$dbname = 'orderdb';
$conn = mysqli_connect($servername, $username, $password,$dbname);
$firstname=$_POST['name'];
$lastname=$_POST['lastname'];
$company=$_POST['companyname'];
$number=$_POST['mobile'];
$email=$_POST['email'];
$country=$_POST['country'];
$address=$_POST['address'];
$city=$_POST['city'];
$region=$_POST['region'];
$zipcode=$_POST['zipcode'];
$item_name = $_POST['item_name'];
$price=$_POST['price'];
$sql = "INSERT INTO `orderdetails`(`cname`,`clastname`,`companyname`,`number`,`email`,`country`,`address`,`city`,`state`,`zipcode`,`product_name`,`product_price`) VALUES('$firstname','$lastname','$company','$number','$email','$country','$address','$city','$region','$zipcode','$item_name','$price')";

mysqli_query($conn , $sql);

echo "
    
    <script>
    window.location.href='soon.php'
    </script>
";

?>  