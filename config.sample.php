<?php
/**
 * @author Harry Tang <harry@powerkernel.com>
 * @link https://powerkernel.com
 * @copyright Copyright (c) 2018 Power Kernel
 */

return [
    'credentials' => [
        'key' => 'YOUR_S3_KEY',
        'secret' => 'YOUR_S3_SECRET',
    ],
    'region' => 'nl.dadup.eu',
    'bucket'=> 'bucket_name',
    'expiration'=> 3,
	'endpoint' => 'ENDPOINT', //enable this for digitalocean space

    'google' => [
        'credentials' => [
            'key' => 'GOOGLE_KEY_FILE',
        ],
        'bucket'=>'GOOGLE_BUCKET',
    ]
];