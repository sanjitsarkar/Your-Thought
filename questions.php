<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Cinzel' rel='stylesheet' type='text/css'>
  <title>Your Thoughts</title>
  <style>
  body{
  background-color:#1e1e1e;
  @import url(https://fonts.googleapis.com/css?family=Cinzel);
display:flex;
flex-direction:column;
  width:100%;
  min-height:100vh;
  margin:0;
  color:#ffffff;
  }
  header{
    @import url(https://fonts.googleapis.com/css?family=Pacifico);
    flex-basis:100%;
    margin-top:10px;
    height:10px;
    background-color:rgba(152,152,152,0.1);
    padding:1px;
    border:1px solid white;
    border-radius:5px;
    border-left:0px;
    border-right:0px;
text-align:center;


box-shadow:0px 4px 30px black;
  }
  h1{
    color:white;
  }
  header h1{
    font-size:25px;
    letter-spacing:10px;
  }
  main h1{
    font-family: 'Cinzel', serif;
    font-style:italic;
    letter-spacing:2px;
  }
  main{
    flex-grow:1;
  
  }
  main h2{
    font-family: 'Pacifico', cursive;
    font-weight:lighter;

  }button
  {
    padding-bottom:100px;
    margin-top:20px;
    text-align:center;
  border-radius:10px;
  width:100px;
  height:50px;
  background-color:transparent;

 font-size:20px;
  border:1px solid #ffffff;;
  color:#ffffff;
 

  }
  main{
    flex-direction:row;
  }
  main *{

     display:flex; 
    flex-direction:column;
    padding:20px;
    align-items:center;
    justify-content:center;
  }
  #footer,#header{
    text-align:center;
    padding:10px;
   flex-basis:100%;
    

    justify-content:center;
  }
  #footer{
    align-items:flex-end;
  }
  input[type="text"]
  {
  
  border-radius:10px;
  width:400px;
  height:10px;
  background-color:rgba(141,141,141,0.8);
  border:0px;
  color:#ffffff;
  font-size:20px;
  outline:none;
  }
  #heart{
    color:red;
    font-size:20px;
    animation:heart 1s linear 1s infinite;
  }/* 
  #heart:before{
    content:"";
    color:white;
    animation:heart 1s linear 1.5s infinite;

  }
  #heart:before{
    content:"";
    animation:heart 1s linear 2s infinite;

  }  */
  @keyframes heart{
    0%{
      opacity:0;
    transform:scale(0);
    }
    75%{
      opacity:1;
      transform:scale(10);
    }
100%{
  opacity:1;
      transform:scale(1);
}

  }
  </style>
  <script>
    </script>
</head>
<body>
<header id="header"><h1>Your Thoughts</h1></header>
<main>
<h1>What's your Friend's Thoughts about you???</h1>
<br>
<h2>Let's Check it Out</h2>
<br>
<form method="post" action="index.php">


<button name="submit">Create</button>
</form>

</main>
<?php
if(isset($_POST['submit'])){
  $name=$_POST['yname'];
 
  $conn=mysqli_connect("localhost","root","","yourdb");
  if($conn){
    $sql="
      
      )";
    $query=mysqli_query($conn,$sql);
  }
  else{
    die("Error").mysqli_error($conn);
  }

  
}
  

?>

<footer id="footer">
Designed &amp; Coded With <span id="heart">&hearts;</span> By Sanjit Brown Smith </footer>
</body>
</html>