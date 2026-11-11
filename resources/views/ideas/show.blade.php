<x-layout>

    <div>
        <h2 class="font-bold">Your ideas</h2>
        <div class="mt-6">
        <p>{{$idea->description}}</p>
        </div>
    </div>

    <div class="mt-6">
        <a href="/ideas/{{$idea->id}}/edit" class="rounded-md bg-indigo-600 px-3 py-2 hover:not-focus:bg-indigo-700">Edit</a>
        <form action="/ideas/{{$idea->id}}" method="POST" class="inline">
            @csrf
            @method('DELETE')
            <button type="submit" class="rounded-md bg-red-600 px-3 py-2 hover:not-focus:bg-indigo-700">Delete</button>
        </form>
    </div>

</x-layout>
