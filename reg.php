
<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Register</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="js/jquery-3.4.1.min.js"></script>
        <link rel="stylesheet" href="css/Semantic/semantic.min.css">
        <script src="css/Semantic/semantic.min.js"></script>
        <link rel="stylesheet" href="css/home.css">
        <link rel="stylesheet" href="css/home2.css">
        <link rel="icon" href="images\dscelogo.png">
       
</head>
<body>
        <h1 class="header" style="text-align:center" id = "head">Registration</h4>
              
                
           
          </h1>
          <div id="toTop"><i class="chevron up icon"></i></div>
            <div>
            <div class="ui  light grey inverted secondary huge menu">
            <a class="header item" href="index.php">
              Home
            </a>
           <a class="item">
              About Us
            </a> 
             
          </div>
    <div class="ui container" id="#logcont" style="padding-bottom: 20px;">
            <h2 class="ui header" style="font-size:35px; margin-left:10px;">
                    Registration Form
                  </h2>
        <div style="padding-right: 100px; padding-left: 100px;">
        <form class="ui form" action="process.php" method="POST">
            <div class="field">
              <label>NAME</label>
              <input type="text" name="usn" placeholder="NAME" style="width: 400px;" required>
            </div>
            <div class="field">
              <label>EMAIL</label>
              <input type="text" name="name" placeholder="EMAIL" style="width: 400px;" required>
            </div>
            
            <div class="field">
                    <label>Mobile number</label>
                    <input type="tel" pattern="[0-9]{10}" name="mbno" placeholder="Mobile number" style="width: 400px;" required>
            </div>
            <div class="field">
                    <label>VEHICLE NUMBER</label>
                    <input type="email" name="email" placeholder="VEHICLE NUMBER" style="width: 400px;" required>
            </div>
            <div class="field">
                    <label>Password</label>
                    <input type="password" name="password" placeholder="Password" style="width: 400px;" required>
            </div>
            <input type="hidden" name="session_type" value="register">
            <button class="ui button" type="submit" style="float: none; margin-top: 20px;">Register</button>
          </form>
        </div>
    </div>
</body>
