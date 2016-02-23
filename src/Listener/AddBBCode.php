<?php

/*
 * (c) Andrey Sobkanyuk <github@chapay.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Chapay\Audio\Listener;

use Flarum\Event\ConfigureFormatter;
use Illuminate\Contracts\Events\Dispatcher;

class AddBBCode
{
    /**
     * @param Dispatcher $events
     */
    public function subscribe(Dispatcher $events)
    {
        $events->listen(ConfigureFormatter::class, [$this, 'AddBBCode']);
    }

    /**
     * @param ConfigureFormatter $event
     */
    public function AddBBCode(ConfigureFormatter $event)
    {
        $event->configurator->BBCodes->addCustom(
            '[AUDIO]{URL;useContent}[/AUDIO]',
            '<audio src="{URL}" controls preload="none"><p>Your browser does not support the <code>audio</code> element.</p></audio>'
        );
    }
}
