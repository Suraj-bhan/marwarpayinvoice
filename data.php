<?php

// Demand a GET parameter
if ( ! isset($_GET['name']) || strlen($_GET['name']) < 1  ) {
    die('Name parameter missing');
}

// If the user requested logout go back to index.php
if ( isset($_POST['logout']) ) {
    header('Location: index.php');
    return;
}

?>

<!DOCTYPE html>
<html>
<head>
<title>Marwarpay Invoice</title>
<?php require_once "bootstrap.php"; ?>

</head>
<body>
<div class="container">
<h1>Welcome to Marwarpay Info Solutions Pvt. ltd </h1>

<?php
if ( isset($_REQUEST['name']) ) {
    echo "<p>Welcome: ";
    echo htmlentities($_REQUEST['name']);
    echo "</p>\n";
}
?>

<form action="invoice.php" method="POST" >
Bill Type:
<input type="text" name="bill"><br><br>
Buyer Name:
<input type="text" name="buyer"><br><br>
Buyer Address: 
<p><textarea name="address" rows="3" cols="40" style="resize: none;"></textarea></p>
Dealer Code (Member ID):
<input type="text" name="d_code"><br><br>
Buyer's PAN No:
<input type="text" name="b_pan_num"><br><br>
Buyer's GST No:
<input type="text" name="b_gst_num"><br><br>

Mode/Terms of Payment:
<select name="payment">
<option value="--">Select</option>
<option value="Google Pay">Google Pay</option>
<option value="PhonePe">PhonePe</option>
<option value="Net Banking">Net Banking</option>
<option value="Online Payment">Online Payment</option>
</select><br><br>
Place Of Supply:
<input type="text" name="place"><br><br>

<input type="submit" name="submit" value="Submit">
<input type="submit" name="logout" value="Logout">
</form>


</div>
</body>
</html>
