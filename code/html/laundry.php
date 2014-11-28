<?php
for ($i = 0; $i < $_POST['len']; $i++) {
    ?>
    <div class="rooms_div">
        <li class='gfield gsection' id='field_15_160' style='display:block;'><h4 class='gsection_title'>
                Laundry <?php echo $i + 1; ?> Items</h4></li>
        <li class='gfield qty_input' id='field_15_161' style='display:block;'>
            <label class='gfield_label' for='input_15_161'>Cabinet
            </label>

            <div class='ginput_container'>
                <input class='small' id='input_15_161' name='input_161[]' tabindex='180' type='text' value='0'>
            </div>
        </li>
        <li class='gfield qty_input' id='field_15_162' style='display:block;'>
            <label class='gfield_label' for='input_15_162'>Clothes Dryer
            </label>

            <div class='ginput_container'>
                <input class='small' id='input_15_162' name='input_162[]' tabindex='181' type='text' value='0'>
            </div>
        </li>
        <li class='gfield qty_input' id='field_15_163' style='display:block;'>
            <label class='gfield_label' for='input_15_163'>Clothing Basket
            </label>

            <div class='ginput_container'>
                <input class='small' id='input_15_163' name='input_163[]' tabindex='182' type='text' value='0'>
            </div>
        </li>
        <li class='gfield qty_input' id='field_15_164' style='display:block;'>
            <label class='gfield_label' for='input_15_164'>Iron
            </label>

            <div class='ginput_container'>
                <input class='small' id='input_15_164' name='input_164[]' tabindex='183' type='text' value='0'>
            </div>
        </li>
        <li class='gfield qty_input' id='field_15_165' style='display:block;'>
            <label class='gfield_label' for='input_15_165'>Ironing Board
            </label>

            <div class='ginput_container'>
                <input class='small' id='input_15_165' name='input_165[]' tabindex='184' type='text' value='0'>
            </div>
        </li>
        <li class='gfield qty_input' id='field_15_166' style='display:block;'>
            <label class='gfield_label' for='input_15_166'>Washing Machine
            </label>

            <div class='ginput_container'>
                <input class='small' id='input_15_166' name='input_166[]' tabindex='185' type='text' value='0'>
            </div>
        </li>
        <li class='gfield qty_input' id='field_15_167' style='display:block;'>
            <label class='gfield_label' for='input_15_167_shim'>Laundry <?php echo $i + 1; ?> Additional Items
            </label> <br>

            <div class='ginput_container ginput_list'>
                <input id='input_15_167_shim' onfocus='jQuery( "#field_15_167 table tr td:first-child input" ).focus();'
                       style='position:absolute;left:-999em;' type='text'>
                <table class='gfield_list'>
                    <colgroup>
                        <col class='gfield_list_col_odd' id='gfield_list_167_col_1'>
                        <col class='gfield_list_col_even' id='gfield_list_167_col_2'>
                        <col class='gfield_list_col_odd' id='gfield_list_167_col_3'>
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
                        <td class='gfield_list_cell gfield_list_167_cell1'>
                            <input name='input_167[<?php echo $i; ?>]' tabindex='186' type='text' value=''>
                        </td>
                        <td class='gfield_list_cell gfield_list_167_cell2'>
                            <input name='input_167[<?php echo $i; ?>]' tabindex='187' type='text' value=''>
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