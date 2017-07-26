    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="../Style/css/bootstrap.min.css">
        <script src="../Style/js/bootstrap.js"></script>
        <title>BDPA Finance</title>
    </head>
    <body>
        <nav class="navbar navbar-inverse">
            <div class ="navbar-head">
                <button type="button" class="navbar-toggle" data toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="home.php">BDPA Finance</a>
            </div>
        </nav>
<div class='container'>
    
    <script> 
        
        
    </script>
    <div class="row">
    <div class="col-md-2"></div>
<div class="col-md-8">
    <div class="panel-default">    
        <div class="panel-heading">
            Personal Information
        </div>
        <form action='logreg.php' method="POST"> 
            <label><b>Name:</b></label>
          <input type='text' placeholder="First Name" name="FirstName" required>
          <input type='text' placeholder="Last Name" name="LastName" required> <br>
            <label><b>Birthday:</b></label>
            <input type='date' placeholder="mm/dd/yyyy" name="Birthday" required><br>
            <label><b>Sex</b></label>
            <input type='radio' name="Sex" required> Male
             <input type='radio' name="Sex" required> Female
             <input type='radio' name="Sex" required> Other <br>
            <label><b>Net Income</b></label>
            <input type='number' name="NetIncome" placeholder="$" required><br>
    </div>
</div>
    <div class="col-md-2"></div>
    </div>
    <div class="row">
    <div class="col-md-2"></div>
<form action='logreg.php' method="POST">
    <div class="col-md-8"> 
    <div class="panel-default">
        <div class="panel-heading">
            Address 
        </div>
        
          
        <input type='varchar' name="Address" placeholder="Street Address">
       
        <input type='text' name="City" placeholder="City" >
        
        <input type='text'  name="State" pattern="(?=.*[A-Z])" placeholder="State">
        
        <input type='number'  name="Zip" placeholder="Zip Code"><br>
       </form>
    </div>
</div>
    </div>
    <div class="row">
        <div class="col-md-2"></div>
        <label><b>Username</b></label><br>
        <input type='text'  name="LoginID" required><br>
        <label><b>Password</b></label><br>
         <input type='password'  id="Pass" name="Password" pattern="(?=.*/W+) (?=.*[0-9]) (?=.*[A-Z]) .{6,}" title="" required>
         <br> <label><b>Confirm Password</b></label><br>
          <input type='password' pattern="(?=.*/W+) (?=.*[0-9]) (?=.*[A-Z]) .{6,}" required>
       
          <br>
          <br>
          <button type="submit" class="btn btn-primary"> Submit</button>
    
     </div>
    </form>
</div>
