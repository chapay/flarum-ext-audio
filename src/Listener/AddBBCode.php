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
            '<audio src="{URL}" preload="none" controls>Sorry your browser does not support this audio player or the file type.</audio>'
        );
        $event->configurator->BBCodes->addCustom(
            '[AUDIO]mp3={URL1;useContent}ogg={URL2;useContent}wav={URL3;useContent}[/AUDIO]',
            '<audio preload="none" controls><source src="{URL1}" type="audio/mpeg"><source src="{URL2}" type="audio/ogg"><source src="{URL3}" type="audio/wav">Sorry your browser does not support this audio player or the file type.</audio>'
        );
        $event->configurator->BBCodes->addCustom(
            '[AUDIO]mp3={URL4;useContent}ogg={URL5;useContent}[/AUDIO]',
            '<audio preload="none" controls><source src="{URL4}" type="audio/mpeg"><source src="{URL5}" type="audio/ogg">Sorry your browser does not support this audio player or the file type.</audio>'
        );
        $event->configurator->BBCodes->addCustom(
            '[AUDIO]mp3={URL6;useContent}wav={URL7;useContent}[/AUDIO]',
            '<audio preload="none" controls><source src="{URL6}" type="audio/mpeg"><source src="{URL7}" type="audio/wav">Sorry your browser does not support this audio player or the file type.</audio>'
        );
    }
}
