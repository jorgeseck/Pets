<?php
   $conexion = mysqli_connect('localhost', 'root', 'Daniel30', 'pets');
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['usuario']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT idusuario FROM usuarios WHERE usuario = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
        
      if($count == 1) {
         session_register("usuario");
         $_SESSION['login_user'] = $myusername;
         
         header("location: home.php");
      }else {
         $error = "Contraseña o usuario incorrecto";
      }
   }
?>
<html>
   
   <head>
      <title>Login Page</title>
      <script type="text/javascript">
         //show password
$(document).ready(function(){
    $("#pw").focus(function(){
        this.type = "text";
    }).blur(function(){
        this.type = "password";
    })   
});

//Placeholder fixed for Internet Explorer
$(function() {
   var input = document.createElement("input");
   if(('placeholder' in input)==false) { 
      $('[placeholder]').focus(function() {
         var i = $(this);
         if(i.val() == i.attr('placeholder')) {
            i.val('').removeClass('placeholder');
            if(i.hasClass('password')) {
               i.removeClass('password');
               this.type='password';
            }        
         }
      }).blur(function() {
         var i = $(this);  
         if(i.val() == '' || i.val() == i.attr('placeholder')) {
            if(this.type=='password') {
               i.addClass('password');
               this.type='text';
            }
            i.addClass('placeholder').val(i.attr('placeholder'));
         }
      }).blur().parents('form').submit(function() {
         $(this).find('[placeholder]').each(function() {
            var i = $(this);
            if(i.val() == i.attr('placeholder'))
               i.val('');
         })
      });
   }
   });
      </script>
      <style type = "text/css">
       body {
  background: #F59C02;
  color: #46485c;
  font-family: sans-serif;
}

h2 {
  color: #ffffff;
  font-size: 15px;
  font-weight: 600;
  text-align: center;
  margin-bottom: 10px;
}

a {
  color: #fff45f;
  text-decoration: none;
}

.login {
  width: 250px;
  position: absolute;
  top: 50%;
  left: 50%;
  margin: -184px 0px 0px -155px;
  background: rgba(0,0,0,0.2);
  padding: 20px 30px;
  border-radius: 5px;
  box-shadow: 0px 1px 0px rgba(0,0,0,0.3),inset 0px 1px 0px rgba(255,255,255,0.07)
}

input[type="text"], input[type="password"] {
  width: 250px;
  padding: 25px 0px;
  background: transparent;
  border: 0;
  border-bottom: 1px solid rgba(255,255,255,0.04);
  outline: none;
  color: #ffffff;
  font-size: 12px;
}
input[type=checkbox] {
  display: none;
}

label {
  display: block;
  position: absolute;
  margin-right: 10px;
  width: 8px;
  height: 8px;
  border-radius: 50%;
  background: transparent;
  content: "";
  transition: all 0.3s ease-in-out;
  cursor: pointer;
  border: 3px solid #46485c;
}

#remember:checked ~ label[for=remember] {
  background: #ffffff;
}

input[type="submit"] {
  background: #ffffff;
  border: 0;
  width: 250px;
  height: 40px;
  border-radius: 3px;
  color: #000000;
  cursor: pointer;
  transition: background 0.3s ease-in-out;
}
input[type="submit"]:hover {
  background: #F59C02;
}

.forgot {
  margin-top: 30px;
  display: block;
  font-size: 11px;
  text-align: center;
  font-weight: bold;
}
.forgot:hover {
  margin-top: 30px;
  display: block;
  font-size: 11px;
  text-align: center;
  font-weight: bold;
  color: #6d7781;
}

.remember {
  padding: 30px 0px;
  font-size: 12px;
  text-indent: 25px;
  line-height: 15px;
}

::-webkit-input-placeholder {
  color: #46485c;
}

[placeholder]:focus::-webkit-input-placeholder {
  transition: all 0.2s linear;
  transform: translate(10px, 0);
  opacity: 0;
}

      </style>
      
   </head>
   
   <body>
<div class='login'>
  <h2>login</h2>
  <input name='username' placeholder='Username' type='text'/>
  <input id='pw' name='password' placeholder='Password' type='password'/>
  <div class='remember'>
    <input checked='' id='remember' name='remember' type='checkbox'/>
    <label for='remember'></label>Remember me
  </div>
  <input type='submit' value='Entrar'/>
  <a class='forgot' href='registro.php'>Registrar</a>
</div>
   </body>
</html>