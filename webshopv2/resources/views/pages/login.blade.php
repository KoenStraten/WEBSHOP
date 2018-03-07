@extends ('layouts.master')
        <!DOCTYPE html>
<html>

<head>
    <title>Webshop</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style type="text/css">
    </style>
</head>

<header>
    <!--    --><?php
    //    require_once 'header.php';
    //    ?>
</header>

<body>
<div class="container pt-5">
    <div class="row">
        <div class="col-sm-3 col-md-4"></div>
        <div class="col-md-4 col-md-offset-3">
            <div class="panel panel-login">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <form id="login-form" action="#" method="post" role="form"
                                  style="display: block;">
                                <div class="form-group">
                                    <input type="text" name="username" id="username" tabindex="1"
                                           class="form-control" placeholder="Username" value="">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" id="password"
                                           tabindex="2" class="form-control" placeholder="Password">
                                </div>
                                <div class="form-group text-center">
                                    <input type="checkbox" tabindex="3" class="" name="remember"
                                           id="remember"> <label for="remember"> Remember Me</label>
                                </div>
                                <div class="btn-outline-success form-group text-center">
                                    <input type="submit" name="login-submit" id="login-submit"
                                           tabindex="4" class="form-control btn btn-login"
                                           value="Log In">
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="text-center">
                                                <a href="#" tabindex="5" class="forgot-password">Forgot
                                                    Password?</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-3 col-md-4"></div>
    </div>
</div>

<!-- scripts  -->
<script
        src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js">
</script>
<script src="../webshopv2/resources/assets/js/bootstrap.min.js"></script>
</body>

<footer>
    <!--    --><?php
    //    require_once 'footer.php';
    //    ?>
</footer>

</html>