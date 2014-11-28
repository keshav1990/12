<?php
for ($i = 0; $i < $_POST['len']; $i++) {
    ?>
    <div class="rooms_div">
        <li class='gfield gsection' id='field_15_241' style='display:block;'><h4 class='gsection_title'>
                Cellar <?php echo $i + 1; ?> Items</h4></li>
        <li class='gfield qty_input' id='field_15_243' style='display:block;'>
            <label class='gfield_label' for='input_15_243'>Cabinet
            </label>

            <div class='ginput_container'>
                <input class='small' id='input_15_243' name='input_243[]' tabindex='262' type='text' value='0'>
            </div>
        </li>
        <li class='gfield qty_input' id='field_15_244' style='display:block;'>
            <label class='gfield_label' for='input_15_244'>Wine Rack
            </label>

            <div class='ginput_container'>
                <input class='small' id='input_15_244' name='input_244[]' tabindex='263' type='text' value='0'>
            </div>
        </li>
        <li class='gfield qty_input' id='field_15_245' style='display:block;'>
            <label class='gfield_label' for='input_15_245'>Bar Fridge
            </label>

            <div class='ginput_container'>
                <input class='small' id='input_15_245' name='input_245[]' tabindex='264' type='text' value='0'>
            </div>
        </li>
        <li class='gfield qty_input' id='field_15_246' style='display:block;'>
            <label class='gfield_label' for='input_15_246_shim'>Cellar <?php echo $i + 1; ?> Additional Items
            </label> <br>

            <div class='ginput_container ginput_list'>
                <input id='input_15_246_shim' onfocus='jQuery( "#field_15_246 table tr td:first-child input" ).focus();'
                       style='position:absolute;left:-999em;' type='text'>
                <table class='gfield_list'>
                    <colgroup>
                        <col class='gfield_list_col_odd' id='gfield_list_246_col_1'>
                        <col class='gfield_list_col_even' id='gfield_list_246_col_2'>
                        <col class='gfield_list_col_odd' id='gfield_list_246_col_3'>
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
                        <td class='gfield_list_cell gfield_list_246_cell1'>
                            <input name='input_246[<?php echo $i; ?>]' tabindex='265' type='text' value=''>
                        </td>
                        <td class='gfield_list_cell gfield_list_246_cell2'>
                            <input name='input_246[<?php echo $i; ?>]' tabindex='266' type='text' value=''>
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