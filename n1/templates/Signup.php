<?php

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
</head>
<body>
    <style type="text/css">
    body{
            background-image: linear-gradient(20deg,red,violet);
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
        background-color: darkblue;
        border:none;
    }

    #box{
        display: flex;
        justify-content: center;
        background-color:grey;
        background-image: linear-gradient(45deg,yellow,red,pink);
        box-shadow: 0px 0px 24px #5c5696;
        width:300px;
        margin: auto;
        align-items: center;
        min-height: 50vh;
        height: 600px;
        padding:20px;

    }

    </style>

    <div id="box">

        <form method="post" action="/add_users">
            <div style="font-size: 20px;margin: 10px;color:white">Creer Compte</div>

            <label>NAME</label><input id="text" type="text" name="NOM" required><br><br>
            <label>PASSWORD</label><input id="text" type="password" name="PASSWORD" required><br><br>
            <label>EMAIL</label><input id="text" type="email" name="Email" required><br><br>


            <input id="button" type="submit" value="creer"><br><br>

            <a href='/'>se connecter</a><br><br>
        </form>
    </div>
</body>
</html>