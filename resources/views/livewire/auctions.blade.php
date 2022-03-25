<div class="container mx-auto mt-2">
    <x-flash />
    <div class="flex content-center p-2 m-2">
        <x-jet-button wire:click='showCreateAuctionModal' class="bg-blue-500">Create Auction</x-jet-button>
    </div>
    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
            <div class="overflow-hidden border-b border-gray-200 shadow sm:rounded-lg">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50 dark:bg-gray-600 dark:text-gray-200">
                        <tr>
                            <th scope="col"
                                class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase dark:text-gray-200">
                                Id</th>
                            <th scope="col"
                                class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase dark:text-gray-200">
                                Title</th>
                            <th scope="col"
                                class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase dark:text-gray-200">
                                Status</th>
                            <th scope="col"
                                class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase dark:text-gray-200">
                                File1
                            </th>
                            <th scope="col" class="relative px-6 py-3">Edit</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach ($auctions as $auction )
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $auction->id }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $auction->title }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                @if($auction->active )
                                active
                                @else
                                Not active
                                @endif
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">{{$auction->file1}}</td>
                            <td class="px-6 py-4 text-sm text-right">
                                <x-jet-button wire:click="showEditAuctionModal({{ $auction->id }})" class="bg-green-500">Edit
                                </x-jet-button>
                                <x-jet-button wire:click="deleteAuction({{ $auction->id}})" class="bg-red-800">Delete
                                </x-jet-button>
                            </td>
                        </tr>
                        @endforeach
                        <!-- More items... -->
                    </tbody>
                </table>
                <div class="inline-block p-1 m-1 place-items-center">
                    {{ $auctions->links() }}
                </div>
            </div>
        </div>
    </div>
    {{-- showModalForm --}}
<x-jet-dialog-modal wire:model='showModalForm'>
   <div class="text-right"><x-slot name="title">مزایده</x-slot></div>
        <x-slot name="content">
            <div class="w-1/2 mt-10 space-y-8 divide-y divide-gray-200">
                <form enctype="multipart/form-data">
                    <div>
                        @if (session()->has('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                        @endif
                    </div>
                    <div class="sm:col-span-6">
                        <label for="number" class="block text-sm font-medium text-gray-700"> Auction code </label>
                        <div class="mt-1">
                            <input type="text" id="number" wire:model.lazy="number" name="number"
                                class="block w-full px-3 py-2 text-base leading-normal transition duration-150 ease-in-out bg-white border border-gray-400 rounded-md appearance-none sm:text-sm sm:leading-5" />
                        </div>
                        @error('number') <span class="error">{{ $message }}</span> @enderror
                    </div>
                    <div class="sm:col-span-6">
                        <label for="title" class="block text-sm font-medium text-gray-700"> auction Title </label>
                        <div class="mt-1">
                            <input type="text" id="title" wire:model.lazy="title" name="title"
                                class="block w-full px-3 py-2 text-base leading-normal transition duration-150 ease-in-out bg-white border border-gray-400 rounded-md appearance-none sm:text-sm sm:leading-5" />
                        </div>
                        @error('title') <span class="error">{{ $message }}</span> @enderror
                    </div>
                    <div class="sm:col-span-6">
                        {{-- <div class="w-full p-2 m-2">
                            @if ($newFile1)
                            auction Photo :
                            <span src="{{ asset('storage/photos/'. $newFile1 ) }}">
                            @endif
                            @if ($file1)
                            Photo Preview:
                            <span src="{{ $file1->temporaryUrl() }}">
                            @endif
                        </div> --}}
                        <label for="file1" class="block text-sm font-medium text-gray-700"> Auction File1 </label>
                        <div class="mt-1">
                            <input type="file" id="file1" wire:model="file1" name="file1"
                                class="block w-full px-3 py-2 text-base leading-normal transition duration-150 ease-in-out bg-white border border-gray-400 rounded-md appearance-none sm:text-sm sm:leading-5" />
                        </div>
                        @error('file1') <span class="error">{{ $message }}</span> @enderror
                    </div>
                    <div class="sm:col-span-6">
                        <label for="file2" class="block text-sm font-medium text-gray-700"> Auction File2 </label>
                        <div class="mt-1">
                            <input type="file" id="file2" wire:model="file2" name="file2"
                                class="block w-full px-3 py-2 text-base leading-normal transition duration-150 ease-in-out bg-white border border-gray-400 rounded-md appearance-none sm:text-sm sm:leading-5" />
                        </div>
                        @error('file2') <span class="error">{{ $message }}</span> @enderror
                    </div>
                    <div class="sm:col-span-6">
                        <label for="file3" class="block text-sm font-medium text-gray-700"> Auction File3 </label>
                        <div class="mt-1">
                            <input type="file" id="file3" wire:model="file3" name="file3"
                                class="block w-full px-3 py-2 text-base leading-normal transition duration-150 ease-in-out bg-white border border-gray-400 rounded-md appearance-none sm:text-sm sm:leading-5" />
                        </div>
                        @error('file3') <span class="error">{{ $message }}</span> @enderror
                    </div>
                    <div class="sm:col-span-6">
                        <label for="file4" class="block text-sm font-medium text-gray-700"> Auction File4 </label>
                        <div class="mt-1">
                            <input type="file" id="file4" wire:model="file4" name="file4"
                                class="block w-full px-3 py-2 text-base leading-normal transition duration-150 ease-in-out bg-white border border-gray-400 rounded-md appearance-none sm:text-sm sm:leading-5" />
                        </div>
                        @error('file4') <span class="error">{{ $message }}</span> @enderror
                    </div>
                    <div class="pt-5 sm:col-span-6">
                        <label for="body" class="block text-sm font-medium text-gray-700">Body</label>
                        <div class="mt-1">
                            <textarea id="body" rows="3" wire:model.lazy="body"
                                class="block w-full px-3 py-2 text-base leading-normal transition duration-150 ease-in-out bg-white border border-gray-300 border-gray-400 rounded-md shadow-sm appearance-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"></textarea>
                        </div>
                        @error('body') <span class="error">{{ $message }}</span> @enderror
                    </div>
                    <div class="pt-5 sm:col-span-6">
                        <label for="start_at" class="block text-sm font-medium text-gray-700">start_at</label>
                        <div class="mt-1">
                                <input type="text" id="start_at" wire:model.lazy="start_at" name="start_at"
                                    class="block w-full px-3 py-2 text-base leading-normal transition duration-150 ease-in-out bg-white border border-gray-400 rounded-md appearance-none sm:text-sm sm:leading-5" />
                        </div>
                        @error('start_at') <span class="error">{{ $message }}</span> @enderror
                    </div>
                    <div class="pt-5 sm:col-span-6">
                        <label for="finish_at" class="block text-sm font-medium text-gray-700">finish_at</label>
                        <div class="mt-1">
                            <input id="finish_at" rows="3" wire:model.lazy="finish_at"
                                class="block w-full px-3 py-2 text-base leading-normal transition duration-150 ease-in-out bg-white border border-gray-300 border-gray-400 rounded-md shadow-sm appearance-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"></textarea>
                        </div>
                        @error('finish_at') <span class="error">{{ $message }}</span> @enderror
                    </div>
                </form>
            </div>
        </x-slot>
        <x-slot name="footer">
            @if($auctionId)
            <x-jet-button wire:click="updateAuction">Update</x-jet-button>
            @else
            <x-jet-button wire:click="storeAuction">Store</x-jet-button>
            @endif
        </x-slot>
    </x-jet-dialog-modal>
</div>