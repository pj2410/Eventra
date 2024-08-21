<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
<!-- <form name="myform" method='POST' action='register.php'>
        <div class="heading1"> <h1 style="color:white">REGISTER</h1></div>
   <DIV class="entries"> 
        <h1>First Name<h1><input type="text" placeholder="enter Name" name="name"  class="ent"> <br> <br>
       <h1> Age<h1><input type="age" placeholder="enter age" name="age" class="ent"> <br> <br>
        <h1>Phone Number<h1><input type="number" placeholder="enter PhoneNumber"  name="phonenumber" class="ent"> <br> <br>
       <h1>Gender</h1> <input type="text" placeholder="enter gender" name="gender" class="ent"> <br> <br>
       <h1>Address</h1> <input type="text" placeholder="enter Address" name="address"  class="ent"> <br> <br>
       <h1>Profession</h1> <input type="text" placeholder="enter Profession" name="profession" class="ent" > <br> <br>
        <h1>Occasion</h1><input type="text" placeholder="enter Occasion" name="occasion" class="ent" > <br> <br>
       <h1>Username</h1> <input type="text" placeholder="enter username" name="username" class="ent"> <br> <br>
       <h1>Password</h1> <input type="text" placeholder="enter password" name="password" class="ent"> <br> <br>
       <h1> <input type="submit" name='submit' value="SUBMIT" id="butt"></h1>
    </form></DIV> -->
       
    
       <!-- /* .heading1
        {
    width: 100%;
    height: 30px;
    background-color: black;
    position: absolute;
    top: 0px;
    text-align: center;
        }
        h1 {

        font-weight: bolder; }

        body{padding: 0px;
            margin: 0px;
            background-image: url('bcg1.jpeg');
background-repeat: no-repeat;
background-size: 100%;}

.entries
{
    position: absolute;
    top: 35px;
    left:40px;

    
}

#butt
{
    width: 40%;
  margin: 3px;
  /* border: 1px solid black; */
 /* font-size: 20px;
 background-color:rgb(205, 205, 205);
 position: absolute;
 left: 0%;
}
#butt:hover{
  
  border: 5px;
  background-color: grey;
  width: 50%;
  
}
.ent
{ border : 1px solid black;  }
   */  --> 
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100%;
        }

        h1 {
            font-size: 2em;
            color: #333;
            text-transform: uppercase;
            margin-bottom: 20px;
        }

        form {
            background-color: white;
            padding: 20px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            text-align: center;
            width: 45%;
            height: 100%;
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input {
            width: 50%;
            padding: 10px;
            margin-bottom: 15px;
            box-sizing: border-box;
            border: 2px solid black;
            border-radius: 5px;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: #fff;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        .marquee-container {
            position: fixed;
            top: 0%;
            right: -30%;
            /* height: 10vh; */
            /* display: flex;
            flex-direction: column;
            align-items: flex-end; */
        }

        .marquee-container1 {
            position: fixed;
            top: 0%;
            right: 45%;
            /* height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: flex-end; */
        }

        .marquee {
            width: 80%;
        }

        .marquee img {
            margin-bottom: 30px;
        }
    </style>
</head>

<body>
    <form method="post" action="login_worker.php">
        <h1 style="color:black"><b><u>REGISTER</u></b></h1><br><br>

        <label for="name">First Name:</label>
        <input type="text" name="name" required><br>

        <label for="age">Age:</label>
        <input type="text" name="age" required><br>

        <label for="phonenumber">Phone Number:</label>
        <input type="text" name="phonenumber" required><br>

        <label for="gender">Gender:</label>
        <input type="text" name="gender" required><br>

        <label for="address">Address:</label>
        <input type="text" name="address" required><br>

        <label for="profession">Profession:</label>
        <input type="text" name="profession" required><br>

        <label for="occasion">Ocassion:</label>
        <input type="text" name="occasion" required><br>

        <label for="username">Username:</label>
        <input type="text" name="username" required><br>

        <label for="password">Password:</label>
        <input type="password" name="password" required><br>

        <input type="submit" value="Register">
        <br><br>

        <div class="marquee-container">
            <marquee class="marquee" behavior="scroll" direction="up" loop="infinite" scrollamount="10">
                <img src="image_processing20210217-23409-1sk6736.gif" width="22%" height="30%" />
                <img src="edit_New_Multy_repair.gif" width="17%" height="35%" />
                <img src="image_processing20210217-28556-jr8y3a.gif" width="22%" height="30%" />&nbsp;
            </marquee>
        </div>
        <div class="marquee-container1">
            <marquee class="marquee" behavior="scroll" direction="down" loop="infinite" scrollamount="10">
                <img src="image_processing20210217-23409-1sk6736.gif" width="22%" height="30%" />
                <img src="edit_New_Multy_repair.gif" width="17%" height="35%" />
                <img src="image_processing20210217-28556-jr8y3a.gif" width="22%" height="30%" />&nbsp;
            </marquee>
        </div>
    </form>
</body>
</html>
