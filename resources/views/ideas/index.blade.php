<x-layout>
    @if ($ideas->count())
        <div class="mt-6 text-white">
            <h2 class="font-bold">Your ideas</h2>
            <ul class="mt-6">
                @foreach ($ideas as $idea)
                    <li>
                        <a href="/ideas/{{ $idea->id }}" class="text-sm">
                            {{ $idea->description }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    @else
        <p>No ideas yet. <a href="/ideas/create" class="text-indigo-600 hover:underline">Create new one</a></p>
    @endif
</x-layout>
