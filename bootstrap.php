<?php

/*
 * (c) Andrey Sobkanyuk <github@chapay.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use Chapay\Audio\Listener;
use Illuminate\Contracts\Events\Dispatcher;

return function (Dispatcher $events) {
    $events->subscribe(Listener\AddBBCode::class);
};
