<?php
for ($i = 0; $i < $_POST['len']; $i++) {
    ?>
    <div class="rooms_div">
        <li class='gfield gsection' id='field_15_129' style='display:block;'><h4 class='gsection_title'> Dining
                Room <?php echo $i + 1; ?> Items</h4></li>
        <li class='gfield qty_input' id='field_15_130' style='display:block;'>
            <label class='gfield_label' for='input_15_130'>Bookcase
            </label>

            <div class='ginput_container'>
                <input class='small' id='input_15_130' name='input_130[]' tabindex='149' type='text' value='0'>
            </div>
        </li>
        <li class='gfield qty_input' id='field_15_131' style='display:block;'>
            <label class='gfield_label' for='input_15_131'>Chair
            </label>

            <div class='ginput_container'>
                <input class='small' id='input_15_131' name='input_131[]' tabindex='150' type='text' value='0'>
            </div>
        </li>
        <li class='gfield qty_input' id='field_15_132' style='display:block;'>
            <label class='gfield_label' for='input_15_132'>Chest of drawers
            </label>

            <div class='ginput_container'>
                <input class='small' id='input_15_132' name='input_132[]' tabindex='151' type='text' value='0'>
            </div>
        </li>
        <li class='gfield qty_input' id='field_15_133' style='display:block;'>
            <label class='gfield_label' for='input_15_133'>Heater
            </label>

            <div class='ginput_container'>
                <input class='small' id='input_15_133' name='input_133[]' tabindex='152' type='text' value='0'>
            </div>
        </li>
        <li class='gfield qty_input' id='field_15_134' style='display:block;'>
            <label class='gfield_label' for='input_15_134'>High Chair
            </label>

            <div class='ginput_container'>
                <input class='small' id='input_15_134' name='input_134[]' tabindex='153' type='text' value='0'>
            </div>
        </li>
        <li class='gfield qty_input' id='field_15_135' style='display:block;'>
            <label class='gfield_label' for='input_15_135'>Lamp
            </label>

            <div class='ginput_container'>
                <input class='small' id='input_15_135' name='input_135[]' tabindex='154' type='text' value='0'>
            </div>
        </li>
        <li class='gfield qty_input' id='field_15_136' style='display:block;'>
            <label class='gfield_label' for='input_15_136'>Storage Cabinet
            </label>

            <div class='ginput_container'>
                <input class='small' id='input_15_136' name='input_136[]' tabindex='155' type='text' value='0'>
            </div>
        </li>
        <li class='gfield qty_input' id='field_15_137' style='display:block;'>
            <label class='gfield_label' for='input_15_137'>Table - Small
            </label>

            <div class='ginput_container'>
                <input class='small' id='input_15_137' name='input_137[]' tabindex='156' type='text' value='0'>
            </div>
        </li>
        <li class='gfield qty_input' id='field_15_138' style='display:block;'>
            <label class='gfield_label' for='input_15_138'>Table - Medium
            </label>

            <div class='ginput_container'>
                <input class='small' id='input_15_138' name='input_138[]' tabindex='157' type='text' value='0'>
            </div>
        </li>
        <li class='gfield qty_input' id='field_15_139' style='display:block;'>
            <label class='gfield_label' for='input_15_139'>Table - Large
            </label>

            <div class='ginput_container'>
                <input class='small' id='input_15_139' name='input_139[]' tabindex='158' type='text' value='0'>
            </div>
        </li>
        <li class='gfield qty_input' id='field_15_140' style='display:block;'>
            <label class='gfield_label' for='input_15_140'>Wall Art/Painting
            </label>

            <div class='ginput_container'>
                <input class='small' id='input_15_140' name='input_140[]' tabindex='159' type='text' value='0'>
            </div>
        </li>
        <li class='gfield qty_input' id='field_15_141' style='display:block;'>
            <label class='gfield_label' for='input_15_141_shim'>Dining Room <?php echo $i + 1; ?> Additional Items
            </label> <br>

            <div class='ginput_container ginput_list'>
                <input id='input_15_141_shim' onfocus='jQuery( "#field_15_141 table tr td:first-child input" ).focus();'
                       style='position:absolute;left:-999em;' type='text'>
                <table class='gfield_list'>
                    <colgroup>
                        <col class='gfield_list_col_odd' id='gfield_list_141_col_1'>
                        <col class='gfield_list_col_even' id='gfield_list_141_col_2'>
                        <col class='gfield_list_col_odd' id='gfield_list_141_col_3'>
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
                        <td class='gfield_list_cell gfield_list_141_cell1'>
                            <input name='input_141[<?php echo $i; ?>]' tabindex='160' type='text' value=''>
                        </td>
                        <td class='gfield_list_cell gfield_list_141_cell2'>
                            <input name='input_141[<?php echo $i; ?>]' tabindex='161' type='text' value=''>
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