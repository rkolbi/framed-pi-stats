<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #333;

}

.topnav a {
  float: left;
  color: #f2f2f2;

  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17.5px;
}

.topnav a:hover {
  background-color: #ddd;
  background-color: #b71c1c;

  color: black;
  color: #f2f2f2;
}

.topnav a.active {
  background-color: #4CAF50;



  color: white;
}
</style>
</head>
<body>

<div class="topnav">
  <a href="enviro.csv">Download Enviro Data</a>
  <a href="enviro-reset.php">Reset Enviro Data</a>
  <a href="shutdown.php">Shutdown rPi</a>
</div>

<script type="text/javascript" src="dygraph.js"></script>
<link rel="stylesheet" href="dygraph.css" />
</head>
<body>
<br>
<div id="graphdiv"
  style="width:100%; height:80px;"></div>




<script type="text/javascript">
  g = new Dygraph(
        document.getElementById("graphdiv"),  // containing div
        "enviro.csv",
        { }                                   // the options
      );
</script>

</body>
</html>
