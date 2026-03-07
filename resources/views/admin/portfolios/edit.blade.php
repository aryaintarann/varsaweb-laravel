<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Portfolio: ') }} {{ $portfolio->title }}
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

                    <form action="{{ route('admin.portfolios.update', $portfolio) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                        @csrf
                        @method('PUT')
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="title" class="block text-sm font-medium text-gray-700">Project Title</label>
                                <input type="text" name="title" id="title" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" value="{{ old('title', $portfolio->title) }}" required>
                            </div>
                            
                            <div>
                                <label for="category_id" class="block text-sm font-medium text-gray-700">Category</label>
                                <select name="category_id" id="category_id" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" required>
                                    <option value="">Select a Category</option>
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}" {{ old('category_id', $portfolio->category_id) == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        
                        <div>
                            <label for="image" class="block text-sm font-medium text-gray-700">Main Image</label>
                            @if($portfolio->image)
                                <div class="mt-2 mb-4">
                                    <p class="text-sm text-gray-500 mb-2">Current Image:</p>
                                    <img src="{{ Storage::url($portfolio->image) }}" class="h-32 w-auto object-cover rounded shadow border" alt="{{ $portfolio->title }}">
                                </div>
                            @endif
                            <input type="file" name="image" id="image" class="mt-1 block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-semibold file:bg-indigo-50 file:text-indigo-700 hover:file:bg-indigo-100" accept="image/png, image/jpeg, image/jpg, image/webp, image/svg+xml">
                            <p class="mt-1 flex text-xs text-gray-500">Upload a new image to replace the current one. Max size 2MB. Formats: jpg, png, webp, svg</p>
                        </div>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="client_name" class="block text-sm font-medium text-gray-700">Client Name</label>
                                <input type="text" name="client_name" id="client_name" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" value="{{ old('client_name', $portfolio->client_name) }}">
                            </div>
                            
                            <div>
                                <label for="completion_date" class="block text-sm font-medium text-gray-700">Completion Date</label>
                                <input type="date" name="completion_date" id="completion_date" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" value="{{ old('completion_date', $portfolio->completion_date ? $portfolio->completion_date->format('Y-m-d') : '') }}">
                            </div>
                        </div>

                        <div>
                            <label for="description" class="block text-sm font-medium text-gray-700">Project Description</label>
                            <textarea name="description" id="description" rows="5" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">{{ old('description', $portfolio->description) }}</textarea>
                        </div>
                        
                        <div class="flex items-center justify-end">
                            <a href="{{ route('admin.portfolios.index') }}" class="text-gray-600 hover:text-gray-900 font-medium mr-4">Cancel</a>
                            <button type="submit" class="bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded">
                                Update Portfolio
                            </button>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
