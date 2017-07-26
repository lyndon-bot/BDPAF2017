<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="Style/css/bootstrap.min.css">
        <script src="Style/js/bootstrap.js"></script>
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
       <div class="container">
           <div class="col-md-1"></div>
           <div class="col-md-4">
            <div class="panel-default">
                <div class="panel-heading">
                    <h3>Log In</h3>
                </div>
                <div class="panel-body">
                    <form action="Functions/logreg.php" method="post">
                 <label><b>Username</b></label><br>
                 <input type="text" name="uname" placeholder="Enter Username" required>
                 <br>
                 <br>
                 <label><b>Password</b></label><br>
                 <input type="text" name="psw" placeholder="Enter Password" required>
                 <br>
                 <br>
            </div>
                 <div class="panel-footer">
                 <button type="button" class="btn btn-primary"> Submit</button>
                 </div>
            </form>

            </div>
           </div>
           <br>
           <div class="col-md-2"></div>
           
           <div class="col-md-4">
               <div class="panel-default">
                   <div class="panel-heading">
                       <h3>Register</h3>
                   </div>
                   <div class="panel-body">
                       <button type ="button" class="btn btn-info" href="register.php">Register</button>
                   </div>
               </div>  
               <br>
               <div class="panel-default">
                   <div class="panel-heading">
                       <h3>Continue as Guest</h3>
                   </div>
                   <div class="panel-body">
                       <button type ="button" class="btn btn-success" href="home.php">Go</button>
                   </div>
               </div>
           </div>
           <div class="col-md-1"></div>
   

                
            
        </div>
    </body>
</html>

