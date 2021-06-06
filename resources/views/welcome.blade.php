<!DOCTYPE html>
<html lang="en">
<head>
    <title>CRUD</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</head>
<body>

<div class="container">
    <h2>Order Products</h2>
    <button type="button" class="btn btn-primary">
        <i class='fas fa-plus' style='font-size:24px'></i>
    </button>
    <table class="table table-hover table-bordered">
        <thead>
        <tr>
            <th>ID</th>
            <th>Product Name</th>
            <th>Qty</th>
            <th>Price</th>
            <th>Total</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>1</td>
            <td>Cocacola</td>
            <td>1</td>
            <td>2500</td>
            <td>2500</td>
            <td>
                <button type="button" class="btn btn-success">
                    <i class='fas fa-edit'></i>
                </button>
                <button type="button" class="btn btn-success">
                    <i class='fa fa-remove'></i>
                </button>
            </td>
        </tr>
        </tbody>
    </table>

    <i class="fa fa-remove"></i>
    <i class="fa fa-remove" style="font-size:24px"></i>
    <i class="fa fa-remove" style="font-size:36px"></i>
    <i class="fa fa-remove" style="font-size:48px;color:red"></i>
</div>
</body>
</html>
