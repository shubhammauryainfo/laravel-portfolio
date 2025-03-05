<nav class="bg-white border-gray-200 px-2 sm:px-4 py-1 rounded shadow-md">
    <div class="container flex flex-wrap justify-between items-center mx-auto">
        <!-- Logo -->
        <a href="/" class="flex items-center">
            <span class="self-center text-xl font-semibold whitespace-nowrap">NEXBYTES</span>
        </a>

        <!-- Hamburger Menu for Mobile -->
        <button data-collapse-toggle="mobile-menu" type="button" class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200" aria-controls="mobile-menu" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM4 14a1 1 0 100 2h12a1 1 0 100-2H4z" clip-rule="evenodd"></path>
            </svg>
        </button>

        <!-- Links Section -->
        <div class="hidden w-full md:block md:w-auto" id="mobile-menu">
            <ul class="flex flex-col md:flex-row md:space-x-8 mt-4 md:mt-0 md:text-sm md:font-medium">
                <li>
                    <a href="/" class="block py-2 pr-4 pl-3 text-gray-700 hover:text-blue-700  hover:border-b-4 hover:border-blue-600 md:p-4">Home</a>
                </li>
                <li>
                    <a href="/about" class="block py-2 pr-4 pl-3 text-gray-700 hover:text-blue-700 md:p-0">About</a>
                </li>
                <li>
                    <a href="/services" class="block py-2 pr-4 pl-3 text-gray-700 hover:text-blue-700 md:p-0">Services</a>
                </li>
                <li>
                    <a href="/contact" class="block py-2 pr-4 pl-3 text-gray-700 hover:text-blue-700 md:p-0">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<script>
    // Simple JS to toggle the mobile menu
    document.addEventListener('DOMContentLoaded', () => {
        const toggle = document.querySelector('[data-collapse-toggle]');
        const menu = document.getElementById('mobile-menu');
        toggle.addEventListener('click', () => {
            menu.classList.toggle('hidden');
        });
    });
</script>
