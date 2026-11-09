<x-layout title="Welcome">
    @forelse ($tasks as $task)
        <li>{{ $task }}</li>
    @empty
        <li>No tasks yet!</li>
    @endforelse


</x-layout>
