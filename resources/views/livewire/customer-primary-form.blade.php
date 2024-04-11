<div>
   
    <h1>{{ $status }}</h1>
    <h2>This is primary form</h2>
    <form wire:submit.prevent="submit">
        <input type="text" wire:model="name">
        @error('name') <span class="error">{{ $message }}</span> @enderror
     
        <input type="text" wire:model="email">
        @error('email') <span class="error">{{ $message }}</span> @enderror
     
        <button type="submit">Save Contact</button>
    </form>

    <div>
        <input type="text" wire:model="customer.name" placeholder="Customer Name">
    </div>
    

</div>
