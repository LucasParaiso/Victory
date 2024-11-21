<nav class="bg-black border-b-4 border-orangeYellow ">
    <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
        <div class="relative flex h-16 items-center justify-between">
            <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                <!-- Mobile menu button-->
                <button type="button" class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
                    <span class="absolute -inset-0.5"></span>
                    <span class="sr-only">Open main menu</span>
                    <!-- 
                            Icon when menu is closed.

                            Menu open: "hidden", Menu closed: "block"
                        -->
                    <svg class="block size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                    <!--
                            Icon when menu is open.

                            Menu open: "block", Menu closed: "hidden"
                        -->
                    <svg class="hidden size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
                <!-- LOGO -->
                <div class="flex shrink-0 items-center">
                    <img class="h-8 w-auto" src="/img/3det_logo.png" alt="logo">
                </div>

                <!-- PAGES -->
                <div class="hidden sm:ml-6 sm:block">
                    <div class="flex space-x-4">
                        <a href="{{ Route('characters') }}" class="px-3 py-2 text-m font-bold border-b-2 border-transparent hover:border-orangeYellow transition ease-in-out duration-150" wire:navigate>
                            {{ __('Personagens') }}
                        </a>

                        <a href="{{ Route('campaigns') }}" class="px-3 py-2 text-m font-bold border-b-2 border-transparent hover:border-orangeYellow transition ease-in-out duration-150" wire:navigate>
                            {{ __('Campanhas') }}
                        </a>
                    </div>
                </div>
            </div>

            <!-- USER -->
            <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                <div class="relative ml-3">

                    <!-- Settings Dropdown -->
                    <div class="hidden sm:flex sm:items-center sm:ms-6">
                        <x-dropdown align="right" width="48">
                            <x-slot name="trigger">
                                <button class="inline-flex items-center px-3 py-2 border-b-2 border-transparent text-sm leading-4 font-bold hover:border-orangeYellow focus:outline-none transition ease-in-out duration-150">
                                    <div x-data="{{ json_encode(['name' => auth()->user()->name]) }}" x-text="name" x-on:profile-updated.window="name = $event.detail.name"></div>

                                    <div class="ms-1">
                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                </button>
                            </x-slot>

                            <x-slot name="content" class="bg-black">
                                <x-dropdown-link :href="route('profile')" wire:navigate>
                                    {{ __('Perfil') }}
                                </x-dropdown-link>

                                <!-- Authentication -->
                                <button wire:click="logout" class="w-full text-start">
                                    <x-dropdown-link>
                                        {{ __('Sair') }}
                                    </x-dropdown-link>
                                </button>
                            </x-slot>
                        </x-dropdown>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div class="sm:hidden" id="mobile-menu">
        <div class="space-y-1 px-2 pb-3 pt-2">
            <a href="{{ Route('characters') }}" class="rounded-md px-3 py-2 text-m font-bold text-white hover:bg-orangeYellow hover:text-black">Personagens</a>
            <a href="{{ Route('campaigns') }}" class="rounded-md px-3 py-2 text-m font-bold text-white hover:bg-orangeYellow hover:text-black">Campanhas</a>
        </div>
    </div>
</nav>