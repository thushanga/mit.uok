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
        <form action="reservation_view.php">
            <div class="msg_center">

                <!DOCTYPE html>
                <div class="form-container">
                    <h1>Login to confirm your booking</h1>
                    <section>
                        <input #username type="text" name="username" placeholder="Username" value="test">
                        <br />
                        <input #password type="password" name="password" placeholder="Password" value="test">
                        <br />
                        <input type="Button" value="Back" onclick="history.back()">
                        <input type="submit" value="Login"/>

                    </section>
                </div>
                <a href="#" >Sign In</a>
            </div>
        </form>
    </body>
</html>