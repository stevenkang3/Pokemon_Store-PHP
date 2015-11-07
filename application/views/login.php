<html>
<head>
    <meta charset = 'utf-8'>
    <title>Login and Registration</title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	   <link href="/assets/animate.css" rel="stylesheet" type="text/css">
    <script src="https://code.jquery.com/jquery-2.1.3.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){

            $('#registerForm').hide();
            $('#loginForm').hide();

            $('#registerTitle').click(function(){
                $('#registerForm').slideDown();
                $('#loginForm').hide();
                $('.errorMsg').hide();
            })

            $('#loginTitle').click(function(){
                $('#loginForm').slideDown();
                $('#registerForm').hide();
                $('.errorMsg').hide();
            })

        });
    </script>
    <style>

        body{
            background-image: url(http://img02.deviantart.net/1537/i/2010/338/1/c/team_rocket_web_background_by_aschefield101-d347xub.jpg);
            background-repeat: no-repeat;
            background-size: 100% 100%;
            padding:50px;

        }

        div.container label, div.container h1, div.container h2, div.container p{
            color: white;
        }

        div.container h3, div.container p{
            color: white;
        }

            div.container h3{
                margin: 20px 0px 0px 25px;
            }

        #registerTitle, #loginTitle{
            display: inline;
        }

        div.container{
            margin: 0 auto;
            text-align: center;
            width: 400px;
            /*border: 1px solid white;*/
        }

        div.login, div.registration{
            width: 300px;
            margin: 25px 0px 0px 25px;
        }

        form{
            margin-top: 25px;

        }

        #passText{
            font-size: .8em;
            color: gray;
        }

        .btn{
            margin-top: 10px;
        }

        div.errorMsg p{
            color: red;
            margin-left: 25px;
            width: 230px;
        }
        .title{
          text-align: center;
        }

    </style>

</head>
<body class='animiated shake'>
    <a class='animated shake back' href="/home/index">Back</a>
    <div class='container'>

        <h3 class='title animated bounceInUp'><p id='registerTitle'>Register</p> | <p id='loginTitle'>Login</p></h3>

        <div class='registration'>
            <form id='registerForm' role='form' action='/admins/process_registration' method='post'>
                <div class='form-group'>
                    <label>Name: </label>
                    <input type='text' class='form-control' name='name'/>
                </div>
                <div class='form-group'>
                    <label>Email: </label>
                    <input type='text' class='form-control' name='email'>
                </div>
                <div class='form-group'>
                    <label>Password: </label>
                    <input type='password' class='form-control' name='password'>
                    <p id='passText'>*Password should be at least 8 characters</p>
                </div>
                <div class='form-group'>
                    <label>Confirm Password: </label>
                    <input type='password' class='form-control' name='confirm'>
                </div>
                <div class='form-group'>
                    <label>Enter Admin Code: </label>
                    <input type='text' class='form-control' name='code'>
                </div>
                    <input class='animated bounceInDown btn btn-danger' type='submit' value='Register'>
            </form>
        </div>

        <div class= 'login'>
            <form id= 'loginForm' role='form' action='/admins/process_login' method='post'>
                <div class='form-group'>
                    <label>Email: </label>
                    <input type='text' class='form-control' name='email'>
                </div>
                <div class='form-group'>
                    <label>Password: </label>
                        <input type='password' class='form-control' name='password'>
                </div>
                    <input class='animated bounceInDown btn btn-danger' type='submit' value='Login'>
            </form>
        </div>

        <div class='errorMsg'>
<?php       if($this->session->flashdata("registration_errors"))
            {
                echo $this->session->flashdata("registration_errors");
            }
           if($this->session->flashdata("login_errors"))
            {
                echo $this->session->flashdata("login_errors");
            } ?>
        </div>
    </div>

</body>
</html>
