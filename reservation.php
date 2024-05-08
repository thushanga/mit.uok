<?php
include_once 'util.php';
$from_date = date("Y-m-d", strtotime($_GET['from']));
$to_date = date("Y-m-d", strtotime($_GET['to']));
?>
<html>
    <head>
        <title>View-Booking</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>

        <?php
        $reservation = new ReservationAction();
        if ($reservation->isAvailable($from_date)) {
            ?>
            <form action="reservation_food.php">
                <div class="msg_center">

                    <div class="card">
                        <div class="card-body mx-4">
                            <div class="container">
                                <p class="my-5 mx-5" style="font-size: 30px;">Congratulations,Your dates are available.</p>
                                <div class="row">
                                    <table width="100%" border="1">
                                        <?php
                                        $period = datesFromRange($from_date, $to_date);
                                        $no_of_days = count($period);
                                        $show_count = 0;
                                        foreach ($period as $key => $value) {
                                            ?>
                                            <tr>
                                                <td>
                                                    <?php echo $value ?>
                                                </td>
                                                <td>
                                                    <?php
                                                    if ($show_count == 0)
                                                        echo "Check In 2.00 PM";
                                                    elseif ($show_count == ($no_of_days - 1)) {
                                                        echo "1 Night - Checkout 8.00 AM";
                                                    } else {
                                                        echo "1 Night";
                                                    }
                                                    ?>

                                                </td>
                                                <?php if ($show_count == 0) { ?>
                                                    <td rowspan=<?php echo $no_of_days; ?>>
                                                        Free Includes :
                                                        <ul>
                                                            <li>Free wifi internet access</li>
                                                            <li>Complimentary water</li>
                                                            <li>Charging stations</li> 
                                                            <li>Toiletries</li>
                                                            <li>Game nights for kids</li>
                                                            <li>Wellness</li>
                                                            <li>Slippers</li>

                                                        </ul>
                                                    </td>

                                                <?php } ?>

                                            </tr>

                                            <?php
                                            $show_count++;
                                        }
                                        ?>
                                    </table>
                                    <hr>
                                    <div class="col-xl-10">
                                        <p>Vila can accommodate maximum 12 people.</p>
                                    </div>
                                    <div class="col-xl-2">
                                        <label for="adults">Please select Number of Adults: </label>
                                        <select name="adults" id="adults">
                                            <?php
                                            for ($i = 0; $i <= 12; $i++) {
                                                ?>
                                                <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                                <?php
                                            }
                                            ?>
                                        </select>
                                        <label for="childs">Number of Childern: </label>
                                        <select name="childs" id="childs">
                                            <?php
                                            for ($i = 0; $i <= 12; $i++) {
                                                ?>
                                                <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                                <?php
                                            }
                                            ?>
                                        </select>
                                        <p class="float-end">
                                            <?php
                                            //$days_cost = $no_of_days * 100;
                                            //echo 'USD ' . $days_cost;
                                            //$total_amount = $days_cost;
                                            ?>
                                        </p>
                                    </div>
                                    <hr>
                                </div>
                                <div class="row">
                                    <div class="col-xl-10">
                                        <p> Select Villa Packages most suits for you and we love to cater your experience</p>

                                        <p>Please select your package:</p>
                                          <input type="radio" id="p1" name="villa_pkg" value="p1" checked="true">
                                          <label for="p1">Standard Villa Package</label><br>
                                          <input type="radio" id="p2" name="villa_pkg" value="p2">
                                          <label for="p2">Standard Villa Package + Kanneliya tour [USD 400]</label><br>
                                          <input type="radio" id="p3" name="villa_pkg" value="p3">
                                          <label for="p3">Standard Villa Package + Customized activities and Tours [USD 800]</label>

                                    </div>
                                    <div class="col-xl-2">
                                        <p class="float-end">
                                            <?php
                                            //$food_cost = $no_of_days * 20;
                                            //echo 'USD ' . $food_cost;
                                            //$total_amount = $total_amount + $food_cost;
                                            ?>
                                        </p>
                                    </div>
                                    <hr>
                                </div>
                                <div class="row">
                                    <div class="col-xl-10">
                                        <p>If you are forign please enter your passport id for free offers</p>

                                        Enter Pasport ID: <input type="text"></input>
                                    </div>
                                </div>

                                <div class="text-right" style="margin-top: 90px;">
                                    <a><u class="text-info"><input type="Button" value="Back" onclick="history.back()"><input type="submit" value="Calculate your Bill"></u></a>
                                    <p>Please proceed further for your amenities and confirm. </p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <?php
        } else {
            header("Location: index.php?available=false");
            exit();
        }
        ?>
    </body>
</html>
