<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CUSTOMERS</title>
</head>

<body>
<h1> <b> DATA CUSTOMERS </b></h1>
<table border="1">
        <tr>
            <th>Customer Number</th>
            <th>Customer Name</th>
            <th>Contact Last Name</th>
            <th>Contact First Name</th>
            <th>Phone</th>
            <th>Address Line 1</th>
            <th>Address Line 2</th>
            <th>city</th>
            <th>State</th>
            <th>Postal Code</th>
            <th>Country</th>
            <th>salesRepEmployeeNumber</th>
            <th>Credit Limit</th>
        </tr>

        <?php
        include "conn.php";

        $sql=$conn->prepare("SELECT * FROM customers");
        $sql->execute();
    
        while ($tampil = $sql->fetch(PDO::FETCH_ASSOC)){
            echo "
        <tr>
            <td>$tampil[customerNumber]</td>
            <td>$tampil[customerName]</td>
            <td>$tampil[contactLastName]</td>
            <td>$tampil[contactFirstName]</td>
            <td>$tampil[phone]</td>
            <td>$tampil[addressLine1]</td>
            <td>$tampil[addressLine2]</td>
            <td>$tampil[city]</td>
            <td>$tampil[state]</td>
            <td>$tampil[postalCode]</td>
            <td>$tampil[country]</td>
            <td>$tampil[salesRepEmployeeNumber]</td>
            <td>$tampil[creditLimit]</td>
        </tr>";

    }
?>

</body>
</html>



