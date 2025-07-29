<div>
    {{-- The Master doesn't talk, he acts. --}}
    <h1>Counter Component</h1>
    <h2>Count: {{ $count }}</h2>
    <input type="number" wire:model.blur="number">
    <button wire:click="increment">Increment</button>
    <button wire:click="decrement">Decrement</button>
    <button wire:click="resetZero">Reset</button>
    <button wire:click="changeCount({{ $number }})">Change Count</button>
    <button wire:click="alert">Alert</button>
</div>
