<?php
  include("connection.php");
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
                         <li><a href="ahome.php">Home</a></li>
                         <li><a href="room.php">Room Update</a></li>
                         <li><a href="booking.php">Booking </a></li>
                         <li><a href="rd.php">Room Details</a></li>
                         <li><a href="#">Logout</a></li>
                      </ul>
                  </div>
                    <div id="banner"><br>
                       <div id="f2" style="background:rgba(255,255,255,.5)">
                          <h1 style="color:blue;text-align:center;">Welcome Admin</h1>
                       </div>
                       <div style="background:rgba(255,255,255,.5)">
                         <table>
                            <tr>
                              <th width="10%" height="50px">Room no.</th>
                              <th width="10%" height="50px">Room Type</th>
                              <th width="10%" height="50px">Price</th>
                              <th width="10%" height="50px">Status</th>
                           </tr>
                           <?php
                              $q1="select * from room";
                              $run=mysqli_query($a,$q1);
                              while($row=mysqli_fetch_assoc($run))
                              {
                                 $roomno=$row['roomno'];
                                 $type=$row['type'];
                                 $rrent=$row['rrent'];
                                 $status=$row['status'];
                           ?>
                           <tr>
                              <td width="10%" height="50px"><center><?php echo $roomno; ?></center></td>
                              <td width="10%" height="50px"><center><?php echo $type; ?></center></td>
                              <td width="10%" height="50px"><center><?php echo $rrent; ?></center></td>
                              <td width="10%" height="50px"><center><?php echo $status; ?></center></td>
                           </tr>
                           <?php
                              }
                           ?>
                        </table>
                        </div>
                    </div>
              </div>
           </div>   
        </div>
   </body>
</html>