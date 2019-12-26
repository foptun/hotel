<html>
<head>
    <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/themes/smoothness/jquery-ui.min.css" rel="stylesheet" type="text/css" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
    <script>
        $(document).ready(function () {
            $("#dateCheckIn").datepicker({
                dateFormat: "dd-M-yy",
                minDate:0,
                onSelect: function (date) {
                    var date2 = $('#dateCheckIn').datepicker('getDate');
                    date2.setDate(date2.getDate()+1);
                    $('#dateCheckOut').datepicker('setDate', date2);
                    //sets minDate to dateofbirth date + 1
                    $('#dateCheckOut').datepicker('option', 'minDate', date2);
                }
            });
            $('#dateCheckOut').datepicker({
                dateFormat: "dd-M-yy",
                onClose: function () {
                    var dt1 = $('#dateCheckIn').datepicker('getDate');
                    console.log(dt1);
                    var dt2 = $('#dateCheckOut').datepicker('getDate');
                    if (dt2 <= dt1) {
                        var minDate = $('#dateCheckOut').datepicker('option', 'minDate');
                        $('#dateCheckOut').datepicker('setDate', minDate);
                    }
                }
            });
        });

    </script>
</head>
<body>
    <form runat="server" id="form1">
        <input type="text" id="dateCheckIn" >
        <input type="text" id="dateCheckOut" >
    </form>
</body>
</html>

<?php
    // การทำ date format
    // และ การ นับ วัน ว่าจองกี่วัน
    // $show_room_qty = "<p><font color='green'>มีห้องว่าง 3 ห้อง</font></p>";

    // $datetime1 = date_create($_POST['check-in']);
    // $datetime2 = date_create($_POST['check-out']);
    
    // $interval = date_diff($datetime1, $datetime2);

    //             // $checkIn = date("Y-m-d", strtotime($_POST['check-in']) );
    //             // $checkOut = date("Y-m-d", strtotime($_POST['check-out']) );
    //             //$interval = date_diff($checkIn, $checkOut);
    //             //$show_room_qty = $interval->days;
    // $show_room_qty = $interval->days;

    ?>