<x-layout>
    @if ($ideas->count())
        <div class="mt-6 text-white">
            <h2 class="font-bold">Your ideas</h2>
            <ul class="mt-6 grid grid -cols-1 gap-x-6 gap-y-4">
                @foreach ($ideas as $idea)
                    <x-idea-card href="/ideas/{{ $idea->id }}">
                        {{ $idea->description }}
                    </x-idea-card>
                @endforeach
            </ul>
        </div>
    @else
        <p>No Ideas yet.</p>
    @endif

            <p class="mt-6"><a href="/ideas/create" class="text-indigo-600 hover:underline">Create new one</a></p>

</x-layout>
