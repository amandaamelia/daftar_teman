<!DOCTYPE html>
<html>
<head>
    <title>Daftar</title>
    <link rel="stylesheet" type="text/css" href="style/bootstrap.css">
</head>
<body style="background-color: aquamarine;">
 
 
<div class="container" style="margin-top:8%">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <p>
                <center>
                    <h2>Silahkan Registrasi</h2>
                </center>
            </p>
            <br>
                 
            <form class="form-horizontal" action="input.php" method="post">
                <div class="box-body">
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">Username</label>
 
                        <div class="col-sm-9">
                            <input type="text" name="username" class="form-control" placeholder="Username" autofocus>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-3 control-label">Password</label>
 
                        <div class="col-sm-9">
                            <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password">
                        </div>
                    </div>
                </div>
                <div class="box-footer">
                    <button type="submit" class="btn btn-primary pull-right">Daftar</button>
                </div>
                <div class="form-group">
                  <div class="col-sm-offset-0 col-sm-12">
                    <div class="checkbox">
                     
                        <p>
                            Sudah punya akun..? <a href="login.php">Login</a>
                        </p>
                     
                    </div>
                  </div>
                </div>
            </form>
        </div>
    </div>
    <p style="margin-top:5%;">
        <center>© 2019 Copyright @ AplikasiDaftarTeman <?php echo date("Y"); ?></center>
    </p>
</div>
    <script type="text/javascript" src="style/jquery.js"></script>
    <script type="text/javascript" src="style/bootstrap.js"></script>  
    <script type="text/javascript" src="script.js"></script>   
</body>
</html>