<?php
for ($i = 0; $i < $_POST['len']; $i++) {
    ?>
    <div class="rooms_div">
        <li class='gfield gsection' id='field_15_231' style='display:block;'>
            <h4 class='gsection_title'> Store Room <?php echo $i + 1; ?> Items</h4>
        </li>
        <li class='gfield qty_input' id='field_15_232' style='display:block;'>
            <label class='gfield_label' for='input_15_232'>BBQ Set</label>

            <div class='ginput_container'>
                <input class='small' id='input_15_232' name='input_232[]' tabindex='251' type='text' value='0'>
            </div>
        </li>
        <li class='gfield qty_input' id='field_15_233' style='display:block;'>
            <label class='gfield_label' for='input_15_233'>Bike</label>

            <div class='ginput_container'>
                <input class='small' id='input_15_233' name='input_233[]' tabindex='252' type='text' value='0'>
            </div>
        </li>
        <li class='gfield qty_input' id='field_15_234' style='display:block;'>
            <label class='gfield_label' for='input_15_234'>Cabinet</label>

            <div class='ginput_container'>
                <input class='small' id='input_15_234' name='input_234[]' tabindex='253' type='text' value='0'>
            </div>
        </li>
        <li class='gfield qty_input' id='field_15_235' style='display:block;'>
            <label class='gfield_label' for='input_15_235'>Chair</label>

            <div class='ginput_container'>
                <input class='small' id='input_15_235' name='input_235[]' tabindex='254' type='text' value='0'>
            </div>
        </li>
        <li class='gfield qty_input' id='field_15_236' style='display:block;'>
            <label class='gfield_label' for='input_15_236'>Cooling Bin</label>

            <div class='ginput_container'>
                <input class='small' id='input_15_236' name='input_236[]' tabindex='255' type='text' value='0'>
            </div>
        </li>
        <li class='gfield qty_input' id='field_15_237' style='display:block;'>
            <label class='gfield_label' for='input_15_237'>Fridge</label>

            <div class='ginput_container'>
                <input class='small' id='input_15_237' name='input_237[]' tabindex='256' type='text' value='0'>
            </div>
        </li>
        <li class='gfield qty_input' id='field_15_238' style='display:block;'>
            <label class='gfield_label' for='input_15_238'>Table</label>

            <div class='ginput_container'>
                <input class='small' id='input_15_238' name='input_238[]' tabindex='257' type='text' value='0'>
            </div>
        </li>
        <li class='gfield qty_input' id='field_15_239' style='display:block;'>
            <label class='gfield_label' for='input_15_239'>Wheelie Bin</label>

            <div class='ginput_container'>
                <input class='small' id='input_15_239' name='input_239[]' tabindex='258' type='text' value='0'>
            </div>
        </li>
        <li class='gfield qty_input' id='field_15_240' style='display:block;'>
            <label class='gfield_label' for='input_15_240_shim'>Store Room <?php echo $i + 1; ?> Additional
                Items</label> <br>

            <div class='ginput_container ginput_list'>
                <input id='input_15_240_shim' onfocus='jQuery( "#field_15_240 table tr td:first-child input" ).focus();'
                       style='position:absolute;left:-999em;' type='text'>
                <table class='gfield_list'>
                    <colgroup>
                        <col class='gfield_list_col_odd' id='gfield_list_240_col_1'>
                        <col class='gfield_list_col_even' id='gfield_list_240_col_2'>
                        <col class='gfield_list_col_odd' id='gfield_list_240_col_3'>
                    </colgroup>
                    <thead>
                    <tr>
                        <th> Item</th>
                        <th> Quantity</th>
                        <th>&nbsp;</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class='gfield_list_row_odd'>
                        <td class='gfield_list_cell gfield_list_240_cell1'>
                            <input name='input_240[<?php echo $i; ?>]' tabindex='259' type='text' value=''>
                        </td>
                        <td class='gfield_list_cell gfield_list_240_cell2'>
                            <input name='input_240[<?php echo $i; ?>]' tabindex='260' type='text' value=''>
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