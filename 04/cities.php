<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header("Access-Control-Allow-Headers: X-Requested-With");

$province   = [
    "aceh"  => [
        "cities"    =>        [
            "Banda Aceh",
            "Langsa",
            "Lhokseumawe",
            "Sabang",
            "Subulussalam"
        ]
    ],
    "jabar" => [
        "cities"    => [
            "Bandung",
            "Bekasi",
            "Bogor",
            "Cimahi",
            "Cirebon",
            "Depok",
            "Sukabumi"
        ]
    ]
];
if(array_key_exists('province',$_GET)){
    $provinceQ  = $_GET['province'];
    echo json_encode($province[$provinceQ]['cities']);
}