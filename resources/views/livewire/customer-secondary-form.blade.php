<div>
    <h1>Contact Form {{  $name }}</h1>

    <form wire:submit="submit">
        <input type="text" wire:model="name" placeholder="Your name">
        <input type="email" wire:model="email" placeholder="Your email">
        <button type="submit">Submit</button>
    </form>
</div>
