<?php
for ($i = 0; $i < $_POST['len']; $i++) {
    ?>
    <div class="rooms_div">
        <li class='gfield gsection' id='field_15_61' style='display:block;'><h4 class='gsection_title'> Living
                Room <?php echo $i + 1; ?> Items</h4></li>
        <li class='gfield qty_input' id='field_15_62' style='display:block;'>
            <label class='gfield_label' for='input_15_62'>Bookcase
            </label>

            <div class='ginput_container'>
                <input class='small' id='input_15_62' name='input_62[]' tabindex='81' type='text' value='0'>
            </div>
        </li>
        <li class='gfield qty_input' id='field_15_63' style='display:block;'>
            <label class='gfield_label' for='input_15_63'>Cabinets
            </label>

            <div class='ginput_container'>
                <input class='small' id='input_15_63' name='input_63[]' tabindex='82' type='text' value='0'>
            </div>
        </li>
        <li class='gfield qty_input' id='field_15_64' style='display:block;'>
            <label class='gfield_label' for='input_15_64'>Coffee Table
            </label>

            <div class='ginput_container'>
                <input class='small' id='input_15_64' name='input_64[]' tabindex='83' type='text' value='0'>
            </div>
        </li>
        <li class='gfield qty_input' id='field_15_65' style='display:block;'>
            <label class='gfield_label' for='input_15_65'>Chair Recliner
            </label>

            <div class='ginput_container'>
                <input class='small' id='input_15_65' name='input_65[]' tabindex='84' type='text' value='0'>
            </div>
        </li>
        <li class='gfield qty_input' id='field_15_66' style='display:block;'>
            <label class='gfield_label' for='input_15_66'>Entertainment Storage Set
            </label>

            <div class='ginput_container'>
                <input class='small' id='input_15_66' name='input_66[]' tabindex='85' type='text' value='0'>
            </div>
        </li>
        <li class='gfield qty_input' id='field_15_67' style='display:block;'>
            <label class='gfield_label' for='input_15_67'>Heater
            </label>

            <div class='ginput_container'>
                <input class='small' id='input_15_67' name='input_67[]' tabindex='86' type='text' value='0'>
            </div>
        </li>
        <li class='gfield qty_input' id='field_15_68' style='display:block;'>
            <label class='gfield_label' for='input_15_68'>Home Theatre System
            </label>

            <div class='ginput_container'>
                <input class='small' id='input_15_68' name='input_68[]' tabindex='87' type='text' value='0'>
            </div>
        </li>
        <li class='gfield qty_input' id='field_15_69' style='display:block;'>
            <label class='gfield_label' for='input_15_69'>Lamp
            </label>

            <div class='ginput_container'>
                <input class='small' id='input_15_69' name='input_69[]' tabindex='88' type='text' value='0'>
            </div>
        </li>
        <li class='gfield qty_input' id='field_15_70' style='display:block;'>
            <label class='gfield_label' for='input_15_70'>Ottoman
            </label>

            <div class='ginput_container'>
                <input class='small' id='input_15_70' name='input_70[]' tabindex='89' type='text' value='0'>
            </div>
        </li>
        <li class='gfield qty_input' id='field_15_71' style='display:block;'>
            <label class='gfield_label' for='input_15_71'>Piano
            </label>

            <div class='ginput_container'>
                <input class='small' id='input_15_71' name='input_71[]' tabindex='90' type='text' value='0'>
            </div>
        </li>
        <li class='gfield qty_input' id='field_15_72' style='display:block;'>
            <label class='gfield_label' for='input_15_72'>Rugs
            </label>

            <div class='ginput_container'>
                <input class='small' id='input_15_72' name='input_72[]' tabindex='91' type='text' value='0'>
            </div>
        </li>
        <li class='gfield qty_input' id='field_15_73' style='display:block;'>
            <label class='gfield_label' for='input_15_73'>Sofa Set
            </label>

            <div class='ginput_container'>
                <input class='small' id='input_15_73' name='input_73[]' tabindex='92' type='text' value='0'>
            </div>
        </li>
        <li class='gfield qty_input' id='field_15_74' style='display:block;'>
            <label class='gfield_label' for='input_15_74'>Stereo System
            </label>

            <div class='ginput_container'>
                <input class='small' id='input_15_74' name='input_74[]' tabindex='93' type='text' value='0'>
            </div>
        </li>
        <li class='gfield qty_input' id='field_15_75' style='display:block;'>
            <label class='gfield_label' for='input_15_75'>TV
            </label>

            <div class='ginput_container'>
                <input class='small' id='input_15_75' name='input_75[]' tabindex='94' type='text' value='0'>
            </div>
        </li>
        <li class='gfield qty_input' id='field_15_76' style='display:block;'>
            <label class='gfield_label' for='input_15_76'>TV Cabinet
            </label>

            <div class='ginput_container'>
                <input class='small' id='input_15_76' name='input_76[]' tabindex='95' type='text' value='0'>
            </div>
        </li>
        <li class='gfield qty_input' id='field_15_77' style='display:block;'>
            <label class='gfield_label' for='input_15_77'>Wall art
            </label>

            <div class='ginput_container'>
                <input class='small' id='input_15_77' name='input_77[]' tabindex='96' type='text' value='0'>
            </div>
        </li>
        <li class='gfield qty_input' id='field_15_78' style='display:block;'>
            <label class='gfield_label' for='input_15_78_shim'>Living Room <?php echo $i + 1; ?> Additional Items
            </label> <br>

            <div class='ginput_container ginput_list'>
                <input id='input_15_78_shim' onfocus='jQuery( "#field_15_78 table tr td:first-child input" ).focus();'
                       style='position:absolute;left:-999em;' type='text'>
                <table class='gfield_list'>
                    <colgroup>
                        <col class='gfield_list_col_odd' id='gfield_list_78_col_1'>
                        <col class='gfield_list_col_even' id='gfield_list_78_col_2'>
                        <col class='gfield_list_col_odd' id='gfield_list_78_col_3'>
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
                        <td class='gfield_list_cell gfield_list_78_cell1'>
                            <input name='input_78[<?php echo $i; ?>]' tabindex='97' type='text' value=''>
                        </td>
                        <td class='gfield_list_cell gfield_list_78_cell2'>
                            <input name='input_78[<?php echo $i; ?>]' tabindex='98' type='text' value=''>
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