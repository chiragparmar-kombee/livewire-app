<div>
    <!-- <h1>Posts (<span x-text="await $wire.getPostCount()"></span>)</h1> -->
    <button wire:click="$refresh">Refresh</button>
    <button x-on:click="$wire.$refresh()">Refresh</button>
    <button wire:click="$toggle('sortAsc')">
        Sort {{ $sortAsc ? 'Descending' : 'Ascending' }}
    </button>
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