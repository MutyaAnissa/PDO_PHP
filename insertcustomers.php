<?php
include "conn.php";

$status = '';

if (isset($_POST['proses'])) {
    $customerNumber = $_POST['customerNumber'];
    $customerName = $_POST['customerName'];
    $contactLastName = $_POST['contactLastName'];
    $contactFirstName = $_POST['contactFirstName'];
    $phone = $_POST['phone'];
    $addressLine1 = $_POST['addressLine1'];
    $addressLine2 = $_POST['addressLine2'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $postalCode = $_POST['postalCode'];
    $country = $_POST['country'];
    $salesRepEmployeeNumber = $_POST['salesRepEmployeeNumber'] ?: null; // if salesRepEmployeeNumber is not set, set it to null

    $sql = "INSERT INTO customers (customerNumber, customerName, contactLastName, contactFirstName, phone, addressLine1, addressLine2, city, state, postalCode, country, salesRepEmployeeNumber) VALUES (:customerNumber, :customerName, :contactLastName, :contactFirstName, :phone, :addressLine1, :addressLine2, :city, :state, :postalCode, :country, :salesRepEmployeeNumber)";

    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':customerNumber', $customerNumber);
    $stmt->bindParam(':customerName', $customerName);
    $stmt->bindParam(':contactLastName', $contactLastName);
    $stmt->bindParam(':contactFirstName', $contactFirstName);
    $stmt->bindParam(':phone', $phone);
    $stmt->bindParam(':addressLine1', $addressLine1);
    $stmt->bindParam(':addressLine2', $addressLine2);
    $stmt->bindParam(':city', $city);
    $stmt->bindParam(':state', $state);
    $stmt->bindParam(':postalCode', $postalCode);
    $stmt->bindParam(':country', $country);
    $stmt->bindParam(':salesRepEmployeeNumber', $salesRepEmployeeNumber);

    if ($stmt->execute()) {
        $status = "Data Customers Baru Berhasil ditambahkan, silakan refresh web";
    } else {
        $status = "Gagal menambahkan data Customers, silakan coba lagi";
    }
}
?>

<h1><b>Tambah Data Customers</b></h1>

<form action="" method="post">

    <table>
        <tr>
            <td>Customer Number</td>
            <td><input type="text" name="customerNumber"></td>
        </tr>
        <tr>
            <td>Customer Name</td>
            <td><input type="text" name="customerName"></td>
        </tr>
        <tr>
            <td>Contact Last Name</td>
            <td><input type="text" name="contactLastName"></td>
        </tr>
        <tr>
            <td>Contact First Name</td>
            <td><input type="text" name="contactFirstName"></td>
        </tr>
        <tr>
            <td>Phone</td>
            <td><input type="text" name="phone"></td>
        </tr>
        <tr>
            <td>Address Line 1</td>
            <td><input type="text" name="addressLine1"></td>
        </tr>
        <tr>
            <td>Address Line 2</td>
            <td><input type="text" name="addressLine2"></td>
        </tr>
        <tr>
            <td>City</td>
            <td> <input type="text" name="city"></td>
        </tr>
        <tr>
            <td>State</td>
            <td> <input type="text" name="state"></td>
        </tr>
        <tr>
            <td>Postal Code</td>
            <td> <input type="text" name="postalCode"></td>
        </tr>
        <tr>
            <td>Country</td>
            <td> <input type="text" name="country"></td>
        </tr>
        <tr>
            <td>salesRepEmployeeNumber</td>
            <td>
            <select class="form-select" name="salesRepEmployeeNumber" id="salesRepEmployeeNumber">
                <option selected>Pilih salah satu</option>
                <option value="">Null</option>
                <option value="1002">1002</option>
                <option value="1056">1056</option>
                <option value="1076">1076</option>
                <option value="1088">1088</option>
                <option value="1102">1102</option>
                <option value="1143">1143</option>
                <option value="1165">1165</option>
                <option value="1166">1166</option>
                <option value="1188">1188</option>
                <option value="1216">1216</option>
                <option value="1286">1286</option>
                <option value="1323">1323</option>
                <option value="1337">1337</option>
                <option value="1370">1370</option>
                <option value="1401">1401</option>
                <option value="1501">1501</option>
                <option value="1504">1504</option>
                <option value="1611">1611</option>
                <option value="1612">1612</option>
                <option value="1619">1619</option>
                <option value="1621">1621</option>
                <option value="1625">1625</option>
                <option value="1702">1702</option>
            </select>
        <tr>
            <td></td>
            <td><input type = "submit" value = "simpan" name = "proses"></td>
        </tr>
    </table>
    </form>

