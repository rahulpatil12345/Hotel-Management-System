<?php
  include('connection.php');
  $r=$_GET['room'];
  $ci=$_GET['ci'];
  $co=$_GET['co'];
?>
<html>
   <head>
      <title>Hotel Management</title>
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <link href="img/img1.png" type="img/icon" rel="icon">
      <style>
          h1
          {
              color:green;
          }
          h2
          {
             color:red;
          }
      </style>
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
                     <li><a href="index">Home</a></li>
                     <li><a href="contact.php">Contact</a></li>
                     <li><a href="#">Book My Stay</a></li>
                     <li><a href="#">Our Hotel</a></li>
                     <li><a href="#">Help</a></li>
                   </ul>
                </div>
                <div id="banner">
                    <div id="form">
                    <form method="post">
                    <center>
                      <table style="color:Green;">
                      <?php
                        $q1="select * from room where status='unbook'";
                        $run=mysqli_query($a,$q1);
                        $row=mysqli_fetch_assoc($run);
                        $rno=$row['roomno'];
                        $q="select * from room where status='unbook'";
                        $run=mysqli_query($a,$q);
                        $num=mysqli_num_rows($run);
                        // echo $num;
                        if($r<=$num)
                        {
                            ?>
                                <tr>
                              <td>Status</td>
                              <td><input type="text" value="Available" disabled="disabled"></td>
                          </tr>
                          <tr>
                              <td>ID</td>
                              <td><input type="text" name="id" placeholder="Enter your ID"></td>
                          </tr>
                          <tr>
                              <td>Name</td>
                              <td><input type="text" name="name" placeholder="Enter your name"></td>
                          </tr>
                          <tr>
                              <td>Identy Card No.</td>
                              <td><input type="number" name="idno" placeholder="Enter the ID number"></td>
                          </tr>
                          <tr>
                              <td>Enter Email</td>
                              <td><input type="email" name="email" placeholder="Enter Your email id"></td>
                          </tr>
                          <tr>
                              <td>Address</td>
                              <td><input type="text" name="address"></td>
                          </tr>
                          <tr>
                              <td>City</td>
                              <td>
                                  <select name="city">
                                      <option>Select</option>
                                      <option>Mumbai</option>
                                      <option>Pune</option>
                                      <option>Delhi</option>
                                      <option>Chennai</option>
                                  </select>
                              </td>
                          </tr>
                          <tr>
                              <td>District</td>
                              <td>
                                  <select name="dis">
                                      <option>Select</option>
                                      <option>Mumbai</option>
                                      <option>Pune</option>
                                      <option>Delhi</option>
                                      <option>Chennai</option>
                                  </select>
                              </td>
                          </tr>
                          <tr>
                              <td>State</td>
                              <td>
                                  <select name="state">
                                      <option>Select</option>
                                      <option>Maharashtra</option>
                                      <option>Delhi</option>
                                      <option>Tamilnadu</option>
                                  </select>
                              </td>
                          </tr>
                          <tr>
                              <td>Check IN Date</td>
                              <td><input type="date" name="coin" value="<?php echo $ci;?>"></td>
                          </tr>
                          <tr>
                              <td>Check Out Date</td>
                              <td><input type="date" name="coout" value="<?php echo $co;?>"></td>
                          </tr>
                          <tr>
                              <td>Enter Memebers</td>
                              <td><input type="number" name="members" placeholder="Enter memebers"></td>
                          </tr>
                          <tr>
                              <td><input type="submit" name="submit" value="Submit" style="width:120px;height:30px;border-radius:20px;"></td>
                          </tr>
                        <?php 
                         }
                         else
                         {
                             ?>
                                <tr>
                                  <td>Status</td>
                                  <td><input type="text" value="Not Available" disabled="disabled"></td>
                                </tr>
                             <?php
                         }
                      ?>
                      </table>
                    </center>
                    </form>
                    <?php
                      if(isset($_POST['submit']))
                        {
                            $id=$_POST['id'];
                            $name=$_POST['name'];
                            $idno=$_POST['idno'];             
                            $email=$_POST['email'];
                            $address=$_POST['address'];
                            $city=$_POST['city'];
                            $dis=$_POST['dis'];
                            $state=$_POST['state'];
                            $coin=$_POST['coin'];
                            $coout=$_POST['coout'];
                            $mem=$_POST['members'];
                            if(mysqli_query($a, "insert into form1(id,name,idno,email,address,city,dis,state,coin,coout,m)values
                               ('$id','$name','$idno','$email','$address','$city','$dis','$state','$coin','$coout','$mem')"))
                                {
                                    mysqli_query($a, "update room set status='book' where roomno=$rno");
                                    echo "<h1>Congrulation Your Room is Book.</h1>";
                                }
                                else
                                {
                                    echo "<h2>This data is already exist</h2>";
                                }
                        }                 
                    ?>
                    </div>
                    <h1><a href="index.php" style="color:red;float:right">Back to Home</a></h1>
                </div>
              </div>
           </div>
      </div>
   </body>
</html>
           