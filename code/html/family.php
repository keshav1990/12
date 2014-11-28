<?php
for ($i = 0; $i < $_POST['len']; $i++) {
    ?>
    <div class="rooms_div">
        <li class='gfield gsection' id='field_15_117' style='display:block;'><h4 class='gsection_title'> Family
                Room <?php echo $i + 1; ?> Items</h4></li>
        <li class='gfield qty_input' id='field_15_118' style='display:block;'>
            <label class='gfield_label' for='input_15_118'>Bookcase
            </label>

            <div class='ginput_container'>
                <input class='small' id='input_15_118' name='input_118[]' tabindex='137' type='text' value='0'>
            </div>
        </li>
        <li class='gfield qty_input' id='field_15_119' style='display:block;'>
            <label class='gfield_label' for='input_15_119'>Cabinet
            </label>

            <div class='ginput_container'>
                <input class='small' id='input_15_119' name='input_119[]' tabindex='138' type='text' value='0'>
            </div>
        </li>
        <li class='gfield qty_input' id='field_15_120' style='display:block;'>
            <label class='gfield_label' for='input_15_120'>Chair
            </label>

            <div class='ginput_container'>
                <input class='small' id='input_15_120' name='input_120[]' tabindex='139' type='text' value='0'>
            </div>
        </li>
        <li class='gfield qty_input' id='field_15_121' style='display:block;'>
            <label class='gfield_label' for='input_15_121'>Coffee Table
            </label>

            <div class='ginput_container'>
                <input class='small' id='input_15_121' name='input_121[]' tabindex='140' type='text' value='0'>
            </div>
        </li>
        <li class='gfield qty_input' id='field_15_122' style='display:block;'>
            <label class='gfield_label' for='input_15_122'>Chaise Lounge
            </label>

            <div class='ginput_container'>
                <input class='small' id='input_15_122' name='input_122[]' tabindex='141' type='text' value='0'>
            </div>
        </li>
        <li class='gfield qty_input' id='field_15_123' style='display:block;'>
            <label class='gfield_label' for='input_15_123'>Entertainment Storage Set
            </label>

            <div class='ginput_container'>
                <input class='small' id='input_15_123' name='input_123[]' tabindex='142' type='text' value='0'>
            </div>
        </li>
        <li class='gfield qty_input' id='field_15_124' style='display:block;'>
            <label class='gfield_label' for='input_15_124'>Rugs
            </label>

            <div class='ginput_container'>
                <input class='small' id='input_15_124' name='input_124[]' tabindex='143' type='text' value='0'>
            </div>
        </li>
        <li class='gfield qty_input' id='field_15_125' style='display:block;'>
            <label class='gfield_label' for='input_15_125'>Sofa Set
            </label>

            <div class='ginput_container'>
                <input class='small' id='input_15_125' name='input_125[]' tabindex='144' type='text' value='0'>
            </div>
        </li>
        <li class='gfield qty_input' id='field_15_126' style='display:block;'>
            <label class='gfield_label' for='input_15_126'>TV
            </label>

            <div class='ginput_container'>
                <input class='small' id='input_15_126' name='input_126[]' tabindex='145' type='text' value='0'>
            </div>
        </li>
        <li class='gfield qty_input' id='field_15_127' style='display:block;'>
            <label class='gfield_label' for='input_15_127'>Wall Art
            </label>

            <div class='ginput_container'>
                <input class='small' id='input_15_127' name='input_127[]' tabindex='146' type='text' value='0'>
            </div>
        </li>
        <li class='gfield qty_input' id='field_15_128' style='display:block;'>
            <label class='gfield_label' for='input_15_128_shim'>Family Room <?php echo $i + 1; ?> Additional Items
            </label>
            <br>

            <div class='ginput_container ginput_list'>
                <input id='input_15_128_shim' onfocus='jQuery( "#field_15_128 table tr td:first-child input" ).focus();'
                       style='position:absolute;left:-999em;' type='text'>
                <table class='gfield_list'>
                    <colgroup>
                        <col class='gfield_list_col_odd' id='gfield_list_128_col_1'>
                        <col class='gfield_list_col_even' id='gfield_list_128_col_2'>
                        <col class='gfield_list_col_odd' id='gfield_list_128_col_3'>
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
                        <td class='gfield_list_cell gfield_list_128_cell1'>
                            <input name='input_128[<?php echo $i; ?>]' tabindex='147' type='text' value=''>
                        </td>
                        <td class='gfield_list_cell gfield_list_128_cell2'>
                            <input name='input_128[<?php echo $i; ?>]' tabindex='148' type='text' value=''>
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