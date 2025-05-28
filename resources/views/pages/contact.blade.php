@extends('layouts.app')

@section('content')

<!-- CONTACT FORM -->
<div class="isolate px-6 pt-18 sm:pt-22 lg:px-8">
    <div class="mx-auto max-w-2xl text-center">
        <h2 class="text-4xl font-semibold tracking-tight text-balance text-gray-900 sm:text-5xl">Contact me</h2>
        <p class="mt-2 text-lg/8 text-gray-600">Feel free to reach out for collaborations, inquiries, or just to say hello.</p>
    </div>

    <form
        id="contact-form"
        action="#"
        method="POST"
        class="mx-auto mt-12 max-w-xl sm:mt-16">
        @csrf

        <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">
            <div>
                <label for="first-name" class="block text-sm/6 font-semibold text-gray-900">First name</label>
                <div class="mt-2.5">
                    <input type="text" name="first-name" id="first-name" autocomplete="given-name" required
                        class="block w-full rounded-md bg-white px-3.5 py-2 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600">
                </div>
            </div>

            <div>
                <label for="last-name" class="block text-sm/6 font-semibold text-gray-900">Last name</label>
                <div class="mt-2.5">
                    <input type="text" name="last-name" id="last-name" autocomplete="family-name" required
                        class="block w-full rounded-md bg-white px-3.5 py-2 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600">
                </div>
            </div>

            <div class="sm:col-span-2">
                <label for="email" class="block text-sm/6 font-semibold text-gray-900">Email</label>
                <div class="mt-2.5">
                    <input type="email" name="email" id="email" autocomplete="email" required
                        class="block w-full rounded-md bg-white px-3.5 py-2 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600">
                </div>
            </div>

            <div class="sm:col-span-2">
                <label for="message" class="block text-sm/6 font-semibold text-gray-900">Message</label>
                <div class="mt-2.5">
                    <textarea name="message" id="message" rows="4" required
                        class="block w-full rounded-md bg-white px-3.5 py-2 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600"></textarea>
                </div>
            </div>

            <!-- Error message -->
            <div class="sm:col-span-2">
                <p id="agree-error" class="hidden text-sm text-red-600">
                    You have to accept to submit the form.
                </p>
            </div>

            <!-- Switch custom -->
            <div class="flex gap-x-4 sm:col-span-2">
                <div class="flex h-6 items-center">
                    <button
                        id="agree-switch"
                        type="button"
                        role="switch"
                        aria-checked="false"
                        class="group flex w-8 flex-none cursor-pointer rounded-full p-px ring-1 ring-gray-900/5 bg-gray-200 transition-colors duration-200 ease-in-out ring-inset focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                        <span class="sr-only">Agree to policies</span>
                        <span
                            id="agree-thumb"
                            aria-hidden="true"
                            class="block h-4 w-4 transform rounded-full bg-white shadow-xs ring-1 ring-gray-900/5 translate-x-0 transition duration-200 ease-in-out">
                        </span>
                    </button>
                </div>
                <label class="text-sm/6 text-gray-600" id="switch-1-label">
                    By selecting this, you authorize me to use your information to
                    <p class="font-semibold text-indigo-600">contact you.</p>
                </label>
            </div>
        </div>

        <div class="mt-10">
            <button
                type="submit"
                class="block w-full rounded-md bg-indigo-600 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                Send message
            </button>
        </div>
    </form>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.getElementById('contact-form');
        const switchBtn = document.getElementById('agree-switch');
        const thumb = document.getElementById('agree-thumb');
        const errorMsg = document.getElementById('agree-error');
        let agreed = false;

        // Toggle switch functionality
        switchBtn.addEventListener('click', function() {
            agreed = !agreed;
            switchBtn.setAttribute('aria-checked', agreed.toString());

            if (agreed) {
                switchBtn.classList.replace('bg-gray-200', 'bg-indigo-600');
                thumb.classList.replace('translate-x-0', 'translate-x-3.5');
                errorMsg.classList.add('hidden');
            } else {
                switchBtn.classList.replace('bg-indigo-600', 'bg-gray-200');
                thumb.classList.replace('translate-x-3.5', 'translate-x-0');
            }
        });

        // Managing form submission
        form.addEventListener('submit', function(e) {
            if (!agreed) {
                e.preventDefault();
                errorMsg.classList.remove('hidden');
            }
        });
    });
</script>

@endsection