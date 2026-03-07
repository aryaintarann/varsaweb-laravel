<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Message Details') }}
            </h2>
            <a href="{{ route('admin.messages.index') }}" class="bg-gray-600 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                Back to Inbox
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    
                    <div class="border-b pb-4 mb-4">
                        <h3 class="text-2xl font-bold mb-2">{{ $message->subject ?? '(No Subject)' }}</h3>
                        <div class="flex flex-wrap items-center justify-between text-sm text-gray-600">
                            <div>
                                <span class="font-semibold text-gray-900">{{ $message->name }}</span> 
                                &lt;<a href="mailto:{{ $message->email }}" class="text-indigo-600 hover:underline">{{ $message->email }}</a>&gt;
                            </div>
                            <div>
                                {{ $message->created_at->format('F d, Y \a\t H:i A') }}
                            </div>
                        </div>
                    </div>
                    
                    <div class="prose max-w-none text-gray-800 min-h-[200px] whitespace-pre-wrap">
                        {{ $message->message }}
                    </div>

                    <div class="mt-8 pt-4 border-t flex justify-end">
                        <form action="{{ route('admin.messages.destroy', $message) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this message?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                                Delete Message
                            </button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
