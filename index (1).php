<!DOCTYPE html>
<html>
<head>
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
  border-right:1px solid #bbb;
}

li:last-child {
  border-right: none;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: #4CAF50;
}
</style>
</head> <br>    <br> 
<hr><center><h1>Welcome to Prerona</h1> <hr><br></center>
<body>

<ul>
  
  <li><a href="index.php">HOME</a></li>
  <li><a href="1.php">Music</a></li>
  <li><a href="2.php">Exercise</a></li>
  <li ><a href="3.php">Movies</a></li>
  <li ><a href="4.php">Admin Advice</a></li>
  <li ><a href="5.php">Online Article</a></li>
  <li ><a href="6.php">Emergency</a></li>
  <li ><a href="7.php">Motivation stories</a></li>
  <li ><a href="8.php">Books</a></li>
</ul>

<br> <hr><hr>
<ul>
    
  <li><a class="active" href="chat.php?id=2">Bangla ChatBox</a></li>
  <li><a   href="chat.php?id=3">English ChatBox</a></li>
  <li><a   href="chat.php?id=4">Korean  ChatBox</a></li>
   
</ul>

</body>

</html>



