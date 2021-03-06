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

        <form class="form-horizontal" action="includes/deleteAction.php" method="POST" >
        <fieldset>

        <h4>Delete Entry</h4>

        <p>Please submit the first name, surname, mobile phone number and email address of the record you wish to delete.</p>

        <!-- Form Name -->
        <legend>Delete Entry</legend>

        <!-- Text input-->
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">First Name</label>  
        <div class="col-md-4">
        <input id="dfirstname" name="dfirstname" type="text" placeholder="Insert first name here" class="form-control input-md">
        </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Surname</label>  
        <div class="col-md-4">
        <input id="dsurname" name="dsurname" type="text" placeholder="Insert surname here" class="form-control input-md">
        </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Mobile Phone Number</label>  
        <div class="col-md-4">
        <input id="dmobile" name="dmobile" type="text" placeholder="Insert mobile number here" class="form-control input-md">  
        </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">E-mail Address</label>  
        <div class="col-md-4">
        <input id="demail" name="demail" type="text" placeholder="Insert email address here" class="form-control input-md"> 
        </div>
        </div>

        <!-- Button -->
        <div class="form-group">
        <label class="col-md-4 control-label" for="singlebutton">Delete Entry</label>
        <div class="col-md-4">
            <button id="deletebutton" name="deletebutton" class="btn btn-danger">Submit</button>
        </div>
        </div>

        </fieldset>
        </form>

</body>
</html>



