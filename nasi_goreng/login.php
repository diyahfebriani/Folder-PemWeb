<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Page Title - SB Admin</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <style>
            .topnav {
                overflow: hidden;
            }

            /* Style the links inside the navigation bar */
            .topnav button {
              float: left;
              text-align: center;
              padding: 14px 16px;
              text-decoration: none;
              font-size: 17px;
            }

            /* Change the color of links on hover */
            .topnav button:hover {
              color: black;
            }

            /* Add a color to the active/current link */
            .topnav button.active {
              color: white;
            }
            .topnav-right {
              float: right;
            }
        </style>
    </head>

    <body>
        <div class="container">
            <div class="row">
                <div class="card-body">
                    <h4 class="card-title">Login Nasi Goreng Mas Pur</h4>
                    <form action="cek.php" method="post">
                        <div class="form-group">
                            <label class="small mb-1" for="Username">Username</label>
                            <input class="form-control py-4" id="Username" type="text" placeholder="Enter username" name="username"/>
                        </div>
                        <div class="form-group">
                            <label class="small mb-1" for="password">Password</label>
                            <input class="form-control py-4" id="password" type="password" placeholder="Enter password" name="password"/>
                        </div>
                    <div class="topnav">
                        <div class="topnav-right">
                            <button type="submit" class="btn btn-primary" value="LOGIN">Login</button>
                        </div>
                    </div>  
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
