<!DOCTYPE html>
<html>

<head>
        <title>Admin Login </title>
    <meta name="csrf-token" content="9LtvcDlbUNHR7gtqYxXnh9DRWsXp8Bceg8DxXTrC">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="icon" type="image/png" href="../images/logo1.jpg">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">

    <link rel="icon" type="image/png" href="../images/logo1.jpg" class="img-fluid">


</head>

<body class="bg-light">
    <center>
        <h3> <a href="https://skillbasedit.com/demo/">Home</a></h4>
    </center>

    <div class="container mt-5 pt-5">
        <div class="row justify-content-center">
            <div class="col-md-5 bg-white p-4 loginback">
                <div class="card">

                    <div class="card-body">
                        <form method="POST" action="https://skillbasedit.com/demo/login">
                            <input type="hidden" name="_token" value="9LtvcDlbUNHR7gtqYxXnh9DRWsXp8Bceg8DxXTrC">
                            <center><img src="../images/alhelal-logo.png" class="img-fluid" style="max-height: 100px;"></center>
                            <div class="row p-2">
                                <div class="form-group mform col-sm-12">
                                    <label>Email :</label>
                                    <input id="email" type="email" class="form-control textfill " name="email" value="info@sbit.com.bd" readonly>
                                </div>

                                <div class="form-group mform col-sm-12">
                                    <label>Password :</label>
                                    <input id="password" type="password" class="form-control textfill " name="password" value="123456" readonly>

                                </div>



                                <div class="form-group col-sm-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember">

                                        <label class="form-check-label" for="remember">
                                    Remember Me
                                </label>
                                    </div>
                                </div>

                            </div>
                            <center><input type="submit" name="LOG IN" value="LOG IN" class="d-block form-control logbutton"></center>
                        </form>

                    </div>



                </div>
            </div>
        </div>









        <style type="text/css">
            body {
                font-family: 'Quicksand';
                font-size: 14px;
                background-image: url(public/img/education-6052677_1920.jpg);
            }
            
            .textfill {
                height: 45px;
                background-color: #f8f8f8;
                color: #414141;
                border-radius: 0px;
                transition: 0.9s;
                border: 1px solid transparent;
                font-size: 14px;
                font-weight: normal;
            }
            
            .textfill:focus {
                box-shadow: none;
                border: 1px solid #585858;
                background-color: #fff;
            }
            
            .logbutton {
                background-color: #198964;
                color: #fff;
                padding: 10px;
                border-radius: 0px;
                width: 95%;
                font-weight: bold;
                cursor: pointer;
                border: none;
                font-size: 13px;
            }
            
            .logbutton:focus {
                background-color: #198964;
                color: #fff;
                box-shadow: none;
                border: none;
            }
            
            .loginback {
                box-shadow: 0 10px 15px -3px rgba(0, 0, 0, .1), 0 4px 6px -2px rgba(0, 0, 0, .05);
                background-color: #fff;
            }
            
            .loginback h5 {
                font-size: 15px;
                font-weight: bold;
                color: #585858;
            }
            
            .card {
                border-radius: 0px;
                border: 1px dotted #e1e1e1;
            }
        </style>






</body>

</html>