<!DOCTYPE html>
<html >
<head>

    <meta charset="UTF-8">
    <title>Login</title>
	<script src="js/jquery-3.1.1.min.js"></script>
	<script src="js/jquery.easing.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	  <link  href='css/bootstrap.css' rel="stylesheet"/>
	  
	  <style type="text/css">
    body{
      background-color: #FF8A00;
    }
             @font-face {
    		font-family: "Ravi Prakash";
    		src: url(fonts/RaviPrakash-Regular.ttf) format("truetype");
		}
          input[type="text"]{
    background-color: #FFFFFF;
    border: 1px solid #CCCCCC;
    box-shadow: 0 1px 1px rgba(0, 0, 0, 0.075) inset;
    transition: border 0.2s linear 0s, box-shadow 0.2s linear 0s;
    border-radius: 4px 4px 4px 4px;
    color: #555555;
    display: inline-block;
    font-size: 14px;
    height: 20px;
    line-height: 20px;
    margin-bottom: 10px;
    padding: 4px 6px;
    vertical-align: middle;
}
input[type="text"]:focus {
    border-color: rgba(82, 168, 236, 0.8);
    outline: 0 none;
    -webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgba(82,168,236,.6);
    -moz-box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgba(82,168,236,.6);
    box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgba(82,168,236,.6);
}
  input[type="password"]{
    background-color: #FFFFFF;
    border: 1px solid #CCCCCC;
    box-shadow: 0 1px 1px rgba(0, 0, 0, 0.075) inset;
    transition: border 0.2s linear 0s, box-shadow 0.2s linear 0s;
    border-radius: 4px 4px 4px 4px;
    color: #555555;
    display: inline-block;
    font-size: 14px;
    height: 20px;
    line-height: 20px;
    margin-bottom: 10px;
    padding: 4px 6px;
    vertical-align: middle;
}
input[type="password"]:focus {
    border-color: rgba(82, 168, 236, 0.8);
    outline: 0 none;
    -webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgba(82,168,236,.6);
    -moz-box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgba(82,168,236,.6);
    box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgba(82,168,236,.6);
}
input[type="submit"]{
 border: none;
 background: #FFFFFF;
 color: #636363;
 padding: 10px;
 font-size: 18px;
 border-radius: 5px;
 position: relative;
 box-sizing: border-box;
 transition: all 500ms ease;
}
  input[type="submit"]:before{
  content:'';
  position: absolute;
  top: 0px;
  left: 0px;
  width: 0px;
  height: 42px;
  background: rgba(128,128,128,0.3);
  border-radius: 5px;
  transition: all 2s ease;
  }
  input[type="submit"]:hover:before{
  width: 100%;
  }
  .todo{
    position: absolute;
    top: 180px;
    left: 525px;
  }

          
    </style>
    
</head>
<body>
    <form class="todo" method="POST" action="getusuario.php">
        <fieldset>
            <div class="control-group">
                <label id="nom" class="control-label">Nombre</label>
                <div class="controls">
                <input type="text" id="usuario" name="Nombre" class="input-xlarge">
                </div>
             </div>
                <div class="control-group">
                <label id="pass" class="control-label">Password</label>
                <div class="controls">
                <input type="password" id="password" name="contraseña" class="input-xlarge">
                </div>
                     </div>
            <div class="control-group">
            <div class="controls">
                <input id="btn" type="submit" value="login"/>
                <a href="registro.phpS">registrar</a>
               
                </div>
            </div>
        </fieldset>
        </form>
</body>
</html>