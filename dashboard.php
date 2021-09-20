<?php
session_start();
if(!isset($_SESSION['userdata'])){
    header("location:http://localhost/vaccination/login.html");
 
}
     $userdata =$_SESSION['userdata'];
   


     if( $_SESSION['userdata']['status']==0){
         $Status='Not Voted';
     }
     else{
         $Status='Voted';
     }
?>

<html>
    <head>
        <title>vaccination dashboard</title>
        <link rel="stylesheet" href="C:\xampp\htdocs\vaccination\stylesheet.css">
    </head>
    <body bgcolor="orange">
        <style>

          #headerSection h1{
            font-family: cursive;
           
          }

          #mainsection{
            background: gray;
          }

          #backbtn{
            padding: 5px;
    border-radius: 10px;
    width: 100px;
    height: 35px;
    background-color: rgba(7, 7, 214, 0.61);
    color:white;
    float: left;
    margin: 10px;
          }

          #logoutbtn{
            padding: 5px;
            border-radius: 10px;
            width: 100px;
            height: 35px;
            background-color: rgba(7, 7, 214, 0.61);
            color:white;
            float: right;
            margin: 10px;
          }

          #profile{
              
              color: white;
              width: 560px;
              padding: 20px;
              margin-left: 500px;
            
              
          }

          #voted{
            padding: 5px;
            border-radius: 10px;
            width: 100px;
            height: 35px;
            background-color: green;
            color: rgb(1, 12, 3);
          }

          #votes{
            padding: 5px;
            border-radius: 10px;
            width: 100px;
            height: 35px;
            background-color: blue;
            color:white;
          }

        </style>

        
        <div id="mainsection">
             <div id="headersection">
                   <a href="http://localhost/vaccination/login.html"><button id="backbtn">Back</button></a>
                   <a href="http://localhost/vaccination/logout.php"><button id="logoutbtn">Logout</button></a>
                  <br><br><center> <h1>GIVE RESPONSE!!!</h1></center>
             </div>

                             <hr>
               <div id="profile"><br><h3>
               <b><h2>Name:&nbsp;&nbsp; <?php echo $userdata['name']?> </b></h2>
               <b><h2>Address:&nbsp;&nbsp; <?php echo $userdata['address']?> </b></h2>
               <b><h2>Mobile No.:&nbsp;&nbsp; <?php echo $userdata['mobile']?> </b></h2>
               <b><h2>Age Group:&nbsp;&nbsp; <?php echo $userdata['agegroup']?> </b></h2>
               <b><h2>Status:&nbsp;&nbsp; <?php echo $Status?> </b></h2>
                 </div><br></h3>
                             <hr>
             
                <div id="group">
                <?php
                     if($_SESSION['userdata']){
                     
                 ?>
                 <div><center><br>
                   <b><h2> ARE YOU TAKEN COVID VACCINE ???</h2></b> <br>
                   
                    <form action="http://localhost/vaccination/vote.php" method="POST">
                        <input type="hidden" name="gvotes" value="<?php echo $userdata['votes']?>">
                        <input type="hidden" name="gid" value="<?php echo $userdata['id']?>">
                        <?php
                          if( $_SESSION['userdata']['status'==0]){
                              ?>
                             <input type="submit" name="votes" value="YES" id="votes">
                             <?php
                          }
                          else{
                            ?>
                            <button disabled type="button" name="votes" value="YES" id="voted">Voted</button>
                            <?php 
                          }
                        ?>
                        
                        
                        
                    </form>
                   <h2>NUMBER OF PEOPLE:  <?php echo $userdata['votes']?></h2>
                   <br><br>
                   </center></div>
                   <?php
          
                
            }
            else{

            }
            ?>
            
               </div>
        </div>

    </body>
</html>