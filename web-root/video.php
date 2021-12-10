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
.rotateimg180 {
  -webkit-transform:rotate(180deg);
  -moz-transform: rotate(180deg);
  -ms-transform: rotate(180deg);
  -o-transform: rotate(180deg);
  transform: rotate(180deg);
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
<br>
<center><font color="grey">    <script type="text/javascript">
        setTimeout(function() {Ajax();}, 1000);
    </script>
    <div id="ReloadThis">Reading Temps</div>
</font>
</center>
</div>
<div class="topnav">
<center>
<br>
<img border="1" src="http://10.0.1.141:8080/?action=stream" class="rotateimg180">
<br><br>
</div>
<div class="topnav">
<a href="http://10.0.1.141:8080/control.htm"  
    onclick="window.open('http://10.0.1.141:8080/control.htm', 
                         'newwindow', 
                         'width=400,height=550'); 
              return false;"
 >Adjust video</a>

</div>
</body>
</html>
