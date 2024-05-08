<html>
    <head>
        <title>View-Booking</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>
        <form action="reservation_activities.php">
            <div class="msg_center">

                <div class="card">
                    <div class="card-body mx-4">
                        <div class="container">
                            <p class="my-5 mx-5" style="font-size: 30px;">TopUp your booking with food packages.</p>
                            <div class="row">


                                <fieldset>
                                    <legend>Breakfast Packages: </legend>

                                    <table border="1">
                                        <tr >
                                            <td>
                                                <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                                <label for="vehicle1"> 
                                                    <ul>
                                                        <li>StringHoppers</li>
                                                        <li>Fish Curry</li>
                                                        <li>Katta sambol</li>
                                                    </ul>
                                                </label>
                                                USD25 - 1 person
                                            </td>
                                            <td>
                                                <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                                <label for="vehicle1"> 
                                                    <ul>
                                                        <li>Rice</li>
                                                        <li>Dhal Curry</li>
                                                        <li>Katta sambol</li>
                                                    </ul>
                                                </label>
                                                USD35 - 1 person
                                            </td>
                                        </tr>
                                    </table>



                                </fieldset>
                            </div>
                            <br>
                            <div class="row">
                                <fieldset>
                                    <legend>Lunch Packages: </legend>
                                    <table border="1">
                                        <tr >
                                            <td>
                                                <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                                <label for="vehicle1"> 
                                                    <ul>
                                                        <li>White Rice </li>
                                                        <li>Chicken Curry</li>
                                                        <li>Chicken Curry</li>
                                                        <li>Chicken Curry</li>
                                                    </ul>
                                                </label>
                                                USD65 - 1 person
                                            </td>
                                            <td>
                                                <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                                <label for="vehicle1"> 
                                                    <ul>
                                                        <li>Yellow Rice</li>
                                                        <li>Seni Sambal</li>
                                                        <li>Lunumiris</li>
                                                        <li>Potato Tempered</li>
                                                    </ul>
                                                </label>
                                                USD65 - 1 person
                                            </td>
                                            <td>
                                                <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                                <label for="vehicle1"> 
                                                    <ul>
                                                        <li>Yellow Rice</li>
                                                        <li>Seni Sambal</li>
                                                        <li>Lunumiris</li>
                                                        <li>Potato Tempered</li>
                                                    </ul>
                                                </label>
                                                USD65 - 1 person
                                            </td>
                                        </tr>
                                    </table>
                                </fieldset>
                            </div>
                            <div class="row">
                                <fieldset>
                                    <legend>Dinner Packages: </legend>
                                    <table border="1">
                                        <tr >
                                            <td>
                                                <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                                <label for="vehicle1"> 
                                                    <ul>
                                                        <li>Hoppers </li>
                                                        <li>Chicken Curry</li>
                                                        <li>Chicken Curry</li>
                                                        <li>Chicken Curry</li>
                                                    </ul>
                                                </label>
                                                USD65 - 1 person
                                            </td>
                                            <td>
                                                <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                                <label for="vehicle1"> 
                                                    <ul>
                                                        <li>Kottu</li>
                                                        <li>Seni Sambal</li>
                                                        <li>Lunumiris</li>
                                                        <li>Potato Tempered</li>
                                                    </ul>
                                                </label>
                                                USD65 - 1 person
                                            </td>
                                            <td>
                                                <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                                <label for="vehicle1"> 
                                                    <ul>
                                                        <li>Rice</li>
                                                        <li>Seni Sambal</li>
                                                        <li>Lunumiris</li>
                                                        <li>Potato Tempered</li>
                                                    </ul>
                                                </label>
                                                USD65 - 1 person
                                            </td>
                                            <td>
                                                <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                                <label for="vehicle1"> 
                                                    <ul>
                                                        <li>Pasta</li>
                                                        <li>Seni Sambal</li>
                                                        <li>Lunumiris</li>
                                                        <li>Potato Tempered</li>
                                                    </ul>
                                                </label>
                                                USD65 - 1 person
                                            </td>
                                        </tr>
                                    </table>
                                </fieldset>


                            </div>
                            <br>

                            <hr><!-- comment -->
                            <br>
                            <div class="row">
                                <input type="radio" id="menu_ok" name="menu_select" value="ok">
                                <label for="html">Please make these selection for my entire stay.</label><br>
                                <input type="radio" id="not_ok" name="menu_select" value="no">
                                <label for="css">No,I will customize my food plans while i stay.</label><br>
                            </div>

                            <div class="text-right" style="margin-top: 10px;">
                                <a><u class="text-info"><input type="Button" value="Back" onclick="history.back()"><input type="submit" value="Calculate your Bill"></u></a>
                                <p>Please proceed further for your amenities and confirm. </p>
                            </div>
                            </form>
                            </body>
                            </html>
