<x-layout>
    <form method="POST" action="/ideas">
        @csrf
        <div class="col-span-full">
            <label for="description" class= "block text-sm/6 font-medium text-white">Create New Idea</label>
            <div class="mt-1">
                <textarea id="description" name="description" rows="3"
                    class="block w-full rounded-md bg-white-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                    placeholder="">

                </textarea>

                <x-form.error name="description" />
            </div>
        </div>
        <p class="mt-3 text-sm/6 text-gray-400">Have an idea you like to save for later?</p>
        </div>
        <div class="mt-6 flex items-center gap-x-6">
            <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 hover:not-focus:bg-indigo-700">Save

            </button>
        </div>
    </form>

</x-layout>
