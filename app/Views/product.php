<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<form action="/Save" method="post">
        <label>productName</label>
        <input type="text" name="productName" placeholder="productName"> 
        <br>
        <label>productDescription</label>
        <input type="text" name="productDescription" placeholder="productDescription">
        <br>
        <label>productCategory</label>
        <input type="text" name="productCategory" placeholder="productCategory">
        <br>
        <label>productQuantity</label>
        <input type="text" name="productQuantity" placeholder="productQuantity">
        <br>
        <label>productPrice</label>
        <input type="text" name="productPrice" placeholder="productPrice"> 
        <br>
        <input type="submit" value="Save"> 
    </form>

    <h1>Product Inventory</h1>
    <table border="1">
        <tr>
            <th>productName</th>
            <th>productDescription</th>
            <th>productCategory</th>
            <th>productQuantity</th>
            <th>productPrice</th>
            <th>Action</th>
            
        </tr>
        <?php foreach ($product as $pr): ?>
            <tr>
                <td><?= $pr['productName'] ?></td>
                <td><?= $pr['productDescription'] ?></td>
                <td><?= $pr['productCategory'] ?></td>
                <td><?= $pr['productQuantity'] ?></td>
                <td><?= $pr['productPrice'] ?></td>
                <td><a href="/edit/<?= $pr['id'] ?>">Update</a>
                    <a href="/delete/<?= $pr['id'] ?>">delete</a> 
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>  