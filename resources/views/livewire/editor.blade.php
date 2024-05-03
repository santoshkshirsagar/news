<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('News') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <x-button wire:click="add">Add News</x-button>

                <table class="w-full bg-white mt-4">
                    <tr class="bg-gray-200">
                        <td>Title</td>
                        <td>Category</td>
                        <td>User</td>
                        <td>Action</td>
                    </tr>
                @foreach($news as $record)

                    <tr>
                        <td>{{ $record->title }}</td>
                        <td>{{ $record->category->name }}</td>
                        <td>{{ $record->user->name }}</td>
                        <td>
                            <x-secondary-button wire:click="edit('{{$record->id}}')">Edit</x-secondary-button>
                            <x-danger-button wire:click="delete('{{$record->id}}')">Delete</x-danger-button>
                        </td>
                    </tr>
                @endforeach
                </table>

                <div class="p-4">
                    {{ $news->links() }}
                </div>

            </div>
        </div>
    </div>


<x-dialog-modal wire:model="showForm">
    <x-slot name="title">
        Add/Edit News
    </x-slot>

    <x-slot name="content">
        <form action="">
            <div>
                <x-label for="title" value="{{ __('Title') }}" />
                <x-input id="title" class="block mt-1 w-full" type="text" wire:model="title" />
                @error("title")
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <div>
                <x-label for="content" value="{{ __('Content') }}" />
                <textarea id="content" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" wire:model="content"></textarea>
                @error("content")
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <div>
                <x-label for="category" value="{{ __('Category') }}" />
                <select wire:model="category" id="" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                    <option value="">Select</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
                @error("category")
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>
        </form>
    </x-slot>

    <x-slot name="footer">
        <x-secondary-button wire:click="$toggle('showForm')" wire:loading.attr="disabled">
            Cancel
        </x-secondary-button>

        <x-button class="ml-2" wire:click="save" wire:loading.attr="disabled">
            Save
        </x-button>
    </x-slot>
</x-dialog-modal>
</div>