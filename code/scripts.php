<script src="js/lib.js"></script>
<script type="text/javascript">
function date_error() {
    var fullDate = new Date();
    var twoDigitMonth = fullDate.getMonth() + "";
    if (twoDigitMonth.length == 1)  twoDigitMonth = "0" + twoDigitMonth;
    var twoDigitDate = fullDate.getDate() + "";
    if (twoDigitDate.length == 1) twoDigitDate = "0" + twoDigitDate;
    var currentDate = twoDigitDate + "/" + twoDigitMonth + "/" + fullDate.getFullYear();
    var input_1 = $('#input_1').val();
    alert(input_1);
    if (input_1 < currentDate) {
        $("#error_date").html("Please enter valid date.");
        $('#input_1').val("");
        return false;
    } else {
        $("#error_date").html(" ");
        return true;
    }
}

function days_error() {
    var input_3 = $('#input_3').val();
    if (input_3 > 5 || isNaN(input_3)) {
        $("#error_input_3").html("");
        $("#error_days").html("");
        $("#error_days").html("Please enter valid value.");
        $('#input_3').val("");
        return false;
    } else {
        $("#error_days").html(" ");
        return true;
    }
}

function hour_error() {
    var hour = $('#input_5_1').val();
    var min = $('#input_5_2').val();
    if (isNaN(hour) || hour > 24) {
        $("#error_input_5_1").html("");
        $("#error_hour").html("Please enter valid value.");
        $('#input_5_1').val("");
        return false;
    } else if (isNaN(min) || min > 60) {
        $("#error_input_5_1").html("");
        $("#error_hour").html("Please enter valid value.");
        $('#input_5_2').val("");
        return false;
    } else {
        $("#error_hour").html(" ");
        return true;
    }
}

function time_error() {
    var time = $('#input_7').val();

    if (isNaN(time) || time > 3) {
        $("#error_input_7").html(" ");
        $("#error_time").html("Please enter valid value.");
        $('#input_7').val("");
        return false;
    } else {
        $("#error_time").html(" ");
        return true;
    }
}


function add_rooms_fields(input_id, limit, name) {
    var len = $('#input_15_' + input_id + '').val();
    if (len > limit) {
        $("#error_" + name + "").html("Enter value between 1 to " + limit + ".");
        $('#input_15_' + input_id + '').val("0");
        return false;
    } else {
        $("#error_" + name + "").html(" ");

        $("#" + name + "_fields").html("");
        $.post('html/' + name + '.php', {len: len}, function (data) {
            $("#" + name + "_fields").html(data);
        });
    }
}


var large_index = 0;
$(document).ready(function () {

    $('.tabing_ul li').click(function (e) {
        var ind = $(this).index();
        if (large_index < ind) {
            //large_index = ind;
            return false;
        }
        else if (large_index >= ind) {
            large_index1 = ind + 1;
            addremoveclass(large_index1);
            return false;
        }
    });

    $('#choice_8_0').click(function (e) {
        $("#hide_room").show();
        $("#field_15_30").hide();
        $("#select_div").hide();
    });

    $('#choice_8_1').click(function (e) {
        $("#field_15_30").show();
        $("#hide_room").hide();
        $("#select_div").hide();
    });

    $('#choice_8_2').click(function (e) {
        $("#select_div").show();
        $("#field_15_30").hide();
        $("#hide_room").hide();
    });

    $('#gform_previous_button_15_250').click(function (e) {
        $("#tab1").show();
        $("#tab2").hide();
        $("#tab3").hide();
        $("#tab4").hide();
        addremoveclass(1);
    });

    $('#gform_previous_button_15_256').click(function (e) {
        $("#tab1").hide();
        $("#tab2").show();
        $("#tab3").hide();
        $("#tab4").hide();
        addremoveclass(2);
    });

    $('#gform_previous_button_15').click(function (e) {
        $("#tab1").hide();
        $("#tab2").hide();
        $("#tab3").show();
        $("#tab4").hide();
        addremoveclass(3);
    });


    /*---------------------------------- Start step 1 (Moving Details). ----------------------------------------------- */

    $('#move_details').click(function (e) {

        if ($('#choice_2_0').is(":checked") && $("#input_3").val() == "") {
            $("#error_days,#input_3").html("");
            $("#error_input_3").html("Please enter days.");
            $("#input_3").focus();
            return false;
        } else if ($('#choice_4_0').is(":checked") && $("#input_5_1").val() == "") {
            $("#error_input_3,#error_days,#error_hour").html("");
            $("#error_input_5_1").html("Please enter time of move.");
            $("#input_5_1").focus();
            return false;
        } else if ($('#choice_4_0').is(":checked") && $("#input_5_2").val() == "") {
            $("#error_input_3").html("");
            $("#error_input_5_1").html("Please enter time of move.");
            $("#input_5_2").focus();
            return false;
        } else if ($('#choice_6_0').is(":checked") && $("#input_7").val() == "") {
            $("#error_time").html("");
            $("#error_input_5_1").html("");
            $("#error_input_7").html("Please enter hours.");
            $("#input_7").focus();
            return false;
        } else if ($("#choice_8_0").prop("checked") == false && $("#choice_8_1").prop("checked") == false && $("#choice_8_2").prop("checked") == false) {
            $("#error_input_7").html("");
            $("#error_moving").html("Please select moving type.");
            return false;
        } else if ($("#input_9").val() == "") {
            $("#error_moving").html("");
            $("#error_input_9").html("Please enter pickup address.");
            $("#input_9").focus();
            return false;
        } else if ($("#input_10").val() == "") {
            $("#error_input_9").html("");
            $("#error_input_10").html("Please enter destination address.");
            $("#input_10").focus();
            return false;
        } else if ($("#input_16_12").val() == "") {
            $("#error_input_10").html("");
            $("#error_input_16_12").html("Please select pickup city.");
            $("#input_16_12").focus();
            return false;
        } else if ($("#input_16_12_1").val() == "") {
            $("#error_input_16_12").html("");
            $("#error_input_16_12_1").html("Please select destination city.");
            $("#input_16_12_1").focus();
            return false;
        } else if ($('#choice_25_3').is(":checked") && $("#input_26").val() == "") {
            $("#error_input_16_12_1").html("");
            $("#error_input_26").html("Fill Contents Value for insurance.");
            $("#input_26").focus();
            return false;
        } else {
            $("#tab2").show();
            $("#tab1").hide();
            //document.getElementById('choice_49_0').setAttribute('checked','checked');
            $("#field_15_50").hide();
            addremoveclass(2);
            if (large_index < 1) {
                large_index = (large_index * 1) + 1;
            }
        }
    });


    /*---------------------------------- Start step 2 (Quotation Details). ----------------------------------------------- */


    $('#quotation').click(function (e) {

        if ($("#choice_30_0").prop("checked") == false && $("#choice_30_1").prop("checked") == false && $("#choice_30_2").prop("checked") == false && $("#choice_30_3").prop("checked") == false && $("#choice_30_4").prop("checked") == false && $('#choice_8_1').is(":checked")) {
            $("#error_input_28").html("Please select atleast one.");
            return false;
        } else if ($("#choice_49_0").prop("checked") == false && $("#choice_49_1").prop("checked") == false && $('#choice_8_0').is(":checked")) {
            $("#error_49_0").html("Please select atleast one.");
            return false;
        } else {
            $("#tab4").hide();
            $("#tab3").show();
            $("#tab2").hide();
            $("#tab1").hide();
            addremoveclass(3);
            if (large_index < 2) {
                large_index = (large_index * 1) + 1;
            }
        }
    });


    /*---------------------------------- Start step 3 (Contact Details). ----------------------------------------------- */


    $('#sub_all, #post_4').click(function (e) {
        $("#preview").fadeIn();
        $("#preview").html('<img src="img/ajax-loader.gif" class="loader_image"/>');
        $("#preview").fadeIn();
        var input_1 = $("#input_15_252_3").val();
        if ($("#input_15_252_3").val() == "") {
            $("#error_firstname").html("Fill your firstname.");
            $("#input_15_252_3").focus();
            return false;
        }

        var input_1 = $("#input_15_252_6").val();
        if ($("#input_15_252_6").val() == "") {
            $("#error_firstname").html("");
            $("#error_lastname").html("Fill your lastname.");
            $("#input_15_252_6").focus();
            return false;
        }

        if ($("#input_15_253").val() == "") {
            $("#error_lastname").html("");
            $("#error_input_15_253").html("Please enter email address.");
            $("#input_15_253").focus();
            return false;
        }

        if ($("#input_15_253_2").val() == "") {
            $("#error_input_15_253").html("");
            $("#error_confirm_email").html("Enter confirmation email address.");
            $("#input_15_253_2").focus();
            return false;
        }

        if ($("#input_15_253").val() != $("#input_15_253_2").val()) {
            $("#error_confirm_email").html("");
            $("#error_email").html("Email id not match.");
            $("#input_15_253_2").focus();
            return false;
        }

        addremoveclass(4);
        if (large_index < 3) {
            large_index = (large_index * 1) + 2;
        }


        data = $("form").serializeArray();
        data.fun = 'serializeArray';
        $.post('confirm.php', {form_data: data}, function (data) {
            $("#preview").hide();
            $('#confirm_details').html(data);
        });
    });


    /*---------------------------------- Start step 4 (Confirmation). ----------------------------------------------- */

    $('#gform_submit_button_15').click(function (e) {
        $("#preview").fadeIn();
        $("#preview").html('<img src="img/ajax-loader.gif" class="loader_image"/>');
        $("#preview").fadeIn();
        data = $("form").serializeArray();
        data.fun = 'serializeArray';
        $.post('save_form.php', {form_data: data}, function (data) {
            if (data == "" || data.trim() == "") {
                $("#preview").show();
                alert("All details is sucessfully submit.");
            }
        });
    });

});
</script>