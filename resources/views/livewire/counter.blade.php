<div class="input-group mb-3">
    <form wire:submit.prevent="addItem">
        <input type="text" placeholder="Item."
            wire:model.debounce.500ms="newItem">
            <button type="submit">Add</button>
    </form>
    
    <div class="rounded border shadow p-3 my-2">
        <div class="flex justify-between my-2">
            <div class="flex">
                <p class="font-bold text-lg">{{$newItem}}</p>
            </div>
            <i class="fas fa-times text-red-200 hover:text-red-600 cursor-pointer"
                wire:click="remove({$newItem->id})"></i>
        </div>
    </div>
</div>