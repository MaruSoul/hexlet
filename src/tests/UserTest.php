<?php

require_once __DIR__ . '/../index.php';

use Webmozart\Assert\Assert;

function test()
{
    Assert::eq(capitalize('hello'), 'Hello');

    Assert::eq(capitalize(''), '');
}
test();
echo 'tests finished';
