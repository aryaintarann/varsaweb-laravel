<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Service: ') }} {{ $service->title }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    
                    @if ($errors->any())
                        <div class="mb-4 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>- {{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('admin.services.update', $service) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                        @csrf
                        @method('PUT')
                        
                        <div>
                            <label for="title" class="block text-sm font-medium text-gray-700">Service Title</label>
                            <input type="text" name="title" id="title" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" value="{{ old('title', $service->title) }}" required>
                        </div>
                        
                        <div>
                            <label for="icon" class="block text-sm font-medium text-gray-700">Service Icon / Image</label>
                            @if($service->icon)
                                <div class="mt-2 mb-4">
                                    <p class="text-sm text-gray-500 mb-2">Current Icon:</p>
                                    <img src="{{ Storage::url($service->icon) }}" class="h-24 w-24 object-cover rounded shadow border" alt="{{ $service->title }}">
                                </div>
                            @endif
                            <input type="file" name="icon" id="icon" class="mt-1 block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-semibold file:bg-indigo-50 file:text-indigo-700 hover:file:bg-indigo-100" accept="image/png, image/jpeg, image/jpg, image/webp, image/svg+xml">
                            <p class="mt-1 flex text-xs text-gray-500">Upload a new icon to replace the current one. Max size 2MB. Formats: jpg, png, webp, svg</p>
                        </div>
                        
                        <div>
                            <label for="short_description" class="block text-sm font-medium text-gray-700">Short Description</label>
                            <textarea name="short_description" id="short_description" rows="3" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" required>{{ old('short_description', $service->short_description) }}</textarea>
                            <p class="mt-1 text-xs text-gray-500">A brief summary to display on the home and service list pages.</p>
                        </div>
                        
                        <div>
                            <label for="full_description" class="block text-sm font-medium text-gray-700">Full Description</label>
                            <textarea name="full_description" id="full_description" rows="6" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">{{ old('full_description', $service->full_description) }}</textarea>
                            <p class="mt-1 text-xs text-gray-500">Detailed explanation of the service.</p>
                        </div>
                        
                        <div class="flex items-center justify-end">
                            <a href="{{ route('admin.services.index') }}" class="text-gray-600 hover:text-gray-900 font-medium mr-4">Cancel</a>
                            <button type="submit" class="bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded">
                                Update Service
                            </button>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
