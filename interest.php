<!doctype html>
<html>
<head>
  <title>The interest of Lina Park</title>
  <meta charset="utf-8">
  <style>
  a {
    color:black;
    text-decoration: none;
  }
  h1 {
    border-bottom:1px solid black;
    margin:0;
    padding:40px;
    display:block;
    text-align:center;
  }

  body{
    margin:0;
  }
  h2{
    margin:0;
  }
  .center{
    display:block;
    margin-left:auto;
    margin-right: auto;
    width:25%;
  }
  #grid{
    display:grid;
    grid-template-columns:150px 1fr;
  }
  #grid ol{
    border-right:1px solid black;
    padding:20px;
    margin:0;
    width:100px;
    padding-left:30px;
    padding-right:0;
  }
  #article{
    padding:10px;
  }
  </style>
</head>
<body>
<h1><a href="index.php">박리나 연구소</a></h1>
<div id="grid">
<ol>
  <li><a href="index.php?id=footprint">발자취</a></li>
  <li><a href="index.php?id=daily">일상</a></li>
  <li><a href="interest.php">관심사</a></li>
  <li><a href="index.php?id=diary">오늘한줄</a></li>
</ol>
<div id="article">
<p>
<h2><a href="interest.php">관심사</a></h2>
<ul>
  <li><a href="interest.php?id=interest_life">삶</a></li>
  <li><a href="interest.php?id=interest_developer">개발자</a></li>
  <li><a href="interest.php?id=interest_immigration">이민</a></li>
  <li><a href="interest.php?id=interest_economy">경제</a></li>
  <li><a href="interest.php?id=interest_dance">댄스</a></li>
  <li><a href="interest.php?id=interest_fashion">패션</a></li>
</ul>
<h3>
  <?php
  if(isset($_GET['id'])) {
    echo $_GET['id'];
  } else {
    echo "This page is the interest of Lina Park!";
  }
   ?>
</h3>
</p>
<p>
  <?php
  if(isset($_GET['id'])){
    echo file_get_contents("interest/".$_GET['id']);
  } else {
    echo '<img src="interest_main.jpg" class="center">';
  }
  ?>
</p>
</div>
</div>
</body>
</html>
