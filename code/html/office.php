<?php
for ($i = 0; $i < $_POST['len']; $i++) {
    ?>
    <div class="rooms_div">
        <li class='gfield gsection' id='field_15_168' style='display:block;'><h4 class='gsection_title'>
                Office <?php echo $i + 1; ?> Items</h4></li>
        <li class='gfield qty_input' id='field_15_169' style='display:block;'>
            <label class='gfield_label' for='input_15_169'>Arm Chair
            </label>

            <div class='ginput_container'>
                <input class='small' id='input_15_169' name='input_169[]' tabindex='188' type='text' value='0'>
            </div>
        </li>
        <li class='gfield qty_input' id='field_15_170' style='display:block;'>
            <label class='gfield_label' for='input_15_170'>Bulletin Board
            </label>

            <div class='ginput_container'>
                <input class='small' id='input_15_170' name='input_170[]' tabindex='189' type='text' value='0'>
            </div>
        </li>
        <li class='gfield qty_input' id='field_15_171' style='display:block;'>
            <label class='gfield_label' for='input_15_171'>Bookcase
            </label>

            <div class='ginput_container'>
                <input class='small' id='input_15_171' name='input_171[]' tabindex='190' type='text' value='0'>
            </div>
        </li>
        <li class='gfield qty_input' id='field_15_172' style='display:block;'>
            <label class='gfield_label' for='input_15_172'>Computer
            </label>

            <div class='ginput_container'>
                <input class='small' id='input_15_172' name='input_172[]' tabindex='191' type='text' value='0'>
            </div>
        </li>
        <li class='gfield qty_input' id='field_15_173' style='display:block;'>
            <label class='gfield_label' for='input_15_173'>Desk
            </label>

            <div class='ginput_container'>
                <input class='small' id='input_15_173' name='input_173[]' tabindex='192' type='text' value='0'>
            </div>
        </li>
        <li class='gfield qty_input' id='field_15_174' style='display:block;'>
            <label class='gfield_label' for='input_15_174'>Drawer Set
            </label>

            <div class='ginput_container'>
                <input class='small' id='input_15_174' name='input_174[]' tabindex='193' type='text' value='0'>
            </div>
        </li>
        <li class='gfield qty_input' id='field_15_175' style='display:block;'>
            <label class='gfield_label' for='input_15_175'>Filing Cabinet
            </label>

            <div class='ginput_container'>
                <input class='small' id='input_15_175' name='input_175[]' tabindex='194' type='text' value='0'>
            </div>
        </li>
        <li class='gfield qty_input' id='field_15_176' style='display:block;'>
            <label class='gfield_label' for='input_15_176'>Heater
            </label>

            <div class='ginput_container'>
                <input class='small' id='input_15_176' name='input_176[]' tabindex='195' type='text' value='0'>
            </div>
        </li>
        <li class='gfield qty_input' id='field_15_177' style='display:block;'>
            <label class='gfield_label' for='input_15_177'>Office Chair
            </label>

            <div class='ginput_container'>
                <input class='small' id='input_15_177' name='input_177[]' tabindex='196' type='text' value='0'>
            </div>
        </li>
        <li class='gfield qty_input' id='field_15_178' style='display:block;'>
            <label class='gfield_label' for='input_15_178'>Printer/Photocopier
            </label>

            <div class='ginput_container'>
                <input class='small' id='input_15_178' name='input_178[]' tabindex='197' type='text' value='0'>
            </div>
        </li>
        <li class='gfield qty_input' id='field_15_179' style='display:block;'>
            <label class='gfield_label' for='input_15_179'>Safe/Vault
            </label>

            <div class='ginput_container'>
                <input class='small' id='input_15_179' name='input_179[]' tabindex='198' type='text' value='0'>
            </div>
        </li>
        <li class='gfield qty_input' id='field_15_180' style='display:block;'>
            <label class='gfield_label' for='input_15_180'>Sofa
            </label>

            <div class='ginput_container'>
                <input class='small' id='input_15_180' name='input_180[]' tabindex='199' type='text' value='0'>
            </div>
        </li>
        <li class='gfield qty_input' id='field_15_181' style='display:block;'>
            <label class='gfield_label' for='input_15_181'>TV
            </label>

            <div class='ginput_container'>
                <input class='small' id='input_15_181' name='input_181[]' tabindex='200' type='text' value='0'>
            </div>
        </li>
        <li class='gfield qty_input' id='field_15_182' style='display:block;'>
            <label class='gfield_label' for='input_15_182'>Wall Art
            </label>

            <div class='ginput_container'>
                <input class='small' id='input_15_182' name='input_182[]' tabindex='201' type='text' value='0'>
            </div>
        </li>
        <li class='gfield qty_input' id='field_15_183' style='display:block;'>
            <label class='gfield_label' for='input_15_183'>Whiteboard
            </label>

            <div class='ginput_container'>
                <input class='small' id='input_15_183' name='input_183[]' tabindex='202' type='text' value='0'>
            </div>
        </li>
        <li class='gfield qty_input' id='field_15_184' style='display:block;'>
            <label class='gfield_label' for='input_15_184_shim'>Office <?php echo $i + 1; ?> Additional Items
            </label> <br>

            <div class='ginput_container ginput_list'>
                <input id='input_15_184_shim' onfocus='jQuery( "#field_15_184 table tr td:first-child input" ).focus();'
                       style='position:absolute;left:-999em;' type='text'>
                <table class='gfield_list'>
                    <colgroup>
                        <col class='gfield_list_col_odd' id='gfield_list_184_col_1'>
                        <col class='gfield_list_col_even' id='gfield_list_184_col_2'>
                        <col class='gfield_list_col_odd' id='gfield_list_184_col_3'>
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
                        <td class='gfield_list_cell gfield_list_184_cell1'>
                            <input name='input_184[<?php echo $i; ?>]' tabindex='203' type='text' value=''>
                        </td>
                        <td class='gfield_list_cell gfield_list_184_cell2'>
                            <input name='input_184[<?php echo $i; ?>]' tabindex='204' type='text' value=''>
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