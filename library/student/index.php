<?php 
    session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
		Online Library Management System
	</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
   <div class="wrapper">
   	     <header>
   	     <div class="logo">
              <img src="images/9.png">
              <h1 style="color: white;">ONLINE LIBRARY MANAGEMENT SYSTEM</h1>
     </div>

      <?php 
      if(isset($_SESSION['login_user']))
      {?>
      	 <nav>
   	     	<ul>
   	     		<li><a href="index.php">HOME</a></li>
   	     		<li><a href="books.php">BOOKS</a></li>
   	     		<li><a href="logout.php">LOGOUT</a></li>
   	     		<li><a href="feedback.php">FEEDBACK</a></li>
   	     	</ul>
        }
      </nav>
      <?php
    }
    else
    {
    	?>
          <nav>
   	     	<ul>
   	     		<li><a href="index.php">HOME</a></li>
   	     		<li><a href="books.php">BOOKS</a></li>
   	     		<li><a href="student_login.php">STUDENT-LOGIN</a></li>
   	     		<li><a href="feedback.php">FEEDBACK</a></li>
   	     	</ul>
        
     </nav>

      <?php
     }
    
       ?>

   	    
				
		</header>
		<section>
			<div class="sec_img">
				
			<br><br><br>
		      <div class="box">
		      	<br><br><br><br>
		      	<h1 style="text-align: center; font-size: 35px;">Welcome to library</h1><br>
		      	<h1 style="text-align: center;font-size: 20px;">Opens at: 09:00 </h1><br>
		      	<h1 style="text-align: center;font-size: 20px;">Closes at: 15:00</h1><br>
		      </div>
		   </div>		
		</section>
		<footer>
				<p style="color: white;text-align: center;">
					<br><br>
					Email:&nbsp Online.library@gmail.com <br><br>
					Mobile:&nbsp +880171******
				</p>
		</footer>
      </div> 
</body>
</html>