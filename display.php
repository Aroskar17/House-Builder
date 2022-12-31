<?php
$conn = mysqli_connect("localhost", "root", "", "onlinebuilder");
if ($conn) echo "";
    else 
        echo "<br>Connection failed";
    $q1 = "SELECT * FROM users";
    $q2 = "SELECT * FROM orders";
    $qr = mysqli_query($conn, $q1);
    $r1 = mysqli_query($conn, $q2);
    echo "<h1>User Information</h1>";
    if ($qr) {
    while ($info = mysqli_fetch_array($qr)) {
        echo "<br><br>Username " . $info['uname'];
        echo " <br>Email_ID is " . $info['emailid'];
        echo "<br>Password is " . $info['pwd'];
    }
} 
    else
        echo "error in display operation";
    echo "<h1>Orders Information</h1>";
if ($r1) {
    while ($info = mysqli_fetch_array($r1)) {
        echo "<br><br>Username " . $info['uname'];
        echo " <br>House_ID is " . $info['houseid'];
        echo "<br>Dimension is " . $info['dimension'];
        echo "<br>Price is " . $info['price'];
    }
} 
    else echo "error in display operation";
    $qr = mysqli_query($conn, $q2);
?>
