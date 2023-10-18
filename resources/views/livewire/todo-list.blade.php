<div>
    <input type="text" wire:model="todo" placeholder="Todo...">

    <button wire:click="add">Add Todo</button>

    <ul>
        @foreach ($todos as $todo)
        <li>{{ $todo }}</li>
        @endforeach
    </ul>

    Todo character length: <h2 x-text="$wire.todo.length"></h2>
    <button x-on:click="$wire.todo = ''">Clear</button>
</div>