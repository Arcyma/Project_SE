<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    

    <style>
        img {
            width:100px;
            height:120px:
            
        }

        body{
            font-family: sans-serif;
            padding: 0;
            margin: 0;
            color: white;

            background-image: url("assets/img/gamesback.jpeg");
            background-repeat: no-repeat;
            background-size: cover;
            
        }
        
        table{
            width:50%;
            text-align: center;
        }

        th{
            padding:40px;
        }


        #header {
           background-color: black;
         /*Opacity start*/
         -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=50)";
         filter: alpha(opacity=80);
         -moz-opacity: 0.80;
         -khtml-opacity: 0.8;
         opacity: 0.8;
          /*Opacity end*/
          color: white;
          position: fixed;
          top: 0;
          left: 0;
          width: 100%;
           height: 150px;
           padding: 0;
          margin: 0;
        }
        #header #header-content {
        margin: 10px;
        }






    </style>

</head>
<body>


<header>
    <div id="transhead">
        <p1>TAKE ME BACK</p1>
    </div>
</header>

<table align="center">
    <tr>
        <th colspan="4">Pick a game</th>
    </tr>

    <tr>
        <div class="container">
            
        <td><img src="assets/img/games/fallout4.jpg">
        <div class="overlay">Fallout 4</div></td>
        <td><img src="assets/img/games/apexL.jpg">
        <div class="overlay">Apex Legends</div></td>
        <td><img src="assets/img/games/metroEX.jpg">
        <div class="overlay">Metro Exodus</div></td>
        <td><img src="assets/img/games/witcher3.jpg">
        <div class="overlay">The Witcher 3</div></td>
            
        </div>
    </tr>



</table>

<div class="container-game">
<div class="games-info">
    <table>
        <tr>
            <th>Low</th>
            <th>Medium</th>
            <th>High</th>
            <th>Ultra</th>
        </tr>
        <tr>
            <td>PENTIUM4</td>
            <td>PENTIUM4</td>
            <td>PENTIUM4</td>
            <td>PENTIUM4</td>


    </table>
    
</div>
</div>
    
    
</body>
</html>