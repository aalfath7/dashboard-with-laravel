<div x-data="{ isOpen: false }">
    <nav class="bg-white z-50 fixed w-full">
        <div class="flex justify-between p-4">
            <div class="flex items-center">
                <button @click="isOpen = !isOpen" type="button" class="hover:bg-gray-100 p-2 rounded-lg block sm:hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25H12" />
                    </svg>
                </button>
                <a href="/" class="font-bold text-2xl px-12">Board Apps</a>
            </div>
            <button type="button">
                <img src="" alt="">
            </button>
        </div>
    </nav>

    <aside :class="{ 'translate-x-0': isOpen, '-translate-x-full': !isOpen }"
        class="fixed top-0 left-0 w-64 h-screen bg-white z-40 duration-100 sm:translate-x-0">
        <div class="h-full px-5 py-20 overflow-y-auto ">
            <ul class="space-y-2 font-medium">
                <li>
                    <a href="/"
                        class="{{ request()->is('/') ? 'bg-gray-100 text-blue-700' : 'bg-white' }} flex justify-center items-center px-2 py-3 rounded-lg hover:bg-gray-100">Home</a>
                </li>
                <li>
                    <a href="/news"
                        class="{{ request()->is('news') ? 'bg-gray-100 text-blue-700' : 'bg-white' }} flex justify-center items-center px-2 py-3 rounded-lg hover:bg-gray-100">News</a>
                </li>
            </ul>
        </div>
    </aside>
</div>
