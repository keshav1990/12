<?php
for ($i = 0; $i < $_POST['len']; $i++) {
    ?>
    <div class="rooms_div">
        <li class='gfield gsection' id='field_15_51' style='display:block;'>
            <h4 class='gsection_title'> Entrance <?php echo $i + 1; ?> Items</h4>
        </li>
        <li class='gfield qty_input' id='field_15_52' style='display:block;'>
            <label class='gfield_label' for='input_15_52'>Coat Stand</label>

            <div class='ginput_container'>
                <input class='small' id='input_15_52' name='input_52[]' tabindex='71' type='text' value='0'>
            </div>
        </li>
        <li class='gfield qty_input' id='field_15_53' style='display:block;'>
            <label class='gfield_label' for='input_15_53'>Mirror</label>

            <div class='ginput_container'>
                <input class='small' id='input_15_53' name='input_53[]' tabindex='72' type='text' value='0'>
            </div>
        </li>
        <li class='gfield qty_input' id='field_15_54' style='display:block;'>
            <label class='gfield_label' for='input_15_54'>Plant</label>

            <div class='ginput_container'>
                <input class='small' id='input_15_54' name='input_54[]' tabindex='73' type='text' value='0'>
            </div>
        </li>
        <li class='gfield qty_input' id='field_15_55' style='display:block;'>
            <label class='gfield_label' for='input_15_55'>Rug</label>

            <div class='ginput_container'>
                <input class='small' id='input_15_55' name='input_55[]' tabindex='74' type='text' value='0'>
            </div>
        </li>
        <li class='gfield qty_input' id='field_15_56' style='display:block;'>
            <label class='gfield_label' for='input_15_56'>Statue</label>

            <div class='ginput_container'>
                <input class='small' id='input_15_56' name='input_56[]' tabindex='75' type='text' value='0'>
            </div>
        </li>
        <li class='gfield qty_input' id='field_15_57' style='display:block;'>
            <label class='gfield_label' for='input_15_57'>Table</label>

            <div class='ginput_container'>
                <input class='small' id='input_15_57' name='input_57[]' tabindex='76' type='text' value='0'>
            </div>
        </li>
        <li class='gfield qty_input' id='field_15_58' style='display:block;'>
            <label class='gfield_label' for='input_15_58'>Vase</label>

            <div class='ginput_container'>
                <input class='small' id='input_15_58' name='input_58[]' tabindex='77' type='text' value='0'>
            </div>
        </li>
        <li class='gfield qty_input' id='field_15_59' style='display:block;'>
            <label class='gfield_label' for='input_15_59'>Wall Art</label>

            <div class='ginput_container'>
                <input class='small' id='input_15_59' name='input_59[]' tabindex='78' type='text' value='0'>
            </div>
        </li>
        <li class='gfield' id='field_15_60' style='display:block;'>
            <label class='gfield_label' for='input_15_60_shim'>Entrance <?php echo $i + 1; ?> Additional Items</label>
            <br>

            <div class='ginput_container ginput_list'>
                <input id='input_15_60_shim' onfocus='jQuery( "#field_15_60 table tr td:first-child input" ).focus();'
                       style='position:absolute;left:-999em;' type='text'>
                <table class='gfield_list'>
                    <colgroup>
                        <col class='gfield_list_col_odd' id='gfield_list_60_col_1'>
                        <col class='gfield_list_col_even' id='gfield_list_60_col_2'>
                        <col class='gfield_list_col_odd' id='gfield_list_60_col_3'>
                    </colgroup>
                    <thead>
                    <tr>
                        <th>Item</th>
                        <th> Quantity</th>
                        <th>&nbsp;</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class='gfield_list_row_odd'>
                        <td class='gfield_list_cell gfield_list_60_cell1'>
                            <input name='input_60[<?php echo $i; ?>]' tabindex='79' type='text' value=''>
                        </td>
                        <td class='gfield_list_cell gfield_list_60_cell2'>
                            <input name='input_60[<?php echo $i; ?>]' tabindex='80' type='text' value=''>
                        </td>
                        <td class='gfield_list_icons'>
                            <img alt='Add a row' class='add_list_item' onclick='gformAddListItem(this, 20)'
                                 src='img/add.png' style='cursor:pointer; margin:0 3px;' title='Add another row'>
                            <img alt='Remove this row' class='delete_list_item' onclick='gformDeleteListItem(this, 20)'
                                 src='img/remove.png' style='cursor:pointer; visibility:hidden;'
                                 title='Remove this row'>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </li>
    </div>
<?php } ?>	