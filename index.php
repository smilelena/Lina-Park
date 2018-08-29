<!doctype html>
<html>
<head>
  <title>The reserch institute of Lina Park</title>
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
    ol {
      border-right:1px solid black;
      padding:20px;
      margin:0;
      width:100px;
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
  <h2>
    <?php
    if(isset($_GET['id'])){
      echo $_GET['id'];
    }
    else {
      echo "Welcome!";
    }
    ?>
 </h2>
  <p>
    <?php
    if(isset($_GET['id'])){
      echo file_get_contents("index/".$_GET['id']);
    } else {
      echo '<img src="박리나.jpg" class="center">
      <br>박리나도 몰랐던 박리나에 대해
      <br>박리나가 알던 박리나를 더 자세히
      <br>알아가는 공간이 되기를 바라며 시작하겠습니다.';
    }
     ?>
  </p>
  </h2>
  </div><!--h2부터p태그까지의div-->
</div><!--ol부터p태그까지의div-->
</body>
</html>
