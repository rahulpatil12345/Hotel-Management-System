<?php
include('connection.php');
?>
<html>
   <head>
      <title>Admin Login</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <link href="img/img1.png" type="img/icon" rel="icon">
   </head>
   <body>
       <div id="full">
           <div style="background-image: url(img/img2.jpg);background-size:100% 700px; width:100%;height:700px">
              <div id="header">
                  <div id="logo">
                      <h1>My Project</h1>
                   </div>
                   <div id="nav">
                      <ul>
                         <li><a href="index.php">Home</a></li>
                         <li><a href="#">Contact</a></li>
                         <li><a href="#">Book My Stay</a></li>
                         <li><a href="#">Our Hotel</a></li>
                         <li><a href="#">Help</a></li>
                      </ul>
                  </div>
                    <div id="banner"><br><br>
                       <center>
                          <div id="f2" style="background:rgba(255,255,255,.5);width:80%">
                          <form action="" method="post">
                              <table>
                                  <tr>
                                      <td width="50%" height="50px">User Name</td>
                                      <td width="50%" height="50px"><input type="text" name="uname" placeholder="Enter user name"></td>
                                   </tr>
                                   <tr>
                                      <td width="50%" height="50px">Password</td>
                                      <td width="50%" height="50px"><input type="password" name="pass" placeholder="Enter password"></td>
                                   </tr>
                                    <tr>
                                       <td><input type="submit" name="submit" value="Login" style="width:150px;height:40px;border-radius:30px;opacity:0.6;color:blue;font-size:20px"></td>
                                    </tr>
                              </table>
                              </form>
                              <?php
                              if(isset($_POST['submit']))
                              {
                                 $uname=$_POST['uname'];
                                 $password=$_POST['pass'];
                                 $q1="select * from admin";
                                 $run=mysqli_query($a,$q1);
                                 $row=mysqli_fetch_assoc($run);
                                 $u=$row['uname'];
                                 $p=$row['password'];    
                                 if($uname==$u && $password==$p)
                                 {
                                    header("location:ahome.php");
                                 }
                                 else
                                 {
                                   header("location:index.php");
                                 }
                              }
                              ?>
                          </div>
                       </center>
                   </div>
              </div>
           </div>   
        </div>
   </body>
</html>