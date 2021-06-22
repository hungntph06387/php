<?php
// var_dump($_GET);
//  var_dump($_POST);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <form action="/php/CRUD/db.php" method="post">

            <div class="d-flex justify-content-center">
                <h3 style="color: #3498db; ">New Product</h3>
            </div>
            <div class="form-group">
                <label for="">Product Name</label>
                <input type="text" class="form-control" name="name" placeholder="Enter name">
            </div>
            <div class="form-group">
                <label for="">Product Price</label>
                <input type="text" class="form-control" name="price" placeholder="Enter price">
            </div>
            <div class="form-group">
                <label for="">Product Description</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" name="description" placeholder="Enter description"></textarea>
            </div>
            <div class="form-group">
                <label for="">Amount</label>
                <input type="text" class="form-control" name="amount" placeholder="Enter price">
            </div>
            <button type="submit" class="btn btn-primary btn-block">Save</button>
            <a href="/" class="btn btn-danger btn-block" role="button" aria-pressed="true">Back</a>
        </form>
    </div>
</body>

</html>