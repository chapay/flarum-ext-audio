<?php

/*
 * (c) Andrey Sobkanyuk <github@chapay.com>
 * (c) Billy Wilcosky <admin@breathingboard.com>
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use Breathingboard\Audio\Listener;
use Illuminate\Contracts\Events\Dispatcher;

return function (Dispatcher $events) {
    $events->subscribe(Listener\AddBBCode::class);
};
