<?php
for ($i = 0; $i < $_POST['len']; $i++) {
    ?>
    <div class="rooms_div">
        <li class='gfield gsection' id='field_15_185' style='display:block;'><h4 class='gsection_title'>
                Gym <?php echo $i + 1; ?> Items</h4></li>
        <li class='gfield qty_input' id='field_15_186' style='display:block;'>
            <label class='gfield_label' for='input_15_186'>Chair
            </label>

            <div class='ginput_container'>
                <input class='small' id='input_15_186' name='input_186[]' tabindex='205' type='text' value='0'>
            </div>
        </li>
        <li class='gfield qty_input' id='field_15_187' style='display:block;'>
            <label class='gfield_label' for='input_15_187'>Crosstrainer
            </label>

            <div class='ginput_container'>
                <input class='small' id='input_15_187' name='input_187[]' tabindex='206' type='text' value='0'>
            </div>
        </li>
        <li class='gfield qty_input' id='field_15_188' style='display:block;'>
            <label class='gfield_label' for='input_15_188'>Fitness Cycle
            </label>

            <div class='ginput_container'>
                <input class='small' id='input_15_188' name='input_188[]' tabindex='207' type='text' value='0'>
            </div>
        </li>
        <li class='gfield qty_input' id='field_15_189' style='display:block;'>
            <label class='gfield_label' for='input_15_189'>Mirror
            </label>

            <div class='ginput_container'>
                <input class='small' id='input_15_189' name='input_189[]' tabindex='208' type='text' value='0'>
            </div>
        </li>
        <li class='gfield qty_input' id='field_15_190' style='display:block;'>
            <label class='gfield_label' for='input_15_190'>Treadmill
            </label>

            <div class='ginput_container'>
                <input class='small' id='input_15_190' name='input_190[]' tabindex='209' type='text' value='0'>
            </div>
        </li>
        <li class='gfield qty_input' id='field_15_191' style='display:block;'>
            <label class='gfield_label' for='input_15_191'>TV
            </label>

            <div class='ginput_container'>
                <input class='small' id='input_15_191' name='input_191[]' tabindex='210' type='text' value='0'>
            </div>
        </li>
        <li class='gfield qty_input' id='field_15_192' style='display:block;'>
            <label class='gfield_label' for='input_15_192'>Weight Sets
            </label>

            <div class='ginput_container'>
                <input class='small' id='input_15_192' name='input_192[]' tabindex='211' type='text' value='0'>
            </div>
        </li>
        <li class='gfield qty_input' id='field_15_193' style='display:block;'>
            <label class='gfield_label' for='input_15_193'>Workout Machine
            </label>

            <div class='ginput_container'>
                <input class='small' id='input_15_193' name='input_193[]' tabindex='212' type='text' value='0'>
            </div>
        </li>
        <li class='gfield qty_input' id='field_15_194' style='display:block;'>
            <label class='gfield_label' for='input_15_194_shim'>Gym <?php echo $i + 1; ?> Additional Items
            </label> <br>

            <div class='ginput_container ginput_list'>
                <input id='input_15_194_shim' onfocus='jQuery( "#field_15_194 table tr td:first-child input" ).focus();'
                       style='position:absolute;left:-999em;' type='text'>
                <table class='gfield_list'>
                    <colgroup>
                        <col class='gfield_list_col_odd' id='gfield_list_194_col_1'>
                        <col class='gfield_list_col_even' id='gfield_list_194_col_2'>
                        <col class='gfield_list_col_odd' id='gfield_list_194_col_3'>
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
                        <td class='gfield_list_cell gfield_list_194_cell1'>
                            <input name='input_194[<?php echo $i; ?>]' tabindex='213' type='text' value=''>
                        </td>
                        <td class='gfield_list_cell gfield_list_194_cell2'>
                            <input name='input_194[<?php echo $i; ?>]' tabindex='214' type='text' value=''>
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