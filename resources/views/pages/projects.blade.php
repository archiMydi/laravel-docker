@extends('layouts.app')

@section('content')

<!-- PROJECTS LIST -->
@php
$chunkedProjects = $projects->chunk(4); // Divise les projets en groupes de 4
@endphp

@foreach ($chunkedProjects as $index => $projectGroup)
<div class="relative isolate px-6 pt-12 lg:px-8 h-screen md:snap-start flex justify-center items-center" id="projects-line-{{ $index + 1 }}">
    <div class="grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
        @foreach ($projectGroup as $project)
        <div class="group relative">
            <!-- Image du projet -->
            <img src="{{ $project->cover_image }}" alt="Image de {{ $project->name }}" class="aspect-square w-full rounded-md bg-gray-200 object-cover group-hover:opacity-75 lg:aspect-auto lg:h-80">

            <div class="mt-4 flex justify-between">
                <div>
                    <!-- Nom du projet -->
                    <h3 class="text-sm text-gray-700">
                        <a href="/project/{{ $project->id }}">
                            <span aria-hidden="true" class="absolute inset-0"></span>
                            {{ $project->name }}
                        </a>
                    </h3>

                    <!-- Technologies utilisées -->
                    <p class="mt-1 text-sm text-gray-500">
                        {{ implode(', ', $project->used_techs) }}
                    </p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endforeach

@endsection