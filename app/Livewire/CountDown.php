<?php

namespace App\Livewire;

use Livewire\Component;

class CountDown extends Component
{
    public $start = 3;

    public function begin()
    {
        while ($this->start >= 0) {
            // Stream the current count to the browser...
            $this->stream(
                to: 'count',
                content: $this->start,
                replace: true,
            );

            // Pause for 1 second between numbers...
            sleep(1);

            // Decrement the counter...
            $this->start = $this->start - 1;
        };
    }

    public function render()
    {
        return <<<HTML
        <div>
            <button wire:click="begin">Start Count-down</button>

            <h1>Count: <span wire:stream="count">{{ $this->start }}</span></h1>
        </div>
        HTML;
    }
}
