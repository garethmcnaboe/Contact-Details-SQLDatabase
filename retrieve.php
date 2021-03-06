<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Link to stylesheet-->
    <link rel="stylesheet" type="text/css" href="./Assignment-04.css"/>
    <!--Title to appear at tab-->
    <title>Address Database Application</title>
    <!--Download bootstrap & jquery in order to support bootsnip-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<?php 
    include_once 'includes/databasehandler.php';
?>

        <form class="form-horizontal" action="includes/retrieveAction.php" method="POST" >
        <fieldset>

        <h4>Search DataBase</h4>

        <p>Please submit the first name and surname of the record you wish to search for.</p>
        <!-- Form Name -->
        <legend>Search</legend>

        <!-- Text input-->
        <div class="form-group">
        <label class="col-md-4 control-label" for="First Name">First Name</label>  
        <div class="col-md-4">
        <input id="searchTerm1" name="searchTerm1" type="text" placeholder="Insert First Name Here" class="form-control input-md">
        </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Surname</label>  
        <div class="col-md-4">
        <input id="searchTerm2" name="searchTerm2" type="text" placeholder="Insert Surname Here" class="form-control input-md">
        </div>
        </div>

        <!-- Button -->
        <div class="form-group">
        <label class="col-md-4 control-label" for="Search">Retrieve Entry</label>
        <div class="col-md-4">
            <button id="searchButton" name="searchButton" class="btn btn-primary">Submit</button>
        </div>
        </div>

        </fieldset>
    </form>

</body>
</html>