<?php
for ($i = 0; $i < $_POST['len']; $i++) {
    ?>
    <div class="rooms_div">
        <li class='gfield gsection' id='field_15_195' style='display:block;'><h4 class='gsection_title'>
                Garage <?php echo $i + 1; ?> Items</h4></li>
        <li class='gfield qty_input' id='field_15_196' style='display:block;'>
            <label class='gfield_label' for='input_15_196'>BBQ Set
            </label>

            <div class='ginput_container'>
                <input class='small' id='input_15_196' name='input_196[]' tabindex='215' type='text' value='0'>
            </div>
        </li>
        <li class='gfield qty_input' id='field_15_197' style='display:block;'>
            <label class='gfield_label' for='input_15_197'>Bicycle
            </label>

            <div class='ginput_container'>
                <input class='small' id='input_15_197' name='input_197[]' tabindex='216' type='text' value='0'>
            </div>
        </li>
        <li class='gfield qty_input' id='field_15_198' style='display:block;'>
            <label class='gfield_label' for='input_15_198'>Fitness Bike
            </label>

            <div class='ginput_container'>
                <input class='small' id='input_15_198' name='input_198[]' tabindex='217' type='text' value='0'>
            </div>
        </li>
        <li class='gfield qty_input' id='field_15_199' style='display:block;'>
            <label class='gfield_label' for='input_15_199'>Ladder
            </label>

            <div class='ginput_container'>
                <input class='small' id='input_15_199' name='input_199[]' tabindex='218' type='text' value='0'>
            </div>
        </li>
        <li class='gfield qty_input' id='field_15_200' style='display:block;'>
            <label class='gfield_label' for='input_15_200'>Mower
            </label>

            <div class='ginput_container'>
                <input class='small' id='input_15_200' name='input_200[]' tabindex='219' type='text' value='0'>
            </div>
        </li>
        <li class='gfield qty_input' id='field_15_201' style='display:block;'>
            <label class='gfield_label' for='input_15_201'>Table
            </label>

            <div class='ginput_container'>
                <input class='small' id='input_15_201' name='input_201[]' tabindex='220' type='text' value='0'>
            </div>
        </li>
        <li class='gfield qty_input' id='field_15_202' style='display:block;'>
            <label class='gfield_label' for='input_15_202'>Treadmill
            </label>

            <div class='ginput_container'>
                <input class='small' id='input_15_202' name='input_202[]' tabindex='221' type='text' value='0'>
            </div>
        </li>
        <li class='gfield qty_input' id='field_15_203' style='display:block;'>
            <label class='gfield_label' for='input_15_203'>Wheelbarrow
            </label>

            <div class='ginput_container'>
                <input class='small' id='input_15_203' name='input_203[]' tabindex='222' type='text' value='0'>
            </div>
        </li>
        <li class='gfield qty_input' id='field_15_204' style='display:block;'>
            <label class='gfield_label' for='input_15_204_shim'>Garage <?php echo $i + 1; ?> Additional Items
            </label>
            <br>

            <div class='ginput_container ginput_list'>
                <input id='input_15_204_shim' onfocus='jQuery( "#field_15_204 table tr td:first-child input" ).focus();'
                       style='position:absolute;left:-999em;' type='text'>
                <table class='gfield_list'>
                    <colgroup>
                        <col class='gfield_list_col_odd' id='gfield_list_204_col_1'>
                        <col class='gfield_list_col_even' id='gfield_list_204_col_2'>
                        <col class='gfield_list_col_odd' id='gfield_list_204_col_3'>
                    </colgroup>
                    <thead>
                    <tr>
                        <th> Item
                        </th>
                        <th> Quantity
                        </th>
                        <th>&nbsp;
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class='gfield_list_row_odd'>
                        <td class='gfield_list_cell gfield_list_204_cell1'>
                            <input name='input_204[<?php echo $i; ?>]' tabindex='223' type='text' value=''>
                        </td>
                        <td class='gfield_list_cell gfield_list_204_cell2'>
                            <input name='input_204[<?php echo $i; ?>]' tabindex='224' type='text' value=''>
                        </td>
                        <td class='gfield_list_icons'><img alt='Add a row' class='add_list_item'
                                                           onclick='gformAddListItem(this, 20)' src='img/add.png'
                                                           style='cursor:pointer; margin:0 3px;'
                                                           title='Add another row'> <img alt='Remove this row'
                                                                                         class='delete_list_item'
                                                                                         onclick='gformDeleteListItem(this, 20)'
                                                                                         src='img/remove.png'
                                                                                         style='cursor:pointer; visibility:hidden;'
                                                                                         title='Remove this row'>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </li>
    </div>
<?php } ?>