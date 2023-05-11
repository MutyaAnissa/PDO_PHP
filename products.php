
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRODUCTS</title>
</head>

<body>
<h1><b>DATA PRODUCTS</b></h1>

<table border="1">
    <tr>
        <th>Product Code</th>
        <th>Product Name</th>
        <th>Product Line</th>
        <th>Product Scale</th>
        <th>Product Vendor</th>
        <th>Product Description</th>
        <th>Quantity In Stock</th>
        <th>Buy Price</th>
        <th>MSRP</th>
    </tr>

    <?php
    include "conn.php";

    $sql=$conn->prepare("SELECT * FROM products");
    $sql->execute();

    while ($tampil = $sql->fetch(PDO::FETCH_ASSOC)){
    echo "
    <tr>
        <td>$tampil[productCode]</td>
        <td>$tampil[productName]</td>
        <td>$tampil[productLine]</td>
        <td>$tampil[productScale]</td>
        <td>$tampil[productVendor]</td>
        <td>$tampil[productDescription]</td>
        <td>$tampil[quantityInStock]</td>
        <td>$tampil[buyPrice]</td>
        <td>$tampil[MSRP]</td>
    </tr>";

}
?>
</table>


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
        <label for="productLine" class="selectprod">Product Line</label>
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

    <?php
            include "conn.php";
            if (isset  ($_POST ['proses'])){
            mysqli_query ($conn, "insert into products set
            productCode = '$_POST[productCode]',
            productName = '$_POST[productName]',
            productLine = '$_POST[productLine]',
            productScale = '$_POST[productScale]',
            productVendor = '$_POST[productVendor]',
            productDescription = '$_POST[productDescription]',
            quantityInStock = '$_POST[quantityInStock]',
            buyPrice = '$_POST[buyPrice]',
            MSRP = '$_POST[MSRP]'");

            echo "Data Products Baru Berhasil ditambahkan, silakan refresh web";
        }
    ?>
</body>
</html>