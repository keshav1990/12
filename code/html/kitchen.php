<?php
for ($i = 0; $i < $_POST['len']; $i++) {
    ?>
    <div class="rooms_div">
        <li class='gfield gsection' id='field_15_142' style='display:block;'><h4 class='gsection_title'>
                Kitchen <?php echo $i + 1; ?> Items</h4></li>
        <li class='gfield qty_input' id='field_15_143' style='display:block;'>
            <label class='gfield_label' for='input_15_143'>Buffet
            </label>

            <div class='ginput_container'>
                <input class='small' id='input_15_143' name='input_143[]' tabindex='162' type='text' value='0'>
            </div>
        </li>
        <li class='gfield qty_input' id='field_15_144' style='display:block;'>
            <label class='gfield_label' for='input_15_144'>Chair
            </label>

            <div class='ginput_container'>
                <input class='small' id='input_15_144' name='input_144[]' tabindex='163' type='text' value='0'>
            </div>
        </li>
        <li class='gfield qty_input' id='field_15_145' style='display:block;'>
            <label class='gfield_label' for='input_15_145'>Dishwasher
            </label>

            <div class='ginput_container'>
                <input class='small' id='input_15_145' name='input_145[]' tabindex='164' type='text' value='0'>
            </div>
        </li>
        <li class='gfield qty_input' id='field_15_146' style='display:block;'>
            <label class='gfield_label' for='input_15_146'>Drawer Set
            </label>

            <div class='ginput_container'>
                <input class='small' id='input_15_146' name='input_146[]' tabindex='165' type='text' value='0'>
            </div>
        </li>
        <li class='gfield qty_input' id='field_15_147' style='display:block;'>
            <label class='gfield_label' for='input_15_147'>Fridge
            </label>

            <div class='ginput_container'>
                <input class='small' id='input_15_147' name='input_147[]' tabindex='166' type='text' value='0'>
            </div>
        </li>
        <li class='gfield qty_input' id='field_15_148' style='display:block;'>
            <label class='gfield_label' for='input_15_148'>Freezer
            </label>

            <div class='ginput_container'>
                <input class='small' id='input_15_148' name='input_148[]' tabindex='167' type='text' value='0'>
            </div>
        </li>
        <li class='gfield qty_input' id='field_15_149' style='display:block;'>
            <label class='gfield_label' for='input_15_149'>Microwave
            </label>

            <div class='ginput_container'>
                <input class='small' id='input_15_149' name='input_149[]' tabindex='168' type='text' value='0'>
            </div>
        </li>
        <li class='gfield qty_input' id='field_15_150' style='display:block;'>
            <label class='gfield_label' for='input_15_150'>Stove/Rangehood
            </label>

            <div class='ginput_container'>
                <input class='small' id='input_15_150' name='input_150[]' tabindex='169' type='text' value='0'>
            </div>
        </li>
        <li class='gfield qty_input' id='field_15_151' style='display:block;'>
            <label class='gfield_label' for='input_15_151'>Storage Cabinet
            </label>

            <div class='ginput_container'>
                <input class='small' id='input_15_151' name='input_151[]' tabindex='170' type='text' value='0'>
            </div>
        </li>
        <li class='gfield qty_input' id='field_15_152' style='display:block;'>
            <label class='gfield_label' for='input_15_152'>Table
            </label>

            <div class='ginput_container'>
                <input class='small' id='input_15_152' name='input_152[]' tabindex='171' type='text' value='0'>
            </div>
        </li>
        <li class='gfield qty_input' id='field_15_153' style='display:block;'>
            <label class='gfield_label' for='input_15_153_shim'>Kitchen <?php echo $i + 1; ?> Additional Items
            </label> <br>

            <div class='ginput_container ginput_list'>
                <input id='input_15_153_shim' onfocus='jQuery( "#field_15_153 table tr td:first-child input" ).focus();'
                       style='position:absolute;left:-999em;' type='text'>
                <table class='gfield_list'>
                    <colgroup>
                        <col class='gfield_list_col_odd' id='gfield_list_153_col_1'>
                        <col class='gfield_list_col_even' id='gfield_list_153_col_2'>
                        <col class='gfield_list_col_odd' id='gfield_list_153_col_3'>
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
                        <td class='gfield_list_cell gfield_list_153_cell1'>
                            <input name='input_153[<?php echo $i; ?>]' tabindex='172' type='text' value=''>
                        </td>
                        <td class='gfield_list_cell gfield_list_153_cell2'>
                            <input name='input_153[<?php echo $i; ?>]' tabindex='173' type='text' value=''>
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