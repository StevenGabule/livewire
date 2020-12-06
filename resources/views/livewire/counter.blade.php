<div class="d-flex flex-column">
   <div> 
        <h3>Livewire Button</h3>
        </div>
    <div class="d-flex align-items-center">
        <button class="btn btn-info" wire:click="increment">+</button>&nbsp;
        <h5>{{ $counter }}</h5>&nbsp;
        <button class="btn btn-info" wire:click="decrement">-</button>
    </div>
</div>
