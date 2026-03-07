<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Portfolios Management') }}
            </h2>
            <div class="space-x-2">
                <a href="{{ route('admin.portfolio-categories.index') }}" class="bg-gray-600 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                    Manage Categories
                </a>
                <a href="{{ route('admin.portfolios.create') }}" class="bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded">
                    Add New Portfolio
                </a>
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            @if(session('success'))
                <div class="mb-4 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative">
                    <span class="block sm:inline">{{ session('success') }}</span>
                </div>
            @endif

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Image</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Title</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Category</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Client</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
                                <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @forelse ($portfolios as $portfolio)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        @if($portfolio->image)
                                            <img src="{{ Storage::url($portfolio->image) }}" class="h-10 w-16 object-cover rounded shadow" alt="{{ $portfolio->title }}">
                                        @else
                                            <span class="text-gray-400 text-sm">No image</span>
                                        @endif
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                        {{ $portfolio->title }}
                                    </td>
                                    <td class="px-6 py-4 text-sm text-gray-500">
                                        {{ $portfolio->category ? $portfolio->category->name : 'Uncategorized' }}
                                    </td>
                                    <td class="px-6 py-4 text-sm text-gray-500">
                                        {{ $portfolio->client_name ?? '-' }}
                                    </td>
                                    <td class="px-6 py-4 text-sm text-gray-500">
                                        {{ $portfolio->completion_date ? $portfolio->completion_date->format('M Y') : '-' }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                        <a href="{{ route('admin.portfolios.edit', $portfolio) }}" class="text-indigo-600 hover:text-indigo-900 mr-3">Edit</a>
                                        <form action="{{ route('admin.portfolios.destroy', $portfolio) }}" method="POST" class="inline-block" onsubmit="return confirm('Are you sure you want to delete this portfolio?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-600 hover:text-red-900">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 text-center">
                                        No portfolios found. Click "Add New Portfolio" to create one.
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                    
                    <div class="mt-4">
                        {{ $portfolios->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
