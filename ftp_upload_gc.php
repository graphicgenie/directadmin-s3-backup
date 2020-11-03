<?php

use Google\Cloud\Storage\StorageClient;

require __DIR__ . '/vendor/autoload.php';
$conf = require __DIR__ . '/config.php';

$ftp_local_file=$argv[1];
$ftp_remote_file=$argv[2];

// Authenticating with keyfile data.
$storage = new StorageClient([
    'keyFile' => json_decode(file_get_contents(__DIR__ . '/' . $conf['google']['credentials']['key']), true)
]);

$bucket = $storage->bucket($conf['google']['bucket']);

$options = [
     'resumable' => true,
     'name' => gethostname() .'/' . date('l') . '/' . $ftp_remote_file,
];

try {
    $object = $bucket->upload(
        fopen($ftp_local_file, 'r'),
        $options
    );
    echo "Upload complete: {$object->name()}\n";
} catch (InvalidArgumentException $e) {
    echo $e->getMessage() . "\n";
}

