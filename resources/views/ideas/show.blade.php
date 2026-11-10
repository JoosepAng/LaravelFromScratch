<x-layout>

    <div>
        <h2 class="font-bold">Your ideas</h2>
        <div class="mt-6">
        <p>{{$idea->description}}</p>
        </div>
    </div>

    <div class="mt-6">
        <a href="/ideas/{{$idea->id}}/edit" class="text-blue-500 hover:text-blue-700">Edit</a>
        <form action="/ideas/{{$idea->id}}" method="POST" class="inline">
            @csrf
            @method('DELETE')
            <button type="submit" class="text-red-500 hover:text-red-700">Delete</button>
        </form>
    </div>

</x-layout>
