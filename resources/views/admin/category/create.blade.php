<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <h2>Insert Category</h2>
    <form action="/action_page.php">
        <div class="form-group">
            <label for="Name">Name:</label>
            <input type="text" class="form-control" id="Name" placeholder="Enter Name" name="email">
        </div>
        <div class="form-group">
            <label for="pwd">Description:</label>
            <input type="text" class="form-control" id="pwd" placeholder="Enter Description" name="pwd">
        </div>

        <div class="from-button">
            <input type="button" class="btn btn-info" value="Save">
            <input type="reset" class="btn btn-success" value="Clear">
        </div>

    </form>
</div>

</body>
</html>
