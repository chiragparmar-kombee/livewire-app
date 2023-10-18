<div>
    <input wire:model.live="query">

    <button wire:click="clear">Reset Search</button>

    @foreach ($posts as $post)
    <div wire:key="{{ $post->id }}">
        <h3>{{ $post->title }}</h3>
        <span>{{ $post->content }}</span>

        <button type="button" wire:click="delete({{ $post->id }})" wire:confirm="Are you sure you want to delete this post?">
            Delete
        </button>
    </div>
    @endforeach
</div>