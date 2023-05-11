<?php
include "conn.php";

$status = '';

if (isset ($_POST ['proses'])){
    $productCode = $_POST['productCode'];
    $productName = $_POST['productName'];
    $productLine = $_POST['productLine'];
    $productScale = $_POST['productScale'];
    $productVendor = $_POST['productVendor'];
    $productDescription = $_POST['productDescription'];
    $quantityInStock = $_POST['quantityInStock'];
    $buyPrice = $_POST['buyPrice'];
    $MSRP = $_POST['MSRP']?: null;


    $stmt = "INSERT INTO products (productCode, productName, productLine, productScale, productVendor, productDescription, quantityInStock, buyPrice, MSRP)
    VALUES (:productCode, :productName, :productLine, :productScale, :productVendor, :productDescription, :quantityInStock, :buyPrice, :MSRP)";

    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':productCode', $productCode);
    $stmt->bindParam(':productName', $productName);
    $stmt->bindParam(':productLine', $productLine);
    $stmt->bindParam(':productScale', $productScale);
    $stmt->bindParam(':productVendor', $productVendor);
    $stmt->bindParam(':productDescription', $productDescription);
    $stmt->bindParam(':quantityInStock', $quantityInStock);
    $stmt->bindParam(':buyPrice', $buyPrice);
    $stmt->bindParam(':MSRP', $MSRP);

    if ($stmt->execute()) {
        $status = "Data Customers Baru Berhasil ditambahkan, silakan refresh web";
    } else {
        $status = "Gagal menambahkan data Customers, silakan coba lagi";
    }
}
?>

<h1><b>Tambah Data Products</b></h1>
<form action = "" method = "post">
<table>
    <tr>
        <td> Product Code</td>
        <td><input type = "text" name = "productCode"></td> 
    </tr>
    <tr>
        <td> Product Name </td>
        <td> <input type = "text" name = "productName"></td>
    </tr>
    <tr>
            <td>Product Line</td>
            <td>
                <select class="form-select" name="productLine" id="productLine">
                    <option selected>Pilih salah satu</option>
                    <option value="Classic Cars">Classic Cars</option>
                    <option value="Motorcycles">Motorcycles</option>
                    <option value="Planes">Planes</option>
                    <option value="Ships">Ships</option>
                    <option value="Trains">Trains</option>
                    <option value="Trucks and Buses">Trucks and Buses</option>
                    <option value="Vintage Cars">Vintage Cars</option>
                </select>
            </td>
        </tr>
    <tr>
        <td>Product Scale</td>
        <td> <input type = "text" name = "productScale"></td>
    </tr>
    <tr>
        <td>Product Vendor</td>
        <td> <input type = "text" name = "productVendor"></td>
    </tr>
    <tr>
        <td>Product Description</td>
        <td> <input type = "text" name = "productDescription"></td>
    </tr>
    <tr>
        <td>Quantity In Stock</td>
        <td> <input type = "text" name = "quantityInStock"></td>
    </tr>
    <tr>
        <td>Buy Price</td>
        <td> <input type = "text" name = "buyPrice"></td>
    </tr>
    <tr>
        <td>MSRP</td>
        <td> <input type = "text" name = "MSRP"></td>
    </tr>
    <tr>
        <td></td>
        <td><input type = "submit" value = "simpan" name = "proses"></td>
    </tr>
</table>
</form>