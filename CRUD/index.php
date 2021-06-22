<?php require 'header.php' ?>
<?php require 'navbar.php' ?>


    <div class="container">
        <div class="d-flex justify-content-center">
            <h3 style="color: #3498db; ">List Products</h3>
        </div>
        <a href="/php/CRUD/create.php" class="btn btn-primary" role="button" aria-pressed="true">Add Product</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Desc</th>
                    <th scope="col">Amount</th>
                    <th scope="col"></th>

                </tr>
            </thead>
            <tbody>
                <?php foreach ($products as $product) { ?>
                    <tr>
                        <th scope="row"><?php echo $product['id'] ?></th>
                        <td><?php echo $product['name'] ?></td>
                        <td><?php echo $product['price'] ?></td>
                        <td><?php echo $product['description'] ?></td>
                        <td><?php echo $product['amount'] ?></td>
                        <td>
                            <button type="button" class="btn btn-danger">Edit</button>
                            <button type="button" class="btn btn-warning">Delete</button>
                        </td>

                    </tr>
                <?php } ?>
            </tbody>

        </table>
    </div>

<?php require 'footer.php' ?>
