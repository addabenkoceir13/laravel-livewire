<div>
    {{-- Care about people's approval and you will be their prisoner. --}}
    <form wire:submit='submit'>
        <div>
            <label for="count">Bird Count:</label>
            <input type="number" wire:model="count" id="count" placeholder="Enter bird count">
        </div>
        <div>
            <label for="notes">Notes:</label>
            <textarea wire:model="notes" id="notes" placeholder="Enter any notes"></textarea>
        </div>

        <button >Add a New Bird Count Entry</button>
    </form>
    <div>
        @foreach ($errors->all() as $item)
            <div>
                <p>{{ $item }}</p>
            </div>
        @endforeach
    </div>
    <div>
        @forelse ($entries as $item)
            <div>
                <p>Count: {{ $item->count }}</p>
                <p>Notes: {{ $item->notes }}</p>
            </div>
        @empty
            <p>No entries found.</p>
        @endforelse
    </div>

</div>
