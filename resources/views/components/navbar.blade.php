<div x-data="{ isOpen: false }">
    <nav class="bg-white z-50 fixed w-full">
        <div class="flex justify-between p-4">
            <div class="flex items-center">
                <button @click="isOpen = !isOpen" type="button" class="hover:bg-gray-100 p-2 rounded-lg block sm:hidden">
                    <svg x-show="!isOpen" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25H12" />
                    </svg>
                    <svg x-show="isOpen" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                    </svg>
                </button>
                <a href="/" class="font-bold text-2xl px-3 sm:px-12">Board Apps</a>
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
                        class="{{ request()->is('/') ? 'bg-gray-100 text-blue-700' : 'bg-white' }} flex justify-center items-center px-2 py-3 rounded-lg hover:bg-gray-100">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-6 mr-2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                        </svg>
                        <span>Home</span>
                    </a>
                </li>
                <li>
                    <a href="/news"
                        class="{{ request()->is('news') ? 'bg-gray-100 text-blue-700' : 'bg-white' }} flex justify-center items-center px-2 py-3 rounded-lg hover:bg-gray-100">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-6 mr-2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 0 1-2.25 2.25M16.5 7.5V18a2.25 2.25 0 0 0 2.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 0 0 2.25 2.25h13.5M6 7.5h3v3H6v-3Z" />
                        </svg>
                        <span>News</span>
                    </a>
                </li>
            </ul>
        </div>
    </aside>

    <div @click="isOpen = !isOpen" :class="{ 'block': isOpen, 'hidden': !isOpen }"
        class="hidden fixed inset-0 bg-gray-900 opacity-50 z-30"></div>
</div>
