<header class="absolute inset-x-0 top-0 z-50">
    <nav class="flex items-center justify-between p-6 lg:px-8" aria-label="Global">
        <div class="flex lg:flex-1">
            <a href="#" class="-m-1.5 p-1.5">
                <span class="sr-only">Archibald</span>
                <!-- logo -->
            </a>
        </div>

        <!-- Open button (mobile) -->
        <div class="flex lg:hidden">
            <button
                type="button"
                aria-label="Open main menu"
                class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
            </button>
        </div>

        <!-- Desktop menu -->
        <div class="hidden lg:flex lg:gap-x-12">
            <a href="/" class="text-sm font-semibold text-gray-900">Home</a>
            <a href="/projects" class="text-sm font-semibold text-gray-900">Projects</a>
            <a href="/skills" class="text-sm font-semibold text-gray-900">Skills</a>
            <a href="/contact" class="text-sm font-semibold text-gray-900">Contact</a>
            <a href="/login" class="text-sm font-semibold text-gray-900">Login</a>
        </div>
        <div class="hidden lg:flex lg:flex-1 lg:justify-end">
            <a href="/quote-request" class="text-sm font-semibold text-gray-900">
                Quote request <span aria-hidden="true">&rarr;</span>
            </a>
        </div>
    </nav>

    <!-- Mobile menu -->
    <div id="mobile-menu"
        class="lg:hidden fixed inset-0 z-50 pointer-events-none opacity-0 transition-opacity duration-300">
        <!-- Background -->
        <div class="fixed inset-0 bg-black/30"></div>
        <!-- Slide-over -->
        <div id="mobile-menu-panel"
            class="fixed inset-y-0 right-0 z-50 w-full max-w-sm overflow-y-auto bg-white
                transform translate-x-full transition-transform duration-300 ease-in-out
                px-6 py-6 sm:ring-1 sm:ring-gray-900/10">
            <div class="flex items-center justify-between">
                <a href="#" class="-m-1.5 p-1.5">
                    <span class="sr-only">Archibald</span>
                </a>
                <button
                    type="button"
                    aria-label="Close menu"
                    class="-m-2.5 rounded-md p-2.5 text-gray-700">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="mt-6 flow-root">
                <div class="-my-6 divide-y divide-gray-500/10">
                    <div class="space-y-2 py-6">
                        <a href="/"
                            class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold text-gray-900 hover:bg-gray-50">
                            Home
                        </a>
                        <a href="/projects"
                            class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold text-gray-900 hover:bg-gray-50">
                            Projects
                        </a>
                        <a href="/skills"
                            class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold text-gray-900 hover:bg-gray-50">
                            Skills
                        </a>
                        <a href="/contact"
                            class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold text-gray-900 hover:bg-gray-50">
                            Contact
                        </a>
                        <a href="/login"
                            class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold text-gray-900 hover:bg-gray-50">
                            Login
                        </a>
                    </div>
                    <div class="py-6">
                        <a href="/quote-request"
                            class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-semibold text-gray-900 hover:bg-gray-50">
                            Quote request <span aria-hidden="true">&rarr;</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const btnOpen = document.querySelector('[aria-label="Open main menu"]');
        const btnClose = document.querySelector('[aria-label="Close menu"]');
        const menu = document.getElementById('mobile-menu');
        const panel = document.getElementById('mobile-menu-panel');

        const openMenu = () => {
            // Toggle container visibility
            menu.classList.remove('pointer-events-none', 'opacity-0');
            menu.classList.add('opacity-100');
            // Slide the panel in
            panel.classList.remove('translate-x-full');
            panel.classList.add('translate-x-0');
        };

        const closeMenu = () => {
            // Slide the panel out
            panel.classList.remove('translate-x-0');
            panel.classList.add('translate-x-full');
            // Hide the container after the transition
            panel.addEventListener('transitionend', () => {
                menu.classList.remove('opacity-100');
                menu.classList.add('opacity-0', 'pointer-events-none');
            }, {
                once: true
            });
        };

        btnOpen.addEventListener('click', openMenu);
        btnClose.addEventListener('click', closeMenu);
    });
</script>