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
    <script src="/.Assignment-04.js"></script>
</head>
<body>
<?php 
    include_once 'includes/databasehandler.php';
?>

            <!--Form which contains the insert / update / delete functions-->
            <form class="form-horizontal" action="includes/createAction.php" method="POST">
                <fieldset>
                <!-- Form Name -->
                <legend>Create Entry</legend>
        
                    <h4>Personal Information</h4>
        
                    <!-- Select Basic -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="selectbasic">Title</label>
                        <div class="col-md-4">
                        <select id="title" name="selectTitle" class="form-control" onchange="changeTitleFunction()">
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
                        <input id="otherTitle" name="otherTitle" type="text" placeholder="Other Title" class="form-control input-md">  
                        </div>
                    </div>
        
                    <!-- First Name(s)  required-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="textinput">First Name(s)</label>  
                        <div class="col-md-4">
                        <input id="personFirstName" name="personFirstName" type="text" placeholder="First Name(s)" class="form-control input-md" required="">
                        </div>
                    </div>
        
                    <!-- Surname  required-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="textinput">Surname</label>  
                        <div class="col-md-4">
                        <input id="personSurname" name="personSurname" type="text" placeholder="Surname" class="form-control input-md" required="">
                        </div>
                    </div>
        
                    <!-- Mobile  required-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="textinput">Mobile Telephone Number</label>  
                        <div class="col-md-4">
                        <input id="personMobile" name="personMobile" type="text" placeholder="Mobile Telephone Number" class="form-control input-md" required="">
                        </div>
                    </div>
        
                    <!-- Email Address  required-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="textinput">E-mail Address*</label>  
                        <div class="col-md-4">
                        <input id="personEmail" name="personEmail" type="text" placeholder="E-mail Address" class="form-control input-md" required="">
                        </div>
                    </div>
        
                    <h4>Home Address</h4>
        
                    <!-- Home Address 1 required-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="textinput">Address 1*</label>  
                        <div class="col-md-4">
                        <input id="homeAddress1" name="homeAddress1" type="text" placeholder="Address 1" class="form-control input-md" required="">
                        </div>
                    </div>
        
                    <!-- Home Address 2 - Not required-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="textinput">Address 2</label>  
                        <div class="col-md-4">
                        <input id="homeAddress2" name="homeAddress2" type="text" placeholder="Address 2" class="form-control input-md">
                        </div>
                    </div>
        
                    <!-- Home Address Town - required-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="textinput">Town*</label>  
                        <div class="col-md-4">
                        <input id="homeAddressTown" name="homeAddressTown" type="text" placeholder="Town" class="form-control input-md" required=""> 
                        </div>
                    </div>
        
                    <!-- Home Address County / City - Required -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="textinput">County / City*</label>  
                        <div class="col-md-4">
                        <input id="homeAddressCountyorCity" name="homeAddressCountyorCity" type="text" placeholder="County / City" class="form-control input-md" required=""> 
                        </div>
                    </div>
        
                    <!-- Home Address Eircode - Not Required-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="textinput">Eircode</label>  
                        <div class="col-md-4">
                        <input id="homeAddressEircode" name="homeAddressEircode" type="text" placeholder="Eircode" class="form-control input-md">
                        </div>
                    </div>
        
                    <h4>Shipping Address</h4>
        
                    <!-- Checkbox for same address -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="checkboxes">Same Address</label>
                        <div class="col-md-4">
                        <div class="checkbox">
                        <label for="checkboxes-0">
                            <input type="checkbox" name="checkbox" id="checksameaddress" onchange="changeSameAddress()">
                            Please use my home address as my shipping address.
                        </label>
                        </div>
                        </div>
                    </div>
        
                    <!-- Shipping Address 1 required-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="textinput">Address 1*</label>  
                        <div class="col-md-4">
                        <input id="shipAddress1" name="shipAddress1" type="text" placeholder="Address 1" class="form-control input-md" required="">
                        </div>
                    </div>
        
                    <!-- Shipping Address 2 - Not required-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="textinput">Address 2</label>  
                        <div class="col-md-4">
                        <input id="shipAddress2" name="shipAddress2" type="text" placeholder="Address 2" class="form-control input-md">
                        </div>
                    </div>
        
                    <!-- Shipping Town - Required-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="textinput">Town*</label>  
                        <div class="col-md-4">
                        <input id="shipAddressTown" name="shipAddressTown" type="text" placeholder="Town" class="form-control input-md" required=""> 
                        </div>
                    </div>
        
                    <!-- Shipping County / City - Required -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="textinput">County / City*</label>  
                        <div class="col-md-4">
                        <input id="shipAddressCountyorCity" name="shipAddressCountyorCity" type="text" placeholder="County / City" class="form-control input-md" required=""> 
                        </div>
                    </div>
        
                    <!-- Shipping Eircode - Not Required-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="textinput">Eircode</label>  
                        <div class="col-md-4">
                        <input id="shipAddressEircode" name="shipAddressEircode" type="text" placeholder="Eircode" class="form-control input-md">
                        </div>
                    </div>
        
                    <!-- Button -->
                    <div class="form-group">
                    <label class="col-md-4 control-label" for="singlebutton">Create Entry</label>
                    <div class="col-md-4">
                        <button id="createButton" name="createButton" class="btn btn-primary">Submit</button>
                    </div>
                    </div>
        
                </fieldset>
                </form>

<script src="./Assignment-04.js"></script>
    
</body>
</html>


