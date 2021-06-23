<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="slider.css">
</head>
<body>
  
  

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script>
    navigator.geolocation.getCurrentPosition(function(pos){
      latitude = pos.coords.latitude;
      longitude = pos.coords.longitude;

      function reqListener () {
        console.log(this.responseText);
        console.log(latitude);
        console.log(longitude);
      }
      
      var oReq = new XMLHttpRequest();
      oReq.addEventListener("load", reqListener);
      oReq.open("GET", "/schedule/php/go_camping.php");
      oReq.send();
    });
  </script>
</body>
</html>