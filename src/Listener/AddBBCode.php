<?php

/*
 * (c) Andrey Sobkanyuk <github@chapay.com>
 * (c) Billy Wilcosky <admin@breathingboard.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Breathingboard\Audio\Listener;

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
            '<audio src="{URL}" preload="none" controls>Sorry, your browser does not support this audio player or the file type.</audio>'
        );
    }
}
