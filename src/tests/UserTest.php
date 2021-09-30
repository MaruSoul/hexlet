<?php

require_once __DIR__ . '/../index.php';

if (capitalize('hello') !== 'Hello') {
    throw new Exception('Function don\'t work');
}

if (capitalize('') !== '') {
    throw new Exception('Function don\'t work');
}

echo 'tests finished';
