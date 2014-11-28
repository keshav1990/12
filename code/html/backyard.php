<?php
for ($i = 0; $i < $_POST['len']; $i++) {
    ?>
    <div class="rooms_div">
        <li class='gfield gsection' id='field_15_215' style='display:block;'><h4 class='gsection_title'>
                Backyard <?php echo $i + 1; ?> Items</h4></li>
        <li class='gfield qty_input' id='field_15_216' style='display:block;'>
            <label class='gfield_label' for='input_15_216'>BBQ Set
            </label>

            <div class='ginput_container'>
                <input class='small' id='input_15_216' name='input_216[]' tabindex='235' type='text' value='0'>
            </div>
        </li>
        <li class='gfield qty_input' id='field_15_217' style='display:block;'>
            <label class='gfield_label' for='input_15_217'>Bench Seat
            </label>

            <div class='ginput_container'>
                <input class='small' id='input_15_217' name='input_217[]' tabindex='236' type='text' value='0'>
            </div>
        </li>
        <li class='gfield qty_input' id='field_15_218' style='display:block;'>
            <label class='gfield_label' for='input_15_218'>Bird Bath
            </label>

            <div class='ginput_container'>
                <input class='small' id='input_15_218' name='input_218[]' tabindex='237' type='text' value='0'>
            </div>
        </li>
        <li class='gfield qty_input' id='field_15_219' style='display:block;'>
            <label class='gfield_label' for='input_15_219'>Chair
            </label>

            <div class='ginput_container'>
                <input class='small' id='input_15_219' name='input_219[]' tabindex='238' type='text' value='0'>
            </div>
        </li>
        <li class='gfield qty_input' id='field_15_220' style='display:block;'>
            <label class='gfield_label' for='input_15_220'>Cubby House
            </label>

            <div class='ginput_container'>
                <input class='small' id='input_15_220' name='input_220[]' tabindex='239' type='text' value='0'>
            </div>
        </li>
        <li class='gfield qty_input' id='field_15_221' style='display:block;'>
            <label class='gfield_label' for='input_15_221'>Dog Kennel
            </label>

            <div class='ginput_container'>
                <input class='small' id='input_15_221' name='input_221[]' tabindex='240' type='text' value='0'>
            </div>
        </li>
        <li class='gfield qty_input' id='field_15_222' style='display:block;'>
            <label class='gfield_label' for='input_15_222'>Hose Reel
            </label>

            <div class='ginput_container'>
                <input class='small' id='input_15_222' name='input_222[]' tabindex='241' type='text' value='0'>
            </div>
        </li>
        <li class='gfield qty_input' id='field_15_223' style='display:block;'>
            <label class='gfield_label' for='input_15_223'>Plants
            </label>

            <div class='ginput_container'>
                <input class='small' id='input_15_223' name='input_223[]' tabindex='242' type='text' value='0'>
            </div>
        </li>
        <li class='gfield qty_input' id='field_15_224' style='display:block;'>
            <label class='gfield_label' for='input_15_224'>Outdoor Spa
            </label>

            <div class='ginput_container'>
                <input class='small' id='input_15_224' name='input_224[]' tabindex='243' type='text' value='0'>
            </div>
        </li>
        <li class='gfield qty_input' id='field_15_225' style='display:block;'>
            <label class='gfield_label' for='input_15_225'>Outdoor Table
            </label>

            <div class='ginput_container'>
                <input class='small' id='input_15_225' name='input_225[]' tabindex='244' type='text' value='0'>
            </div>
        </li>
        <li class='gfield qty_input' id='field_15_226' style='display:block;'>
            <label class='gfield_label' for='input_15_226'>Outdoor Umbrella
            </label>

            <div class='ginput_container'>
                <input class='small' id='input_15_226' name='input_226[]' tabindex='245' type='text' value='0'>
            </div>
        </li>
        <li class='gfield qty_input' id='field_15_227' style='display:block;'>
            <label class='gfield_label' for='input_15_227'>Sun Lounge
            </label>

            <div class='ginput_container'>
                <input class='small' id='input_15_227' name='input_227[]' tabindex='246' type='text' value='0'>
            </div>
        </li>
        <li class='gfield qty_input' id='field_15_228' style='display:block;'>
            <label class='gfield_label' for='input_15_228'>Swing Set
            </label>

            <div class='ginput_container'>
                <input class='small' id='input_15_228' name='input_228[]' tabindex='247' type='text' value='0'>
            </div>
        </li>
        <li class='gfield qty_input' id='field_15_229' style='display:block;'>
            <label class='gfield_label' for='input_15_229'>Trampoline
            </label>

            <div class='ginput_container'>
                <input class='small' id='input_15_229' name='input_229[]' tabindex='248' type='text' value='0'>
            </div>
        </li>
        <li class='gfield qty_input' id='field_15_230' style='display:block;'>
            <label class='gfield_label' for='input_15_230_shim'>Backyard <?php echo $i + 1; ?> Additional Items
            </label> <br>

            <div class='ginput_container ginput_list'>
                <input id='input_15_230_shim' onfocus='jQuery( "#field_15_230 table tr td:first-child input" ).focus();'
                       style='position:absolute;left:-999em;' type='text'>
                <table class='gfield_list'>
                    <colgroup>
                        <col class='gfield_list_col_odd' id='gfield_list_230_col_1'>
                        <col class='gfield_list_col_even' id='gfield_list_230_col_2'>
                        <col class='gfield_list_col_odd' id='gfield_list_230_col_3'>
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
                        <td class='gfield_list_cell gfield_list_230_cell1'>
                            <input name='input_230[<?php echo $i; ?>]' tabindex='249' type='text' value=''>
                        </td>
                        <td class='gfield_list_cell gfield_list_230_cell2'>
                            <input name='input_230[<?php echo $i; ?>]' tabindex='250' type='text' value=''>
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