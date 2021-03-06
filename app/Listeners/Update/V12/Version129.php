<?php

namespace App\Listeners\Update\V12;

use App\Abstracts\Listeners\Update as Listener;
use App\Events\Install\UpdateFinished as Event;
use Artisan;

class Version129 extends Listener
{
    const ALIAS = 'core';

    const VERSION = '1.2.9';

    /**
     * Handle the event.
     *
     * @param  $event
     * @return void
     */
    public function handle(Event $event)
    {
        // Check if should listen
        if (!$this->check($event)) {
            return;
        }

        // Update database
        Artisan::call('migrate', ['--force' => true]);
    }
}
