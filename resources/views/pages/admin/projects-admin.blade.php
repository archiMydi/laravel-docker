@extends('layouts.backoffice')

@section('content')
<header class="bg-white shadow-sm">
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-bold tracking-tight text-gray-900">Projects</h1>
    </div>
</header>

@php
$columns = $projects->chunk(ceil($projects->count() / 2));
@endphp

<div class="container mx-auto px-4 py-12 flex flex-col md:flex-row md:gap-12 justify-evenly divide-y divide-gray-100">
    @foreach ($columns as $colProjects)
    <ul role="list" class="divide-y divide-gray-100 w-full md:w-[46%]">
        @foreach ($colProjects as $project)
        <li class="flex justify-between gap-x-6 py-5">
            <div class="flex items-center min-w-0 gap-x-4">
                <img class="h-12 w-12 flex-none rounded-full bg-gray-50"
                    src="{{ $project->cover_image ?? 'https://via.placeholder.com/150' }}"
                    alt="Project Image">
                <div class="min-w-0 flex-auto">
                    <p class="text-sm font-semibold text-gray-900">{{ $project->name }}</p>
                    <p class="mt-1 truncate text-xs text-gray-500">
                        {{ implode(', ', $project->used_techs ?? []) }}
                    </p>
                </div>
            </div>
            <div class="flex items-center gap-4">
                <a href="{{ route('dashboard.projects.edit', $project) }}"
                    class="text-blue-500 hover:text-blue-700 text-sm">
                    Edit
                </a>
                <form action="{{ route('dashboard.projects.delete', $project) }}"
                    method="POST"
                    onsubmit="return confirm('Are you sure ?');"
                    class="flex items-center">
                    @csrf
                    @method('DELETE')
                    <button type="submit"
                        class="cursor-pointer text-red-500 hover:text-red-700 text-sm">
                        Delete
                    </button>
                </form>
            </div>
        </li>
        @endforeach
    </ul>
    @endforeach
</div>
@endsection