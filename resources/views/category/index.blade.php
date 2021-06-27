<html>
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>
    <div class="container"style="background-color:rgb(240, 240, 240);color: blue;">
        <h2>information</h2>
        <form class="form-horizontal" action="/action_page.php">
            <div class="form-group"style="background-color:rgb(240, 240, 240);color: black;">
                    <label class="control-label col-sm-2" for="email">ID:</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="ID" placeholder="Enter ID" name="email">
                    </div>
            </div>

            <div class="form-group"style="background-color:rgb(240, 240, 240);color: black;">
                <label class="control-label col-sm-2" for="email">Name:</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="Name" placeholder="Enter Name" name="email">
                </div>
            </div>
            <div class="form-group"style="background-color:rgb(240, 240, 240);color: black;">
                <label class="control-label col-sm-2" for="pwd">Password:</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
                </div>
            </div>
            <div class="form-group"style="background-color:rgb(240, 240, 240);color: black;">
                <label class="control-label col-sm-2" for="pwd">Email:</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="Email" placeholder="Enter Email" name="pwd">
                </div>
            </div>
            <div class="form-group"style="background-color:rgb(240, 240, 240);color: black;">
                <label class="control-label col-sm-2" for="pwd">Price:</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="Price" placeholder="Enter Price" name="pwd">
                </div>
            </div>
            <div class="form-group"style="background-color:rgb(240, 240, 240);color: black;">
                <label class="control-label col-sm-2" for="pwd">ToTal:</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="ToTal" placeholder="Enter ToTal" name="pwd">
                </div>
            </div>



            <div class="form-group"style="background-color:rgb(240, 240, 240);color: black;">
                <div class="col-sm-offset-2 col-sm-10">
                    <div class="checkbox">
                        <label><input type="checkbox"> Remember me</label>

                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="button" class="btn btn-success">Clear</button>
                    <button type="button" class="btn btn-primary">Save</button>
                </div>
            </div>
        </form>
    </div>


    </body>
</html>