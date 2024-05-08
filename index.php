<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Vila booking</title>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="/resources/demos/style.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
        <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
        <script>
            $(function () {
                var dateFormat = "mm/dd/yy",
                        from = $("#from")
                        .datepicker({
                            defaultDate: "+1w",
                            changeMonth: true,
                            numberOfMonths: 2
                        })
                        .on("change", function () {
                            to.datepicker("option", "minDate", getDate(this));
                        }),
                        to = $("#to").datepicker({
                    defaultDate: "+1w",
                    changeMonth: true,
                    numberOfMonths: 2
                })
                        .on("change", function () {
                            from.datepicker("option", "maxDate", getDate(this));
                        });

                function getDate(element) {
                    var date;
                    try {
                        date = $.datepicker.parseDate(dateFormat, element.value);
                    } catch (error) {
                        date = null;
                    }

                    return date;
                }
            });
        </script>
    </head>
    <body>
        <div class="center">
            <fieldset>
                <legend>Book Now</legend>
                <div class="row">
                    <form action="reservation.php" method="get">
                        <div class="column">
                            <input type="radio" id="Local" name="locale" value="Local">
                            <label for="Local">Local</label>
                            <input type="radio" id="Foreign" name="locale" value="Foreign">
                            <label for="Foreign">Foreign</label>   
                        </div>
                        <div class="column">
                            <label for="from">From</label>
                            <input type="text" id="from" name="from">
                            <label for="to">to</label>
                            <input type="text" id="to" name="to">
                            <input type="submit"/>
                        </div>
                    </form>
                </div>
            </fieldset>
        </div>
    </body>
</html>
