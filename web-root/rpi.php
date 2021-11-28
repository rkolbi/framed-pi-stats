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

    <script type="text/javascript">

        function Ajax()
        {
            var
                $http,
                $self = arguments.callee;

            if (window.XMLHttpRequest) {
                $http = new XMLHttpRequest();
            } else if (window.ActiveXObject) {
                try {
                    $http = new ActiveXObject('Msxml2.XMLHTTP');
                } catch(e) {
                    $http = new ActiveXObject('Microsoft.XMLHTTP');
                }
            }

            if ($http) {
                $http.onreadystatechange = function()
                {
                    if (/4|^complete$/.test($http.readyState)) {
                        document.getElementById('ReloadThis').innerHTML = $http.responseText;
                        setTimeout(function(){$self();}, 1000);
                    }
                };
                $http.open('GET', 'loadtxt.php' + '?' + new Date().getTime(), true);
                $http.send(null);
            }

        }

    </script>

</head>
<body>

<div class="topnav">
  <a href="esmars.php"><font color="#e42a1b">!!!STOP SATURN!!!</font></a>
  <a href="enviro.csv">Download Enviro</a>
  <a href="enviro-reset.php">Reset Enviro</a>
  <a href="reboot.php">Reboot rPi</a>
  <a href="shutdown.php">Shutdown rPi</a>
  <a href="rmars.php">Reboot Saturn</a>
  <a href="exercise.php">Exercise Z-Axis</a>
  <a href="mix.php">Mix</a>
<a href="enviro-reset.php"><font color="grey">
    <script type="text/javascript">
        setTimeout(function() {Ajax();}, 1000);
    </script>
    <div id="ReloadThis">Reading Temps</div>
</font></a>
</div>

<script type="text/javascript" src="dygraph.js"></script>
<link rel="stylesheet" href="dygraph.css" />
</head>
<body>
<body style="background-color: #f8f8f8;">
<br>
<div id="graphdiv"
  style="width:100%; height:75px;"></div>




<script type="text/javascript">
  g = new Dygraph(
        document.getElementById("graphdiv"),  // containing div
        "enviro.csv",
        { }                                   // the options
      );
</script>

</body>
</html>
