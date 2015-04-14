<!DOCTYPE html>
<html>
<head lang="en">
    <link rel="stylesheet" href="http://localhost/bookbarter/public/css/bootstrap.css">
    <link rel="stylesheet" href="http://localhost/bookbarter/public/css/login.css">
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top " role="navigation">

    <div class="container topnav">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand topnav brand" href="#" style="font-size: 1.6em;">bookBarter.com</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right menu" style="font-size: 1.4em">
                <li>
                    <a class="active" href="#about">Home</a>
                </li>
                <li>
                    <a href="#services">Help</a>
                </li>

            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>
<div class="container">
    <div class="row">
        <div class="col-lg-9 col-md-offset-1">
<div class="jumbotron">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">

            <ul class="nav nav-tabs ">
                <li class="active"><a data-toggle="tab" href="#sectionA">Sign In</a></li>
                <li><a data-toggle="tab" href="#sectionB">Sign Up</a></li>
                <a class="navbar-brand navbar-right" href="#" style="color: #0089B2;font-size: 1.5em">bookBarter.com</a>
            </ul>

            <div class="tab-content">

                <div id="sectionA" class="tab-pane fade in active">
                    <br>
                    <form>
                        <div class="form-group">
                            <label for="email_id">Email address</label>
                            <input type="email" class="form-control" id="email_id" name="email" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="Password_id">Password</label>
                            <input type="password" class="form-control" id="Password_id" name="password" placeholder="Password">
                        </div>

                        <button type="submit" class="btn btn-default">Submit</button>&nbsp;<span></span><button type="cancel" class="btn btn-default">Cancel</button>
                    </form>
                </div>

                <div id="sectionB" class="tab-pane fade">
                    <br>
                    <form class="form-group">
                        <div class="form-group">
                            <label for="email_id_sign">What is yor email address</label>
                            <input type="email" class="form-control" id="email_id_sign" name="email_sign" placeholder="Enter email">
                        </div>
                        <div class="form-inline">
                        <div class="form-group">
                            <label class="sr-only" for="password_sign">Password</label>
                            <input type="password" class="form-control" id="password_sign" placeholder="Enter Password">
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="re-pass">Re-Type Password</label>
                            <input type="password" class="form-control" id="re-pass" placeholder="Re-Type Password">
                        </div>
                            </div>
                        <br>
                        <button type="submit" class="btn btn-default">Sign Up</button>
                    </form>
                </div>



            </div>
    </div>
    </div>

</div>
</div>
    </div>
</div>
    <nav class="navbar navbar-default navbar-fixed-bottom">
    <div class="container" style="text-align: center;color: grey">
       <h4>&copy; Copyright </h4>
    </div>

</nav>
<script src="http://localhost/bookbarter/public/js/jquery.js"></script>
<script src="http://localhost/bookbarter/public/js/bootstrap.js"></script>

</body>
</html>
