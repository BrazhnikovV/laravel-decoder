<div xmlns:wire="http://www.w3.org/1999/xhtml">
    <form wire:submit.prevent="save">
        <input type="file" wire:model="file">
        @error('file') <span class="error">{{ $message }}</span> @enderror
        <x-button type="submit" class="btn btn-primary mt-2" id="submit">Загрузить</x-button>
    </form>
</div>
