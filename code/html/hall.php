<?php
for ($i = 0; $i < $_POST['len']; $i++) {
    ?>
    <div class="rooms_div">
        <li class='gfield gsection' id='field_15_79' style='display:block;'><h4 class='gsection_title'>
                Hall <?php echo $i + 1; ?> Items</h4></li>
        <li class='gfield qty_input' id='field_15_80' style='display:block;'>
            <label class='gfield_label' for='input_15_80'>Bookcase
            </label>

            <div class='ginput_container'>
                <input class='small' id='input_15_80' name='input_80[]' tabindex='99' type='text' value='0'>
            </div>
        </li>
        <li class='gfield qty_input' id='field_15_81' style='display:block;'>
            <label class='gfield_label' for='input_15_81'>Clock
            </label>

            <div class='ginput_container'>
                <input class='small' id='input_15_81' name='input_81[]' tabindex='100' type='text' value='0'>
            </div>
        </li>
        <li class='gfield qty_input' id='field_15_82' style='display:block;'>
            <label class='gfield_label' for='input_15_82'>Lamp
            </label>

            <div class='ginput_container'>
                <input class='small' id='input_15_82' name='input_82[]' tabindex='101' type='text' value='0'>
            </div>
        </li>
        <li class='gfield qty_input' id='field_15_83' style='display:block;'>
            <label class='gfield_label' for='input_15_83'>Mirror
            </label>

            <div class='ginput_container'>
                <input class='small' id='input_15_83' name='input_83[]' tabindex='102' type='text' value='0'>
            </div>
        </li>
        <li class='gfield qty_input' id='field_15_84' style='display:block;'>
            <label class='gfield_label' for='input_15_84'>Rug
            </label>

            <div class='ginput_container'>
                <input class='small' id='input_15_84' name='input_84[]' tabindex='103' type='text' value='0'>
            </div>
        </li>
        <li class='gfield qty_input' id='field_15_85' style='display:block;'>
            <label class='gfield_label' for='input_15_85'>Plant Pot
            </label>

            <div class='ginput_container'>
                <input class='small' id='input_15_85' name='input_85[]' tabindex='104' type='text' value='0'>
            </div>
        </li>
        <li class='gfield qty_input' id='field_15_86' style='display:block;'>
            <label class='gfield_label' for='input_15_86'>Sofa Seat
            </label>

            <div class='ginput_container'>
                <input class='small' id='input_15_86' name='input_86[]' tabindex='105' type='text' value='0'>
            </div>
        </li>
        <li class='gfield qty_input' id='field_15_87' style='display:block;'>
            <label class='gfield_label' for='input_15_87'>Stand
            </label>

            <div class='ginput_container'>
                <input class='small' id='input_15_87' name='input_87[]' tabindex='106' type='text' value='0'>
            </div>
        </li>
        <li class='gfield qty_input' id='field_15_88' style='display:block;'>
            <label class='gfield_label' for='input_15_88'>Table
            </label>

            <div class='ginput_container'>
                <input class='small' id='input_15_88' name='input_88[]' tabindex='107' type='text' value='0'>
            </div>
        </li>
        <li class='gfield qty_input' id='field_15_89' style='display:block;'>
            <label class='gfield_label' for='input_15_89'>Wall Art
            </label>

            <div class='ginput_container'>
                <input class='small' id='input_15_89' name='input_89[]' tabindex='108' type='text' value='0'>
            </div>
        </li>
        <li class='gfield qty_input' id='field_15_90' style='display:block;'>
            <label class='gfield_label' for='input_15_90_shim'>Hall <?php echo $i + 1; ?> Additional Items
            </label> <br>

            <div class='ginput_container ginput_list'>
                <input id='input_15_90_shim' onfocus='jQuery( "#field_15_90 table tr td:first-child input" ).focus();'
                       style='position:absolute;left:-999em;' type='text'>
                <table class='gfield_list'>
                    <colgroup>
                        <col class='gfield_list_col_odd' id='gfield_list_90_col_1'>
                        <col class='gfield_list_col_even' id='gfield_list_90_col_2'>
                        <col class='gfield_list_col_odd' id='gfield_list_90_col_3'>
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
                        <td class='gfield_list_cell gfield_list_90_cell1'>
                            <input name='input_90[<?php echo $i; ?>]' tabindex='109' type='text' value=''>
                        </td>
                        <td class='gfield_list_cell gfield_list_90_cell2'>
                            <input name='input_90[<?php echo $i; ?>]' tabindex='110' type='text' value=''>
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