<x-layout>

    <div class= "card bg-neutral p-6">


        <div>
            <p>{{ $idea->description }}</p>
        </div>


    <div class="mt-6">
        <a href="/ideas/{{ $idea->id }}/edit"
            class="btn btn-primary">Edit</a>

    </div>

</x-layout>
