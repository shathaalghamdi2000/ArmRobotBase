<?php



$username="root";
$password="";
$database =new PDO("mysql:host=localhost; dbname=armrobotbase;charset=utf8;", $username, $password);

if($database) 
{
    echo 'تم لاتصال';  
}







?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Robot Arm Base Control panel</title>
</head>


<style>
    body {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Montserrat',sans-serif;
        background-color: #999999;
    }
    .Buttons{
        display: flex;
        justify-content:center;
        align-items:center;
        min-height:100vh;
    }
    .item{
        padding: 10px;
    }

    .btn1{
      outline:none;
      position: relative;
      border:solid 1px #660066;
      font-size:16px;
      font-weight:500;
      line-height:1;
      padding: 16px 30px;
      border-radius:30px;
      background:#ffffff;
      color:#660066;
      cursor: pointer;
      transition:all 0.3s linear;
      font-family:'Montserrat', sans-serif;
      top:-30px;
      left:-20px;

    }
    .btn1:hover,
    .btn1:focus{
        background:#660066;
        color:#ffffff;
    }
    .btn1:active{
        background:#ffffff;
        color: #660066;
    }

    
    .btn2{
      outline:none;
      display:block;
      border:solid 1px red;
      font-size:16px;
      font-weight:500;
      line-height:1;
      padding: 16px 30px;
      border-radius:30px;
      background:#ffffff;
      color:red;
      cursor: pointer;
      transition:all 0.3s linear;
      font-family:'Montserrat', sans-serif;
       
    }
    .btn2:hover,
    .btn2:focus{
        background:#660066;
        color:#ffffff;
    }
    .btn2:active{
        background:#ffffff;
        color: #660066;
    }

    
    .btn3{
      outline:none;
      position: relative;
      border:solid 1px #660066;
      font-size:16px;
      font-weight:500;
      line-height:1;
      padding: 16px 30px;
      border-radius:30px;
      background:#ffffff;
      color:#660066;
      cursor: pointer;
      transition:all 0.3s linear;
      font-family:'Montserrat', sans-serif;
      bottom:-30px;
      left:-20px;

    }
    .btn3:hover,
    .btn3:focus{
        background:#660066;
        color:#ffffff;
    }
    .btn3:active{
        background:#ffffff;
        color: #660066;
    }

    
    .btn4{
      outline:none;
      position: relative;
      border:solid 1px #660066;
      font-size:16px;
      font-weight:500;
      line-height:1;
      padding: 16px 30px;
      border-radius:30px;
      background:#ffffff;
      color:#660066;
      cursor: pointer;
      transition:all 0.3s linear;
      font-family:'Montserrat', sans-serif;
      left:-310px;
      top:-54px;

    }
    .btn4:hover,
    .btn4:focus{
        background:#660066;
        color:#ffffff;
    }
    .btn4:active{
        background:#ffffff;
        color: #660066;
    }

    
    .btn5{
      outline:none;
      position: relative;
      border:solid 1px #660066;
      font-size:16px;
      font-weight:500;
      line-height:1;
      padding: 16px 30px;
      border-radius:30px;
      background:#ffffff;
      color:#660066;
      cursor: pointer;
      transition:all 0.3s linear;
      font-family:'Montserrat', sans-serif;
      right: 110px;
      top:-52px;
     

    }
    .btn5:hover,
    .btn5:focus{
        background:#660066;
        color:#ffffff;
    }
    .btn5:active{
        background:#ffffff;
        color: #660066;
    }

    </style>

<body>
    





<div class="Buttons" >
    <div class="item">
        <button    class="btn1" >  FORWAR   </button>
        <button    class="btn2" >  STOP     </button>
        <button    class="btn3" >      BACKWARD </button>
        <button    class="btn4" >     LEFT     </button>
        <button    class="btn5" >      RIGHT    </button>

        </div>
      
</div>



</body>
</html>


