<?php
use miloschuman\highcharts\Highcharts;

//echo Highcharts::widget([
//   'options' => [
//      'title' => ['text' => 'Fruit Consumption'],
//      'xAxis' => [
//         'categories' => ['Apples', 'Bananas', 'Oranges']
//      ],
//      'yAxis' => [
//         'title' => ['text' => 'Fruit eaten']
//      ],
//      'series' => [
//         ['name' => 'Jane', 'data' => [1, 0, 4]],
//         ['name' => 'John', 'data' => [5, 7, 3]]
//      ]
//   ]
//]);

//echo Highcharts::widget([
//    'options' => [
//        'chart' => [
//            'type' => 'column'
//        ],
//        'title' => ['text' => 'ทดสอบ'],
//        'xAxis' => [
//            'categories' => ['ทั้งหมด'],
//        ],
//        'yAxis' => [
//            'title' => ['text' => 'ครั้ง']],
//        'series' => [
//            ['name' => 'Tokyo',
//                'data' => [49.9]
//            ],
//            ['name' => 'New York',
//                'data' => [83.6]
//            ],
//            ['name' => 'London',
//                'data' => [48.9]
//            ],
//            ['name' => 'Berlin',
//                'data' => [42.4]
//            ]
//        ],
//    ]
//]);

echo Highcharts::widget([
    'options' => [
        'chart' => [
            'type' => 'column'
        ],
        'title' => ['text' => 'จำนวนคอมพิวเตอร์'],
        'xAxis' => [
            'categories' => ['ทั้งหมด'],
        ],
        'yAxis' => [
            'title' => ['text' => 'เครื่อง']],
        'series' =>      $chart,
        
    ]
]);

?>
