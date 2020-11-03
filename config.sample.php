<?php
/**
 * @author Harry Tang <harry@powerkernel.com>
 * @link https://powerkernel.com
 * @copyright Copyright (c) 2018 Power Kernel
 */

return [
    'credentials' => [
        'key' => 'YOUR_AWS_KEY',
        'secret' => 'YOUR_AWS_SECRET',
    ],
    'region' => 'eu-west-3',
    'bucket'=>'you-bucket-name',
    'expiration'=>3,
	'endpoint' => 'https://ams3.digitaloceanspaces.com', //enable this for digitalocean space

    'google' => [
        'credentials' => [
            'key' => 'googlekey.json',
        ],
        'bucket'=>'graphicgenie-bck01',
    ]
];