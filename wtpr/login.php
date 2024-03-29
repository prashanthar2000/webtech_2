

<!-- saved from url=(0037)file:///D:/xampp/www/login/Event.html -->
<?php

    session_start();

    if(isset($_SESSION["loggedin"]) && $_SESSION['loggedin'] === true){
        die("success");
        exit;
    }

    require_once "config.php";

    $username = $password = "";

    if(isset($_POST["login"])){
        $username = trim($_POST["username"]);
        $username = mysqli_real_escape_string($connection, $username);
        $username = strtolower($username);

        $password = trim($_POST["password"]);
        $password = mysqli_real_escape_string($connection, $password);

        $query = "SELECT * FROM login WHERE Username = '$username'";
        $result = mysqli_query($connection, $query);
        
        if(!$result){
            die("Query Failed.");
        }
        else{
            if(mysqli_num_rows($result)==1){
                $row = mysqli_fetch_assoc($result);
                if(password_verify($password, $row["Password"])){

                    // $query = "SELECT * FROM users WHERE UserName = '$username'";
                    // $result = mysqli_query($connection, $query);
                    if(!$result){
                        die("Query failed..");
                    } else{
                        $row = mysqli_fetch_assoc($result);
                        session_start();
                        
                        $_SESSION["loggedin"] = true;
                        // $_SESSION["username"] = $row["GivenName"];
                        // $_SESSION["score"] = $row["Score"];
                    
                        die("success");
                    }

                } else{
                    die("Password is not valid.");
                }
            } else{
                die("No account found with that username.");
            }
        }
        mysqli_close($connection);
    }

?>

<html><head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
        <title>Login page</title>
        <style>
            
            body{
                              background-image: url("rolls-phantom-gentlemans-tourer-01.jpg");
                               background-position: center;
                               background-repeat: no-repeat;
                               background-size: cover;
                               z-index:-10;
                            }
            form
            {
                border: 2px solid  white;
                background-color: rgba(222,222,222);
                position: relative;
                width: 500px;
                height: 500px;
                top: 10%;
                left: 33%;
                bottom: 10%;
                border-radius:10px;



            }
            #reverse
            {
                position:absolute;
                background-color: rgb(0,0,0,0.5);
                top: 0;
                bottom:0;
                left: 0;
                height:100% ;
                width:100% ;
                z-index: -5;

            }
            input[type=text],input[type=password]{
                width: 90%;
                padding: 10px 18px;
                margin: 10px 0;
                margin-left:20px;
                align-self: center;
                display: inline-block;
                border: 1px solid royalblue;
                box-sizing: border-box;
                background-color: rgba(117, 112, 112, 0.4);
                border-bottom: 1px solid black;
                border-radius:10px;
                outline: none;
                

            }
            button {
                    background-color: #4CAF50;
                    color: white;
                    padding: 12px 18px;
                    margin: 10px 0;
                    border: none;
                    cursor: pointer;
                    width: 20%;
                    margin-left:39%;
                    border-radius:10px;
                    
                    
                }
            .imagecontainer{
                text-align: center;
                margin: 10px 0 5px 0;
            }
            
.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

#main {
  transition: margin-left .5s;
  padding: 16px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
  form{top: 10%;
        left: 10%;
        bottom: 10%;

  }
}

/*.container input[type="text"],input[type="password"]{
     
     background-color: rgba(0, 0, 0, 0.4);
     border-bottom: 1px solid black;
     border-radius:10px;
     outline: none;
}*/
footer {
  background: black;
  color:whitesmoke;
  font-size: 12px;
  padding: 20px 20px;
  text-align: center;
  margin-bottom: 0%;
  position: absolute;
  bottom: 0;
}

        </style>
        
    </head>
    <body>
       <div id="reverse"></div>
       <div id="main">
            <span style="font-size:30px;cursor:pointer;color:whitesmoke;" onclick="openNav()">&#9776; </span>
       </div>
       <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">X</a>
            <a href="file:///D:/xampp/www/login/Event.html#">About</a>
            <a href="file:///D:/xampp/www/login/Event.html#">Home</a>
            <a href="file:///D:/xampp/www/login/Event.html#">Clients</a>
            <a href="file:///D:/xampp/www/login/Event.html#">Contact</a>
          </div>
        <form action="login.php" method="post">
            
            <div class="imagecontainer">
                <img src="./Login page_files/8471cc54-1504-4ecc-b7b5-54b31837f11d_200x200.png" alt="Car" class="Car">
            </div>
            <div class="container">
                <label for="user_id" id="user" style="
                display: block;
                color: rgba(0, 0, 0, 0.6);
                font-size: 12px;
                font-weight: 500;
                line-height: 1;
                margin-left: 20px;
                text-transform: uppercase;
                letter-spacing: .2em;
                ">Username</label>
                <input type="text" placeholder="Enter Username" name="username" 
                 required autocomplete="off"><br><br><br>
                <label for="user_pass" id="password" style="
                display: block;
                color: rgba(0, 0, 0, 0.6);
                font-size: 12px;
                font-weight: 500;
                margin-left: 2;
                margin-left: 22px;
                text-transform: uppercase;
                letter-spacing: .2em;
                ">Password</label>
                <input type="password" placeholder="Enter Password" name="password"  required=""><br>
                <button type="submit" vlaue="login" name="login">Login</button><br>
            </div><br>
            <b>Not a member?</b><a href="signup.php"><b>Sign Up</b></a>
       
    
        </form>
        <footer>
          PES University ,Bangalore, India  us@me.com
        </footer>
        <script>
                function openNav() {
                  document.getElementById("mySidenav").style.width = "250px";
                  document.getElementById("main").style.marginLeft = "250px";
                  document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
                }
                
                function closeNav() {
                  document.getElementById("mySidenav").style.width = "0";
                  document.getElementById("main").style.marginLeft= "0";
                  document.body.style.backgroundColor = "white";
                }
                function userfunction(){
                  document.getElementById("user").innerHTML="<b>Username</b>";
                  document.getElementById("password").innerHTML="<b>Password</b>";
                }
                function pswrdfunction(){
                  
                }

                </script>
    
        

    
</body></html>