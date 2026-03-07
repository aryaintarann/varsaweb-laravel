<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add Team Member') }}
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

                    <form action="{{ route('admin.team_members.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6 max-w-2xl">
                        @csrf
                        
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700">Full Name</label>
                            <input type="text" name="name" id="name" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" value="{{ old('name') }}">
                        </div>

                        <div>
                            <label for="role" class="block text-sm font-medium text-gray-700">Role / Position</label>
                            <input type="text" name="role" id="role" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" value="{{ old('role') }}">
                        </div>

                        <div>
                            <label for="image" class="block text-sm font-medium text-gray-700">Profile Image</label>
                            <input type="file" name="image" id="image" accept="image/*" class="mt-1 block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-semibold file:bg-indigo-50 file:text-indigo-700 hover:file:bg-indigo-100">
                            <p class="mt-1 text-xs text-gray-500">Recommended size: square (e.g. 512x512px). Formats: JPG, PNG, WEBP.</p>
                        </div>
                        
                        <div>
                            <label for="sort_order" class="block text-sm font-medium text-gray-700">Sort Order</label>
                            <input type="number" name="sort_order" id="sort_order" value="{{ old('sort_order', 0) }}" class="mt-1 block w-24 rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            <p class="mt-1 text-xs text-gray-500">Lower numbers appear first.</p>
                        </div>

                        <div class="flex items-center justify-start gap-4 pt-4 border-t">
                            <button type="submit" class="bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2 px-6 rounded shadow">
                                Add Member
                            </button>
                            <a href="{{ route('admin.about.index') }}" class="text-gray-600 hover:text-gray-900 border border-gray-300 px-4 py-2 rounded">
                                Cancel
                            </a>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
