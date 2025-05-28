@extends('layouts.app')

@section('content')

<!-- PROJECT PAGE -->
<div class="pt-12">
    <div class="pt-6">

        <!-- Image gallery -->
        <div class="mx-auto mt-6 max-w-2xl sm:px-6 lg:grid lg:max-w-7xl lg:grid-cols-3 lg:gap-x-8 lg:px-8">
            <!-- Première image -->
            <img src="{{ $project->images[0] }}" alt="Image principale de {{ $project->name }}" class="hidden size-full rounded-lg object-cover lg:block">

            <!-- Images secondaires -->
            <div class="hidden lg:grid lg:grid-cols-1 lg:gap-y-8">
                <img src="{{ $project->images[1] }}" alt="Image secondaire 1 de {{ $project->name }}" class="aspect-3/2 w-full rounded-lg object-cover">
                <img src="{{ $project->images[2] }}" alt="Image secondaire 2 de {{ $project->name }}" class="aspect-3/2 w-full rounded-lg object-cover">
            </div>

            <!-- Dernière image -->
            <img src="{{ $project->images[3] }}" alt="Image finale de {{ $project->name }}" class="aspect-4/5 size-full object-cover sm:rounded-lg lg:aspect-auto">
        </div>

        <!-- Project info -->
        <div class="mx-auto max-w-2xl px-4 pt-10 pb-16 sm:px-6 lg:grid lg:max-w-7xl lg:grid-cols-3 lg:grid-rows-[auto_auto_1fr] lg:gap-x-8 lg:px-8 lg:pt-16 lg:pb-24">
            <div class="lg:col-span-2 lg:border-r lg:border-gray-200 lg:pr-8">
                <!-- Titre du projet -->
                <h1 class="text-2xl font-bold tracking-tight text-gray-900 sm:text-3xl">{{ $project->name }}</h1>
            </div>

            <!-- Right column -->
            <div class="mt-4 lg:row-span-3 lg:mt-0">
                <div>
                    <h3 class="text-sm font-medium text-gray-900">Used technologies</h3>

                    <div class="mt-4">
                        <!-- Liste des technologies -->
                        <ul role="list" class="list-disc space-y-2 pl-4 text-sm">
                            @foreach ($project->used_techs as $tech)
                            <li class="text-gray-400"><span class="text-gray-600">{{ $tech }}</span></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>

            <div class="py-10 lg:col-span-2 lg:col-start-1 lg:border-r lg:border-gray-200 lg:pt-6 lg:pr-8 lg:pb-16">
                <!-- Description et détails -->
                <div>
                    <h3 class="sr-only">Description</h3>

                    <div class="space-y-6">
                        <!-- Description du projet -->
                        <p class="text-base text-gray-900">{{ $project->description }}</p>
                    </div>
                </div>

                <div class="mt-10">
                    <h2 class="text-sm font-medium text-gray-900">Details</h2>

                    <div class="mt-4 space-y-6">
                        <!-- Détails supplémentaires -->
                        <p class="text-sm text-gray-600">{{ $project->details }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection