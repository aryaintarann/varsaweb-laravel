<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('About Page Content') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">

            <!-- About Us Text Settings -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-lg font-medium leading-6 text-gray-900 mb-4 border-b pb-2">About Page Text</h3>
                    
                    @if(session('success'))
                        <div class="mb-4 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative">
                            <span class="block sm:inline">{{ session('success') }}</span>
                        </div>
                    @endif
                    
                    @if ($errors->any())
                        <div class="mb-4 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>- {{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('admin.about.store') }}" method="POST" class="space-y-6">
                        @csrf
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <!-- Hero Section -->
                            <div class="col-span-1 md:col-span-2">
                                <h4 class="font-medium text-gray-700 mt-2">Hero Section</h4>
                            </div>
                            <div>
                                <label for="about_hero_title" class="block text-sm font-medium text-gray-700">Hero Title</label>
                                <input type="text" name="about_hero_title" id="about_hero_title" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm sm:text-sm" value="{{ old('about_hero_title', $settings['about_hero_title'] ?? '') }}" placeholder="The Team Behind">
                            </div>
                            <div>
                                <label for="about_hero_subtitle" class="block text-sm font-medium text-gray-700">Hero Subtitle</label>
                                <textarea name="about_hero_subtitle" id="about_hero_subtitle" rows="2" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm sm:text-sm">{{ old('about_hero_subtitle', $settings['about_hero_subtitle'] ?? '') }}</textarea>
                            </div>

                            <!-- Our Story Section -->
                            <div class="col-span-1 md:col-span-2 border-t pt-4">
                                <h4 class="font-medium text-gray-700 mt-2">Our Story Section</h4>
                            </div>
                            <div class="col-span-1 md:col-span-2">
                                <label for="about_story_title" class="block text-sm font-medium text-gray-700">Story Title</label>
                                <input type="text" name="about_story_title" id="about_story_title" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm sm:text-sm" value="{{ old('about_story_title', $settings['about_story_title'] ?? '') }}" placeholder="Building the Future">
                            </div>
                            <div class="col-span-1 md:col-span-2">
                                <label for="about_story_text" class="block text-sm font-medium text-gray-700">Story Text</label>
                                <textarea name="about_story_text" id="about_story_text" rows="5" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm sm:text-sm">{{ old('about_story_text', $settings['about_story_text'] ?? '') }}</textarea>
                            </div>

                            <!-- Vision & Mission -->
                            <div class="col-span-1 md:col-span-2 border-t pt-4">
                                <h4 class="font-medium text-gray-700 mt-2">Vision & Mission Section</h4>
                            </div>
                            <div>
                                <label for="about_vision_title" class="block text-sm font-medium text-gray-700">Vision Title</label>
                                <input type="text" name="about_vision_title" id="about_vision_title" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm sm:text-sm" value="{{ old('about_vision_title', $settings['about_vision_title'] ?? 'Our Vision') }}">
                            </div>
                            <div>
                                <label for="about_vision_text" class="block text-sm font-medium text-gray-700">Vision Text</label>
                                <textarea name="about_vision_text" id="about_vision_text" rows="3" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm sm:text-sm">{{ old('about_vision_text', $settings['about_vision_text'] ?? '') }}</textarea>
                            </div>
                            <div>
                                <label for="about_mission_title" class="block text-sm font-medium text-gray-700">Mission Title</label>
                                <input type="text" name="about_mission_title" id="about_mission_title" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm sm:text-sm" value="{{ old('about_mission_title', $settings['about_mission_title'] ?? 'Our Mission') }}">
                            </div>
                            <div class="grid gap-2">
                                <label class="block text-sm font-medium text-gray-700">Mission Bullet Points</label>
                                <input type="text" name="about_mission_text_1" class="block w-full rounded-md border-gray-300 shadow-sm sm:text-sm" value="{{ old('about_mission_text_1', $settings['about_mission_text_1'] ?? '') }}" placeholder="Bullet point 1">
                                <input type="text" name="about_mission_text_2" class="block w-full rounded-md border-gray-300 shadow-sm sm:text-sm" value="{{ old('about_mission_text_2', $settings['about_mission_text_2'] ?? '') }}" placeholder="Bullet point 2">
                                <input type="text" name="about_mission_text_3" class="block w-full rounded-md border-gray-300 shadow-sm sm:text-sm" value="{{ old('about_mission_text_3', $settings['about_mission_text_3'] ?? '') }}" placeholder="Bullet point 3">
                            </div>
                        </div>

                        <div class="flex items-center justify-end border-t pt-4 mt-6">
                            <button type="submit" class="bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2 px-6 rounded shadow">
                                Save Settings
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Team Members Management -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="flex justify-between items-center mb-4 border-b pb-2">
                        <h3 class="text-lg font-medium leading-6 text-gray-900">Team Members</h3>
                        <a href="{{ route('admin.team_members.create') }}" class="bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded text-sm shadow">
                            + Add Team Member
                        </a>
                    </div>

                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Photo</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Role</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Order</th>
                                    <th scope="col" class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @forelse($teamMembers as $member)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            @if($member->image)
                                                <img src="{{ asset('storage/' . $member->image) }}" class="h-10 w-10 rounded-full object-cover">
                                            @else
                                                <div class="h-10 w-10 rounded-full bg-gray-200 flex items-center justify-center text-gray-500 font-bold">
                                                    {{ substr($member->name, 0, 1) }}
                                                </div>
                                            @endif
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                            {{ $member->name }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                            {{ $member->role }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                            {{ $member->sort_order }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium space-x-2">
                                            <a href="{{ route('admin.team_members.edit', $member) }}" class="text-indigo-600 hover:text-indigo-900 border border-indigo-200 px-3 py-1 rounded bg-indigo-50">Edit</a>
                                            <form action="{{ route('admin.team_members.destroy', $member) }}" method="POST" class="inline-block" onsubmit="return confirm('Delete this team member?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-red-600 hover:text-red-900 border border-red-200 px-3 py-1 rounded bg-red-50">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 text-center">
                                            No team members found.
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
