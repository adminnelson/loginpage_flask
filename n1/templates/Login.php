<?php

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
     <style type="text/css">
         body{
            background-image: linear-gradient(45deg,#c7c5f4,#776bcc);
        }
    #text{
        height: 25px;
        border-radius: 5px;
        padding: 4px;
        border:solid thin #aaa;
        width: 100%;
    }

    #button{
        padding: 10px;
        width: 100px;
        color:white;
        background-color: lightblue;
        border:none;
    }

    #box{
        background-color:grey;
        background-image: linear-gradient(45deg,#c7c5f4,#776bcc);
        margin: auto;
        width:300px;
        padding:20px;
    }
    </style>

    <div id="box">
        <form method="post" action="/login_validation">
            <div style="font-size: 20px;margin: 10px;color:white">Se Connecter</div>

            <label>NAME</label><input id="text" type="text" name="NOM" required><br><br>
            <label>PASSWORD</label><input id="text" type="password" name="PASSWORD" required><br><br>
            <label>EMAIL</label><input id="text" type="email" name="Email" required><br><br>

            <input id="button" type="submit" value="Login"><br><br>

            <a href="/signup">Creer un compte</a><br><br>
        </form>
    </div>
</body>
</html>