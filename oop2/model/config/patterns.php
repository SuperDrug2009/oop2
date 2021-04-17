<?php
$patterns = [
    
    
    'phone-ukr'=> [
        'regex' => '/^[0-9]{10}$/',
        'callback' => function ($matches) { 
            printme($matches); 
            $string = $matches[0];

            return '+38' .$string;
        }
    ],

    'surname' => [ 
        'regex' => '/^([A-Z]{1}[a-z]{1,23})$/' 
    ],
    
    'email' => [ 
        'regex' => '/^[a-zA-Z1-9\-\._]+@[a-z1-9]+(.[a-z1-9]+){1,}$/'
    ],

    'iban' => [ 
        'regex' => '/[^A-Z|a-z|0-9]*/'
    ]
    
];