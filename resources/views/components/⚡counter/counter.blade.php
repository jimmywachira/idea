<div class="space-y-4">
    <p class="text-xl font-semibold"> Nothing worth having comes easy. - Theodore Roosevelt </p>
    <div class=" text-white font-bold py-2 px-4 rounded"> Count: {{ $count }} </div>
    <button wire:click="incre" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"> Increment <ion-icon size="large" name="add-outline"></ion-icon> </button>
    <button wire:click="decre" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded"> Decrement <ion-icon size="large" name="remove-outline"></ion-icon> </button>
</div>