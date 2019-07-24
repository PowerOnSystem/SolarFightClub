<?php
/* 
 * Copyright (C) PowerOn Sistemas - All Rights Reserved
 * Unauthorized copying of this file, via any medium is strictly prohibited
 * Proprietary and confidential
 * Written by Lucas Sosa <sosalucas87@gmail.com>, Octubre 2018
 */
return [
    'settings' => [
        'displayErrorDetails' => true, // set to false in production
        'addContentLengthHeader' => false, // Allow the web server to send the content-length header

        // Monolog settings
        'logger' => [
            'name' => 'solar-fight-club',
            'path' => getenv('docker') ? 'php://stdout' : __DIR__ . '/../logs/solar-fight-club.log',
            'level' => \Monolog\Logger::DEBUG,
        ],
    ],
];
