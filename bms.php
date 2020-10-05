<html>
   <head>
      <title>Hotel Management</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <link href="img/img1.png" type="img/icon" rel="icon">
      <style>
        body
         {
          margin: 0px;
         }
      </style>
   </head>
   <body>
       <div id="full">
           <div style="background-image: url(img/taj1.jpg);background-size:100% 700px; width:100%;height:700px">
              <div id="header">
                 <div id="logo">
                     <h1>Hotel Sunrise</h1>
                 </div>
                 <div id="nav">
                   <ul>
                     <li><a href="index.php">Home</a></li>
                     <li><a href="#">Our Hotel</a></li>
                     <li><a href="bms.php">Book My Stay</a></li>
                     <li><a href="#">Help</a></li>
                     <li><a href="contact.php">Contact</a></li>
                   </ul>
                </div>
                    <div id="banner">
                    </div>
              </div>
              <center>
              <div id="f2" style="background:rgba(255,255,255,.5);width:80%">
                  <form action="r1.php" method="get">
                    <center> 
                       <table>
                          <tr>
                             <th width="20%" heigth="50px">Destination</th>
                             <th width="20%" heigth="50px">Check In Date</th>
                             <th width="20%" heigth="50px">Check Out Date</th>
                             <th width="20%" heigth="50px">Room</th>
                             <td rowspan="2"><input type="submit" value="Check" name="sub"></td>
                          </tr>
                          <tr>
                              <td width="20%" heigth="50px"><center><input type="text" name="d1" placeholder="Enter Destination"></center></td>
                              <td width="20%" heigth="50px"><center><input type="date" name="ci"></center></td>
                              <td width="20%" heigth="50px"><center><input type="date" name="co"></center></td>
                              <td width="20%" heigth="50px">
                                 <select name="room">
                                    <option>Select</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                             </td>
                           </tr>
                      </table>
                    </center>
                 </form>
              </div>              
              </center>
           </div>   
        </div>
   </body>
</html>