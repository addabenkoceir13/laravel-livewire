<div>
    {{-- Success is as dangerous as failure. --}}
    <h1>Bookmarks</h1>
    <p>User: {{ Auth::user()->name }}</p>
    <form wire:submit='save'>
        <input type="text" wire:model='name'>
        <input type="text" wire:model='url'>

        <button type="submit">save</button>
    </form>
    <div>
        <h2>Bookmarks</h2>
        <ul wire:transition>
            @foreach (Auth::user()->bookmarks as $bookmark)
                <li wire:key="{{ $bookmark->id }}">
                    <a href="{{ $bookmark->url }}">{{ $bookmark->name }}</a>
                    <button wire:click="delete({{ $bookmark->id }})">delete</button>
                </li>
            @endforeach
        </ul>
    </div>
</div>
