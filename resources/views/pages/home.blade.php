@extends('layouts.app')

@section('content')

<!-- HERO SECTION -->
<div class="md:snap-start">
    <div class="relative isolate px-6 pt-14 lg:px-8 h-screen">
        <div class="mx-auto max-w-2xl py-32 sm:py-48 lg:py-56">
            <div class="hidden sm:mb-8 sm:flex sm:justify-center">
                <div class="relative rounded-full px-3 py-1 text-sm/6 text-gray-600 ring-1 ring-gray-900/10 hover:ring-gray-900/20">
                    I might be up to work ! <a href="#" class="font-semibold text-indigo-600"><span class="absolute inset-0" aria-hidden="true"></span>Contact me <span aria-hidden="true">&rarr;</span></a>
                </div>
            </div>
            <div class="text-center">
                <h1 class="text-5xl font-semibold tracking-tight text-balance text-gray-900 sm:text-7xl">Archibald's Portfolio</h1>
                <p class="mt-8 text-lg font-medium text-pretty text-gray-500 sm:text-xl/8">Holder of a CDA (Application Developer) diploma and strong web development skills, I bring the rigor and precision your projects require.</p>
                <div class="mt-10 flex items-center justify-center gap-x-6">
                    <a href="#" class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">My projects</a>
                    <a href="#" class="text-sm/6 font-semibold text-gray-900">My skills <span aria-hidden="true">→</span></a>
                </div>
            </div>
            <div class="flex justify-center pt-24"><a href="#about-me" class="flex justify-center w-[100%]"><img class="w-[6%]" src="/img/chevron-down.svg" /></a></div>
        </div>
    </div>
</div>

<!-- ABOUT ME -->
<div class="md:snap-start pt-18" id="about-me">
    <div class="mx-auto max-w-2xl px-6 lg:max-w-7xl lg:px-8">
        <p class="mx-auto mt-2 max-w-lg text-center text-4xl font-semibold tracking-tight text-balance text-gray-950 sm:text-4xl">About me</p>
        <div class="mt-10 grid gap-4 sm:mt-8 lg:grid-cols-3 lg:grid-rows-2">
            <div class="relative lg:row-span-2">
                <div class="absolute inset-px rounded-lg bg-white lg:rounded-l-[2rem]"></div>
                <div class="relative flex h-full flex-col overflow-hidden rounded-[calc(var(--radius-lg)+1px)] lg:rounded-l-[calc(2rem+1px)]">
                    <div class="px-8 pt-8 pb-3 sm:px-10 sm:pt-10 sm:pb-0">
                        <p class="mt-2 text-lg font-medium tracking-tight text-gray-950 max-lg:text-center">Passionate Developer</p>
                        <p class="mt-2 max-w-lg text-sm/6 text-gray-600 max-lg:text-center">I am a web developer passionate about creating intuitive and high-performing interfaces. I love turning ideas into concrete digital experiences.</p>
                    </div>
                    <div class="@container relative min-h-[30rem] w-full grow max-lg:mx-auto max-lg:max-w-sm">
                        <div class="absolute inset-x-10 top-10 bottom-0 overflow-hidden rounded-t-[12cqw] border-x-[3cqw] border-t-[3cqw] border-gray-700 bg-gray-900 shadow-2xl">
                            <img class="size-full object-cover object-top" src="/img/mobile.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="pointer-events-none absolute inset-px rounded-lg shadow-sm ring-1 ring-black/5 lg:rounded-l-[2rem]"></div>
            </div>
            <div class="relative max-lg:row-start-1">
                <div class="absolute inset-px rounded-lg bg-white max-lg:rounded-t-[2rem]"></div>
                <div class="relative flex h-full flex-col overflow-hidden rounded-[calc(var(--radius-lg)+1px)] max-lg:rounded-t-[calc(2rem+1px)]">
                    <div class="px-8 pt-8 sm:px-10 sm:pt-10">
                        <p class="mt-2 text-lg font-medium tracking-tight text-gray-950 max-lg:text-center">Web-Oriented</p>
                        <p class="mt-2 max-w-lg text-sm/6 text-gray-600 max-lg:text-center">
                            My expertise focuses on full stack web development, with particular attention to performance, accessibility, and maintainability.
                            <br><br>
                            I am proficient in both front-end and back-end technologies, allowing me to design and implement robust, scalable, and user-friendly web applications from start to finish.
                        </p>
                    </div>
                </div>
                <div class="pointer-events-none absolute inset-px rounded-lg shadow-sm ring-1 ring-black/5 max-lg:rounded-t-[2rem]"></div>
            </div>
            <div class="relative max-lg:row-start-3 lg:col-start-2 lg:row-start-2">
                <div class="absolute inset-px rounded-lg bg-white"></div>
                <div class="relative flex h-full flex-col overflow-hidden rounded-[calc(var(--radius-lg)+1px)]">
                    <div class="px-8 pt-8 sm:px-10 sm:pt-10">
                        <p class="mt-2 text-lg font-medium tracking-tight text-gray-950 max-lg:text-center">Team Spirit</p>
                        <p class="mt-2 max-w-lg text-sm/6 text-gray-600 max-lg:text-center">I enjoy working in a team, sharing ideas, and learning from others. Agility and communication are at the heart of my way of collaborating.</p>
                    </div>
                    <div class="@container flex flex-1 items-center max-lg:py-6 lg:pb-2">
                        <img class="h-[min(152px,40cqw)] object-cover" src="/img/home-about-me.png" alt="">
                    </div>
                </div>
                <div class="pointer-events-none absolute inset-px rounded-lg shadow-sm ring-1 ring-black/5"></div>
            </div>
            <div class="relative lg:row-span-2">
                <div class="absolute inset-px rounded-lg bg-white max-lg:rounded-b-[2rem] lg:rounded-r-[2rem]"></div>
                <div class="relative flex h-full flex-col overflow-hidden rounded-[calc(var(--radius-lg)+1px)] max-lg:rounded-b-[calc(2rem+1px)] lg:rounded-r-[calc(2rem+1px)]">
                    <div class="px-8 pt-8 pb-3 sm:px-10 sm:pt-10 sm:pb-0">
                        <p class="mt-2 text-lg font-medium tracking-tight text-gray-950 max-lg:text-center">Curiosity & Learning</p>
                        <p class="mt-2 max-w-lg text-sm/6 text-gray-600 max-lg:text-center">Always curious, I stay up to date with the latest technologies and best practices, whether on the frontend or backend.</p>
                    </div>
                    <div class="relative min-h-[30rem] w-full grow">
                        <div class="absolute top-10 right-0 bottom-0 left-10 overflow-hidden rounded-tl-xl bg-gray-900 shadow-2xl">
                            <div class="flex bg-gray-800/40 ring-1 ring-white/5">
                                <div class="-mb-px flex text-sm/6 font-medium text-gray-400">
                                    <div class="border-r border-b border-r-white/10 border-b-white/20 bg-white/5 px-4 py-2 text-white">Learning.tsx</div>
                                </div>
                            </div>
                            <div class="px-6 pt-6 pb-14 text-white text-sm">
                                <code>
                                    <span class="text-blue-400">import</span> React <span class="text-blue-400">from</span> <span class="text-green-300">'react'</span>;
                                    <br>
                                    <br>
                                    <span class="text-blue-400">const</span> <span class="text-yellow-300">Learning</span><span class="text-white">: </span><span class="text-yellow-300">React</span>.<span class="text-yellow-300">FC</span> = <span class="text-pink-400">()</span> <span class="text-white">=&gt;</span> <span class="text-white">{</span>
                                    <br>
                                    &nbsp;&nbsp;&nbsp;&nbsp;<span class="text-blue-400">return</span> (
                                    <br>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt<span class="text-purple-300">div</span>&gt;
                                    <br>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Always on the lookout,<br>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I explore modern<br>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;frameworks and DevOps<br>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;tools to enrich my<br>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;technical toolbox.
                                    <br>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt/<span class="text-purple-300">div</span>&gt;
                                    <br>
                                    &nbsp;&nbsp;&nbsp;&nbsp;);
                                    <br>
                                    };
                                    <br>
                                    <br>

                                    export default Learning;
                                </code>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pointer-events-none absolute inset-px rounded-lg shadow-sm ring-1 ring-black/5 max-lg:rounded-b-[2rem] lg:rounded-r-[2rem]"></div>
            </div>
        </div>
    </div>
</div>

@endsection