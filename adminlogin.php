<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin-2.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div style=" width:80%;">
                    <div class="panel-heading">
                    	<div class="row">
                        	<div class="col-md-4 col-sm-4 col-xs-12 col-md-offset-5 col-sm-offset-4"> 
                        		<h2 class="panel-title"><b>Administrator Sign In</b></h3>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                    	<form class="form-horizontal" action="phpscripts\loginadmin.php" autocomplete="on" method="post" name="login" onSubmit="return validateForm1();">
                                <div class="form-group">
                                    <label for="email" class="col-sm-2 control-label">
                                        Username</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="admin_uid" required="required"  placeholder="username" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1" class="col-sm-2 control-label">
                                        Password</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="admin_pwd" required="required" type="password" placeholder="password" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-10 col-sm-offset-2">
                                        <input type="submit" class="btn btn-primary btn-sm" type="submit" value="Login"></input>
                                    </div>
                                </div>
                                </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- jQuery -->
<script src="js/jquery-1.11.3.min.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
</body>

</html>
