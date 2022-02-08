<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">

</head>
<body>

<h2>Register here</h2>

<div class="container">
  <form name ="myForm" action="userinfo.php" onsubmit="return myFun()" method="post">
    <label for="fname">Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name.." autocomplete="off" required>

    <label for="Email">Email</label>
    <input type="text" name="Email" placeholder="Enter your mail" value="" autocomplete="off" required>
    <span style="font-size: 14px; color: red" id="message"></span>
     <br><br>

    <label for="no">Phone No.</label>
    <input type="text" name ="mobile" placeholder="Enter your phone" value="" autocomplete="off" required>
    <span style="font-size: 14px; color: red" id="number"></span>
    <br><br>

    <input type="radio" name ="button" placeholder="Enter your phone" value="Female" autocomplete="off" required>Female</input>
    <input type="radio" name ="button" placeholder="Enter your phone" value="Male" autocomplete="off" required>Male</input>
    <div><p style="font-size: 14px; color: red" id="mes"></p></div>
    <br><br>


    <script src="main.js"></script>
    <br><br>
    <input type="submit" value="Submit">
  </form>
</div>

</body>
</html>
