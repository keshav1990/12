<?php
for ($i = 0; $i < $_POST['len']; $i++) {
    ?>
    <div class="rooms_div">
        <li class='gfield gsection' id='field_15_205' style='display:block;'><h4 class='gsection_title'>
                Shed <?php echo $i + 1; ?> Items</h4></li>
        <li class='gfield qty_input' id='field_15_206' style='display:block;'>
            <label class='gfield_label' for='input_15_206'>Bike
            </label>

            <div class='ginput_container'>
                <input class='small' id='input_15_206' name='input_206[]' tabindex='225' type='text' value='0'>
            </div>
        </li>
        <li class='gfield qty_input' id='field_15_207' style='display:block;'>
            <label class='gfield_label' for='input_15_207'>Camping Gear
            </label>

            <div class='ginput_container'>
                <input class='small' id='input_15_207' name='input_207[]' tabindex='226' type='text' value='0'>
            </div>
        </li>
        <li class='gfield qty_input' id='field_15_208' style='display:block;'>
            <label class='gfield_label' for='input_15_208'>Ladder
            </label>

            <div class='ginput_container'>
                <input class='small' id='input_15_208' name='input_208[]' tabindex='227' type='text' value='0'>
            </div>
        </li>
        <li class='gfield qty_input' id='field_15_209' style='display:block;'>
            <label class='gfield_label' for='input_15_209'>Mower
            </label>

            <div class='ginput_container'>
                <input class='small' id='input_15_209' name='input_209[]' tabindex='228' type='text' value='0'>
            </div>
        </li>
        <li class='gfield qty_input' id='field_15_210' style='display:block;'>
            <label class='gfield_label' for='input_15_210'>Shelf
            </label>

            <div class='ginput_container'>
                <input class='small' id='input_15_210' name='input_210[]' tabindex='229' type='text' value='0'>
            </div>
        </li>
        <li class='gfield qty_input' id='field_15_211' style='display:block;'>
            <label class='gfield_label' for='input_15_211'>Tool Set
            </label>

            <div class='ginput_container'>
                <input class='small' id='input_15_211' name='input_211[]' tabindex='230' type='text' value='0'>
            </div>
        </li>
        <li class='gfield qty_input' id='field_15_212' style='display:block;'>
            <label class='gfield_label' for='input_15_212'>Wheelbarrow
            </label>

            <div class='ginput_container'>
                <input class='small' id='input_15_212' name='input_212[]' tabindex='231' type='text' value='0'>
            </div>
        </li>
        <li class='gfield qty_input' id='field_15_213' style='display:block;'>
            <label class='gfield_label' for='input_15_213'>Working Bench
            </label>

            <div class='ginput_container'>
                <input class='small' id='input_15_213' name='input_213[]' tabindex='232' type='text' value='0'>
            </div>
        </li>
        <li class='gfield qty_input' id='field_15_214' style='display:block;'>
            <label class='gfield_label' for='input_15_214_shim'>Shed <?php echo $i + 1; ?> Additional Items
            </label> <br>

            <div class='ginput_container ginput_list'>
                <input id='input_15_214_shim' onfocus='jQuery( "#field_15_214 table tr td:first-child input" ).focus();'
                       style='position:absolute;left:-999em;' type='text'>
                <table class='gfield_list'>
                    <colgroup>
                        <col class='gfield_list_col_odd' id='gfield_list_214_col_1'>
                        <col class='gfield_list_col_even' id='gfield_list_214_col_2'>
                        <col class='gfield_list_col_odd' id='gfield_list_214_col_3'>
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
                        <td class='gfield_list_cell gfield_list_214_cell1'>
                            <input name='input_214[<?php echo $i; ?>]' tabindex='233' type='text' value=''>
                        </td>
                        <td class='gfield_list_cell gfield_list_214_cell2'>
                            <input name='input_214[<?php echo $i; ?>]' tabindex='234' type='text' value=''>
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