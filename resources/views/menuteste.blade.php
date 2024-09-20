<div class="h-screen fixed mr-80">
    <div class="drawer lg:drawer-open">
        <input id="my-drawer-2" type="checkbox" class="drawer-toggle" />
        <!-- Page Content -->
        <div class="drawer-content flex flex-col">
            <!-- Mobile Navbar -->
            <div class="navbar lg:hidden">
                <div class="flex-none">
                    <label for="my-drawer-2" class="btn btn-square btn-ghost">
                        <!-- Hamburger Icon -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </label>
                </div>
            </div>

        </div>
        <!-- Sidebar -->
        <div class="drawer-side">
            <label for="my-drawer-2" aria-label="close sidebar" class="drawer-overlay"></label>
            <ul class="menu bg-white dark:bg-neutral-800 text-base-content min-h-full w-64 p-4 rounded-r-3xl">
                <!-- Sidebar content here -->
                <li><a>Sidebar Item 1</a></li>
                <li><a>Sidebar Item 2</a></li>
                <x-theme-toggle></x-theme-toggle>
            </ul>
        </div>
    </div>
</div>

