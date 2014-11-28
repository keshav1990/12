<?php
for ($i = 0; $i < $_POST['len']; $i++) {
    ?>
    <div class="rooms_div">
        <li class='gfield gsection' id='field_15_154' style='display:block;'><h4 class='gsection_title'>
                Bathroom <?php echo $i + 1; ?> Items</h4></li>
        <li class='gfield qty_input' id='field_15_155' style='display:block;'>
            <label class='gfield_label' for='input_15_155'>Cabient
            </label>

            <div class='ginput_container'>
                <input class='small' id='input_15_155' name='input_155[]' tabindex='174' type='text' value='0'>
            </div>
        </li>
        <li class='gfield qty_input' id='field_15_156' style='display:block;'>
            <label class='gfield_label' for='input_15_156'>Heater
            </label>

            <div class='ginput_container'>
                <input class='small' id='input_15_156' name='input_156[]' tabindex='175' type='text' value='0'>
            </div>
        </li>
        <li class='gfield qty_input' id='field_15_157' style='display:block;'>
            <label class='gfield_label' for='input_15_157'>Mirror
            </label>

            <div class='ginput_container'>
                <input class='small' id='input_15_157' name='input_157[]' tabindex='176' type='text' value='0'>
            </div>
        </li>
        <li class='gfield qty_input' id='field_15_158' style='display:block;'>
            <label class='gfield_label' for='input_15_158'>Wall Art
            </label>

            <div class='ginput_container'>
                <input class='small' id='input_15_158' name='input_158[]' tabindex='177' type='text' value='0'>
            </div>
        </li>
        <li class='gfield qty_input' id='field_15_159' style='display:block;'>
            <label class='gfield_label' for='input_15_159_shim'>Bathroom <?php echo $i + 1; ?> Additional Items
            </label> <br>

            <div class='ginput_container ginput_list'>
                <input id='input_15_159_shim' onfocus='jQuery( "#field_15_159 table tr td:first-child input" ).focus();'
                       style='position:absolute;left:-999em;' type='text'>
                <table class='gfield_list'>
                    <colgroup>
                        <col class='gfield_list_col_odd' id='gfield_list_159_col_1'>
                        <col class='gfield_list_col_even' id='gfield_list_159_col_2'>
                        <col class='gfield_list_col_odd' id='gfield_list_159_col_3'>
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
                        <td class='gfield_list_cell gfield_list_159_cell1'>
                            <input name='input_159[<?php echo $i; ?>]' tabindex='178' type='text' value=''>
                        </td>
                        <td class='gfield_list_cell gfield_list_159_cell2'>
                            <input name='input_159[<?php echo $i; ?>]' tabindex='179' type='text' value=''>
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