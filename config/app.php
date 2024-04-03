<?php
return [
    //Класс аутентификации
    'auth' => \Src\Auth\Auth::class,
    //Клас пользователя
    'identity' => \Model\User::class,

    //Классы для middleware
    'routeMiddleware' => [
        'auth' => \Middlewares\AuthMiddleware::class,
    ],
    'routeAppMiddleware' => [
        'csrf' => middlewares\CSRFMiddleware::class,
        'trim' => middlewares\TrimMiddleware::class,
        'specialChars' => middlewares\SpecialCharsMiddleware::class,
    ],
     
     
    'validators' => [
        'required' => \Validators\RequireValidator::class,
        'unique' => \Validators\UniqueValidator::class
    ]
];

