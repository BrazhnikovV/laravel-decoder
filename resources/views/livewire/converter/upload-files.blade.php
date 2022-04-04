<div xmlns:wire="http://www.w3.org/1999/xhtml">
    <div wire:loading wire:target="file">Uploading...</div>
    @error('file') <span class="error text-[#ff0000]">{{ $message }}</span> @enderror
    <form wire:submit.prevent="save">
        <input type="file" wire:model="file">
        <x-button type="submit" class="btn btn-primary mt-2" id="submit">Загрузить</x-button>
    </form>
</div>
