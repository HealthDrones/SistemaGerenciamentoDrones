<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Simulação de Rotas por Autômatos Celulares</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/portfolio-item.css" rel="stylesheet">

		<link rel="stylesheet" href="css/login.css" type="text/css" media="screen" charset="utf-8">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<div class="container">
    <div class="row vertical-offset-100">
    	<div class="col-md-4 col-md-offset-4">
    		<div class="panel panel-info">
			  	<div class="panel-heading">
			    	<h3 class="panel-title">Login HealthDrones</h3>
			 	</div>
			  	<div class="panel-body">
            <img src="HealthDrones.png" width="300" alt=""/><br /><br />
			    	<form accept-charset="UTF-8" role="form" method="POST" action="controledeacesso.php">
                    <fieldset>
			    	  	<div class="form-group">
			    		    <input class="form-control" placeholder="login" name="login" type="text">
			    		</div>
			    		<div class="form-group">
			    			<input class="form-control" placeholder="Senha" name="senha" type="password" value="">
			    		</div>
              <!--<button type="button" class="btn btn-success btn-lg btn3d"><span class="glyphicon glyphicon-ok"></span> Success</button>-->
              <input class="btn btn-info btn-lg btn3d" type="submit" value="Login">
              <input class="btn btn-default btn-lg btn3d" type="reset" value="Limpar Campos">
			    	</fieldset>
			      	</form>
			    </div>
			</div>
		</div>
	</div>
</div>
</body>
</html>
