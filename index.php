<?php

use TreeComponent\Factory\FlatArrayFactoryAbstract;

require_once "vendor/autoload.php";


$array = [
    [
        'id' => 1,
        'parent_id' => 0,
        'name' => 'Первый',
        'children' => [
            [
                'id' => 3,
                'parent_id' => 1,
                'name' => 'Подпункт первого',
                'children' => [
                    [
                        'id' => 4,
                        'parent_id' => 3,
                        'name' => 'Подпункт подпункта'
                    ],
                ]
            ],

        ],
    ],
    [
        'id' => 2,
        'parent_id' => 0,
        'name' => 'Второй'
    ],
];

$tree = FlatArrayFactoryAbstract::createStructure($array);

foreach ($tree->getChildren() as $item) {

}