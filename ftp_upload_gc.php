<?php

use Google\Cloud\Storage\StorageClient;

require __DIR__ . '/vendor/autoload.php';
$conf = require __DIR__ . '/config.php';

$ftp_local_file=$argv[1];
$ftp_remote_file=$argv[2];
$ftp_path=$argv[3];

// Authenticating with keyfile data.
$storage = new StorageClient([
    'keyFile' => json_decode(file_get_contents(__DIR__ . $conf['google']['credentials']['key']), true)
]);

$bucket = $storage->bucket($conf['google']['bucket']);

var_dump($bucket->upload(
    fopen('file.txt', 'r')
));