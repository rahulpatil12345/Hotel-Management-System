<?php
include("connection.php");
?>
<html>
   <head>
      <title>Hotel Management</title>
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <link href="img/img1.png" type="img/icon" rel="icon">
   </head>
   <body>
       <div id="full">
           <div id="bg" style="background-image: url(img/img4.jpg);height:900px">
              <div id="header">
                 <div id="logo">
                     <h1>My Project</h1>
                 </div>
                 <div id="nav">
                    <ul>
                       <li><a href="ahome.php">Home</a></li>
                       <li><a href="room.php">Room Update</a></li>
                       <li><a href="booking.php">Booking </a></li>
                       <li><a href="rd.php">Room Details</a></li>
                       <li><a href="hotel/index.php">Logout</a></li>
                    </ul>
                </div>
                <div id="banner">
                <center>
                    <div id="form">
                      <form action="room.php" method="post">
                              <table style="color:Green;">
                                   <tr>
                                      <td>Room No.</td>
                                      <td><input type="text" name="number" placeholder="Enter Room Number"></td>
                                   </tr>
                                    <tr>
                                      <td>Room Update</td>
                                      <td><input type="text" name="rupdate" placeholder="Update the Room"></td>
                                   </tr>
                                   <tr>
                                   <td></td>
                                   <center><td><input type="submit" name="submit" value="Update" style="width:120px;height:30px;border-radius:20px;"></td></center>
                                   </tr>
                              </table>
                          
                       </form>
                       <?php
                          if(isset($_POST['submit']))
                           {
                              $roomno=$_POST['number'];
                              $rupdate=$_POST['rupdate'];
                              if(mysqli_query($a, "update room set status='$rupdate' where roomno='$roomno'"))
                              {
                                  echo "Room info is update";
                              }
                              else
                              {
                                 echo "Room info is not update";
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
           