<div>
    <h1>Create Post</h1>
    <form wire:submit="save">
        <input type="text" wire:model="form.title" placeholder="title">
        <div wire:dirty wire:target="form.title">Unsaved...</div>
        <div>
            @error('form.title') <span class="error">{{ $message }}</span> @enderror
        </div><br><br>

        <textarea wire:model="form.content" placeholder="content"></textarea>
        <div>
            @error('form.content') <span class="error">{{ $message }}</span> @enderror
        </div><br><br><br>

        <button type="submit">Save</button>
        <span wire:loading>Saving...</span>
    </form>
</div>