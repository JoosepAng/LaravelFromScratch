<x-layout>
    <form method="POST" action="/ideas/{{$idea->id}}">
        @csrf
        @method('PATCH')
        <div class="col-span-full">
            <label for="description" class= "block text-sm/6 font-medium text-white">Edit Your Idea</label>
            <div class="mt-1">
                <textarea id="description" name="description" rows="3" class="block w-full rounded-md bg-white-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">{{$idea->description}}</textarea>
                <x-forms.error name="description" />
        </div>

        <div class="mt-6 flex items-center gap-x-6">
            <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 hover:not-focus:bg-indigo-700">Update</button>
                        <button type="submit" form="delete-idea-form" class="rounded-md bg-red-600 px-3 py-2 hover:not-focus:bg-indigo-700">Delete</button>

        </div>
    </form>

    <form id="delete-idea-form" action="/ideas/{{$idea->id}}" method="POST">
        @csrf
        @method('DELETE')



</x-layout>
