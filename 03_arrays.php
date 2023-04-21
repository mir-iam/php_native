<?php

$numbers=[1,2,4,6,8,10];
$fruits= array('Apple','Peaches','Pears');
//var_dump($numbers);
//echo $fruits[2]

		// Associative array
$colors=[
1=>'red',
5=>'blue',
10=>'green'
];
//echo $colors[5];

$hex=[
'red'=>'#f00',
'blue'=>'0f0',
'green'=>'#00f'
];
//echo $hex['green'];

$person=[
	'first_name'=>'mariam',
	'last_name'=>'hisham',
	'email'=>'maryamhechamm@gmail.com'
];
//echo $person['first_name'];


// 3) Multi-dimensional arrays[arrays within arrays ]

$people=[
	[
		'first_name'=>'mariam',
		'last_name'=>'hisham',
		'email'=>'maryamhechamm@gmail.com'
	],
	[
		'first_name'=>'mimi',
		'last_name'=>'brad',
		'email'=>'mimibradd@gmail.com'
	],
	[
		'first_name'=>'anne',
		'last_name'=>'hataway',
		'email'=>'annehathaway@gmail.com'
	],

];

//echo $people[1]['email'];
var_dump(json_encode($people));










?>