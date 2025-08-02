<div>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
    <h3>Let's Send an Event</h3>
    <input type="text" wire:model.live='message'>
    <button wire:click="sendMessage">Send Message</button>
    <button wire:click="$refresh">Reset Component</button>
</div>
