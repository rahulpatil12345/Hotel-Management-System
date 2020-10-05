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
           <div>
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
                    <div id="banner"><br>
                       <div id="f2" style="background:rgba(255,255,255,.5)">
                          <h1 style="color:blue;text-align:center;">Welcome Admin</h1>
                       </div>
                       <div style="background:rgba(255,255,255,.5)">
                         <table>
                            <tr>
                              <th width="8%" height="50px">ID</th>
                              <th width="8%" height="50px">Name</th>
                              <th width="8%" height="50px">IdNo</th>
                              <th width="8%" height="50px">Email</th>
                              <th width="8%" height="50px">Address</th>
                              <th width="8%" height="50px">City</th>
                              <th width="8%" height="50px">District</th>
                              <th width="8%" height="50px">State</th>
                              <th width="8%" height="50px">Check In Date</th>
                              <th width="8%" height="50px">Check Out Date</th>
                              <th width="8%" height="50px">Members</th>
                           </tr>
                           <?php
                              $q1="select * from form1";
                              $run=mysqli_query($a,$q1);
                              while($row=mysqli_fetch_assoc($run))
                              {
                                 $id=$row['id'];
                                 $name=$row['name'];
                                 $idno=$row['idno'];
                                 $email=$row['email'];
                                 $address=$row['address'];
                                 $city=$row['city'];
                                 $dis=$row['dis'];
                                 $state=$row['state'];
                                 $coin=$row['coin'];
                                 $coout=$row['coout'];
                                 $m=$row['m'];
                           ?>
                           <tr>
                              <td width="10%" height="50px"><center><?php echo $id; ?></center></td>
                              <td width="10%" height="50px"><center><?php echo $name; ?></center></td>
                              <td width="10%" height="50px"><center><?php echo $idno; ?></center></td>
                              <td width="10%" height="50px"><center><?php echo $email; ?></center></td>
                              <td width="10%" height="50px"><center><?php echo $address; ?></center></td>
                              <td width="10%" height="50px"><center><?php echo $city; ?></center></td>
                              <td width="10%" height="50px"><center><?php echo $dis; ?></center></td>
                              <td width="10%" height="50px"><center><?php echo $state; ?></center></td>
                              <td width="10%" height="50px"><center><?php echo $coin; ?></center></td>
                              <td width="10%" height="50px"><center><?php echo $coout; ?></center></td>
                              <td width="10%" height="50px"><center><?php echo $m; ?></center></td>
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