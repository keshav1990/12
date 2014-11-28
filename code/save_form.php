<?php
error_reporting(E_ALL);
session_start();
require 'required/database.php';
$pdo = new TransactionDemo();

$pdo->start_transtaion();

$appp = array();
$appp1 = array();
if (isset($_REQUEST['form_data'])) {
    foreach ($_REQUEST['form_data'] as $data) {
        $appp[$data['name']][] = $data['value'];
    }
}

if (isset($_REQUEST['form_data'])) {
    foreach ($_REQUEST['form_data'] as $data1) {
        $appp1[$data1['name']] = $data1['value'];
    }
}


/* ------------------------------ This query for Contact Information section -------------------------------------*/
$prefix = "iisscj_";
if (isset($appp['input_252'])) {
    $lastid = $pdo->insert_contact_details($prefix . 'contact_details',
        array(
            "firstname" => $appp1['input_252'],
            "lastname" => $appp1['input_253'],
            "email" => $appp1['input_254'],
            "phone_day" => $appp1['input_256'],
            "phone_mobile" => $appp1['input_257']
        ));
}

if (isset($appp1['input_6'])) {
    $input_6 = $appp1['input_6'];
} else {
    $input_6 = "";
}

if (isset($appp1['input_19 '])) {
    $input_19 = $appp1['input_19 '];
} else {
    $input_19 = "";
}

if (isset($appp1['input_20 '])) {
    $input_20 = $appp1['input_20'];
} else {
    $input_20 = "";
}

if (isset($appp1['input_21'])) {
    $input_21 = $appp1['input_21'];
} else {
    $input_21 = "";
}

if (isset($appp1['input_22'])) {
    $input_22 = $appp1['input_22'];
} else {
    $input_22 = "";
}

if (isset($appp1['input_23'])) {
    $input_23 = $appp1['input_23'];
} else {
    $input_23 = "";
}

if (isset($appp1['input_24'])) {
    $input_24 = $appp1['input_24'];
} else {
    $input_24 = "";
}

if (isset($appp1['input_25'])) {
    $input_25 = $appp1['input_25'];
} else {
    $input_25 = "";
}


/* ------------------------------ This query for your moving details section -------------------------------------*/

if ($appp1['input_1'] != "") {
    $date1 = explode('/', $appp1['input_1']);
    $date = $date1[2] . "-" . $date1[1] . "-" . $date1[0];
} else {
    $date = "";
}
$input_5 = json_encode($appp['input_5[]']);
$pdo->insert($prefix . 'moving_details', array(
    "contact_details_id" => $lastid,
    "move_date" => $date,
    "is_date_flexible" => $appp1['input_2'],
    "no_of_days_flexible" => $appp1['input_3'],
    "is_roughly_known" => $appp1['input_4'],
    "move_time" => $input_5,
    "is_time_flexible" => $input_6,
    "no_of_moving_hours" => $appp1['input_7'],
    "moving_in" => $appp1['input_8'],
    "pickup_address" => $appp1['input_9'],
    "destination_address" => $appp1['input_10'],
    "pickup_city" => $appp1['input_11'],
    "destination_city" => $appp1['input_12'],
    "pickup_address_stairs" => $appp1['input_13'],
    "destination_address_stairs" => $appp1['input_14'],
    "pickup_address_lift" => $appp1['input_15'],
    "destination_address_lift" => $appp1['input_16'],
    "pickup_address_driveway" => $appp1['input_17'],
    "destination_address_driveway" => $appp1['input_18'],
    "pickup_driveway_type" => $input_19,
    "destination_driveway_type" => $input_20,
    "pickup_large_vehicle_turn_around_space" => $input_21,
    "destination_large_vehicle_turn_around_space" => $input_22,
    "relocation_packaging" => $input_23,
    "relocation_storage" => $input_24,
    "relocation_insurance" => $input_25,
    "relocation_contents_value_for_insurance" => $appp1['input_26'],
    "optional_detail" => $appp1['input_27']

));


/* ------------------------------ This query for quotation details section -------------------------------------*/


if (isset($appp1['input_30'])) {
    $pdo->insert('quotation_details',
        array(
            "contact_details_id" => $lastid,
            'office_size' => $appp1['input_30']
        ));
} elseif (isset($appp1['input_248'])) {
    $pdo->insert('quotation_details',
        array(
            "contact_details_id" => $lastid,
            'items_to_move' => $appp1['input_248'],
            'other_items_to_move' => $appp1['input_249']
        ));
} else {
    $pdo->insert($prefix . 'quotation_details',
        array(
            "contact_details_id" => $lastid,
            'entrance' => $appp1['input_33'],
            'living_room' => $appp1['input_34'],
            'hall' => $appp1['input_35'],
            'bedroom' => $appp1['input_36'],
            'family_room' => $appp1['input_37'],
            'dining_room' => $appp1['input_38'],
            'kitchen' => $appp1['input_39'],
            'bathroom' => $appp1['input_40'],
            'laundry' => $appp1['input_41'],
            'office' => $appp1['input_42'],
            'gym' => $appp1['input_43'],
            'garage' => $appp1['input_44'],
            'shed' => $appp1['input_45'],
            'backyard' => $appp1['input_46'],
            'store_room' => $appp1['input_47'],
            'cellar' => $appp1['input_48'],
            'estimate_or_quote' => $appp1['input_49']
        ));
}


/* ------------------------------ This query for Entrance Items -------------------------------------*/


if (isset($appp['input_52[]'])) {
    for ($i = 0; $i < count($appp['input_52[]']); $i++) {
        $pdo->insert($prefix . 'entrance_details',
            array(
                "contact_details_id" => $lastid,
                "coat_stand" => $appp['input_52[]'][$i],
                "mirror" => $appp['input_53[]'][$i],
                "plant" => $appp['input_54[]'][$i],
                "rug" => $appp['input_55[]'][$i],
                "statue" => $appp['input_56[]'][$i],
                "ent_table" => $appp['input_57[]'][$i],
                "vase" => $appp['input_58[]'][$i],
                "wall_art" => $appp['input_59[]'][$i],
                "entrance_additional_items" => json_encode($appp['input_60[' . $i . ']'])
            ));
    }
}


/* ------------------------------ This query for Living Room Items -------------------------------------*/

if (isset($appp['input_62[]'])) {
    for ($i = 0; $i < count($appp['input_62[]']); $i++) {
        $pdo->insert($prefix . 'living_room_details',
            array(
                "contact_details_id" => $lastid,
                "bookcase" => $appp['input_62[]'][$i],
                "cabinets" => $appp['input_63[]'][$i],
                "coffee_table" => $appp['input_64[]'][$i],
                "chair_recliner" => $appp['input_65[]'][$i],
                "storage_set" => $appp['input_66[]'][$i],
                "heater" => $appp['input_67[]'][$i],
                "theatre_system" => $appp['input_68[]'][$i],
                "lamp" => $appp['input_69[]'][$i],
                "ottoman" => $appp['input_70[]'][$i],
                "piano" => $appp['input_71[]'][$i],
                "rugs" => $appp['input_72[]'][$i],
                "sofa_set" => $appp['input_73[]'][$i],
                "stereo_system" => $appp['input_74[]'][$i],
                "tv" => $appp['input_75[]'][$i],
                "tv_cabinet" => $appp['input_76[]'][$i],
                "wall_art" => $appp['input_77[]'][$i],
                "living_additional_items" => json_encode($appp['input_78[' . $i . ']'])
            ));
    }
}


/* ------------------------------ This query for Hall Items -------------------------------------*/

if (isset($appp['input_80[]'])) {
    for ($i = 0; $i < count($appp['input_80[]']); $i++) {
        $pdo->insert($prefix . 'hall_details',
            array(
                "contact_details_id" => $lastid,
                "bookcase" => $appp['input_80[]'][$i],
                "cock" => $appp['input_81[]'][$i],
                "lamp" => $appp['input_82[]'][$i],
                "mirror" => $appp['input_83[]'][$i],
                "rug" => $appp['input_84[]'][$i],
                "plant_pot" => $appp['input_85[]'][$i],
                "sofa_seat" => $appp['input_86[]'][$i],
                "stand" => $appp['input_87[]'][$i],
                "hall_table" => $appp['input_88[]'][$i],
                "wall_art" => $appp['input_89[]'][$i],
                "hall_additional_items" => json_encode($appp['input_90[' . $i . ']'])
            ));
    }
}

/* ------------------------------ This query for Bathroom Items -------------------------------------*/

if (isset($appp['input_92[]'])) {
    for ($i = 0; $i < count($appp['input_92[]']); $i++) {
        $pdo->insert($prefix . 'bedroom_details',
            array(
                "contact_details_id" => $lastid,
                "bed_single" => $appp['input_92[]'][$i],
                "bed_double" => $appp['input_93[]'][$i],
                "bed_queen" => $appp['input_94[]'][$i],
                "bed_king" => $appp['input_95[]'][$i],
                "bedside_table" => $appp['input_96[]'][$i],
                "bookcase" => $appp['input_97[]'][$i],
                "chest_of_drawers" => $appp['input_98[]'][$i],
                "cot" => $appp['input_99[]'][$i],
                "chairs" => $appp['input_100[]'][$i],
                "computer" => $appp['input_101[]'][$i],
                "desk" => $appp['input_102[]'][$i],
                "dresser" => $appp['input_103[]'][$i],
                "heater" => $appp['input_104[]'][$i],
                "lamp" => $appp['input_105[]'][$i],
                "mirror" => $appp['input_106[]'][$i],
                "printer" => $appp['input_107[]'][$i],
                "rug" => $appp['input_108[]'][$i],
                "stereo_system" => $appp['input_109[]'][$i],
                "tallboy" => $appp['input_110[]'][$i],
                "tv" => $appp['input_111[]'][$i],
                "tv_cabinet" => $appp['input_112[]'][$i],
                "painting" => $appp['input_113[]'][$i],
                "wardrobe_single" => $appp['input_114[]'][$i],
                "wardrobe_double" => $appp['input_115[]'][$i],
                "bedroom_additional_items" => json_encode($appp['input_116[' . $i . ']'])
            ));
    }
}


/* ------------------------------ This query for Family Room Items -------------------------------------*/

if (isset($appp['input_118[]'])) {
    for ($i = 0; $i < count($appp['input_118[]']); $i++) {
        $pdo->insert($prefix . 'family_room_details',
            array(
                "contact_details_id" => $lastid,
                "bookcase" => $appp['input_118[]'][$i],
                "cabinet" => $appp['input_119[]'][$i],
                "chair" => $appp['input_120[]'][$i],
                "coffee_table" => $appp['input_121[]'][$i],
                "chaise_lounge" => $appp['input_122[]'][$i],
                "storage_set" => $appp['input_123[]'][$i],
                "rugs" => $appp['input_124[]'][$i],
                "sofa_set" => $appp['input_125[]'][$i],
                "tv" => $appp['input_126[]'][$i],
                "wall_art" => $appp['input_127[]'][$i],
                "family_room_additional_items" => json_encode($appp['input_128[' . $i . ']'])
            ));
    }
}


/* ------------------------------ This query for Dining Room Items -------------------------------------*/

if (isset($appp['input_130[]'])) {
    for ($i = 0; $i < count($appp['input_130[]']); $i++) {
        $pdo->insert($prefix . 'dining_room_details',
            array(
                "contact_details_id" => $lastid,
                "bookcase" => $appp['input_130[]'][$i],
                "chair" => $appp['input_131[]'][$i],
                "chest_of_drawers" => $appp['input_132[]'][$i],
                "heater" => $appp['input_133[]'][$i],
                "high_chair" => $appp['input_134[]'][$i],
                "lamp" => $appp['input_135[]'][$i],
                "storage_cabinet" => $appp['input_136[]'][$i],
                "table_s" => $appp['input_137[]'][$i],
                "table_m" => $appp['input_138[]'][$i],
                "table_l" => $appp['input_139[]'][$i],
                "painting" => $appp['input_140[]'][$i],
                "dining_additional_items" => json_encode($appp['input_141[' . $i . ']'])
            ));
    }
}


/* ------------------------------ This query for Kitchen Items -------------------------------------*/

if (isset($appp['input_143[]'])) {
    for ($i = 0; $i < count($appp['input_143[]']); $i++) {
        $pdo->insert($prefix . 'kitchen_details',
            array(
                "contact_details_id" => $lastid,
                "buffet" => $appp['input_143[]'][$i],
                "chair" => $appp['input_144[]'][$i],
                "dishwasher" => $appp['input_145[]'][$i],
                "drawer" => $appp['input_146[]'][$i],
                "fridge" => $appp['input_147[]'][$i],
                "freezer" => $appp['input_148[]'][$i],
                "microwave" => $appp['input_149[]'][$i],
                "stove" => $appp['input_150[]'][$i],
                "storage_cabinet" => $appp['input_151[]'][$i],
                "kitchen_table" => $appp['input_152[]'][$i],
                "kitchen_additional_items" => json_encode($appp['input_153[' . $i . ']'])
            ));
    }
}


/* ------------------------------ This query for Bathroom Items -------------------------------------*/

if (isset($appp['input_155[]'])) {
    for ($i = 0; $i < count($appp['input_155[]']); $i++) {
        $pdo->insert($prefix . 'bathroom_details',
            array(
                "contact_details_id" => $lastid,
                "cabient" => $appp['input_155[]'][$i],
                "heater" => $appp['input_156[]'][$i],
                "mirror" => $appp['input_157[]'][$i],
                "wall_art" => $appp['input_158[]'][$i],
                "bathroom_additional_items" => json_encode($appp['input_159[' . $i . ']'])
            ));
    }
}


/* ------------------------------ This query for Laundry Items -------------------------------------*/

if (isset($appp['input_161[]'])) {
    for ($i = 0; $i < count($appp['input_161[]']); $i++) {
        $pdo->insert($prefix . 'laundry_details',
            array(
                "contact_details_id" => $lastid,
                "cabinet" => $appp['input_161[]'][$i],
                "clothes_dryer" => $appp['input_162[]'][$i],
                "clothing_basket" => $appp['input_163[]'][$i],
                "iron" => $appp['input_164[]'][$i],
                "ironing_board" => $appp['input_165[]'][$i],
                "washing_machine" => $appp['input_166[]'][$i],
                "laundry_additional_items" => json_encode($appp['input_167[' . $i . ']'])
            ));
    }
}


/* ------------------------------ This query for Office Items -------------------------------------*/

if (isset($appp['input_169[]'])) {
    for ($i = 0; $i < count($appp['input_169[]']); $i++) {
        $pdo->insert($prefix . 'office_details',
            array(
                "contact_details_id" => $lastid,
                "arm_chair" => $appp['input_169[]'][$i],
                "bulletin_board" => $appp['input_170[]'][$i],
                "bookcase" => $appp['input_171[]'][$i],
                "computer" => $appp['input_172[]'][$i],
                "desk" => $appp['input_173[]'][$i],
                "drawer_set" => $appp['input_174[]'][$i],
                "filing_cabinet" => $appp['input_175[]'][$i],
                "heater" => $appp['input_176[]'][$i],
                "office_chair" => $appp['input_177[]'][$i],
                "printer" => $appp['input_178[]'][$i],
                "safe" => $appp['input_179[]'][$i],
                "sofa" => $appp['input_180[]'][$i],
                "tv" => $appp['input_181[]'][$i],
                "wall_art" => $appp['input_182[]'][$i],
                "whiteboard" => $appp['input_183[]'][$i],
                "office_additional_items" => json_encode($appp['input_184[' . $i . ']'])
            ));
    }
}


/* ------------------------------ This query for Gym Items -------------------------------------*/

if (isset($appp['input_186[]'])) {
    for ($i = 0; $i < count($appp['input_186[]']); $i++) {
        $pdo->insert($prefix . 'gym_details',
            array(
                "contact_details_id" => $lastid,
                "chair" => $appp['input_186[]'][$i],
                "crosstrainer" => $appp['input_187[]'][$i],
                "fitness_cycle" => $appp['input_188[]'][$i],
                "mirror" => $appp['input_188[]'][$i],
                "treadmill" => $appp['input_190[]'][$i],
                "tv" => $appp['input_191[]'][$i],
                "weight_sets" => $appp['input_192[]'][$i],
                "workout_machine" => $appp['input_193[]'][$i],
                "gym_additional_items" => json_encode($appp['input_194[' . $i . ']'])
            ));
    }
}


/* ------------------------------ This query for Garage Items -------------------------------------*/

if (isset($appp['input_196[]'])) {
    for ($i = 0; $i < count($appp['input_196[]']); $i++) {
        $pdo->insert($prefix . 'garage_details',
            array(
                "contact_details_id" => $lastid,
                "bbq" => $appp['input_196[]'][$i],
                "bicycle" => $appp['input_197[]'][$i],
                "fitness_bike" => $appp['input_198[]'][$i],
                "ladder" => $appp['input_199[]'][$i],
                "mower" => $appp['input_200[]'][$i],
                "garage_table" => $appp['input_201[]'][$i],
                "treadmill" => $appp['input_202[]'][$i],
                "wheelbarrow" => $appp['input_203[]'][$i],
                "garage_additional_items" => json_encode($appp['input_204[' . $i . ']'])
            ));
    }
}


/* ------------------------------ This query for Shed Items -------------------------------------*/

if (isset($appp['input_206[]'])) {
    for ($i = 0; $i < count($appp['input_206[]']); $i++) {
        $pdo->insert($prefix . 'shed_details',
            array(
                "contact_details_id" => $lastid,
                "bike" => $appp['input_206[]'][$i],
                "camping_gear" => $appp['input_207[]'][$i],
                "ladder" => $appp['input_208[]'][$i],
                "mower" => $appp['input_209[]'][$i],
                "shelf" => $appp['input_210[]'][$i],
                "tool_set" => $appp['input_211[]'][$i],
                "wheelbarrow" => $appp['input_212[]'][$i],
                "working_bench" => $appp['input_213[]'][$i],
                "shed_additional_items" => json_encode($appp['input_214[' . $i . ']'])
            ));
    }
}


/* ------------------------------ This query for Beckyard Items -------------------------------------*/

if (isset($appp['input_216[]'])) {
    for ($i = 0; $i < count($appp['input_216[]']); $i++) {
        $pdo->insert($prefix . 'backyard_details',
            array(
                "contact_details_id" => $lastid,
                "bbq" => $appp['input_216[]'][$i],
                "bench" => $appp['input_217[]'][$i],
                "bird_bath" => $appp['input_218[]'][$i],
                "chair" => $appp['input_219[]'][$i],
                "cubby_house" => $appp['input_220[]'][$i],
                "dog_kennel" => $appp['input_221[]'][$i],
                "hose_reel" => $appp['input_222[]'][$i],
                "plants" => $appp['input_223[]'][$i],
                "outdoor_spa" => $appp['input_224[]'][$i],
                "outdoor_table" => $appp['input_225[]'][$i],
                "outdoor_umbrella" => $appp['input_226[]'][$i],
                "sun_lounge" => $appp['input_227[]'][$i],
                "swing_set" => $appp['input_228[]'][$i],
                "trampoline" => $appp['input_229[]'][$i],
                "backyard_additional_items" => json_encode($appp['input_230[' . $i . ']'])
            ));
    }
}


/* ------------------------------ This query for Store Items -------------------------------------*/

if (isset($appp['input_232[]'])) {
    for ($i = 0; $i < count($appp['input_232[]']); $i++) {
        $pdo->insert($prefix . 'store_details',
            array(
                "contact_details_id" => $lastid,
                "bbq" => $appp['input_232[]'][$i],
                "bike" => $appp['input_233[]'][$i],
                "cabinet" => $appp['input_234[]'][$i],
                "chair" => $appp['input_235[]'][$i],
                "cooling_bin" => $appp['input_236[]'][$i],
                "fridge" => $appp['input_237[]'][$i],
                "store_table" => $appp['input_238[]'][$i],
                "wheelie_bin" => $appp['input_239[]'][$i],
                "store_additional_items" => json_encode($appp['input_240[' . $i . ']'])
            ));
    }
}


/* ------------------------------ This query for Cellar Items -------------------------------------*/

if (isset($appp['input_243[]'])) {
    for ($i = 0; $i < count($appp['input_243[]']); $i++) {
        $pdo->insert($prefix . 'cellar_details',
            array(
                "contact_details_id" => $lastid,
                "cabinet" => $appp['input_243[]'][$i],
                "wine_pack" => $appp['input_244[]'][$i],
                "bar_fridge" => $appp['input_245[]'][$i],
                "cellar_additional_items" => json_encode($appp['input_246[' . $i . ']'])
            ));
    }
}

$pdo->end_transtaion();


?>