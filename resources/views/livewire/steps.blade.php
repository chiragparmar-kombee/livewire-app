<div>
    <livewire:dynamic-component :is="$current" />
    <label>{{ $current }}</label>
    <button wire:click="next">Next</button>
</div>