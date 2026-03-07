<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Site Settings') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    
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

                    <form action="{{ route('admin.settings.store') }}" method="POST" class="space-y-8">
                        @csrf
                        
                        <!-- General Info -->
                        <div>
                            <h3 class="text-lg font-medium leading-6 text-gray-900 mb-4 border-b pb-2">General Information</h3>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div class="col-span-1 md:col-span-2">
                                    <label for="site_name" class="block text-sm font-medium text-gray-700">Site Name</label>
                                    <input type="text" name="site_name" id="site_name" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" value="{{ old('site_name', $settings['site_name'] ?? '') }}">
                                </div>
                            </div>
                        </div>

                        <!-- Contact Info -->
                        <div>
                            <h3 class="text-lg font-medium leading-6 text-gray-900 mb-4 border-b pb-2">Contact Information</h3>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label for="contact_email" class="block text-sm font-medium text-gray-700">Contact Email</label>
                                    <input type="email" name="contact_email" id="contact_email" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" value="{{ old('contact_email', $settings['contact_email'] ?? '') }}">
                                </div>
                                <div>
                                    <label for="contact_phone" class="block text-sm font-medium text-gray-700">Contact Phone / WhatsApp</label>
                                    <input type="text" name="contact_phone" id="contact_phone" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" value="{{ old('contact_phone', $settings['contact_phone'] ?? '') }}">
                                </div>
                                <div class="col-span-1 md:col-span-2">
                                    <label for="contact_address" class="block text-sm font-medium text-gray-700">Office Address</label>
                                    <textarea name="contact_address" id="contact_address" rows="3" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">{{ old('contact_address', $settings['contact_address'] ?? '') }}</textarea>
                                </div>
                                <div class="col-span-1 md:col-span-2">
                                    <label for="contact_map_url" class="block text-sm font-medium text-gray-700">Google Maps Embed URL</label>
                                    <input type="url" name="contact_map_url" id="contact_map_url" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" value="{{ old('contact_map_url', $settings['contact_map_url'] ?? '') }}">
                                    <p class="mt-1 flex text-xs text-gray-500">The src attribute URL from a Google Maps embed code.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Social Media -->
                        <div>
                            <h3 class="text-lg font-medium leading-6 text-gray-900 mb-4 border-b pb-2">Social Media Links</h3>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label for="social_facebook" class="block text-sm font-medium text-gray-700">Facebook URL</label>
                                    <input type="url" name="social_facebook" id="social_facebook" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" value="{{ old('social_facebook', $settings['social_facebook'] ?? '') }}">
                                </div>
                                <div>
                                    <label for="social_instagram" class="block text-sm font-medium text-gray-700">Instagram URL</label>
                                    <input type="url" name="social_instagram" id="social_instagram" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" value="{{ old('social_instagram', $settings['social_instagram'] ?? '') }}">
                                </div>
                                <div>
                                    <label for="social_linkedin" class="block text-sm font-medium text-gray-700">LinkedIn URL</label>
                                    <input type="url" name="social_linkedin" id="social_linkedin" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" value="{{ old('social_linkedin', $settings['social_linkedin'] ?? '') }}">
                                </div>
                            </div>
                        </div>
                        
                        <div class="flex items-center justify-end border-t pt-4">
                            <button type="submit" class="bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2 px-6 rounded shadow">
                                Save Settings
                            </button>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
