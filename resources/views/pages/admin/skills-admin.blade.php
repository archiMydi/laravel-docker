@extends('layouts.backoffice')

@section('content')
<header class="bg-white shadow-sm">
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-bold tracking-tight text-gray-900">Skills</h1>
    </div>
</header>

@php
$columns = $skills->chunk(ceil($skills->count() / 2));
@endphp

<div class="container mx-auto px-4 py-12 flex flex-col md:flex-row gap-6 md:gap-12 justify-evenly">
    @foreach ($columns as $colSkills)
    <ul role="list" class="divide-y divide-gray-100 w-full md:w-[46%]">
        @foreach ($colSkills as $skill)
        <li class="flex justify-between gap-x-6 py-5">
            <div class="flex items-center min-w-0 gap-x-4">
                <div class="h-12 w-12 flex-none rounded-full bg-gray-200 flex items-center justify-center">
                    <span class="text-gray-600 font-semibold">
                        {{ strtoupper(substr($skill->name, 0, 1)) }}
                    </span>
                </div>
                <div class="min-w-0 flex-auto">
                    <p class="text-sm font-semibold text-gray-900">{{ $skill->name }}</p>
                    <p class="mt-1 text-xs text-gray-500">Level : {{ $skill->level }}/5</p>
                </div>
            </div>
            <div class="flex items-center gap-4">
                <a href="{{ route('dashboard.skills.edit', $skill) }}"
                    class="text-blue-500 hover:text-blue-700 text-sm">
                    Edit
                </a>
                <form action="{{ route('dashboard.skills.delete', $skill) }}"
                    method="POST"
                    onsubmit="return confirm('Are you sure you want to delete this skill?');"
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