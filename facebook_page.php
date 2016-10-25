<!DOCTYPE html>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
   <script type="text/javascript" src="facebook.js"></script> 
<html>
  <head>
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

  <!-- Latest compiled and minified CSS -->
<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    </head>
    <script>
$(document).ready(function () {


window.fbAsyncInit = function () {
  FB.init({
    appId: 'APP ID',
    status: true,
    cookie: true,
    xfbml: true,
    version    : 'v2.5'
  });
FB.Event.subscribe('auth.authResponseChange', function (response) {
  if (response.status === 'connected') {
    //alert("Successfully connected to Facebook!");
  }
  else if (response.status === 'not_authorized') {
    alert("Login failed!");
  } else {
    alert("Unknown error!");
  }
});
};
});

(function(d, s, id){
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) {return;}
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>




<body class="container">



    <p style="margin-top:50px; font-size:15px;font-family:Tahoma, Geneva, sans-serif; text-align:center">Enter the URL/Link of the video and click Download (Only Facebook Page video supported)</p>


     <input  placeholder="Enter video URL here" class="form-control" style="margin-bottom:20px" id="url" centered></input>

	 <a href="#"  onclick="myFunction()" class="btn btn-primary btn-lg center-block" style="text-align:center; width:30%;"><span class="glyphicon glyphicon-save" ></span> Download</a>

   <footer style="bottom: 0;text-align:center;margin-top:150px;">Copyright &copy; All rights reserved to Tahmid Rahman</footer>


<script>

</script>

</body>
</html>
