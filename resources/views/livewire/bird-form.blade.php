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
        <table>
            <thead>
                <tr>
                    <th>Count</th>
                    <th>Notes</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($entries as $item)
                    <tr wire:key="{{ $item->id }}" wire:transition>
                        <td>{{ $item->count }}</td>
                        <td>{{ $item->notes }}</td>
                        <td>
                            <button wire:click="deleteEntry({{ $item->id }})">Delete</button>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3">No entries found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

</div>
