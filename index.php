<?php

Kirby::plugin('mirthe/mygoodreads', [
    'options' => [
        'apiKey'    => option('goodreads.apiKey'),
        'accountnr' => option('goodreads.accountnr')
    ],
    'snippets' => [
        'goodreads-books-read' => __DIR__ . '/snippets/books.php'
    ],
    'translations' => [
        // hoe forceer ik mijn site naar NL?
        // of als option opnemen, zoals bij bijv 
        // https://github.com/BenediktEngel/google-calendar-plugin/blob/master/index.php
        'en' => [
            'mirthe.mygoodreads.currently-reading' => 'Aan het lezen',
            'mirthe.mygoodreads.quit' => 'Weggelegd',
            'mirthe.mygoodreads.want-to-continue' => 'Nog eens verder',
        ],
        // 'en' => [
        //     'mirthe.mygoodreads.currently-reading' => 'Currently reading',
        //     'mirthe.mygoodreads.quit' => 'Quit',
        //     'mirthe.mygoodreads.want-to-continue' => 'Want to continue',
        // ]
    ]
]);