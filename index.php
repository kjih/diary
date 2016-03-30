<? include("php/login.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Secret Diary</title>

    <!-- Bootstrap -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- My styles -->
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>

<body data-spy="scroll" data-target=".navbar-collapse">

    <div class="navbar navbar-inverse navbar-fixed-top" id="navBar">
        <div class="container">
            <div class="navbar-header">
                <a href="" class="navbar-brand">Secret Diary</a>

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse" />

                <span class="sr-only">Toggle navigator</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </div>

            <div class="collapse navbar-collapse">
                <form class="navbar-form navbar-right" method="post">
                    <div class="form-group">
                        <input type="email" name="loginemail" id="loginemail" placeholder="Email" class="form-control" value="<?php echo addslashes($_POST['loginemail']); ?>" />
                    </div>

                    <div class="form-group">
                        <input type="password" name="loginpassword" placeholder="Password" class="form-control" />
                    </div>

                    <input type="submit" class="btn" name="loginsubmit" value="Log in" />
                </form>
            </div>
        </div>
    </div>

    <div class="container contentContainer" id="topContainer">
        <div class="row marginBottom">
            <div class="col-md-6 col-md-offset-3" id="topRow">
                <h1 class="divMarginTop">Secret Diary</h1>

                <p>Your own private diary, with you wherever you go</p>

                <?php
                    if ($error) {
                        echo '<div class="alert alert-danger">' . addslashes($error) . '</div>';
                    }

                    if ($message) {
                        echo '<div class="alert alert-success">' . addslashes($message) . '</div>';
                    }
                ?>

                <p class="bold">Interested? Sign up below!</p>

                <form class="marginTop" method="post">
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Your email" value="<?php echo addslashes($_POST['email']); ?>" />
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" placeholder="Password" name="password" />
                    </div>

                    <input type="submit" class="btn btn-success bnt-lg" name="submit" value="Sign up!" />
                </form>
            </div>
        </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>

    <script type="text/javascript" src="js/windowheight.js"></script>

</body>

</html>
