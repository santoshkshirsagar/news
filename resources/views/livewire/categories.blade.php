<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Categories') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <div>
                    <x-input wire:model='category'  />
                    <x-button wire:click="add">Add</x-button>
                    
                    @error("category")
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>

                <div>
                    @foreach($categories as $category)
                        <div>
                            {{ $category->name }}
                        </div>
                    @endforeach
                </div>


            </div>
        </div>
    </div>

</div>
