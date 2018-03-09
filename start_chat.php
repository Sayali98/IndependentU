<?php
?>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
       <link href="name_modal.css" rel="stylesheet" type="text/css"/>
        <title>Chatbot</title>
		<style>
		.navbar{
		background-color:black;
		font-size:20px;
		padding-top:10px;
		padding-bottom:10px;
		}
		#banner_image{

 padding-top: 75px; 
 padding-bottom: 50px;    
 text-align: center;     
 color: #f8f8f8;    
 background:url(b2.jpg) no-repeat center center;
 background-size: cover;
opacity:1.0;

}

#banner_content{
	position: relative; 
	padding-top: 6%; 
	padding-bottom: 6%;
	margin-top: 12%; 
	margin-bottom: 12%;
	background-color: rgba(0, 0, 0, 0.7);
	max-width: 450px;
	min-height:260px; 
	 
	
	
}

		</style>
    </head>
	
	
     <body>
      <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
		<div id="logo"><img src="i22.png" alt="FLOWERS"  class="img-circle" style="float:left"></div>
            <div class="nav navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>    
				
                <a href="#" class="navbar-brand" style="font-size:20px;color:white"> &nbsp; independentU</a>
            </div>
            <div class="collapse navbar-collapse" id="mynavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#" style="color:white">what is independentU??</a></li>
                    
                </ul>
            </div>
        </div>
    </nav>
	
	
	
	
	
	
	<div id="banner_image">
	  <div class="container">
	  <center>
	  <div id="banner_content">
	   
	  <h1>QUERIES</h1><br/>
	  <h3>Need Help?<br/>I'm there for you.</h3><br/>
	  <a href="#" data-toggle="modal" data-target="#n-modal" ><button class="btn btn-danger btn-lg active">Let's talk</button></a>
	   
	  
	  </div>
	  </center>
	  </div>
	</div>
	
	<div class="modal fade" id="n-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    	  <div class="modal-dialog">
				<div class="nmodal-container">
				<div style="font-size:30px ;font-family:sans-serif">We will get started....<div>
				But first tell me your name</br></br>
				<!--  <form method="post" action="login_check.php"> -->
					<input type="text" name="user" placeholder="Enter name">
					</br></br>
					<input type="submit" name="login" class="nmodal-submit" value="Submit">
                        
				  </form>
					
				  
				</div>
			</div>
		  </div>
	
	
	
</body>
</html>

