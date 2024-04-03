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
<<<<<<< HEAD
        'csrf' => middlewares\CSRFMiddleware::class,
        'trim' => middlewares\TrimMiddleware::class,
        'specialChars' => middlewares\SpecialCharsMiddleware::class,
    ],
=======
        'csrf' => \Middlewares\CSRFMiddleware::class,
        'trim' => \Middlewares\TrimMiddleware::class,
        'specialChars' => \Middlewares\SpecialCharsMiddleware::class,
     ],
>>>>>>> a8157853a8246c08b1e320f46a2d26c7039cc3cd
     
     
    'validators' => [
        'required' => \Validators\RequireValidator::class,
        'unique' => \Validators\UniqueValidator::class
    ]
];

