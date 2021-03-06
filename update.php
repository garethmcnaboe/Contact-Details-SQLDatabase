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
    <!--link to javascript file-->
    <script src="./Assignment-04.js"></script>
</head>
<body>
    
<?php 
    include_once 'includes/databasehandler.php';
?>

    <!--Form which contains the insert / update / delete functions-->
    <form class="form-horizontal" action="includes/updateAction.php" method="POST">
    <fieldset>
    <!-- Form Name -->
    <legend>Update Entry</legend>
        <p>Please enter the first name, surname and email address of the record you wish to update.
        
        <!-- Text input-->
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">First Name</label>  
        <div class="col-md-4">
        <input id="uSearchTerm1" name="uSearchTerm1" type="text" placeholder="Insert first name here" class="form-control input-md">
        </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Surname</label>  
        <div class="col-md-4">
        <input id="uSearchTerm2" name="uSearchTerm2" type="text" placeholder="Insert surname here" class="form-control input-md">
        </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Email Address</label>  
        <div class="col-md-4">
        <input id="uSearchTerm3" name="uSearchTerm3" type="text" placeholder="Insert email address here" class="form-control input-md">  
        </div>
        </div>

        <hr>
        
        <p>Please update all of the details. If you leave blanks, then database entries will be overwritten with blanks.</p>

        <h4>Personal Information</h4>

        <!-- Select Basic -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="selectbasic">Title</label>
            <div class="col-md-4">
            <select id="utitle" name="uselectTitle" class="form-control" onchange="changeTitleFunctionU()">
                <option value="Mx">Mx</option>
                <option value="Mr">Mr</option>
                <option value="Mrs">Mrs</option>
                <option value="Miss">Miss</option>
                <option value="Ms">Ms</option>
                <option value="Dr">Dr</option>
                <option value="0">Other (Please specify)</option>
            </select>
            </div>
        </div>

        <!-- Other Title-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="textinput">Other Title</label>  
            <div class="col-md-4">
            <input id="uotherTitle" name="uotherTitle" type="text" placeholder="Other Title" class="form-control input-md">  
            </div>
        </div>

        <!-- Mobile  required-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="textinput">Mobile Telephone Number</label>  
            <div class="col-md-4">
            <input id="upersonMobile" name="upersonMobile" type="text" placeholder="Mobile Telephone Number" class="form-control input-md" required="">
            </div>
        </div>

        <!-- Email Address  required-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="textinput">E-mail Address*</label>  
            <div class="col-md-4">
            <input id="upersonEmail" name="upersonEmail" type="text" placeholder="E-mail Address" class="form-control input-md" required="">
            </div>
        </div>

        <h4>Home Address</h4>

        <!-- Home Address 1 required-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="textinput">Address 1*</label>  
            <div class="col-md-4">
            <input id="uhomeAddress1" name="uhomeAddress1" type="text" placeholder="Address 1" class="form-control input-md" required="">
            </div>
        </div>

        <!-- Home Address 2 - Not required-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="textinput">Address 2</label>  
            <div class="col-md-4">
            <input id="uhomeAddress2" name="uhomeAddress2" type="text" placeholder="Address 2" class="form-control input-md">
            </div>
        </div>

        <!-- Home Address Town - required-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="textinput">Town*</label>  
            <div class="col-md-4">
            <input id="uhomeAddressTown" name="uhomeAddressTown" type="text" placeholder="Town" class="form-control input-md" required=""> 
            </div>
        </div>

        <!-- Home Address County / City - Required -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="textinput">County / City*</label>  
            <div class="col-md-4">
            <input id="uhomeAddressCountyorCity" name="uhomeAddressCountyorCity" type="text" placeholder="County / City" class="form-control input-md" required=""> 
            </div>
        </div>

        <!-- Home Address Eircode - Not Required-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="textinput">Eircode</label>  
            <div class="col-md-4">
            <input id="uhomeAddressEircode" name="uhomeAddressEircode" type="text" placeholder="Eircode" class="form-control input-md">
            </div>
        </div>

        <h4>Shipping Address</h4>

        <!-- Checkbox for same address -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="checkboxes" >Same Address</label>
            <div class="col-md-4">
            <div class="checkbox">
            <label for="checkboxes-0">
                <input type="checkbox" name="ucheckbox" id="checksameaddress" onchange="changeSameAddressUpdate()">
                Please use my home address as my shipping address.
            </label>
            </div>
            </div>
        </div>

        <!-- Shipping Address 1 required-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="textinput">Address 1*</label>  
            <div class="col-md-4">
            <input id="ushipAddress1" name="ushipAddress1" type="text" placeholder="Address 1" class="form-control input-md" required="">
            </div>
        </div>

        <!-- Shipping Address 2 - Not required-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="textinput">Address 2</label>  
            <div class="col-md-4">
            <input id="ushipAddress2" name="ushipAddress2" type="text" placeholder="Address 2" class="form-control input-md">
            </div>
        </div>

        <!-- Shipping Town - Required-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="textinput">Town*</label>  
            <div class="col-md-4">
            <input id="ushipAddressTown" name="ushipAddressTown" type="text" placeholder="Town" class="form-control input-md" required=""> 
            </div>
        </div>

        <!-- Shipping County / City - Required -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="textinput">County / City*</label>  
            <div class="col-md-4">
            <input id="ushipAddressCountyorCity" name="ushipAddressCountyorCity" type="text" placeholder="County / City" class="form-control input-md" required=""> 
            </div>
        </div>

        <!-- Shipping Eircode - Not Required-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="textinput">Eircode</label>  
            <div class="col-md-4">
            <input id="ushipAddressEircode" name="ushipAddressEircode" type="text" placeholder="Eircode" class="form-control input-md">
            </div>
        </div>

        <!-- Button -->
        <div class="form-group">
        <label class="col-md-4 control-label" for="singlebutton">Update Entry</label>
        <div class="col-md-4">
            <button id="updateButton" name="updateButton" class="btn btn-primary">Submit</button>
        </div>
        </div>

    </fieldset>
    </form>

<!--link to javascript file-->
<script src="./Assignment-04.js"></script>

</body>
</html>



