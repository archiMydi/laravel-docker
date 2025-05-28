@extends('layouts.app')

@section('content')

<!-- SKILLS SECTION -->
<div class="pt-20 px-64">
    <div class="px-4 sm:px-0">
        <h2 class="text-4xl font-semibold text-gray-900">My skills</h2>
        <p class="mt-1 text-gray-500">A showcase of my expertise and abilities.</p>
    </div>
    <div class="mt-6 border-t border-gray-100">
        <dl class="divide-y divide-gray-100">
            @foreach ($skills as $skill)
            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                <dt class="text-base/6 font-medium text-gray-900">{{ $skill->name }}</dt>
                <dd class="mt-1 text-base/6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $skill->description }}</dd>
            </div>
            @endforeach
        </dl>
    </div>
</div>

@endsection