<?php
//$de_data = json_decode($_POST['form_data']);
//echo"<pre/>";print_r($de_data); 
//exit;
$appp = array();
$appp1 = array();
if (isset($_REQUEST['form_data'])) {
    foreach ($_REQUEST['form_data'] as $data) {
        $appp[$data['name']][] = $data['value'];
    }
}

if (isset($_REQUEST['form_data'])) {
    foreach ($_REQUEST['form_data'] as $data1) {
        $appp1[$data1['name']] = $data1['value'];
    }
}

?>
<tbody>
<tr>
<td>
<table width="100%" border="0" cellpadding="5" cellspacing="0" bgcolor="#FFFFFF">
<tbody>
<?php if (isset($appp1['input_1'])) { ?>
    <tr bgcolor="#EAF2FA">
        <td colspan="2"><font style="font-family: sans-serif; font-size:12px;">
                <strong>When would you like to move?</strong></font></td>
    </tr>
    <tr bgcolor="#FFFFFF">
        <td width="20">&nbsp;</td>
        <td><font style="font-family: sans-serif; font-size:12px;"><?php echo $appp1['input_1']; ?></font></td>
    </tr>
<?php
}

?>
<tr bgcolor="#EAF2FA">
    <td colspan="2"><font style="font-family: sans-serif; font-size:12px;"><strong>Is the move date
                flexible?</strong></font>
    </td>
</tr>
<tr bgcolor="#FFFFFF">
    <td width="20">&nbsp;</td>
    <td><font style="font-family: sans-serif; font-size:12px;" id="confirm_2"><?php echo $appp1['input_2']; ?></font>
    </td>
</tr>
<?php if ($appp1['input_2'] == "Yes") { ?>
    <tr bgcolor="#EAF2FA">
        <td colspan="2"><font style="font-family: sans-serif; font-size:12px;"><strong>How many days is the move date
                    flexible?</strong></font>
        </td>
    </tr>
    <tr bgcolor="#FFFFFF">
        <td width="20">&nbsp;</td>
        <td><font style="font-family: sans-serif; font-size:12px;" id="confirm_3"><?php echo $appp1['input_3'] ?></font>
        </td>
    </tr>
<?php
}
if (isset($appp1['input_4'])) {
    ?>
    <tr bgcolor="#EAF2FA">
        <td colspan="2"><font style="font-family: sans-serif; font-size:12px;"><strong>Is the time of the move roughly
                    known?</strong></font>
        </td>
    </tr>
    <tr bgcolor="#FFFFFF">
        <td width="20">&nbsp;</td>
        <td><font style="font-family: sans-serif; font-size:12px;" id="confirm_3"><?php echo $appp1['input_4'] ?></font>
        </td>
    </tr>
<?php
}
if ($appp1['input_4'] == "Yes") {
    if (isset($appp['input_5[]'][0])) {
        ?>
        <tr bgcolor="#EAF2FA" id="time_hide">
            <td colspan="2"><font style="font-family: sans-serif; font-size:12px;"><strong>What is the time of the
                        move?</strong></font>
            </td>
        </tr>
        <tr bgcolor="#FFFFFF" id="time_hide1">
            <td width="20">&nbsp;</td>
            <td><font style="font-family: sans-serif; font-size:12px;"
                      id="confirm_4"><?php echo $appp['input_5[]'][0] . ":" . $appp['input_5[]'][1] . " " . $appp['input_5[]'][2]; ?></font>
            </td>
        </tr>
    <?php }
    if (isset($appp1['input_6'])) { ?>
        <tr bgcolor="#EAF2FA">
            <td colspan="2"><font style="font-family: sans-serif; font-size:12px;"><strong>Is the time of the move
                        flexible?</strong></font>
            </td>
        </tr>
        <tr bgcolor="#FFFFFF">
            <td width="20">&nbsp;</td>
            <td><font style="font-family: sans-serif; font-size:12px;"
                      id="confirm_5"><?php echo $appp1['input_6'] ?></font>
            </td>
        </tr>
    <?php }
    if (isset($appp1['input_7']) && $appp1['input_6'] == "Yes") { ?>
        <tr bgcolor="#EAF2FA" id="hours_hide">
            <td colspan="2"><font style="font-family: sans-serif; font-size:12px;"><strong>By how many hours is the move
                        time flexible?</strong></font>
            </td>
        </tr>
        <tr bgcolor="#FFFFFF" id="hours_hide1">
            <td width="20">&nbsp;</td>
            <td><font style="font-family: sans-serif; font-size:12px;"
                      id="confirm_6"><?php echo $appp1['input_7'] ?></font>
            </td>
        </tr>
    <?php }
} ?>
<tr bgcolor="#EAF2FA">
    <td colspan="2"><font style="font-family: sans-serif; font-size:12px;"><strong>Are you moving:</strong></font>
    </td>
</tr>
<tr bgcolor="#FFFFFF">
    <td width="20">&nbsp;</td>
    <td><font style="font-family: sans-serif; font-size:12px;" id="confirm_7"><?php echo $appp1['input_8'] ?></font>
    </td>
</tr>
<tr bgcolor="#EAF2FA">
    <td colspan="2"><font style="font-family: sans-serif; font-size:12px;"><strong>Pickup Address</strong></font>
    </td>
</tr>
<tr bgcolor="#FFFFFF">
    <td width="20">&nbsp;</td>
    <td><font style="font-family: sans-serif; font-size:12px;" id="confirm_8"><?php echo $appp1['input_9'] ?></font>
    </td>
</tr>
<tr bgcolor="#EAF2FA">
    <td colspan="2"><font style="font-family: sans-serif; font-size:12px;"><strong>Pickup City</strong></font>
    </td>
</tr>
<tr bgcolor="#FFFFFF">
    <td width="20">&nbsp;</td>
    <td><font style="font-family: sans-serif; font-size:12px;" id="confirm_8"><?php echo $appp1['input_11'] ?></font>
    </td>
</tr>
<tr bgcolor="#EAF2FA">
    <td colspan="2"><font style="font-family: sans-serif; font-size:12px;"><strong>Destination Address</strong></font>
    </td>
</tr>
<tr bgcolor="#FFFFFF">
    <td width="20">&nbsp;</td>
    <td><font style="font-family: sans-serif; font-size:12px;" id="confirm_9"><?php echo $appp1['input_10'] ?></font>
    </td>
</tr>
<tr bgcolor="#EAF2FA">
    <td colspan="2"><font style="font-family: sans-serif; font-size:12px;"><strong>Destination City</strong></font>
    </td>
</tr>
<tr bgcolor="#FFFFFF">
    <td width="20">&nbsp;</td>
    <td><font style="font-family: sans-serif; font-size:12px;" id="confirm_9"><?php echo $appp1['input_12'] ?></font>
    </td>
</tr>
<tr bgcolor="#EAF2FA">
    <td colspan="2"><font style="font-family: sans-serif; font-size:12px;"><strong>Pickup Stairs?</strong></font>
    </td>
</tr>
<tr bgcolor="#FFFFFF">
    <td width="20">&nbsp;</td>
    <td><font style="font-family: sans-serif; font-size:12px;" id="confirm_10"><?php echo $appp1['input_13'] ?></font>
    </td>
</tr>
<tr bgcolor="#EAF2FA">
    <td colspan="2"><font style="font-family: sans-serif; font-size:12px;"><strong>Destination Stairs?</strong></font>
    </td>
</tr>
<tr bgcolor="#FFFFFF">
    <td width="20">&nbsp;</td>
    <td><font style="font-family: sans-serif; font-size:12px;" id="confirm_11"><?php echo $appp1['input_14'] ?></font>
    </td>
</tr>
<tr bgcolor="#EAF2FA">
    <td colspan="2"><font style="font-family: sans-serif; font-size:12px;"><strong>Pickup Lift?</strong></font>
    </td>
</tr>
<tr bgcolor="#FFFFFF">
    <td width="20">&nbsp;</td>
    <td><font style="font-family: sans-serif; font-size:12px;" id="confirm_12"><?php echo $appp1['input_15'] ?></font>
    </td>
</tr>
<tr bgcolor="#EAF2FA">
    <td colspan="2"><font style="font-family: sans-serif; font-size:12px;"><strong>Destination Lift?</strong></font>
    </td>
</tr>
<tr bgcolor="#FFFFFF">
    <td width="20">&nbsp;</td>
    <td><font style="font-family: sans-serif; font-size:12px;" id="confirm_13"><?php echo $appp1['input_16'] ?></font>
    </td>
</tr>
<tr bgcolor="#EAF2FA">
    <td colspan="2"><font style="font-family: sans-serif; font-size:12px;"><strong>Pickup Driveway?</strong></font>
    </td>
</tr>
<tr bgcolor="#FFFFFF">
    <td width="20">&nbsp;</td>
    <td><font style="font-family: sans-serif; font-size:12px;" id="confirm_14"><?php echo $appp1['input_17'] ?></font>
    </td>
</tr>
<tr bgcolor="#EAF2FA">
    <td colspan="2"><font style="font-family: sans-serif; font-size:12px;"><strong>Destination Driveway?</strong></font>
    </td>
</tr>
<tr bgcolor="#FFFFFF">
    <td width="20">&nbsp;</td>
    <td><font style="font-family: sans-serif; font-size:12px;" id="confirm_15"><?php echo $appp1['input_18'] ?></font>
    </td>
</tr>

<?php if ($appp1['input_17'] == "Yes") { ?>
    <tr bgcolor="#EAF2FA">
        <td colspan="2"><font style="font-family: sans-serif; font-size:12px;"><strong>Would you consider the driveway
                    at the pickup to be</strong></font>
        </td>
    </tr>
    <tr bgcolor="#FFFFFF">
        <td width="20">&nbsp;</td>
        <td><font style="font-family: sans-serif; font-size:12px;"
                  id="confirm_14"><?php echo $appp1['input_19'] ?></font>
        </td>
    </tr>
<?php
}
if ($appp1['input_18'] == "Yes") {
    ?>
    <tr bgcolor="#EAF2FA">
        <td colspan="2"><font style="font-family: sans-serif; font-size:12px;"><strong>Would you consider the driveway
                    at the destination to be:</strong></font>
        </td>
    </tr>
    <tr bgcolor="#FFFFFF">
        <td width="20">&nbsp;</td>
        <td><font style="font-family: sans-serif; font-size:12px;"
                  id="confirm_14"><?php echo $appp1['input_20'] ?></font>
        </td>
    </tr>
<?php
}
if ($appp1['input_17'] == "Yes") {
    ?>
    <tr bgcolor="#EAF2FA">
        <td colspan="2"><font style="font-family: sans-serif; font-size:12px;"><strong>Enough space to turn around for
                    large vehicles at the end of the driveway at the pickup?</strong></font>
        </td>
    </tr>
    <tr bgcolor="#FFFFFF">
        <td width="20">&nbsp;</td>
        <td><font style="font-family: sans-serif; font-size:12px;"
                  id="confirm_14"><?php echo $appp1['input_21'] ?></font>
        </td>
    </tr>
<?php
}
if ($appp1['input_18'] == "Yes") {
    ?>
    <tr bgcolor="#EAF2FA">
        <td colspan="2"><font style="font-family: sans-serif; font-size:12px;"><strong>Enough space to turn around for
                    large vehicles at the end of the driveway at the destination?</strong></font>
        </td>
    </tr>
    <tr bgcolor="#FFFFFF">
        <td width="20">&nbsp;</td>
        <td><font style="font-family: sans-serif; font-size:12px;"
                  id="confirm_14"><?php echo $appp1['input_22'] ?></font>
        </td>
    </tr>

<?php }
if (isset($appp1['input_23']) || isset($appp1['input_24']) || isset($appp1['input_25'])) { ?>
    <tr bgcolor="#EAF2FA">
        <td colspan="2"><font style="font-family: sans-serif; font-size:12px;"><strong>Which extra relocation services
                    would you like?</strong></font>
        </td>
    </tr>
    <tr bgcolor="#FFFFFF">
        <td width="20">&nbsp;</td>
        <td>
            <font style="font-family: sans-serif; font-size:12px;">
                <ul class="bulleted">
                    <?php if (isset($appp1['input_23'])) { ?>
                        <li id="confirm_16"><?php echo $appp1['input_23'] ?></li>
                    <?php }
                    if (isset($appp1['input_24'])) { ?>
                        <li id="confirm_17"><?php echo $appp1['input_24'] ?></li>
                    <?php }
                    if (isset($appp1['input_25'])) { ?>
                        <li id="confirm_18"><?php echo $appp1['input_25'] ?></li>
                    <?php } ?>
                </ul>
            </font>
        </td>
    </tr>
<?php }
if (isset($appp1['input_25'])) { ?>
    <tr bgcolor="#EAF2FA" id="ins_hide">
        <td colspan="2"><font style="font-family: sans-serif; font-size:12px;"><strong>Contents Value for
                    insurance</strong></font>
        </td>
    </tr>
    <tr bgcolor="#FFFFFF" id="ins_hide1">
        <td width="20">&nbsp;</td>
        <td><font style="font-family: sans-serif; font-size:12px;"
                  id="confirm_19"><?php echo $appp1['input_26'] ?></font>
        </td>
    </tr>
<?php }
if ($appp1['input_27'] != "") { ?>
    <tr bgcolor="#EAF2FA">
        <td colspan="2"><font style="font-family: sans-serif; font-size:12px;"><strong>Is there anything else that you
                    might want to add?</strong></font>
        </td>
    </tr>
    <tr bgcolor="#FFFFFF">
        <td width="20">&nbsp;</td>
        <td><font style="font-family: sans-serif; font-size:12px;"
                  id="confirm_20"><?php echo $appp1['input_27'] ?></font>
        </td>
    </tr>
<?php
}
if ($appp1['input_33'] > 0 && $appp1['input_33'] != "") {
    ?>
    <tr bgcolor="#EAF2FA">
        <td colspan="2">
            <font style="font-family: sans-serif; font-size:12px;"><strong>Entrance</strong></font>
        </td>
    </tr>
    <tr bgcolor="#FFFFFF">
        <td width="20">&nbsp;</td>
        <td>
            <font style="font-family: sans-serif; font-size:12px;"><?php echo $appp1['input_33']; ?></font>
        </td>
    </tr>
<?php
}
if ($appp1['input_34'] > 0 && $appp1['input_34'] != '') {
    ?>
    <tr bgcolor="#EAF2FA">
        <td colspan="2">
            <font style="font-family: sans-serif; font-size:12px;"><strong>Living Room</strong></font>
        </td>
    </tr>
    <tr bgcolor="#FFFFFF">
        <td width="20">&nbsp;</td>
        <td>
            <font style="font-family: sans-serif; font-size:12px;"><?php echo $appp1['input_34']; ?></font>
        </td>
    </tr>
<?php
}
if ($appp1['input_35'] > 0 && $appp1['input_35'] != "") {
    ?>
    <tr bgcolor="#EAF2FA">
        <td colspan="2">
            <font style="font-family: sans-serif; font-size:12px;"><strong>Hall</strong></font>
        </td>
    </tr>
    <tr bgcolor="#FFFFFF">
        <td width="20">&nbsp;</td>
        <td>
            <font style="font-family: sans-serif; font-size:12px;"><?php echo $appp1['input_35']; ?></font>
        </td>
    </tr>
<?php
}
if ($appp1['input_36'] > 0 && $appp1['input_36'] != "") {
    ?>
    <tr bgcolor="#EAF2FA">
        <td colspan="2">
            <font style="font-family: sans-serif; font-size:12px;"><strong>Bedroom</strong></font>
        </td>
    </tr>
    <tr bgcolor="#FFFFFF">
        <td width="20">&nbsp;</td>
        <td>
            <font style="font-family: sans-serif; font-size:12px;"><?php echo $appp1['input_36']; ?></font>
        </td>
    </tr>
<?php
}
if ($appp1['input_37'] > 0 && $appp1['input_37'] != "") {
    ?>
    <tr bgcolor="#EAF2FA">
        <td colspan="2">
            <font style="font-family: sans-serif; font-size:12px;"><strong>Family Room</strong></font>
        </td>
    </tr>
    <tr bgcolor="#FFFFFF">
        <td width="20">&nbsp;</td>
        <td>
            <font style="font-family: sans-serif; font-size:12px;"><?php echo $appp1['input_37']; ?></font>
        </td>
    </tr>
<?php
}
if ($appp1['input_38'] > 0 && $appp1['input_38'] != "") {
    ?>
    <tr bgcolor="#EAF2FA">
        <td colspan="2">
            <font style="font-family: sans-serif; font-size:12px;"><strong>Dining Room</strong></font>
        </td>
    </tr>
    <tr bgcolor="#FFFFFF">
        <td width="20">&nbsp;</td>
        <td>
            <font style="font-family: sans-serif; font-size:12px;"><?php echo $appp1['input_38']; ?></font>
        </td>
    </tr>
<?php
}
if ($appp1['input_39'] > 0 && $appp1['input_39'] != "") {
    ?>
    <tr bgcolor="#EAF2FA">
        <td colspan="2">
            <font style="font-family: sans-serif; font-size:12px;"><strong>Kitchen</strong></font>
        </td>
    </tr>
    <tr bgcolor="#FFFFFF">
        <td width="20">&nbsp;</td>
        <td>
            <font style="font-family: sans-serif; font-size:12px;"><?php echo $appp1['input_39']; ?></font>
        </td>
    </tr>
<?php
}
if ($appp1['input_40'] > 0 && $appp1['input_40'] != "") {
    ?>
    <tr bgcolor="#EAF2FA">
        <td colspan="2">
            <font style="font-family: sans-serif; font-size:12px;"><strong>Bathroom</strong></font>
        </td>
    </tr>
    <tr bgcolor="#FFFFFF">
        <td width="20">&nbsp;</td>
        <td>
            <font style="font-family: sans-serif; font-size:12px;"><?php echo $appp1['input_40']; ?></font>
        </td>
    </tr>
<?php
}
if ($appp1['input_41'] > 0 && $appp1['input_41'] != "") {
    ?>
    <tr bgcolor="#EAF2FA">
        <td colspan="2">
            <font style="font-family: sans-serif; font-size:12px;"><strong>Laundry</strong></font>
        </td>
    </tr>
    <tr bgcolor="#FFFFFF">
        <td width="20">&nbsp;</td>
        <td>
            <font style="font-family: sans-serif; font-size:12px;"><?php echo $appp1['input_41']; ?></font>
        </td>
    </tr>
<?php
}
if ($appp1['input_42'] > 0 && $appp1['input_42'] != "") {
    ?>
    <tr bgcolor="#EAF2FA">
        <td colspan="2">
            <font style="font-family: sans-serif; font-size:12px;"><strong>Office</strong></font>
        </td>
    </tr>
    <tr bgcolor="#FFFFFF">
        <td width="20">&nbsp;</td>
        <td>
            <font style="font-family: sans-serif; font-size:12px;"><?php echo $appp1['input_42']; ?></font>
        </td>
    </tr>
<?php
}
if ($appp1['input_43'] > 0 && $appp1['input_43'] != "") {
    ?>
    <tr bgcolor="#EAF2FA">
        <td colspan="2">
            <font style="font-family: sans-serif; font-size:12px;"><strong>Gym</strong></font>
        </td>
    </tr>
    <tr bgcolor="#FFFFFF">
        <td width="20">&nbsp;</td>
        <td>
            <font style="font-family: sans-serif; font-size:12px;"><?php echo $appp1['input_43']; ?></font>
        </td>
    </tr>
<?php
}
if ($appp1['input_44'] > 0 && $appp1['input_44'] != "") {
    ?>
    <tr bgcolor="#EAF2FA">
        <td colspan="2">
            <font style="font-family: sans-serif; font-size:12px;"><strong>Garage</strong></font>
        </td>
    </tr>
    <tr bgcolor="#FFFFFF">
        <td width="20">&nbsp;</td>
        <td>
            <font style="font-family: sans-serif; font-size:12px;"><?php echo $appp1['input_44']; ?></font>
        </td>
    </tr>
<?php
}
if ($appp1['input_45'] > 0 && $appp1['input_45'] != "") {
    ?>
    <tr bgcolor="#EAF2FA">
        <td colspan="2">
            <font style="font-family: sans-serif; font-size:12px;"><strong>Shed</strong></font>
        </td>
    </tr>
    <tr bgcolor="#FFFFFF">
        <td width="20">&nbsp;</td>
        <td>
            <font style="font-family: sans-serif; font-size:12px;"><?php echo $appp1['input_45']; ?></font>
        </td>
    </tr>
<?php
}
if ($appp1['input_46'] > 0 && $appp1['input_46'] != "") {
    ?>
    <tr bgcolor="#EAF2FA">
        <td colspan="2">
            <font style="font-family: sans-serif; font-size:12px;"><strong>Backyard</strong></font>
        </td>
    </tr>
    <tr bgcolor="#FFFFFF">
        <td width="20">&nbsp;</td>
        <td>
            <font style="font-family: sans-serif; font-size:12px;"><?php echo $appp1['input_46']; ?></font>
        </td>
    </tr>
<?php
}
if ($appp1['input_47'] > 0 && $appp1['input_47'] != "") {
    ?>
    <tr bgcolor="#EAF2FA">
        <td colspan="2">
            <font style="font-family: sans-serif; font-size:12px;"><strong>Store Room</strong></font>
        </td>
    </tr>
    <tr bgcolor="#FFFFFF">
        <td width="20">&nbsp;</td>
        <td>
            <font style="font-family: sans-serif; font-size:12px;"><?php echo $appp1['input_47']; ?></font>
        </td>
    </tr>
<?php
}
if ($appp1['input_48'] > 0 && $appp1['input_48'] != "") {
    ?>
    <tr bgcolor="#EAF2FA">
        <td colspan="2">
            <font style="font-family: sans-serif; font-size:12px;"><strong>cellar</strong></font>
        </td>
    </tr>
    <tr bgcolor="#FFFFFF">
        <td width="20">&nbsp;</td>
        <td>
            <font style="font-family: sans-serif; font-size:12px;"><?php echo $appp1['input_48']; ?></font>
        </td>
    </tr>
<?php
}

if (isset($appp1['input_49']) && $appp1['input_8'] == "House/Flat?") {
    ?>
    <tr bgcolor="#EAF2FA">
        <td colspan="2"><font style="font-family: sans-serif; font-size:12px;"><strong>Would you like an estimate or a
                    quote?</strong></font>
        </td>
    </tr>
    <?php if ($appp1['input_49'] == "Estimate") {
        $content = "Estimate (rough indication of your moving cost)";
    } else {
        $content = "Quote (precise cost of your moving based on the contents)";
    } ?>
    <tr bgcolor="#FFFFFF">
        <td width="20">&nbsp;</td>
        <td><font style="font-family: sans-serif; font-size:12px;" id="confirm_21"><?php echo $content; ?></font>
        </td>
    </tr>
<?php
} elseif (isset($appp1['input_30']) && $appp1['input_8'] == "Office/Business?") {
    ?>
    <tr bgcolor="#EAF2FA">
        <td colspan="2"><font style="font-family: sans-serif; font-size:12px;"><strong>Which of the following
                    approximates the Office/Business size?</strong></font>
        </td>
    </tr>
    <tr bgcolor="#FFFFFF">
        <td width="20">&nbsp;</td>
        <td><font style="font-family: sans-serif; font-size:12px;"
                  id="confirm_21"><?php echo $appp1['input_30'] ?></font>
        </td>
    </tr>
<?php } else { ?>
    <tr bgcolor="#EAF2FA">
        <td colspan="2"><font style="font-family: sans-serif; font-size:12px;"><strong>Add selected items to
                    move</strong></font>
        </td>
    </tr>
    <tr bgcolor="#FFFFFF">
        <td width="20">&nbsp;</td>
        <td><font style="font-family: sans-serif; font-size:12px;"
                  id="confirm_21"><?php echo $appp1['input_248'] ?></font>
        </td>
    </tr>
    <tr bgcolor="#EAF2FA">
        <td colspan="2"><font style="font-family: sans-serif; font-size:12px;"><strong>Add selected items to
                    move</strong></font>
        </td>
    </tr>
    <tr bgcolor="#FFFFFF">
        <td width="20">&nbsp;</td>
        <td><font style="font-family: sans-serif; font-size:12px;"
                  id="confirm_21"><?php echo $appp1['input_249'] ?></font>
        </td>
    </tr>
<?php
}

if (isset($appp1['input_49']) && $appp1['input_49'] == "Detailed Quote") {
    if (isset($appp['input_52[]'])) {
        for ($i = 0; $i < count($appp['input_52[]']); $i++) {

            ?>
            <tr>
                <td colspan="2"
                    style="font-size:14px; font-weight:bold; background-color:#EEE; border-bottom:1px solid #DFDFDF; padding:7px 7px">
                    Entrance <?php echo $i + 1 ?> Items
                </td>
            </tr>
            <?php if ($appp['input_52[]'][$i] != "" && $appp['input_52[]'][$i] != 0) { ?>
                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>Coat Stand</strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font
                            style="font-family: sans-serif; font-size:12px;"><?php echo $appp['input_52[]'][$i]; ?></font>
                    </td>
                </tr>
            <?php
            }
            if ($appp['input_53[]'][$i] != "" && $appp['input_53[]'][$i] != 0) {
                ?>
                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>Mirror</strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font
                            style="font-family: sans-serif; font-size:12px;"><?php echo $appp['input_53[]'][$i]; ?></font>
                    </td>
                </tr>
            <?php
            }
            if ($appp['input_54[]'][$i] != "" && $appp['input_54[]'][$i] != "0") {
                ?>
                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>Plant</strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font
                            style="font-family: sans-serif; font-size:12px;"><?php echo $appp['input_54[]'][$i]; ?></font>
                    </td>
                </tr>
            <?php
            }
            if ($appp['input_55[]'][$i] != "" && $appp['input_55[]'][$i] != 0) {
                ?>
                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>Rug</strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font
                            style="font-family: sans-serif; font-size:12px;"><?php echo $appp['input_55[]'][$i]; ?></font>
                    </td>
                </tr>
            <?php
            }
            if ($appp['input_56[]'][$i] != "" && $appp['input_56[]'][$i] != 0) {
                ?>
                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>Statue</strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font
                            style="font-family: sans-serif; font-size:12px;"><?php echo $appp['input_56[]'][$i]; ?></font>
                    </td>
                </tr>
            <?php
            }
            if ($appp['input_57[]'][$i] != "" && $appp['input_57[]'][$i] != 0) {
                ?>
                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>Table</strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font
                            style="font-family: sans-serif; font-size:12px;"><?php echo $appp['input_57[]'][$i]; ?></font>
                    </td>
                </tr>
            <?php
            }
            if ($appp['input_58[]'][$i] != "" && $appp['input_58[]'][$i] != 0) {
                ?>
                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>Vase</strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font
                            style="font-family: sans-serif; font-size:12px;"><?php echo $appp['input_58[]'][$i]; ?></font>
                    </td>
                </tr>
            <?php
            }
            if ($appp['input_59[]'][$i] != "" && $appp['input_59[]'][$i] != 0) {
                ?>
                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>Wall Art</strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font
                            style="font-family: sans-serif; font-size:12px;"><?php echo $appp['input_59[]'][$i]; ?></font>
                    </td>
                </tr>
            <?php
            }

            if (count(array_filter($appp['input_60[' . $i . ']'])) != 0) {

                ?>

                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>Entrance <?php echo $i + 1 ?>
                                Additional Items</strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font style="font-family: sans-serif; font-size:12px;">
                            <table class="gfield_list"
                                   style="border-top: 1px solid #DFDFDF; border-left: 1px solid #DFDFDF; border-spacing: 0; padding: 0; margin: 2px 0 6px; width: 100%">
                                <thead>
                                <tr>
                                    <th style="background-image: none; border-right: 1px solid #DFDFDF; border-bottom: 1px solid #DFDFDF; padding: 6px 10px; font-family: sans-serif; font-size: 12px; font-weight: bold; background-color: #F1F1F1; color:#333; text-align:left">
                                        Item
                                    </th>
                                    <th style="background-image: none; border-right: 1px solid #DFDFDF; border-bottom: 1px solid #DFDFDF; padding: 6px 10px; font-family: sans-serif; font-size: 12px; font-weight: bold; background-color: #F1F1F1; color:#333; text-align:left">
                                        Quantity
                                    </th>
                                </tr>
                                </thead>
                                <tbody style="background-color: #F9F9F9">

                                <?php

                                for ($a = 0; $a < count($appp['input_60[' . $i . ']']); $a++) {
                                    ?>
                                    <tr>
                                        <td style="padding: 6px 10px; border-right: 1px solid #DFDFDF; border-bottom: 1px solid #DFDFDF; border-top: 1px solid #FFF; font-family: sans-serif; font-size:12px;"><?php echo $appp['input_60[' . $i . ']'][$a]; ?></td>
                                        <td style="padding: 6px 10px; border-right: 1px solid #DFDFDF; border-bottom: 1px solid #DFDFDF; border-top: 1px solid #FFF; font-family: sans-serif; font-size:12px;"><?php $a++;
                                            echo $appp['input_60[' . $i . ']'][$a]; ?></td>
                                    </tr>
                                <?php } ?>
                                </tbody>
                                <tbody>
                                </tbody>
                            </table>
                        </font>
                    </td>
                </tr>
            <?php
            }
        }
    }


    if (isset($appp['input_62[]'])) {
        for ($i = 0; $i < count($appp['input_62[]']); $i++) {
            ?>
            <tr>
                <td colspan="2"
                    style="font-size:14px; font-weight:bold; background-color:#EEE; border-bottom:1px solid #DFDFDF; padding:7px 7px">
                    Living Room <?php echo $i + 1 ?> Items
                </td>
            </tr>
            <?php if ($appp['input_62[]'][$i] != "" && $appp['input_62[]'][$i] != 0) { ?>
                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>Bookcase</strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font
                            style="font-family: sans-serif; font-size:12px;"><?php echo $appp['input_62[]'][$i]; ?></font>
                    </td>
                </tr>
            <?php
            }
            if ($appp['input_63[]'][$i] != "" && $appp['input_63[]'][$i] != 0) {
                ?>
                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>Cabinets</strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font
                            style="font-family: sans-serif; font-size:12px;"><?php echo $appp['input_63[]'][$i]; ?></font>
                    </td>
                </tr>
            <?php
            }
            if ($appp['input_64[]'][$i] != "" && $appp['input_64[]'][$i] != 0) {
                ?>
                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>Coffee Table</strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font
                            style="font-family: sans-serif; font-size:12px;"><?php echo $appp['input_64[]'][$i]; ?></font>
                    </td>
                </tr>
            <?php
            }
            if ($appp['input_65[]'][$i] != "" && $appp['input_65[]'][$i] != 0) {
                ?>
                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>Chair Recliner</strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font
                            style="font-family: sans-serif; font-size:12px;"><?php echo $appp['input_65[]'][$i]; ?></font>
                    </td>
                </tr>
            <?php
            }
            if ($appp['input_66[]'][$i] != "" && $appp['input_66[]'][$i] != 0) {
                ?>
                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>Entertainment Storage
                                Set</strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font
                            style="font-family: sans-serif; font-size:12px;"><?php echo $appp['input_66[]'][$i]; ?></font>
                    </td>
                </tr>
            <?php
            }
            if ($appp['input_67[]'][$i] != "" && $appp['input_67[]'][$i] != 0) {
                ?>
                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>Heater</strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font
                            style="font-family: sans-serif; font-size:12px;"><?php echo $appp['input_67[]'][$i]; ?></font>
                    </td>
                </tr>
            <?php
            }
            if ($appp['input_68[]'][$i] != "" && $appp['input_68[]'][$i] != 0) {
                ?>
                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>Home Theatre
                                System</strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font
                            style="font-family: sans-serif; font-size:12px;"><?php echo $appp['input_68[]'][$i]; ?></font>
                    </td>
                </tr>
            <?php
            }
            if ($appp['input_69[]'][$i] != "" && $appp['input_69[]'][$i] != 0) {
                ?>
                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>Lamp</strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font
                            style="font-family: sans-serif; font-size:12px;"><?php echo $appp['input_69[]'][$i]; ?></font>
                    </td>
                </tr>
            <?php
            }
            if ($appp['input_70[]'][$i] != "" && $appp['input_70[]'][$i] != 0) {
                ?>
                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>Ottoman</strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font
                            style="font-family: sans-serif; font-size:12px;"><?php echo $appp['input_70[]'][$i]; ?></font>
                    </td>
                </tr>
            <?php
            }
            if ($appp['input_71[]'][$i] != "" && $appp['input_71[]'][$i] != 0) {
                ?>
                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>Piano</strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font
                            style="font-family: sans-serif; font-size:12px;"><?php echo $appp['input_71[]'][$i]; ?></font>
                    </td>
                </tr>
            <?php
            }
            if ($appp['input_72[]'][$i] != "" && $appp['input_72[]'][$i] != 0) {
                ?>
                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>Rugs</strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font
                            style="font-family: sans-serif; font-size:12px;"><?php echo $appp['input_72[]'][$i]; ?></font>
                    </td>
                </tr>
            <?php
            }
            if ($appp['input_73[]'][$i] != "" && $appp['input_73[]'][$i] != 0) {
                ?>
                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>Sofa Set</strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font
                            style="font-family: sans-serif; font-size:12px;"><?php echo $appp['input_73[]'][$i]; ?></font>
                    </td>
                </tr>
            <?php
            }
            if ($appp['input_74[]'][$i] != "" && $appp['input_74[]'][$i] != 0) {
                ?>
                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>Stereo System</strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font
                            style="font-family: sans-serif; font-size:12px;"><?php echo $appp['input_74[]'][$i]; ?></font>
                    </td>
                </tr>
            <?php
            }
            if ($appp['input_75[]'][$i] != "" && $appp['input_75[]'][$i] != 0) {
                ?>
                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>TV</strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font
                            style="font-family: sans-serif; font-size:12px;"><?php echo $appp['input_75[]'][$i]; ?></font>
                    </td>
                </tr>
            <?php
            }
            if ($appp['input_76[]'][$i] != "" && $appp['input_76[]'][$i] != 0) {
                ?>
                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>TV Cabinet</strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font
                            style="font-family: sans-serif; font-size:12px;"><?php echo $appp['input_76[]'][$i]; ?></font>
                    </td>
                </tr>
            <?php
            }
            if ($appp['input_77[]'][$i] != "" && $appp['input_77[]'][$i] != 0) {
                ?>
                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>Wall art</strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font
                            style="font-family: sans-serif; font-size:12px;"><?php echo $appp['input_77[]'][$i]; ?></font>
                    </td>
                </tr>
            <?php
            }
            if (count(array_filter($appp['input_78[' . $i . ']'])) != 0) {
                ?>

                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>Living Room <?php echo $i + 1 ?>
                                Additional Items</strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font style="font-family: sans-serif; font-size:12px;">
                            <table class="gfield_list"
                                   style="border-top: 1px solid #DFDFDF; border-left: 1px solid #DFDFDF; border-spacing: 0; padding: 0; margin: 2px 0 6px; width: 100%">
                                <thead>
                                <tr>
                                    <th style="background-image: none; border-right: 1px solid #DFDFDF; border-bottom: 1px solid #DFDFDF; padding: 6px 10px; font-family: sans-serif; font-size: 12px; font-weight: bold; background-color: #F1F1F1; color:#333; text-align:left">
                                        Item
                                    </th>
                                    <th style="background-image: none; border-right: 1px solid #DFDFDF; border-bottom: 1px solid #DFDFDF; padding: 6px 10px; font-family: sans-serif; font-size: 12px; font-weight: bold; background-color: #F1F1F1; color:#333; text-align:left">
                                        Quantity
                                    </th>
                                </tr>
                                </thead>
                                <tbody style="background-color: #F9F9F9">

                                <?php
                                for ($a = 0; $a < count($appp['input_78[' . $i . ']']); $a++) {
                                    ?>
                                    <tr>
                                        <td style="padding: 6px 10px; border-right: 1px solid #DFDFDF; border-bottom: 1px solid #DFDFDF; border-top: 1px solid #FFF; font-family: sans-serif; font-size:12px;"><?php echo $appp['input_78[' . $i . ']'][$a]; ?></td>
                                        <td style="padding: 6px 10px; border-right: 1px solid #DFDFDF; border-bottom: 1px solid #DFDFDF; border-top: 1px solid #FFF; font-family: sans-serif; font-size:12px;"><?php $a++;
                                            echo $appp['input_78[' . $i . ']'][$a]; ?></td>
                                    </tr>
                                <?php } ?>
                                </tbody>
                                <tbody>
                                </tbody>
                            </table>
                        </font>
                    </td>
                </tr>
            <?php
            }
        }
    }
    if (isset($appp['input_80[]'])) {
        for ($i = 0; $i < count($appp['input_80[]']); $i++) {
            ?>
            <tr>
                <td colspan="2"
                    style="font-size:14px; font-weight:bold; background-color:#EEE; border-bottom:1px solid #DFDFDF; padding:7px 7px">
                    Hall <?php echo $i + 1 ?> Items
                </td>
            </tr>
            <?php if ($appp['input_80[]'][$i] != "" && $appp['input_80[]'][$i] != 0) { ?>
                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>Bookcase</strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font
                            style="font-family: sans-serif; font-size:12px;"><?php echo $appp['input_80[]'][$i]; ?></font>
                    </td>
                </tr>
            <?php
            }
            if ($appp['input_81[]'][$i] != "" && $appp['input_81[]'][$i] != 0) {
                ?>
                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>Clock</strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font
                            style="font-family: sans-serif; font-size:12px;"><?php echo $appp['input_81[]'][$i]; ?></font>
                    </td>
                </tr>
            <?php
            }
            if ($appp['input_82[]'][$i] != "" && $appp['input_82[]'][$i] != 0) {
                ?>
                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>Lamp</strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font
                            style="font-family: sans-serif; font-size:12px;"><?php echo $appp['input_82[]'][$i]; ?></font>
                    </td>
                </tr>
            <?php
            }
            if ($appp['input_83[]'][$i] != "" && $appp['input_83[]'][$i] != 0) {
                ?>
                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>Mirror</strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font
                            style="font-family: sans-serif; font-size:12px;"><?php echo $appp['input_83[]'][$i]; ?></font>
                    </td>
                </tr>
            <?php
            }
            if ($appp['input_84[]'][$i] != "" && $appp['input_84[]'][$i] != 0) {
                ?>
                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>Rug</strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font
                            style="font-family: sans-serif; font-size:12px;"><?php echo $appp['input_84[]'][$i]; ?></font>
                    </td>
                </tr>
            <?php
            }
            if ($appp['input_85[]'][$i] != "" && $appp['input_85[]'][$i] != 0) {
                ?>
                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>Plant Pot</strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font
                            style="font-family: sans-serif; font-size:12px;"><?php echo $appp['input_85[]'][$i]; ?></font>
                    </td>
                </tr>
            <?php
            }
            if ($appp['input_86[]'][$i] != "" && $appp['input_86[]'][$i] != 0) {
                ?>
                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>Sofa Seat</strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font
                            style="font-family: sans-serif; font-size:12px;"><?php echo $appp['input_86[]'][$i]; ?></font>
                    </td>
                </tr>
            <?php
            }
            if ($appp['input_87[]'][$i] != "" && $appp['input_87[]'][$i] != 0) {
                ?>
                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>Stand</strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font
                            style="font-family: sans-serif; font-size:12px;"><?php echo $appp['input_87[]'][$i]; ?></font>
                    </td>
                </tr>
            <?php
            }
            if ($appp['input_88[]'][$i] != "" && $appp['input_88[]'][$i] != 0) {
                ?>
                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>Table</strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font
                            style="font-family: sans-serif; font-size:12px;"><?php echo $appp['input_88[]'][$i]; ?></font>
                    </td>
                </tr>
            <?php
            }
            if ($appp['input_89[]'][$i] != "" && $appp['input_89[]'][$i] != 0) {
                ?>
                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>Wall Art</strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font
                            style="font-family: sans-serif; font-size:12px;"><?php echo $appp['input_89[]'][$i]; ?></font>
                    </td>
                </tr>
            <?php
            }
            if (count(array_filter($appp['input_90[' . $i . ']'])) != 0) {
                ?>

                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>Hall <?php echo $i + 1 ?>
                                Additional Items</strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font style="font-family: sans-serif; font-size:12px;">
                            <table class="gfield_list"
                                   style="border-top: 1px solid #DFDFDF; border-left: 1px solid #DFDFDF; border-spacing: 0; padding: 0; margin: 2px 0 6px; width: 100%">
                                <thead>
                                <tr>
                                    <th style="background-image: none; border-right: 1px solid #DFDFDF; border-bottom: 1px solid #DFDFDF; padding: 6px 10px; font-family: sans-serif; font-size: 12px; font-weight: bold; background-color: #F1F1F1; color:#333; text-align:left">
                                        Item
                                    </th>
                                    <th style="background-image: none; border-right: 1px solid #DFDFDF; border-bottom: 1px solid #DFDFDF; padding: 6px 10px; font-family: sans-serif; font-size: 12px; font-weight: bold; background-color: #F1F1F1; color:#333; text-align:left">
                                        Quantity
                                    </th>
                                </tr>
                                </thead>
                                <tbody style="background-color: #F9F9F9">

                                <?php
                                for ($a = 0; $a < count($appp['input_90[' . $i . ']']); $a++) {
                                    ?>
                                    <tr>
                                        <td style="padding: 6px 10px; border-right: 1px solid #DFDFDF; border-bottom: 1px solid #DFDFDF; border-top: 1px solid #FFF; font-family: sans-serif; font-size:12px;"><?php echo $appp['input_90[' . $i . ']'][$a]; ?></td>
                                        <td style="padding: 6px 10px; border-right: 1px solid #DFDFDF; border-bottom: 1px solid #DFDFDF; border-top: 1px solid #FFF; font-family: sans-serif; font-size:12px;"><?php $a++;
                                            echo $appp['input_90[' . $i . ']'][$a]; ?></td>
                                    </tr>
                                <?php } ?>
                                </tbody>
                                <tbody>
                                </tbody>
                            </table>
                        </font>
                    </td>
                </tr>
            <?php
            }
        }
    }
    if (isset($appp['input_92[]'])) {
        for ($i = 0; $i < count($appp['input_92[]']); $i++) {
            ?>
            <tr>
                <td colspan="2"
                    style="font-size:14px; font-weight:bold; background-color:#EEE; border-bottom:1px solid #DFDFDF; padding:7px 7px">
                    Bedroom <?php echo $i + 1 ?> Items
                </td>
            </tr>
            <?php if ($appp['input_92[]'][$i] != "" && $appp['input_92[]'][$i] != 0) { ?>
                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>Bed - Single</strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font
                            style="font-family: sans-serif; font-size:12px;"><?php echo $appp['input_92[]'][$i]; ?></font>
                    </td>
                </tr>
            <?php
            }
            if ($appp['input_93[]'][$i] != "" && $appp['input_93[]'][$i] != 0) {
                ?>
                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>Bed - Double</strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font
                            style="font-family: sans-serif; font-size:12px;"><?php echo $appp['input_93[]'][$i]; ?></font>
                    </td>
                </tr>
            <?php
            }
            if ($appp['input_94[]'][$i] != "" && $appp['input_94[]'][$i] != 0) {
                ?>
                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>Bed - Queen</strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font
                            style="font-family: sans-serif; font-size:12px;"><?php echo $appp['input_94[]'][$i]; ?></font>
                    </td>
                </tr>
            <?php
            }
            if ($appp['input_95[]'][$i] != "" && $appp['input_95[]'][$i] != 0) {
                ?>
                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>Bed - King</strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font
                            style="font-family: sans-serif; font-size:12px;"><?php echo $appp['input_95[]'][$i]; ?></font>
                    </td>
                </tr>
            <?php
            }
            if ($appp['input_96[]'][$i] != "" && $appp['input_96[]'][$i] != 0) {
                ?>
                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>Bedside table</strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font
                            style="font-family: sans-serif; font-size:12px;"><?php echo $appp['input_96[]'][$i]; ?></font>
                    </td>
                </tr>
            <?php
            }
            if ($appp['input_97[]'][$i] != "" && $appp['input_97[]'][$i] != 0) {
                ?>
                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>Bookcase</strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font
                            style="font-family: sans-serif; font-size:12px;"><?php echo $appp['input_97[]'][$i]; ?></font>
                    </td>
                </tr>
            <?php
            }
            if ($appp['input_98[]'][$i] != "" && $appp['input_98[]'][$i] != 0) {
                ?>
                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>Chest of Drawers</strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font
                            style="font-family: sans-serif; font-size:12px;"><?php echo $appp['input_98[]'][$i]; ?></font>
                    </td>
                </tr>
            <?php
            }
            if ($appp['input_99[]'][$i] != "" && $appp['input_99[]'][$i] != 0) {
                ?>
                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>Cot</strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font
                            style="font-family: sans-serif; font-size:12px;"><?php echo $appp['input_99[]'][$i]; ?></font>
                    </td>
                </tr>
            <?php
            }
            if ($appp['input_100[]'][$i] != "" && $appp['input_100[]'][$i] != 0) {
                ?>
                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>Chairs</strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font
                            style="font-family: sans-serif; font-size:12px;"><?php echo $appp['input_100[]'][$i]; ?></font>
                    </td>
                </tr>
            <?php
            }
            if ($appp['input_101[]'][$i] != "" && $appp['input_101[]'][$i] != 0) {
                ?>
                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>Computer</strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font
                            style="font-family: sans-serif; font-size:12px;"><?php echo $appp['input_101[]'][$i]; ?></font>
                    </td>
                </tr>
            <?php
            }
            if ($appp['input_102[]'][$i] != "" && $appp['input_102[]'][$i] != 0) {
                ?>
                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>Desk</strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font
                            style="font-family: sans-serif; font-size:12px;"><?php echo $appp['input_102[]'][$i]; ?></font>
                    </td>
                </tr>
            <?php
            }
            if ($appp['input_103[]'][$i] != "" && $appp['input_103[]'][$i] != 0) {
                ?>
                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>Dresser</strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font
                            style="font-family: sans-serif; font-size:12px;"><?php echo $appp['input_103[]'][$i]; ?></font>
                    </td>
                </tr>
            <?php
            }
            if ($appp['input_104[]'][$i] != "" && $appp['input_104[]'][$i] != 0) {
                ?>
                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>Heater</strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font
                            style="font-family: sans-serif; font-size:12px;"><?php echo $appp['input_104[]'][$i]; ?></font>
                    </td>
                </tr>
            <?php
            }
            if ($appp['input_105[]'][$i] != "" && $appp['input_105[]'][$i] != 0) {
                ?>
                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>Lamp</strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font
                            style="font-family: sans-serif; font-size:12px;"><?php echo $appp['input_105[]'][$i]; ?></font>
                    </td>
                </tr>
            <?php
            }
            if ($appp['input_106[]'][$i] != "" && $appp['input_106[]'][$i] != 0) {
                ?>
                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>Mirror</strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font
                            style="font-family: sans-serif; font-size:12px;"><?php echo $appp['input_106[]'][$i]; ?></font>
                    </td>
                </tr>
            <?php
            }
            if ($appp['input_107[]'][$i] != "" && $appp['input_107[]'][$i] != 0) {
                ?>
                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>Printer/Photocopier
                            </strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font
                            style="font-family: sans-serif; font-size:12px;"><?php echo $appp['input_107[]'][$i]; ?></font>
                    </td>
                </tr>
            <?php
            }
            if ($appp['input_108[]'][$i] != "" && $appp['input_108[]'][$i] != 0) {
                ?>
                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>Rug
                            </strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font
                            style="font-family: sans-serif; font-size:12px;"><?php echo $appp['input_108[]'][$i]; ?></font>
                    </td>
                </tr>
            <?php
            }
            if ($appp['input_109[]'][$i] != "" && $appp['input_109[]'][$i] != 0) {
                ?>
                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>Stereo System
                            </strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font
                            style="font-family: sans-serif; font-size:12px;"><?php echo $appp['input_109[]'][$i]; ?></font>
                    </td>
                </tr>
            <?php
            }
            if ($appp['input_110[]'][$i] != "" && $appp['input_110[]'][$i] != 0) {
                ?>
                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>Tallboy
                            </strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font
                            style="font-family: sans-serif; font-size:12px;"><?php echo $appp['input_110[]'][$i]; ?></font>
                    </td>
                </tr>
            <?php
            }
            if ($appp['input_111[]'][$i] != "" && $appp['input_111[]'][$i] != 0) {
                ?>
                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>TV
                            </strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font
                            style="font-family: sans-serif; font-size:12px;"><?php echo $appp['input_111[]'][$i]; ?></font>
                    </td>
                </tr>
            <?php
            }
            if ($appp['input_112[]'][$i] != "" && $appp['input_112[]'][$i] != 0) {
                ?>
                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>TV Cabinet
                            </strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font
                            style="font-family: sans-serif; font-size:12px;"><?php echo $appp['input_112[]'][$i]; ?></font>
                    </td>
                </tr>
            <?php
            }
            if ($appp['input_113[]'][$i] != "" && $appp['input_113[]'][$i] != 0) {
                ?>
                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>Wall art/Painting
                            </strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font
                            style="font-family: sans-serif; font-size:12px;"><?php echo $appp['input_113[]'][$i]; ?></font>
                    </td>
                </tr>
            <?php
            }
            if ($appp['input_114[]'][$i] != "" && $appp['input_114[]'][$i] != 0) {
                ?>
                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>Wardrobe - Single
                            </strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font
                            style="font-family: sans-serif; font-size:12px;"><?php echo $appp['input_114[]'][$i]; ?></font>
                    </td>
                </tr>
            <?php
            }
            if ($appp['input_115[]'][$i] != "" && $appp['input_115[]'][$i] != 0) {
                ?>
                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>Wardrobe - Double
                            </strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font
                            style="font-family: sans-serif; font-size:12px;"><?php echo $appp['input_115[]'][$i]; ?></font>
                    </td>
                </tr>
            <?php
            }
            if (count(array_filter($appp['input_116[' . $i . ']'])) != 0) {
                ?>

                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>Bedoom <?php echo $i + 1 ?>
                                Additional Items</strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font style="font-family: sans-serif; font-size:12px;">
                            <table class="gfield_list"
                                   style="border-top: 1px solid #DFDFDF; border-left: 1px solid #DFDFDF; border-spacing: 0; padding: 0; margin: 2px 0 6px; width: 100%">
                                <thead>
                                <tr>
                                    <th style="background-image: none; border-right: 1px solid #DFDFDF; border-bottom: 1px solid #DFDFDF; padding: 6px 10px; font-family: sans-serif; font-size: 12px; font-weight: bold; background-color: #F1F1F1; color:#333; text-align:left">
                                        Item
                                    </th>
                                    <th style="background-image: none; border-right: 1px solid #DFDFDF; border-bottom: 1px solid #DFDFDF; padding: 6px 10px; font-family: sans-serif; font-size: 12px; font-weight: bold; background-color: #F1F1F1; color:#333; text-align:left">
                                        Quantity
                                    </th>
                                </tr>
                                </thead>
                                <tbody style="background-color: #F9F9F9">

                                <?php
                                for ($a = 0; $a < count($appp['input_116[' . $i . ']']); $a++) {
                                    ?>
                                    <tr>
                                        <td style="padding: 6px 10px; border-right: 1px solid #DFDFDF; border-bottom: 1px solid #DFDFDF; border-top: 1px solid #FFF; font-family: sans-serif; font-size:12px;"><?php echo $appp['input_116[' . $i . ']'][$a]; ?></td>
                                        <td style="padding: 6px 10px; border-right: 1px solid #DFDFDF; border-bottom: 1px solid #DFDFDF; border-top: 1px solid #FFF; font-family: sans-serif; font-size:12px;"><?php $a++;
                                            echo $appp['input_116[' . $i . ']'][$a]; ?></td>
                                    </tr>
                                <?php } ?>
                                </tbody>
                                <tbody>
                                </tbody>
                            </table>
                        </font>
                    </td>
                </tr>
            <?php
            }
        }
    }

    if (isset($appp['input_118[]'])) {
        for ($i = 0; $i < count($appp['input_118[]']); $i++) {
            ?>
            <tr>
                <td colspan="2"
                    style="font-size:14px; font-weight:bold; background-color:#EEE; border-bottom:1px solid #DFDFDF; padding:7px 7px">
                    Family Room <?php echo $i + 1 ?> Items
                </td>
            </tr>
            <?php if ($appp['input_118[]'][$i] != "" && $appp['input_118[]'][$i] != 0) { ?>
                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>Bookcase</strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font
                            style="font-family: sans-serif; font-size:12px;"><?php echo $appp['input_118[]'][$i]; ?></font>
                    </td>
                </tr>
            <?php
            }
            if ($appp['input_119[]'][$i] != "" && $appp['input_119[]'][$i] != 0) {
                ?>
                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>Cabinet</strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font
                            style="font-family: sans-serif; font-size:12px;"><?php echo $appp['input_119[]'][$i]; ?></font>
                    </td>
                </tr>
            <?php
            }
            if ($appp['input_120[]'][$i] != "" && $appp['input_120[]'][$i] != 0) {
                ?>
                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>Chair</strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font
                            style="font-family: sans-serif; font-size:12px;"><?php echo $appp['input_120[]'][$i]; ?></font>
                    </td>
                </tr>
            <?php
            }
            if ($appp['input_121[]'][$i] != "" && $appp['input_121[]'][$i] != 0) {
                ?>
                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>Coffee Table</strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font
                            style="font-family: sans-serif; font-size:12px;"><?php echo $appp['input_121[]'][$i]; ?></font>
                    </td>
                </tr>
            <?php
            }
            if ($appp['input_122[]'][$i] != "" && $appp['input_122[]'][$i] != 0) {
                ?>
                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>Chaise Lounge</strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font
                            style="font-family: sans-serif; font-size:12px;"><?php echo $appp['input_122[]'][$i]; ?></font>
                    </td>
                </tr>
            <?php
            }
            if ($appp['input_123[]'][$i] != "" && $appp['input_123[]'][$i] != 0) {
                ?>
                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>Entertainment Storage
                                Set</strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font
                            style="font-family: sans-serif; font-size:12px;"><?php echo $appp['input_123[]'][$i]; ?></font>
                    </td>
                </tr>
            <?php
            }
            if ($appp['input_124[]'][$i] != "" && $appp['input_124[]'][$i] != 0) {
                ?>
                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>Rugs</strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font
                            style="font-family: sans-serif; font-size:12px;"><?php echo $appp['input_124[]'][$i]; ?></font>
                    </td>
                </tr>
            <?php
            }
            if ($appp['input_125[]'][$i] != "" && $appp['input_125[]'][$i] != 0) {
                ?>
                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>Sofa Set</strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font
                            style="font-family: sans-serif; font-size:12px;"><?php echo $appp['input_125[]'][$i]; ?></font>
                    </td>
                </tr>
            <?php
            }
            if ($appp['input_126[]'][$i] != "" && $appp['input_126[]'][$i] != 0) {
                ?>
                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>TV</strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font
                            style="font-family: sans-serif; font-size:12px;"><?php echo $appp['input_126[]'][$i]; ?></font>
                    </td>
                </tr>
            <?php
            }
            if ($appp['input_127[]'][$i] != "" && $appp['input_127[]'][$i] != 0) {
                ?>
                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>Wall Art</strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font
                            style="font-family: sans-serif; font-size:12px;"><?php echo $appp['input_127[]'][$i]; ?></font>
                    </td>
                </tr>
            <?php
            }
            if (count(array_filter($appp['input_128[' . $i . ']'])) != 0) {
                ?>

                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>Family Room <?php echo $i + 1 ?>
                                Additional Items</strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font style="font-family: sans-serif; font-size:12px;">
                            <table class="gfield_list"
                                   style="border-top: 1px solid #DFDFDF; border-left: 1px solid #DFDFDF; border-spacing: 0; padding: 0; margin: 2px 0 6px; width: 100%">
                                <thead>
                                <tr>
                                    <th style="background-image: none; border-right: 1px solid #DFDFDF; border-bottom: 1px solid #DFDFDF; padding: 6px 10px; font-family: sans-serif; font-size: 12px; font-weight: bold; background-color: #F1F1F1; color:#333; text-align:left">
                                        Item
                                    </th>
                                    <th style="background-image: none; border-right: 1px solid #DFDFDF; border-bottom: 1px solid #DFDFDF; padding: 6px 10px; font-family: sans-serif; font-size: 12px; font-weight: bold; background-color: #F1F1F1; color:#333; text-align:left">
                                        Quantity
                                    </th>
                                </tr>
                                </thead>
                                <tbody style="background-color: #F9F9F9">

                                <?php
                                for ($a = 0; $a < count($appp['input_128[' . $i . ']']); $a++) {
                                    ?>
                                    <tr>
                                        <td style="padding: 6px 10px; border-right: 1px solid #DFDFDF; border-bottom: 1px solid #DFDFDF; border-top: 1px solid #FFF; font-family: sans-serif; font-size:12px;"><?php echo $appp['input_128[' . $i . ']'][$a]; ?></td>
                                        <td style="padding: 6px 10px; border-right: 1px solid #DFDFDF; border-bottom: 1px solid #DFDFDF; border-top: 1px solid #FFF; font-family: sans-serif; font-size:12px;"><?php $a++;
                                            echo $appp['input_128[' . $i . ']'][$a]; ?></td>
                                    </tr>
                                <?php } ?>
                                </tbody>
                                <tbody>
                                </tbody>
                            </table>
                        </font>
                    </td>
                </tr>
            <?php
            }
        }
    }
    if (isset($appp['input_130[]'])) {
        for ($i = 0; $i < count($appp['input_130[]']); $i++) {
            ?>
            <tr>
                <td colspan="2"
                    style="font-size:14px; font-weight:bold; background-color:#EEE; border-bottom:1px solid #DFDFDF; padding:7px 7px">
                    Dining Room <?php echo $i + 1 ?> Items
                </td>
            </tr>
            <?php if ($appp['input_130[]'][$i] != "" && $appp['input_130[]'][$i] != 0) { ?>
                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>Bookcase</strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font
                            style="font-family: sans-serif; font-size:12px;"><?php echo $appp['input_130[]'][$i]; ?></font>
                    </td>
                </tr>
            <?php
            }
            if ($appp['input_131[]'][$i] != "" && $appp['input_131[]'][$i] != 0) {
                ?>
                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>Chair</strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font
                            style="font-family: sans-serif; font-size:12px;"><?php echo $appp['input_131[]'][$i]; ?></font>
                    </td>
                </tr>
            <?php
            }
            if ($appp['input_132[]'][$i] != "" && $appp['input_132[]'][$i] != 0) {
                ?>
                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>Chest of drawers</strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font
                            style="font-family: sans-serif; font-size:12px;"><?php echo $appp['input_132[]'][$i]; ?></font>
                    </td>
                </tr>
            <?php
            }
            if ($appp['input_133[]'][$i] != "" && $appp['input_133[]'][$i] != 0) {
                ?>
                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>Heater</strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font
                            style="font-family: sans-serif; font-size:12px;"><?php echo $appp['input_133[]'][$i]; ?></font>
                    </td>
                </tr>
            <?php
            }
            if ($appp['input_134[]'][$i] != "" && $appp['input_134[]'][$i] != 0) {
                ?>
                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>High Chair</strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font
                            style="font-family: sans-serif; font-size:12px;"><?php echo $appp['input_134[]'][$i]; ?></font>
                    </td>
                </tr>
            <?php
            }
            if ($appp['input_135[]'][$i] != "" && $appp['input_135[]'][$i] != 0) {
                ?>
                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>Lamp</strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font
                            style="font-family: sans-serif; font-size:12px;"><?php echo $appp['input_135[]'][$i]; ?></font>
                    </td>
                </tr>
            <?php
            }
            if ($appp['input_136[]'][$i] != "" && $appp['input_136[]'][$i] != 0) {
                ?>
                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>Storage Cabinet</strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font
                            style="font-family: sans-serif; font-size:12px;"><?php echo $appp['input_136[]'][$i]; ?></font>
                    </td>
                </tr>
            <?php
            }
            if ($appp['input_137[]'][$i] != "" && $appp['input_137[]'][$i] != 0) {
                ?>
                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>Table - Small</strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font
                            style="font-family: sans-serif; font-size:12px;"><?php echo $appp['input_137[]'][$i]; ?></font>
                    </td>
                </tr>
            <?php
            }
            if ($appp['input_138[]'][$i] != "" && $appp['input_138[]'][$i] != 0) {
                ?>
                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>Table - Medium</strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font
                            style="font-family: sans-serif; font-size:12px;"><?php echo $appp['input_138[]'][$i]; ?></font>
                    </td>
                </tr>
            <?php
            }
            if ($appp['input_139[]'][$i] != "" && $appp['input_139[]'][$i] != 0) {
                ?>
                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>Table - Large</strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font
                            style="font-family: sans-serif; font-size:12px;"><?php echo $appp['input_139[]'][$i]; ?></font>
                    </td>
                </tr>
            <?php
            }
            if ($appp['input_140[]'][$i] != "" && $appp['input_140[]'][$i] != 0) {
                ?>
                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>Wall Art/Painting</strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font
                            style="font-family: sans-serif; font-size:12px;"><?php echo $appp['input_140[]'][$i]; ?></font>
                    </td>
                </tr>
            <?php
            }
            if (count(array_filter($appp['input_141[' . $i . ']'])) != 0) {
                ?>

                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>Dining Room <?php echo $i + 1 ?>
                                Additional Items</strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font style="font-family: sans-serif; font-size:12px;">
                            <table class="gfield_list"
                                   style="border-top: 1px solid #DFDFDF; border-left: 1px solid #DFDFDF; border-spacing: 0; padding: 0; margin: 2px 0 6px; width: 100%">
                                <thead>
                                <tr>
                                    <th style="background-image: none; border-right: 1px solid #DFDFDF; border-bottom: 1px solid #DFDFDF; padding: 6px 10px; font-family: sans-serif; font-size: 12px; font-weight: bold; background-color: #F1F1F1; color:#333; text-align:left">
                                        Item
                                    </th>
                                    <th style="background-image: none; border-right: 1px solid #DFDFDF; border-bottom: 1px solid #DFDFDF; padding: 6px 10px; font-family: sans-serif; font-size: 12px; font-weight: bold; background-color: #F1F1F1; color:#333; text-align:left">
                                        Quantity
                                    </th>
                                </tr>
                                </thead>
                                <tbody style="background-color: #F9F9F9">

                                <?php
                                for ($a = 0; $a < count($appp['input_141[' . $i . ']']); $a++) {
                                    ?>
                                    <tr>
                                        <td style="padding: 6px 10px; border-right: 1px solid #DFDFDF; border-bottom: 1px solid #DFDFDF; border-top: 1px solid #FFF; font-family: sans-serif; font-size:12px;"><?php echo $appp['input_141[' . $i . ']'][$a]; ?></td>
                                        <td style="padding: 6px 10px; border-right: 1px solid #DFDFDF; border-bottom: 1px solid #DFDFDF; border-top: 1px solid #FFF; font-family: sans-serif; font-size:12px;"><?php $a++;
                                            echo $appp['input_141[' . $i . ']'][$a]; ?></td>
                                    </tr>
                                <?php } ?>
                                </tbody>
                                <tbody>
                                </tbody>
                            </table>
                        </font>
                    </td>
                </tr>
            <?php
            }
        }
    }
    if (isset($appp['input_143[]'])) {
        for ($i = 0; $i < count($appp['input_143[]']); $i++) {
            ?>
            <tr>
                <td colspan="2"
                    style="font-size:14px; font-weight:bold; background-color:#EEE; border-bottom:1px solid #DFDFDF; padding:7px 7px">
                    Kitchen <?php echo $i + 1 ?> Items
                </td>
            </tr>
            <?php if ($appp['input_143[]'][$i] != "" && $appp['input_143[]'][$i] != 0) { ?>
                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>Buffet</strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font
                            style="font-family: sans-serif; font-size:12px;"><?php echo $appp['input_143[]'][$i]; ?></font>
                    </td>
                </tr>
            <?php
            }
            if ($appp['input_144[]'][$i] != "" && $appp['input_144[]'][$i] != 0) {
                ?>
                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>Chair</strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font
                            style="font-family: sans-serif; font-size:12px;"><?php echo $appp['input_144[]'][$i]; ?></font>
                    </td>
                </tr>
            <?php
            }
            if ($appp['input_145[]'][$i] != "" && $appp['input_145[]'][$i] != 0) {
                ?>
                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>Dishwasher</strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font
                            style="font-family: sans-serif; font-size:12px;"><?php echo $appp['input_145[]'][$i]; ?></font>
                    </td>
                </tr>
            <?php
            }
            if ($appp['input_146[]'][$i] != "" && $appp['input_146[]'][$i] != 0) {
                ?>
                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>Drawer Set</strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font
                            style="font-family: sans-serif; font-size:12px;"><?php echo $appp['input_146[]'][$i]; ?></font>
                    </td>
                </tr>
            <?php
            }
            if ($appp['input_147[]'][$i] != "" && $appp['input_147[]'][$i] != 0) {
                ?>
                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>Fridge</strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font
                            style="font-family: sans-serif; font-size:12px;"><?php echo $appp['input_147[]'][$i]; ?></font>
                    </td>
                </tr>
            <?php
            }
            if ($appp['input_148[]'][$i] != "" && $appp['input_148[]'][$i] != 0) {
                ?>
                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>Freezer</strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font
                            style="font-family: sans-serif; font-size:12px;"><?php echo $appp['input_148[]'][$i]; ?></font>
                    </td>
                </tr>
            <?php
            }
            if ($appp['input_149[]'][$i] != "" && $appp['input_149[]'][$i] != 0) {
                ?>
                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>Microwave</strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font
                            style="font-family: sans-serif; font-size:12px;"><?php echo $appp['input_149[]'][$i]; ?></font>
                    </td>
                </tr>
            <?php
            }
            if ($appp['input_150[]'][$i] != "" && $appp['input_150[]'][$i] != 0) {
                ?>
                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>Stove/Rangehood</strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font
                            style="font-family: sans-serif; font-size:12px;"><?php echo $appp['input_150[]'][$i]; ?></font>
                    </td>
                </tr>
            <?php
            }
            if ($appp['input_151[]'][$i] != "" && $appp['input_151[]'][$i] != 0) {
                ?>
                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>Storage Cabinet</strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font
                            style="font-family: sans-serif; font-size:12px;"><?php echo $appp['input_151[]'][$i]; ?></font>
                    </td>
                </tr>
            <?php
            }
            if ($appp['input_152[]'][$i] != "" && $appp['input_152[]'][$i] != 0) {
                ?>
                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>Table</strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font
                            style="font-family: sans-serif; font-size:12px;"><?php echo $appp['input_152[]'][$i]; ?></font>
                    </td>
                </tr>
            <?php
            }
            if (count(array_filter($appp['input_153[' . $i . ']'])) != 0) {
                ?>

                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>Kitchen <?php echo $i + 1 ?>
                                Additional Items</strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font style="font-family: sans-serif; font-size:12px;">
                            <table class="gfield_list"
                                   style="border-top: 1px solid #DFDFDF; border-left: 1px solid #DFDFDF; border-spacing: 0; padding: 0; margin: 2px 0 6px; width: 100%">
                                <thead>
                                <tr>
                                    <th style="background-image: none; border-right: 1px solid #DFDFDF; border-bottom: 1px solid #DFDFDF; padding: 6px 10px; font-family: sans-serif; font-size: 12px; font-weight: bold; background-color: #F1F1F1; color:#333; text-align:left">
                                        Item
                                    </th>
                                    <th style="background-image: none; border-right: 1px solid #DFDFDF; border-bottom: 1px solid #DFDFDF; padding: 6px 10px; font-family: sans-serif; font-size: 12px; font-weight: bold; background-color: #F1F1F1; color:#333; text-align:left">
                                        Quantity
                                    </th>
                                </tr>
                                </thead>
                                <tbody style="background-color: #F9F9F9">

                                <?php
                                for ($a = 0; $a < count($appp['input_153[' . $i . ']']); $a++) {
                                    ?>
                                    <tr>
                                        <td style="padding: 6px 10px; border-right: 1px solid #DFDFDF; border-bottom: 1px solid #DFDFDF; border-top: 1px solid #FFF; font-family: sans-serif; font-size:12px;"><?php echo $appp['input_153[' . $i . ']'][$a]; ?></td>
                                        <td style="padding: 6px 10px; border-right: 1px solid #DFDFDF; border-bottom: 1px solid #DFDFDF; border-top: 1px solid #FFF; font-family: sans-serif; font-size:12px;"><?php $a++;
                                            echo $appp['input_153[' . $i . ']'][$a]; ?></td>
                                    </tr>
                                <?php } ?>
                                </tbody>
                                <tbody>
                                </tbody>
                            </table>
                        </font>
                    </td>
                </tr>
            <?php
            }
        }
    }
    if (isset($appp['input_155[]'])) {
        for ($i = 0; $i < count($appp['input_155[]']); $i++) {
            ?>
            <tr>
                <td colspan="2"
                    style="font-size:14px; font-weight:bold; background-color:#EEE; border-bottom:1px solid #DFDFDF; padding:7px 7px">
                    Bathroom <?php echo $i + 1 ?> Items
                </td>
            </tr>
            <?php if ($appp['input_155[]'][$i] != "" && $appp['input_155[]'][$i] != 0) { ?>
                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>Cabient</strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font
                            style="font-family: sans-serif; font-size:12px;"><?php echo $appp['input_155[]'][$i]; ?></font>
                    </td>
                </tr>
            <?php
            }
            if ($appp['input_156[]'][$i] != "" && $appp['input_156[]'][$i] != 0) {
                ?>
                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>Heater</strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font
                            style="font-family: sans-serif; font-size:12px;"><?php echo $appp['input_156[]'][$i]; ?></font>
                    </td>
                </tr>
            <?php
            }
            if ($appp['input_157[]'][$i] != "" && $appp['input_157[]'][$i] != 0) {
                ?>
                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>Mirror</strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font
                            style="font-family: sans-serif; font-size:12px;"><?php echo $appp['input_157[]'][$i]; ?></font>
                    </td>
                </tr>
            <?php
            }
            if ($appp['input_158[]'][$i] != "" && $appp['input_158[]'][$i] != 0) {
                ?>
                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>Wall Art</strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font
                            style="font-family: sans-serif; font-size:12px;"><?php echo $appp['input_158[]'][$i]; ?></font>
                    </td>
                </tr>
            <?php
            }
            if (count(array_filter($appp['input_159[' . $i . ']'])) != 0) {
                ?>

                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>Bathroom <?php echo $i + 1 ?>
                                Additional Items</strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font style="font-family: sans-serif; font-size:12px;">
                            <table class="gfield_list"
                                   style="border-top: 1px solid #DFDFDF; border-left: 1px solid #DFDFDF; border-spacing: 0; padding: 0; margin: 2px 0 6px; width: 100%">
                                <thead>
                                <tr>
                                    <th style="background-image: none; border-right: 1px solid #DFDFDF; border-bottom: 1px solid #DFDFDF; padding: 6px 10px; font-family: sans-serif; font-size: 12px; font-weight: bold; background-color: #F1F1F1; color:#333; text-align:left">
                                        Item
                                    </th>
                                    <th style="background-image: none; border-right: 1px solid #DFDFDF; border-bottom: 1px solid #DFDFDF; padding: 6px 10px; font-family: sans-serif; font-size: 12px; font-weight: bold; background-color: #F1F1F1; color:#333; text-align:left">
                                        Quantity
                                    </th>
                                </tr>
                                </thead>
                                <tbody style="background-color: #F9F9F9">

                                <?php
                                for ($a = 0; $a < count($appp['input_159[' . $i . ']']); $a++) {
                                    ?>
                                    <tr>
                                        <td style="padding: 6px 10px; border-right: 1px solid #DFDFDF; border-bottom: 1px solid #DFDFDF; border-top: 1px solid #FFF; font-family: sans-serif; font-size:12px;"><?php echo $appp['input_159[' . $i . ']'][$a]; ?></td>
                                        <td style="padding: 6px 10px; border-right: 1px solid #DFDFDF; border-bottom: 1px solid #DFDFDF; border-top: 1px solid #FFF; font-family: sans-serif; font-size:12px;"><?php $a++;
                                            echo $appp['input_159[' . $i . ']'][$a]; ?></td>
                                    </tr>
                                <?php } ?>
                                </tbody>
                                <tbody>
                                </tbody>
                            </table>
                        </font>
                    </td>
                </tr>
            <?php
            }
        }
    }
    if (isset($appp['input_161[]'])) {
        for ($i = 0; $i < count($appp['input_161[]']); $i++) {
            ?>
            <tr>
                <td colspan="2"
                    style="font-size:14px; font-weight:bold; background-color:#EEE; border-bottom:1px solid #DFDFDF; padding:7px 7px">
                    Laundry <?php echo $i + 1 ?> Items
                </td>
            </tr>
            <?php if ($appp['input_161[]'][$i] != "" && $appp['input_161[]'][$i] != 0) { ?>
                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>Cabinet</strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font
                            style="font-family: sans-serif; font-size:12px;"><?php echo $appp['input_161[]'][$i]; ?></font>
                    </td>
                </tr>
            <?php
            }
            if ($appp['input_162[]'][$i] != "" && $appp['input_162[]'][$i] != 0) {
                ?>
                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>Clothes Dryer</strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font
                            style="font-family: sans-serif; font-size:12px;"><?php echo $appp['input_162[]'][$i]; ?></font>
                    </td>
                </tr>
            <?php
            }
            if ($appp['input_163[]'][$i] != "" && $appp['input_163[]'][$i] != 0) {
                ?>
                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>Clothing Basket</strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font
                            style="font-family: sans-serif; font-size:12px;"><?php echo $appp['input_163[]'][$i]; ?></font>
                    </td>
                </tr>
            <?php
            }
            if ($appp['input_164[]'][$i] != "" && $appp['input_164[]'][$i] != 0) {
                ?>
                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>Iron</strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font
                            style="font-family: sans-serif; font-size:12px;"><?php echo $appp['input_164[]'][$i]; ?></font>
                    </td>
                </tr>
            <?php
            }
            if ($appp['input_165[]'][$i] != "" && $appp['input_165[]'][$i] != 0) {
                ?>
                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>Ironing Board</strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font
                            style="font-family: sans-serif; font-size:12px;"><?php echo $appp['input_165[]'][$i]; ?></font>
                    </td>
                </tr>
            <?php
            }
            if ($appp['input_166[]'][$i] != "" && $appp['input_166[]'][$i] != 0) {
                ?>
                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>Washing Machine</strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font
                            style="font-family: sans-serif; font-size:12px;"><?php echo $appp['input_166[]'][$i]; ?></font>
                    </td>
                </tr>
            <?php
            }
            if (count(array_filter($appp['input_167[' . $i . ']'])) != 0) {
                ?>

                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>Laundry <?php echo $i + 1 ?>
                                Additional Items</strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font style="font-family: sans-serif; font-size:12px;">
                            <table class="gfield_list"
                                   style="border-top: 1px solid #DFDFDF; border-left: 1px solid #DFDFDF; border-spacing: 0; padding: 0; margin: 2px 0 6px; width: 100%">
                                <thead>
                                <tr>
                                    <th style="background-image: none; border-right: 1px solid #DFDFDF; border-bottom: 1px solid #DFDFDF; padding: 6px 10px; font-family: sans-serif; font-size: 12px; font-weight: bold; background-color: #F1F1F1; color:#333; text-align:left">
                                        Item
                                    </th>
                                    <th style="background-image: none; border-right: 1px solid #DFDFDF; border-bottom: 1px solid #DFDFDF; padding: 6px 10px; font-family: sans-serif; font-size: 12px; font-weight: bold; background-color: #F1F1F1; color:#333; text-align:left">
                                        Quantity
                                    </th>
                                </tr>
                                </thead>
                                <tbody style="background-color: #F9F9F9">

                                <?php
                                for ($a = 0; $a < count($appp['input_167[' . $i . ']']); $a++) {
                                    ?>
                                    <tr>
                                        <td style="padding: 6px 10px; border-right: 1px solid #DFDFDF; border-bottom: 1px solid #DFDFDF; border-top: 1px solid #FFF; font-family: sans-serif; font-size:12px;"><?php echo $appp['input_167[' . $i . ']'][$a]; ?></td>
                                        <td style="padding: 6px 10px; border-right: 1px solid #DFDFDF; border-bottom: 1px solid #DFDFDF; border-top: 1px solid #FFF; font-family: sans-serif; font-size:12px;"><?php $a++;
                                            echo $appp['input_167[' . $i . ']'][$a]; ?></td>
                                    </tr>
                                <?php } ?>
                                </tbody>
                                <tbody>
                                </tbody>
                            </table>
                        </font>
                    </td>
                </tr>
            <?php
            }
        }
    }

    if (isset($appp['input_169[]'])) {
        for ($i = 0; $i < count($appp['input_169[]']); $i++) {
            ?>
            <tr>
                <td colspan="2"
                    style="font-size:14px; font-weight:bold; background-color:#EEE; border-bottom:1px solid #DFDFDF; padding:7px 7px">
                    Office <?php echo $i + 1 ?> Items
                </td>
            </tr>
            <?php if ($appp['input_169[]'][$i] != "" && $appp['input_169[]'][$i] != 0) { ?>
                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>Arm Chair</strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font
                            style="font-family: sans-serif; font-size:12px;"><?php echo $appp['input_169[]'][$i]; ?></font>
                    </td>
                </tr>
            <?php
            }
            if ($appp['input_170[]'][$i] != "" && $appp['input_170[]'][$i] != 0) {
                ?>
                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>Bulletin Board</strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font
                            style="font-family: sans-serif; font-size:12px;"><?php echo $appp['input_170[]'][$i]; ?></font>
                    </td>
                </tr>
            <?php
            }
            if ($appp['input_171[]'][$i] != "" && $appp['input_171[]'][$i] != 0) {
                ?>
                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>Bookcase</strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font
                            style="font-family: sans-serif; font-size:12px;"><?php echo $appp['input_171[]'][$i]; ?></font>
                    </td>
                </tr>
            <?php
            }
            if ($appp['input_172[]'][$i] != "" && $appp['input_172[]'][$i] != 0) {
                ?>
                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>Computer</strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font
                            style="font-family: sans-serif; font-size:12px;"><?php echo $appp['input_172[]'][$i]; ?></font>
                    </td>
                </tr>
            <?php
            }
            if ($appp['input_173[]'][$i] != "" && $appp['input_173[]'][$i] != 0) {
                ?>
                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>Desk</strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font
                            style="font-family: sans-serif; font-size:12px;"><?php echo $appp['input_173[]'][$i]; ?></font>
                    </td>
                </tr>
            <?php
            }
            if ($appp['input_174[]'][$i] != "" && $appp['input_174[]'][$i] != 0) {
                ?>
                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>Drawer Set</strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font
                            style="font-family: sans-serif; font-size:12px;"><?php echo $appp['input_174[]'][$i]; ?></font>
                    </td>
                </tr>
            <?php
            }
            if ($appp['input_175[]'][$i] != "" && $appp['input_175[]'][$i] != 0) {
                ?>
                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>Filing Cabinet</strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font
                            style="font-family: sans-serif; font-size:12px;"><?php echo $appp['input_175[]'][$i]; ?></font>
                    </td>
                </tr>
            <?php
            }
            if ($appp['input_176[]'][$i] != "" && $appp['input_176[]'][$i] != 0) {
                ?>
                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>Heater</strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font
                            style="font-family: sans-serif; font-size:12px;"><?php echo $appp['input_176[]'][$i]; ?></font>
                    </td>
                </tr>
            <?php
            }
            if ($appp['input_177[]'][$i] != "" && $appp['input_177[]'][$i] != 0) {
                ?>
                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>Office Chair</strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font
                            style="font-family: sans-serif; font-size:12px;"><?php echo $appp['input_177[]'][$i]; ?></font>
                    </td>
                </tr>
            <?php
            }
            if ($appp['input_178[]'][$i] != "" && $appp['input_178[]'][$i] != 0) {
                ?>
                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font
                            style="font-family: sans-serif; font-size:12px;"><strong>Printer/Photocopier</strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font
                            style="font-family: sans-serif; font-size:12px;"><?php echo $appp['input_178[]'][$i]; ?></font>
                    </td>
                </tr>
            <?php
            }
            if ($appp['input_179[]'][$i] != "" && $appp['input_179[]'][$i] != 0) {
                ?>
                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>Safe/Vault</strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font
                            style="font-family: sans-serif; font-size:12px;"><?php echo $appp['input_179[]'][$i]; ?></font>
                    </td>
                </tr>
            <?php
            }
            if ($appp['input_180[]'][$i] != "" && $appp['input_180[]'][$i] != 0) {
                ?>
                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>Sofa</strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font
                            style="font-family: sans-serif; font-size:12px;"><?php echo $appp['input_180[]'][$i]; ?></font>
                    </td>
                </tr>
            <?php
            }
            if ($appp['input_181[]'][$i] != "" && $appp['input_181[]'][$i] != 0) {
                ?>
                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>TV</strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font
                            style="font-family: sans-serif; font-size:12px;"><?php echo $appp['input_181[]'][$i]; ?></font>
                    </td>
                </tr>
            <?php
            }
            if ($appp['input_182[]'][$i] != "" && $appp['input_182[]'][$i] != 0) {
                ?>
                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>Wall Art</strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font
                            style="font-family: sans-serif; font-size:12px;"><?php echo $appp['input_182[]'][$i]; ?></font>
                    </td>
                </tr>
            <?php
            }
            if ($appp['input_183[]'][$i] != "" && $appp['input_183[]'][$i] != 0) {
                ?>
                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>Whiteboard</strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font
                            style="font-family: sans-serif; font-size:12px;"><?php echo $appp['input_183[]'][$i]; ?></font>
                    </td>
                </tr>
            <?php
            }
            if (count(array_filter($appp['input_184[' . $i . ']'])) != 0) {
                ?>

                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>Office <?php echo $i + 1 ?>
                                Additional Items</strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font style="font-family: sans-serif; font-size:12px;">
                            <table class="gfield_list"
                                   style="border-top: 1px solid #DFDFDF; border-left: 1px solid #DFDFDF; border-spacing: 0; padding: 0; margin: 2px 0 6px; width: 100%">
                                <thead>
                                <tr>
                                    <th style="background-image: none; border-right: 1px solid #DFDFDF; border-bottom: 1px solid #DFDFDF; padding: 6px 10px; font-family: sans-serif; font-size: 12px; font-weight: bold; background-color: #F1F1F1; color:#333; text-align:left">
                                        Item
                                    </th>
                                    <th style="background-image: none; border-right: 1px solid #DFDFDF; border-bottom: 1px solid #DFDFDF; padding: 6px 10px; font-family: sans-serif; font-size: 12px; font-weight: bold; background-color: #F1F1F1; color:#333; text-align:left">
                                        Quantity
                                    </th>
                                </tr>
                                </thead>
                                <tbody style="background-color: #F9F9F9">

                                <?php
                                for ($a = 0; $a < count($appp['input_184[' . $i . ']']); $a++) {
                                    ?>
                                    <tr>
                                        <td style="padding: 6px 10px; border-right: 1px solid #DFDFDF; border-bottom: 1px solid #DFDFDF; border-top: 1px solid #FFF; font-family: sans-serif; font-size:12px;"><?php echo $appp['input_184[' . $i . ']'][$a]; ?></td>
                                        <td style="padding: 6px 10px; border-right: 1px solid #DFDFDF; border-bottom: 1px solid #DFDFDF; border-top: 1px solid #FFF; font-family: sans-serif; font-size:12px;"><?php $a++;
                                            echo $appp['input_184[' . $i . ']'][$a]; ?></td>
                                    </tr>
                                <?php } ?>
                                </tbody>
                                <tbody>
                                </tbody>
                            </table>
                        </font>
                    </td>
                </tr>
            <?php
            }
        }
    }
    if (isset($appp['input_186[]'])) {
        for ($i = 0; $i < count($appp['input_186[]']); $i++) {
            ?>
            <tr>
                <td colspan="2"
                    style="font-size:14px; font-weight:bold; background-color:#EEE; border-bottom:1px solid #DFDFDF; padding:7px 7px">
                    Gym <?php echo $i + 1 ?> Items
                </td>
            </tr>
            <?php if ($appp['input_186[]'][$i] != "" && $appp['input_186[]'][$i] != 0) { ?>
                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>Chair</strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font
                            style="font-family: sans-serif; font-size:12px;"><?php echo $appp['input_186[]'][$i]; ?></font>
                    </td>
                </tr>
            <?php
            }
            if ($appp['input_187[]'][$i] != "" && $appp['input_187[]'][$i] != 0) {
                ?>
                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>Crosstrainer</strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font
                            style="font-family: sans-serif; font-size:12px;"><?php echo $appp['input_187[]'][$i]; ?></font>
                    </td>
                </tr>
            <?php
            }
            if ($appp['input_188[]'][$i] != "" && $appp['input_188[]'][$i] != 0) {
                ?>
                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>Fitness Cycle</strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font
                            style="font-family: sans-serif; font-size:12px;"><?php echo $appp['input_188[]'][$i]; ?></font>
                    </td>
                </tr>
            <?php
            }
            if ($appp['input_189[]'][$i] != "" && $appp['input_189[]'][$i] != 0) {
                ?>
                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>Mirror</strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font
                            style="font-family: sans-serif; font-size:12px;"><?php echo $appp['input_189[]'][$i]; ?></font>
                    </td>
                </tr>
            <?php
            }
            if ($appp['input_190[]'][$i] != "" && $appp['input_190[]'][$i] != 0) {
                ?>
                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>Treadmill</strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font
                            style="font-family: sans-serif; font-size:12px;"><?php echo $appp['input_190[]'][$i]; ?></font>
                    </td>
                </tr>
            <?php
            }
            if ($appp['input_191[]'][$i] != "" && $appp['input_191[]'][$i] != 0) {
                ?>
                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>TV</strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font
                            style="font-family: sans-serif; font-size:12px;"><?php echo $appp['input_191[]'][$i]; ?></font>
                    </td>
                </tr>
            <?php
            }
            if ($appp['input_192[]'][$i] != "" && $appp['input_192[]'][$i] != 0) {
                ?>
                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>Weight Sets</strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font
                            style="font-family: sans-serif; font-size:12px;"><?php echo $appp['input_192[]'][$i]; ?></font>
                    </td>
                </tr>
            <?php
            }
            if ($appp['input_193[]'][$i] != "" && $appp['input_193[]'][$i] != 0) {
                ?>
                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>Workout Machine</strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font
                            style="font-family: sans-serif; font-size:12px;"><?php echo $appp['input_193[]'][$i]; ?></font>
                    </td>
                </tr>
            <?php
            }
            if (count(array_filter($appp['input_194[' . $i . ']'])) != 0) {
                ?>

                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>Gym <?php echo $i + 1 ?>
                                Additional Items</strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font style="font-family: sans-serif; font-size:12px;">
                            <table class="gfield_list"
                                   style="border-top: 1px solid #DFDFDF; border-left: 1px solid #DFDFDF; border-spacing: 0; padding: 0; margin: 2px 0 6px; width: 100%">
                                <thead>
                                <tr>
                                    <th style="background-image: none; border-right: 1px solid #DFDFDF; border-bottom: 1px solid #DFDFDF; padding: 6px 10px; font-family: sans-serif; font-size: 12px; font-weight: bold; background-color: #F1F1F1; color:#333; text-align:left">
                                        Item
                                    </th>
                                    <th style="background-image: none; border-right: 1px solid #DFDFDF; border-bottom: 1px solid #DFDFDF; padding: 6px 10px; font-family: sans-serif; font-size: 12px; font-weight: bold; background-color: #F1F1F1; color:#333; text-align:left">
                                        Quantity
                                    </th>
                                </tr>
                                </thead>
                                <tbody style="background-color: #F9F9F9">

                                <?php
                                for ($a = 0; $a < count($appp['input_194[' . $i . ']']); $a++) {
                                    ?>
                                    <tr>
                                        <td style="padding: 6px 10px; border-right: 1px solid #DFDFDF; border-bottom: 1px solid #DFDFDF; border-top: 1px solid #FFF; font-family: sans-serif; font-size:12px;"><?php echo $appp['input_194[' . $i . ']'][$a]; ?></td>
                                        <td style="padding: 6px 10px; border-right: 1px solid #DFDFDF; border-bottom: 1px solid #DFDFDF; border-top: 1px solid #FFF; font-family: sans-serif; font-size:12px;"><?php $a++;
                                            echo $appp['input_194[' . $i . ']'][$a]; ?></td>
                                    </tr>
                                <?php } ?>
                                </tbody>
                                <tbody>
                                </tbody>
                            </table>
                        </font>
                    </td>
                </tr>
            <?php
            }
        }
    }
    if (isset($appp['input_196[]'])) {
        for ($i = 0; $i < count($appp['input_196[]']); $i++) {
            ?>
            <tr>
                <td colspan="2"
                    style="font-size:14px; font-weight:bold; background-color:#EEE; border-bottom:1px solid #DFDFDF; padding:7px 7px">
                    Garage <?php echo $i + 1 ?> Items
                </td>
            </tr>
            <?php if ($appp['input_196[]'][$i] != "" && $appp['input_196[]'][$i] != 0) { ?>
                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>BBQ Set</strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font
                            style="font-family: sans-serif; font-size:12px;"><?php echo $appp['input_196[]'][$i]; ?></font>
                    </td>
                </tr>
            <?php
            }
            if ($appp['input_197[]'][$i] != "" && $appp['input_197[]'][$i] != 0) {
                ?>
                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>Bicycle</strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font
                            style="font-family: sans-serif; font-size:12px;"><?php echo $appp['input_197[]'][$i]; ?></font>
                    </td>
                </tr>
            <?php
            }
            if ($appp['input_198[]'][$i] != "" && $appp['input_198[]'][$i] != 0) {
                ?>
                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>Fitness Bike</strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font
                            style="font-family: sans-serif; font-size:12px;"><?php echo $appp['input_198[]'][$i]; ?></font>
                    </td>
                </tr>
            <?php
            }
            if ($appp['input_199[]'][$i] != "" && $appp['input_199[]'][$i] != 0) {
                ?>
                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>Ladder</strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font
                            style="font-family: sans-serif; font-size:12px;"><?php echo $appp['input_199[]'][$i]; ?></font>
                    </td>
                </tr>
            <?php
            }
            if ($appp['input_200[]'][$i] != "" && $appp['input_200[]'][$i] != 0) {
                ?>
                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>Mower</strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font
                            style="font-family: sans-serif; font-size:12px;"><?php echo $appp['input_200[]'][$i]; ?></font>
                    </td>
                </tr>
            <?php
            }
            if ($appp['input_201[]'][$i] != "" && $appp['input_201[]'][$i] != 0) {
                ?>
                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>Table</strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font
                            style="font-family: sans-serif; font-size:12px;"><?php echo $appp['input_201[]'][$i]; ?></font>
                    </td>
                </tr>
            <?php
            }
            if ($appp['input_202[]'][$i] != "" && $appp['input_202[]'][$i] != 0) {
                ?>
                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>Treadmill</strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font
                            style="font-family: sans-serif; font-size:12px;"><?php echo $appp['input_202[]'][$i]; ?></font>
                    </td>
                </tr>
            <?php
            }
            if ($appp['input_203[]'][$i] != "" && $appp['input_203[]'][$i] != 0) {
                ?>
                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>Wheelbarrow</strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font
                            style="font-family: sans-serif; font-size:12px;"><?php echo $appp['input_203[]'][$i]; ?></font>
                    </td>
                </tr>
            <?php
            }
            if (count(array_filter($appp['input_204[' . $i . ']'])) != 0) {
                ?>

                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>Garage <?php echo $i + 1 ?>
                                Additional Items</strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font style="font-family: sans-serif; font-size:12px;">
                            <table class="gfield_list"
                                   style="border-top: 1px solid #DFDFDF; border-left: 1px solid #DFDFDF; border-spacing: 0; padding: 0; margin: 2px 0 6px; width: 100%">
                                <thead>
                                <tr>
                                    <th style="background-image: none; border-right: 1px solid #DFDFDF; border-bottom: 1px solid #DFDFDF; padding: 6px 10px; font-family: sans-serif; font-size: 12px; font-weight: bold; background-color: #F1F1F1; color:#333; text-align:left">
                                        Item
                                    </th>
                                    <th style="background-image: none; border-right: 1px solid #DFDFDF; border-bottom: 1px solid #DFDFDF; padding: 6px 10px; font-family: sans-serif; font-size: 12px; font-weight: bold; background-color: #F1F1F1; color:#333; text-align:left">
                                        Quantity
                                    </th>
                                </tr>
                                </thead>
                                <tbody style="background-color: #F9F9F9">

                                <?php
                                for ($a = 0; $a < count($appp['input_204[' . $i . ']']); $a++) {
                                    ?>
                                    <tr>
                                        <td style="padding: 6px 10px; border-right: 1px solid #DFDFDF; border-bottom: 1px solid #DFDFDF; border-top: 1px solid #FFF; font-family: sans-serif; font-size:12px;"><?php echo $appp['input_204[' . $i . ']'][$a]; ?></td>
                                        <td style="padding: 6px 10px; border-right: 1px solid #DFDFDF; border-bottom: 1px solid #DFDFDF; border-top: 1px solid #FFF; font-family: sans-serif; font-size:12px;"><?php $a++;
                                            echo $appp['input_204[' . $i . ']'][$a]; ?></td>
                                    </tr>
                                <?php } ?>
                                </tbody>
                                <tbody>
                                </tbody>
                            </table>
                        </font>
                    </td>
                </tr>
            <?php
            }
        }
    }
    if (isset($appp['input_206[]'])) {
        for ($i = 0; $i < count($appp['input_206[]']); $i++) {
            ?>
            <tr>
                <td colspan="2"
                    style="font-size:14px; font-weight:bold; background-color:#EEE; border-bottom:1px solid #DFDFDF; padding:7px 7px">
                    Shed <?php echo $i + 1 ?> Items
                </td>
            </tr>
            <?php if ($appp['input_206[]'][$i] != "" && $appp['input_206[]'][$i] != 0) { ?>
                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>Bike</strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font
                            style="font-family: sans-serif; font-size:12px;"><?php echo $appp['input_206[]'][$i]; ?></font>
                    </td>
                </tr>
            <?php
            }
            if ($appp['input_207[]'][$i] != "" && $appp['input_207[]'][$i] != 0) {
                ?>
                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>Camping Gear</strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font
                            style="font-family: sans-serif; font-size:12px;"><?php echo $appp['input_207[]'][$i]; ?></font>
                    </td>
                </tr>
            <?php
            }
            if ($appp['input_208[]'][$i] != "" && $appp['input_208[]'][$i] != 0) {
                ?>
                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>Ladder</strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font
                            style="font-family: sans-serif; font-size:12px;"><?php echo $appp['input_208[]'][$i]; ?></font>
                    </td>
                </tr>
            <?php
            }
            if ($appp['input_209[]'][$i] != "" && $appp['input_209[]'][$i] != 0) {
                ?>
                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>Mower</strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font
                            style="font-family: sans-serif; font-size:12px;"><?php echo $appp['input_209[]'][$i]; ?></font>
                    </td>
                </tr>
            <?php
            }
            if ($appp['input_210[]'][$i] != "" && $appp['input_210[]'][$i] != 0) {
                ?>
                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>Shelf</strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font
                            style="font-family: sans-serif; font-size:12px;"><?php echo $appp['input_210[]'][$i]; ?></font>
                    </td>
                </tr>
            <?php
            }
            if ($appp['input_211[]'][$i] != "" && $appp['input_211[]'][$i] != 0) {
                ?>
                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>Tool Set</strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font
                            style="font-family: sans-serif; font-size:12px;"><?php echo $appp['input_211[]'][$i]; ?></font>
                    </td>
                </tr>
            <?php
            }
            if ($appp['input_212[]'][$i] != "" && $appp['input_212[]'][$i] != 0) {
                ?>
                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>Wheelbarrow</strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font
                            style="font-family: sans-serif; font-size:12px;"><?php echo $appp['input_212[]'][$i]; ?></font>
                    </td>
                </tr>
            <?php
            }
            if ($appp['input_213[]'][$i] != "" && $appp['input_213[]'][$i] != 0) {
                ?>
                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>Working Bench</strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font
                            style="font-family: sans-serif; font-size:12px;"><?php echo $appp['input_213[]'][$i]; ?></font>
                    </td>
                </tr>
            <?php
            }
            if (count(array_filter($appp['input_214[' . $i . ']'])) != 0) {
                ?>

                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>Shed <?php echo $i + 1 ?>
                                Additional Items</strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font style="font-family: sans-serif; font-size:12px;">
                            <table class="gfield_list"
                                   style="border-top: 1px solid #DFDFDF; border-left: 1px solid #DFDFDF; border-spacing: 0; padding: 0; margin: 2px 0 6px; width: 100%">
                                <thead>
                                <tr>
                                    <th style="background-image: none; border-right: 1px solid #DFDFDF; border-bottom: 1px solid #DFDFDF; padding: 6px 10px; font-family: sans-serif; font-size: 12px; font-weight: bold; background-color: #F1F1F1; color:#333; text-align:left">
                                        Item
                                    </th>
                                    <th style="background-image: none; border-right: 1px solid #DFDFDF; border-bottom: 1px solid #DFDFDF; padding: 6px 10px; font-family: sans-serif; font-size: 12px; font-weight: bold; background-color: #F1F1F1; color:#333; text-align:left">
                                        Quantity
                                    </th>
                                </tr>
                                </thead>
                                <tbody style="background-color: #F9F9F9">

                                <?php
                                for ($a = 0; $a < count($appp['input_214[' . $i . ']']); $a++) {
                                    ?>
                                    <tr>
                                        <td style="padding: 6px 10px; border-right: 1px solid #DFDFDF; border-bottom: 1px solid #DFDFDF; border-top: 1px solid #FFF; font-family: sans-serif; font-size:12px;"><?php echo $appp['input_214[' . $i . ']'][$a]; ?></td>
                                        <td style="padding: 6px 10px; border-right: 1px solid #DFDFDF; border-bottom: 1px solid #DFDFDF; border-top: 1px solid #FFF; font-family: sans-serif; font-size:12px;"><?php $a++;
                                            echo $appp['input_214[' . $i . ']'][$a]; ?></td>
                                    </tr>
                                <?php } ?>
                                </tbody>
                                <tbody>
                                </tbody>
                            </table>
                        </font>
                    </td>
                </tr>
            <?php
            }
        }
    }

    if (isset($appp['input_216[]'])) {
        for ($i = 0; $i < count($appp['input_216[]']); $i++) {
            ?>
            <tr>
                <td colspan="2"
                    style="font-size:14px; font-weight:bold; background-color:#EEE; border-bottom:1px solid #DFDFDF; padding:7px 7px">
                    Backyard <?php echo $i + 1 ?> Items
                </td>
            </tr>
            <?php if ($appp['input_216[]'][$i] != "" && $appp['input_216[]'][$i] != 0) { ?>
                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>BBQ Set</strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font
                            style="font-family: sans-serif; font-size:12px;"><?php echo $appp['input_216[]'][$i]; ?></font>
                    </td>
                </tr>
            <?php
            }
            if ($appp['input_217[]'][$i] != "" && $appp['input_217[]'][$i] != 0) {
                ?>
                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>Bench Seat</strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font
                            style="font-family: sans-serif; font-size:12px;"><?php echo $appp['input_217[]'][$i]; ?></font>
                    </td>
                </tr>
            <?php
            }
            if ($appp['input_218[]'][$i] != "" && $appp['input_218[]'][$i] != 0) {
                ?>
                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>Bird Bath</strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font
                            style="font-family: sans-serif; font-size:12px;"><?php echo $appp['input_218[]'][$i]; ?></font>
                    </td>
                </tr>
            <?php
            }
            if ($appp['input_219[]'][$i] != "" && $appp['input_219[]'][$i] != 0) {
                ?>
                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>Chair</strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font
                            style="font-family: sans-serif; font-size:12px;"><?php echo $appp['input_219[]'][$i]; ?></font>
                    </td>
                </tr>
            <?php
            }
            if ($appp['input_220[]'][$i] != "" && $appp['input_220[]'][$i] != 0) {
                ?>
                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>Cubby House</strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font
                            style="font-family: sans-serif; font-size:12px;"><?php echo $appp['input_220[]'][$i]; ?></font>
                    </td>
                </tr>
            <?php
            }
            if ($appp['input_221[]'][$i] != "" && $appp['input_221[]'][$i] != 0) {
                ?>
                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>Dog Kennel</strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font
                            style="font-family: sans-serif; font-size:12px;"><?php echo $appp['input_221[]'][$i]; ?></font>
                    </td>
                </tr>
            <?php
            }
            if ($appp['input_222[]'][$i] != "" && $appp['input_222[]'][$i] != 0) {
                ?>
                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>Hose Reel</strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font
                            style="font-family: sans-serif; font-size:12px;"><?php echo $appp['input_222[]'][$i]; ?></font>
                    </td>
                </tr>
            <?php
            }
            if ($appp['input_223[]'][$i] != "" && $appp['input_223[]'][$i] != 0) {
                ?>
                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>Plants</strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font
                            style="font-family: sans-serif; font-size:12px;"><?php echo $appp['input_223[]'][$i]; ?></font>
                    </td>
                </tr>
            <?php
            }
            if ($appp['input_224[]'][$i] != "" && $appp['input_224[]'][$i] != 0) {
                ?>
                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>Outdoor Spa</strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font
                            style="font-family: sans-serif; font-size:12px;"><?php echo $appp['input_224[]'][$i]; ?></font>
                    </td>
                </tr>
            <?php
            }
            if ($appp['input_225[]'][$i] != "" && $appp['input_225[]'][$i] != 0) {
                ?>
                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>Outdoor Table</strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font
                            style="font-family: sans-serif; font-size:12px;"><?php echo $appp['input_225[]'][$i]; ?></font>
                    </td>
                </tr>
            <?php
            }
            if ($appp['input_226[]'][$i] != "" && $appp['input_226[]'][$i] != 0) {
                ?>
                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>Outdoor Umbrella</strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font
                            style="font-family: sans-serif; font-size:12px;"><?php echo $appp['input_226[]'][$i]; ?></font>
                    </td>
                </tr>
            <?php
            }
            if ($appp['input_227[]'][$i] != "" && $appp['input_227[]'][$i] != 0) {
                ?>
                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>Sun Lounge</strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font
                            style="font-family: sans-serif; font-size:12px;"><?php echo $appp['input_227[]'][$i]; ?></font>
                    </td>
                </tr>
            <?php
            }
            if ($appp['input_228[]'][$i] != "" && $appp['input_228[]'][$i] != 0) {
                ?>
                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>Swing Set</strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font
                            style="font-family: sans-serif; font-size:12px;"><?php echo $appp['input_228[]'][$i]; ?></font>
                    </td>
                </tr>
            <?php
            }
            if ($appp['input_229[]'][$i] != "" && $appp['input_229[]'][$i] != 0) {
                ?>
                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>Trampoline</strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font
                            style="font-family: sans-serif; font-size:12px;"><?php echo $appp['input_229[]'][$i]; ?></font>
                    </td>
                </tr>
            <?php
            }
            if (count(array_filter($appp['input_230[' . $i . ']'])) != 0) {
                ?>

                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>Backyard <?php echo $i + 1 ?>
                                Additional Items</strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font style="font-family: sans-serif; font-size:12px;">
                            <table class="gfield_list"
                                   style="border-top: 1px solid #DFDFDF; border-left: 1px solid #DFDFDF; border-spacing: 0; padding: 0; margin: 2px 0 6px; width: 100%">
                                <thead>
                                <tr>
                                    <th style="background-image: none; border-right: 1px solid #DFDFDF; border-bottom: 1px solid #DFDFDF; padding: 6px 10px; font-family: sans-serif; font-size: 12px; font-weight: bold; background-color: #F1F1F1; color:#333; text-align:left">
                                        Item
                                    </th>
                                    <th style="background-image: none; border-right: 1px solid #DFDFDF; border-bottom: 1px solid #DFDFDF; padding: 6px 10px; font-family: sans-serif; font-size: 12px; font-weight: bold; background-color: #F1F1F1; color:#333; text-align:left">
                                        Quantity
                                    </th>
                                </tr>
                                </thead>
                                <tbody style="background-color: #F9F9F9">

                                <?php
                                for ($a = 0; $a < count($appp['input_230[' . $i . ']']); $a++) {
                                    ?>
                                    <tr>
                                        <td style="padding: 6px 10px; border-right: 1px solid #DFDFDF; border-bottom: 1px solid #DFDFDF; border-top: 1px solid #FFF; font-family: sans-serif; font-size:12px;"><?php echo $appp['input_230[' . $i . ']'][$a]; ?></td>
                                        <td style="padding: 6px 10px; border-right: 1px solid #DFDFDF; border-bottom: 1px solid #DFDFDF; border-top: 1px solid #FFF; font-family: sans-serif; font-size:12px;"><?php $a++;
                                            echo $appp['input_230[' . $i . ']'][$a]; ?></td>
                                    </tr>
                                <?php } ?>
                                </tbody>
                                <tbody>
                                </tbody>
                            </table>
                        </font>
                    </td>
                </tr>
            <?php
            }
        }
    }
    if (isset($appp['input_232[]'])) {
        for ($i = 0; $i < count($appp['input_232[]']); $i++) {
            ?>
            <tr>
                <td colspan="2"
                    style="font-size:14px; font-weight:bold; background-color:#EEE; border-bottom:1px solid #DFDFDF; padding:7px 7px">
                    Store Room <?php echo $i + 1 ?> Items
                </td>
            </tr>
            <?php if ($appp['input_232[]'][$i] != "" && $appp['input_232[]'][$i] != 0) { ?>
                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>BBQ Set</strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font
                            style="font-family: sans-serif; font-size:12px;"><?php echo $appp['input_232[]'][$i]; ?></font>
                    </td>
                </tr>
            <?php
            }
            if ($appp['input_233[]'][$i] != "" && $appp['input_233[]'][$i] != 0) {
                ?>
                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>Bike</strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font
                            style="font-family: sans-serif; font-size:12px;"><?php echo $appp['input_233[]'][$i]; ?></font>
                    </td>
                </tr>
            <?php
            }
            if ($appp['input_234[]'][$i] != "" && $appp['input_234[]'][$i] != 0) {
                ?>
                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>Cabinet</strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font
                            style="font-family: sans-serif; font-size:12px;"><?php echo $appp['input_234[]'][$i]; ?></font>
                    </td>
                </tr>
            <?php
            }
            if ($appp['input_235[]'][$i] != "" && $appp['input_235[]'][$i] != 0) {
                ?>
                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>Chair</strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font
                            style="font-family: sans-serif; font-size:12px;"><?php echo $appp['input_235[]'][$i]; ?></font>
                    </td>
                </tr>
            <?php
            }
            if ($appp['input_236[]'][$i] != "" && $appp['input_236[]'][$i] != 0) {
                ?>
                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>Cooling Bin</strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font
                            style="font-family: sans-serif; font-size:12px;"><?php echo $appp['input_236[]'][$i]; ?></font>
                    </td>
                </tr>
            <?php
            }
            if ($appp['input_237[]'][$i] != "" && $appp['input_237[]'][$i] != 0) {
                ?>
                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>Fridge</strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font
                            style="font-family: sans-serif; font-size:12px;"><?php echo $appp['input_237[]'][$i]; ?></font>
                    </td>
                </tr>
            <?php
            }
            if ($appp['input_238[]'][$i] != "" && $appp['input_238[]'][$i] != 0) {
                ?>
                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>Table</strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font
                            style="font-family: sans-serif; font-size:12px;"><?php echo $appp['input_238[]'][$i]; ?></font>
                    </td>
                </tr>
            <?php
            }
            if ($appp['input_239[]'][$i] != "" && $appp['input_239[]'][$i] != 0) {
                ?>
                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>Wheelie Bin</strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font
                            style="font-family: sans-serif; font-size:12px;"><?php echo $appp['input_239[]'][$i]; ?></font>
                    </td>
                </tr>
            <?php
            }
            if (count(array_filter($appp['input_240[' . $i . ']'])) != 0) {
                ?>

                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>Store Room <?php echo $i + 1 ?>
                                Additional Items</strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font style="font-family: sans-serif; font-size:12px;">
                            <table class="gfield_list"
                                   style="border-top: 1px solid #DFDFDF; border-left: 1px solid #DFDFDF; border-spacing: 0; padding: 0; margin: 2px 0 6px; width: 100%">
                                <thead>
                                <tr>
                                    <th style="background-image: none; border-right: 1px solid #DFDFDF; border-bottom: 1px solid #DFDFDF; padding: 6px 10px; font-family: sans-serif; font-size: 12px; font-weight: bold; background-color: #F1F1F1; color:#333; text-align:left">
                                        Item
                                    </th>
                                    <th style="background-image: none; border-right: 1px solid #DFDFDF; border-bottom: 1px solid #DFDFDF; padding: 6px 10px; font-family: sans-serif; font-size: 12px; font-weight: bold; background-color: #F1F1F1; color:#333; text-align:left">
                                        Quantity
                                    </th>
                                </tr>
                                </thead>
                                <tbody style="background-color: #F9F9F9">

                                <?php
                                for ($a = 0; $a < count($appp['input_240[' . $i . ']']); $a++) {
                                    ?>
                                    <tr>
                                        <td style="padding: 6px 10px; border-right: 1px solid #DFDFDF; border-bottom: 1px solid #DFDFDF; border-top: 1px solid #FFF; font-family: sans-serif; font-size:12px;"><?php echo $appp['input_240[' . $i . ']'][$a]; ?></td>
                                        <td style="padding: 6px 10px; border-right: 1px solid #DFDFDF; border-bottom: 1px solid #DFDFDF; border-top: 1px solid #FFF; font-family: sans-serif; font-size:12px;"><?php $a++;
                                            echo $appp['input_240[' . $i . ']'][$a]; ?></td>
                                    </tr>
                                <?php } ?>
                                </tbody>
                                <tbody>
                                </tbody>
                            </table>
                        </font>
                    </td>
                </tr>
            <?php
            }
        }
    }
    if (isset($appp['input_243[]'])) {
        for ($i = 0; $i < count($appp['input_243[]']); $i++) {
            ?>
            <tr>
                <td colspan="2"
                    style="font-size:14px; font-weight:bold; background-color:#EEE; border-bottom:1px solid #DFDFDF; padding:7px 7px">
                    Cellar <?php echo $i + 1; ?> Items
                </td>
            </tr>
            <?php
            if ($appp['input_243[]'][$i] != "" && $appp['input_243[]'][$i] != 0) {
                ?>
                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>Bar Fridge</strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font
                            style="font-family: sans-serif; font-size:12px;"><?php echo $appp['input_243[]'][$i]; ?></font>
                    </td>
                </tr>
            <?php
            }
            if ($appp['input_244[]'][$i] != "" && $appp['input_244[]'][$i] != 0) {
                ?>
                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>Cabinet</strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font
                            style="font-family: sans-serif; font-size:12px;"><?php echo $appp['input_244[]'][$i]; ?></font>
                    </td>
                </tr>
            <?php
            }
            if ($appp['input_245[]'][$i] != "" && $appp['input_245[]'][$i] != 0) {
                ?>
                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>Wine Rack</strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font
                            style="font-family: sans-serif; font-size:12px;"><?php echo $appp['input_245[]'][$i]; ?></font>
                    </td>
                </tr>
            <?php
            }
            if (count(array_filter($appp['input_246[' . $i . ']'])) != 0) {
                ?>
                <tr bgcolor="#EAF2FA">
                    <td colspan="2">
                        <font style="font-family: sans-serif; font-size:12px;"><strong>Cellar <?php echo $i + 1 ?>
                                Additional Items</strong></font>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td width="20">&nbsp;</td>
                    <td>
                        <font style="font-family: sans-serif; font-size:12px;">
                            <table class="gfield_list"
                                   style="border-top: 1px solid #DFDFDF; border-left: 1px solid #DFDFDF; border-spacing: 0; padding: 0; margin: 2px 0 6px; width: 100%">
                                <thead>
                                <tr>
                                    <th style="background-image: none; border-right: 1px solid #DFDFDF; border-bottom: 1px solid #DFDFDF; padding: 6px 10px; font-family: sans-serif; font-size: 12px; font-weight: bold; background-color: #F1F1F1; color:#333; text-align:left">
                                        Item
                                    </th>
                                    <th style="background-image: none; border-right: 1px solid #DFDFDF; border-bottom: 1px solid #DFDFDF; padding: 6px 10px; font-family: sans-serif; font-size: 12px; font-weight: bold; background-color: #F1F1F1; color:#333; text-align:left">
                                        Quantity
                                    </th>
                                </tr>
                                </thead>
                                <tbody style="background-color: #F9F9F9">

                                <?php
                                for ($a = 0; $a < count($appp['input_246[' . $i . ']']); $a++) {
                                    ?>
                                    <tr>
                                        <td style="padding: 6px 10px; border-right: 1px solid #DFDFDF; border-bottom: 1px solid #DFDFDF; border-top: 1px solid #FFF; font-family: sans-serif; font-size:12px;"><?php echo $appp['input_246[' . $i . ']'][$a]; ?></td>
                                        <td style="padding: 6px 10px; border-right: 1px solid #DFDFDF; border-bottom: 1px solid #DFDFDF; border-top: 1px solid #FFF; font-family: sans-serif; font-size:12px;"><?php $a++;
                                            echo $appp['input_246[' . $i . ']'][$a]; ?></td>
                                    </tr>
                                <?php } ?>
                                </tbody>
                                <tbody>
                                </tbody>
                            </table>
                        </font>
                    </td>
                </tr>

            <?php
            }
        }
    }
}
?>


<tr bgcolor="#EAF2FA">
    <td colspan="2"><font style="font-family: sans-serif; font-size:12px;"><strong>Your Name</strong></font>
    </td>
</tr>
<tr bgcolor="#FFFFFF">
    <td width="20">&nbsp;</td>
    <td><font style="font-family: sans-serif; font-size:12px;" id="confirm_22"><?php echo $appp1['input_252']; ?></font>
    </td>
</tr>
<tr bgcolor="#EAF2FA">
    <td colspan="2"><font style="font-family: sans-serif; font-size:12px;"><strong>Email</strong></font>
    </td>
</tr>
<tr bgcolor="#FFFFFF">
    <td width="20">&nbsp;</td>
    <td><font style="font-family: sans-serif; font-size:12px;" id="confirm_23"><?php echo $appp1['input_254']; ?></font>
    </td>
</tr>
<tr bgcolor="#EAF2FA">
    <td colspan="2"><font style="font-family: sans-serif; font-size:12px;"><strong>Phone (Day)</strong></font>
    </td>
</tr>
<tr bgcolor="#FFFFFF">
    <td width="20">&nbsp;</td>
    <td><font style="font-family: sans-serif; font-size:12px;" id="confirm_24"><?php echo $appp1['input_256']; ?></font>
    </td>
</tr>
<tr bgcolor="#EAF2FA">
    <td colspan="2"><font style="font-family: sans-serif; font-size:12px;"><strong>Phone (Mobile)</strong></font>
    </td>
</tr>
<tr bgcolor="#FFFFFF">
    <td width="20">&nbsp;</td>
    <td><font style="font-family: sans-serif; font-size:12px;" id="confirm_25"><?php echo $appp1['input_257']; ?></font>
    </td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
										