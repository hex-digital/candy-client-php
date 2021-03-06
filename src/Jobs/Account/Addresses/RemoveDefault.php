<?php

namespace GetCandy\Client\Jobs\Account\Addresses;

use GetCandy\Client\AbstractJob;

class RemoveDefault extends AbstractJob
{
    protected $endpoint = 'addresses/{id}/default/remove';
    protected $handle = 'remove-default-address';
    protected $method = 'POST';
}
