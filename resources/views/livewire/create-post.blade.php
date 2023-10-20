<div>
    <nav>
        <a href="/" wire:navigate>Dashboard</a><br>
        <a href="/todo" wire:navigate>Todo</a><br>
        <a href="/post/add" wire:navigate>Add Post</a><br>
        <a href="/posts" wire:navigate>Post Listing</a><br>
        <a href="/search-posts" wire:navigate>Search Posts</a><br>
        <a href="/steps" wire:navigate>Steps</a><br>
    </nav>

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

        <div x-data="{ uploading: false, progress: 0 }" x-on:livewire-upload-start="uploading = true" x-on:livewire-upload-finish="uploading = false" x-on:livewire-upload-error="uploading = false" x-on:livewire-upload-progress="progress = $event.detail.progress">
            <!-- File Input -->
            <input type="file" wire:model="photo">

            <!-- Progress Bar -->
            <div x-show="uploading">
                <progress max="100" x-bind:value="progress"></progress>
            </div>
        </div>
    </form>
</div>