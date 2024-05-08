<html>
    <head>
        <style>

            .form-container {
                margin: 30% auto;
                display: block;
                width:500px;
                text-align:center;
            }

            body{
                margin: 0 auto;
                font-family: Arial;
                
               
            }

            .form-container input{
                margin-bottom:10px;
            }


        </style>
        <title>View-Booking</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>
        <form action="reservation_activities.php">
            <div class="msg_center">

                <!DOCTYPE html>
                <div class="form-container">
                    <h1>Login to confirm your booking</h1>
                    <section>
                        <input #username type="text" name="username" placeholder="Username">
                        <br />
                        <input #password type="password" name="password" placeholder="Password">
                        <br />
                        <input type="Button" value="Back" onclick="history.back()"><button type="button" role="button" (click)="login($event, username, password)">Login</button>

                    </section>
                </div>

            </div>
        </form>
    </body>
</html>