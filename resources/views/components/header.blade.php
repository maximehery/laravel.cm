<nav x-data="{ open: false, flyoutMenu: false }" {{ $attributes->merge(['class' => 'relative z-10 bg-skin-menu/50 backdrop-blur-sm']) }}>
    <div class="max-w-7xl mx-auto px-2 sm:px-4">
        <div class="flex justify-between h-16">
            <div class="flex px-2 lg:px-0">
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('home') }}">
                        <x-application-icon class="block h-8 w-auto sm:h-9" />
                    </a>
                </div>
                <div class="hidden lg:ml-10 lg:flex lg:items-center lg:space-x-6 font-sans">
                    <a href="{{ route('forum.index') }}" class="inline-flex items-center px-1 text-sm font-medium {{ active(['forum', 'forum*'], 'text-skin-primary hover:text-skin-primary-hover', 'text-skin-menu hover:text-skin-menu-hover') }}">
                        {{ __('Forum') }}
                    </a>
                    <a href="{{ route('articles') }}" class="inline-flex items-center px-1 text-sm font-medium {{ active(['articles', 'articles*'], 'text-skin-primary hover:text-skin-primary-hover', 'text-skin-menu hover:text-skin-menu-hover') }}">
                        {{ __('Articles') }}
                    </a>
                    <a href="{{ route('discussions.index') }}" class="inline-flex items-center px-1 text-sm font-medium {{ active(['discussions', 'discussions*'], 'text-skin-primary hover:text-skin-primary-hover', 'text-skin-menu hover:text-skin-menu-hover') }}">
                        {{ __('Discussions') }}
                    </a>
                    <a href="#" class="inline-flex items-center px-1 text-sm font-medium {{ active(['tutorials', 'tutorials*'], 'text-skin-primary hover:text-skin-primary-hover', 'text-skin-menu hover:text-skin-menu-hover') }}">
                        {{ __('Vidéos') }}
                    </a>
                    <div class="relative px-1 mt-1.5">
                        <button @click="flyoutMenu =! flyoutMenu" type="button" class="group rounded-md inline-flex items-center font-medium text-skin-menu hover:text-skin-menu-hover focus:outline-none focus:ring-0" :class="{ 'text-skin-menu-hover': flyoutMenu, 'text-skin-menu': !(flyoutMenu) }">
                            <x-untitledui-dots-horizontal class="h-5 w-5" />
                        </button>
                        <div x-show="flyoutMenu"
                             x-transition:enter="transition ease-out duration-200"
                             x-transition:enter-start="opacity-0 translate-y-1"
                             x-transition:enter-end="opacity-100 translate-y-0"
                             x-transition:leave="transition ease-in duration-150"
                             x-transition:leave-start="opacity-100 translate-y-0"
                             x-transition:leave-end="opacity-0 translate-y-1"
                             class="absolute z-10 -ml-4 mt-3 transform w-screen max-w-md lg:max-w-3xl lg:ml-0 lg:left-1/2 lg:-translate-x-1/2"
                             x-ref="panel"
                             @click.outside="flyoutMenu = false"
                             style="display: none;"
                        >
                            <div class="rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 overflow-hidden">
                                <div class="relative grid gap-6 bg-skin-card px-5 py-6 sm:gap-8 sm:p-8 lg:grid-cols-2">
                                    <a href="https://snippets.laravel.cm" class="-m-3 p-3 flex items-start rounded-lg hover:bg-skin-card-muted">
                                        <div class="shrink-0 flex items-center justify-center h-10 w-10 rounded-md bg-green-500 text-white sm:h-12 sm:w-12">
                                            <x-untitledui-brackets class="w-6 h-6" />
                                        </div>
                                        <div class="ml-4">
                                            <p class="text-base font-sans font-medium text-skin-inverted">
                                                {{ __('Snippets') }}
                                            </p>
                                            <p class="mt-1 text-sm text-skin-base font-normal">
                                                {{ __('Créer et partagez des codes sources publiquement accessible par tous.') }}
                                            </p>
                                        </div>
                                    </a>

                                    <a href="{{ route('rules') }}" class="-m-3 p-3 flex items-start rounded-lg hover:bg-skin-card-muted">
                                        <div class="shrink-0 flex items-center justify-center h-10 w-10 rounded-md bg-green-500 text-white sm:h-12 sm:w-12">
                                            <x-untitledui-book-open class="w-6 h-6" />
                                        </div>
                                        <div class="ml-4">
                                            <p class="text-base font-sans font-medium text-skin-inverted">
                                                {{ __('Guides') }}
                                            </p>
                                            <p class="mt-1 text-sm text-skin-base font-normal">
                                                {{ __('Découvrez le code de conduite pour l’utilisation du site.') }}
                                            </p>
                                        </div>
                                    </a>

                                    <a href="#" class="-m-3 p-3 flex items-start rounded-lg hover:bg-skin-card-muted">
                                        <div class="shrink-0 flex items-center justify-center h-10 w-10 rounded-md bg-green-500 text-white sm:h-12 sm:w-12">
                                            <x-untitledui-microphone class="h-6 w-6" />
                                        </div>
                                        <div class="ml-4">
                                            <p class="inline-flex items-center text-base font-sans font-medium text-skin-inverted">
                                                {{ __('Podcasts') }}
                                                <x-soon />
                                            </p>
                                            <p class="mt-1 text-sm text-skin-base font-normal">
                                                {{ __('Toutes les discussions sur le développement de Laravel et PHP.') }}
                                            </p>
                                        </div>
                                    </a>

                                    <a href="#" class="-m-3 p-3 flex items-start rounded-lg hover:bg-skin-card-muted">
                                        <div class="shrink-0 flex items-center justify-center h-10 w-10 rounded-md bg-green-500 text-white sm:h-12 sm:w-12">
                                            <x-untitledui-check-verified-02 class="w-6 h-6" />
                                        </div>
                                        <div class="ml-4">
                                            <p class="inline-flex items-center text-base font-sans font-medium text-skin-inverted">
                                                {{ __('Badges') }}
                                                <x-soon />
                                            </p>
                                            <p class="mt-1 text-sm text-skin-base font-normal">
                                                {{ __('Obtenez des badges et débloquez différentes fonctionnalités.') }}
                                            </p>
                                        </div>
                                    </a>

                                    <a href="#" class="-m-3 p-3 flex items-start rounded-lg hover:bg-skin-card-muted">
                                        <div class="shrink-0 flex items-center justify-center h-10 w-10 rounded-md bg-gradient-to-br from-flag-yellow to-flag-red text-white sm:h-12 sm:w-12">
                                            <svg class="h-6 w-6" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                <path d="M23 9.04c0-1.249-1.051-2.27-2.335-2.27-1.285 0-2.336 1.021-2.336 2.27 0 .703.35 1.36.888 1.77l-3.083 2.29-2.99-3.857c.724-.386 1.215-1.135 1.215-1.975C14.359 6.021 13.308 5 12.023 5 10.74 5 9.688 6.021 9.688 7.27c0 .839.467 1.588 1.191 1.974L7.633 13.1 4.76 10.832c.537-.408.91-1.066.91-1.793 0-1.248-1.05-2.269-2.335-2.269C2.051 6.77 1 7.791 1 9.04c0 1.111.817 2.042 1.915 2.223l1.121 5.696v2.36c0 .386.304.681.7.681h14.527c.397 0 .7-.295.7-.68v-2.36l1.122-5.697C22.183 11.082 23 10.151 23 9.04zm-2.335-.908c.513 0 .934.408.934.907 0 .5-.42.908-.934.908s-.935-.408-.935-.908c0-.499.42-.907.934-.907zM12 6.339c.514 0 .934.408.934.908 0 .499-.42.907-.934.907s-.934-.408-.934-.907c0-.5.42-.908.934-.908zm-4.18 8.396a.727.727 0 0 0 .467-.25l3.69-4.47 3.456 4.448c.117.136.28.25.467.272a.683.683 0 0 0 .514-.136l3.036-2.247-.77 3.858H5.32l-.747-3.79 2.733 2.156c.14.114.327.182.514.16zM2.4 9.04c0-.499.42-.907.934-.907s.935.408.935.907c0 .5-.42.908-.935.908-.513 0-.934-.408-.934-.908zm3.036 9.6v-1.067h13.126v1.066H5.437z" />
                                            </svg>
                                        </div>
                                        <div class="ml-4">
                                            <p class="text-base font-sans font-medium text-yellow-500">
                                                {{ __('Devenez Premium') }}
                                            </p>
                                            <p class="mt-1 text-sm text-skin-base font-normal">
                                                {{ __('Devenez prémium et soutenez la production de contenu du site.') }}
                                            </p>
                                        </div>
                                    </a>

                                    <a href="#" class="-m-3 p-3 flex items-start rounded-lg hover:bg-skin-card-muted">
                                        <div class="shrink-0 flex items-center justify-center h-10 w-10 rounded-md bg-green-500 text-white sm:h-12 sm:w-12">
                                            <x-heroicon-o-briefcase class="w-6 h-6" />
                                        </div>
                                        <div class="ml-4">
                                            <p class="inline-flex items-center text-base font-sans font-medium text-skin-inverted">
                                                {{ __('Jobs') }}
                                                <span class="inline-flex ml-2 text-xs leading-4 text-green-800 bg-green-100 py-0.5 px-1.5 rounded-full">
                                                    {{ __('Bientôt') }}
                                                </span>
                                            </p>
                                            <p class="mt-1 text-sm text-skin-base font-normal">
                                                {{ __('Les offres pour développeurs Laravel dans la zone CEMAC.') }}
                                            </p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex-1 flex items-center justify-center px-2 lg:ml-6 lg:justify-end">
                @include('partials._search')
            </div>
            <div class="flex items-center lg:hidden">
                <!-- Mobile menu button -->
                <button type="button" class="inline-flex items-center justify-center p-2 rounded-md text-skin-muted hover:text-skin-base focus:outline-none focus:ring-2 focus:ring-inset focus:ring-green-500" aria-controls="mobile-menu" @click="open = !open" aria-expanded="false" x-bind:aria-expanded="open.toString()">
                    <span class="sr-only">Open main menu</span>
                    <svg class="h-6 w-6 block" :class="{ 'hidden': open, 'block': !(open) }" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <svg class="h-6 w-6 hidden" :class="{ 'block': open, 'hidden': !(open) }" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="hidden lg:ml-6 lg:flex lg:items-center">
                @auth
                    <a href="{{ route('notifications') }}" class="relative shrink-0 hover:bg-skin-body p-1 text-skin-muted rounded-full hover:text-skin-base focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-body focus:ring-green-500">
                        <span class="sr-only">{{ __('Voir les notifications') }}</span>
                        <x-untitledui-bell class="w-5 h-5" />
                        <livewire:notification-indicator />
                    </a>

                    <!-- Add actions dropdown -->
                    <div x-data="{ open: false }" @keydown.escape.stop="open = false;" @click.outside="open = false;" class="ml-4 relative shrink-0">
                        <div>
                            <button type="button" class="shrink-0 hover:bg-skin-card p-1 text-skin-muted rounded-full hover:text-skin-base focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-body focus:ring-green-500" x-ref="button" @click="open =! open">
                                <x-untitledui-plus class="w-5 h-5" />
                            </button>
                        </div>

                        <div x-show="open"
                             x-transition:enter="transition ease-out duration-100"
                             x-transition:enter-start="transform opacity-0 scale-95"
                             x-transition:enter-end="transform opacity-100 scale-100"
                             x-transition:leave="transition ease-in duration-75"
                             x-transition:leave-start="transform opacity-100 scale-100"
                             x-transition:leave-end="transform opacity-0 scale-95"
                             class="origin-top absolute right-0 mt-2 w-56 rounded-md shadow-lg py-1 bg-skin-menu divide-y divide-skin-light ring-1 ring-black ring-opacity-5 focus:outline-none"
                             x-ref="menu-items"
                             role="menu"
                             aria-orientation="vertical"
                             aria-labelledby="menu-button"
                             tabindex="-1"
                             @keydown.tab="open = false"
                             @keydown.enter.prevent="open = false;"
                             @keyup.space.prevent="open = false;"
                             style="display: none;">
                            <div class="py-1" role="none">
                                <a href="{{ route('articles.new') }}" class="flex items-center py-1.5 px-3 text-sm text-skin-base hover:bg-skin-primary hover:text-white font-normal" role="menuitem" tabindex="-1">
                                    {{ __('Nouvel article') }}
                                </a>
                                <a href="{{ route('forum.new') }}" class="flex items-center py-1.5 px-3 text-sm text-skin-base hover:bg-skin-primary hover:text-white font-normal" role="menuitem" tabindex="-1">
                                    {{ __('Nouveau sujet') }}
                                </a>
                                <a href="{{ route('discussions.new') }}" class="flex items-center py-1.5 px-3 text-sm text-skin-base hover:bg-skin-primary hover:text-white font-normal" role="menuitem" tabindex="-1">
                                    {{ __('Nouvelle discussion') }}
                                </a>
                                <a href="#" class="flex items-center py-1.5 px-3 text-sm text-skin-base hover:bg-skin-primary hover:text-white font-normal" role="menuitem" tabindex="-1">
                                    {{ __('Nouveau tutoriel') }}
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Profile dropdown -->
                    <x-dropdown-profile />
                @else
                    <div class="relative flex items-center space-x-6 font-sans">
                        <a href="{{ route('login') }}" class="text-skin-menu hover:text-skin-menu-hover inline-flex items-center text-sm font-medium">
                            {{ __('Se connecter') }}
                        </a>
                        <a href="{{ route('register') }}" class="text-flag-green inline-flex items-center text-sm font-medium">
                            {{ __('Créer un compte') }}
                        </a>
                    </div>
                @endauth
            </div>
        </div>
    </div>

    <div x-show="open" class="lg:hidden font-sans" id="mobile-menu" style="display: none;">
        <div class="pt-2 pb-3 space-y-1">
            <a href="{{ route('forum.index') }}" class="border-transparent hover:bg-skin-card-muted hover:border-skin block pl-3 pr-4 py-2 border-l-4 text-base font-medium {{ active(['forum', 'forum*'], 'bg-green-50 border-green-500 text-skin-primary', 'text-skin-menu hover:text-skin-menu-hover') }}">
                {{ __('Forum') }}
            </a>
            <a href="{{ route('articles') }}" class="border-transparent hover:bg-skin-card-muted hover:border-skin block pl-3 pr-4 py-2 border-l-4 text-base font-medium {{ active(['articles', 'articles*'], 'bg-green-50 border-green-500 text-skin-primary', 'text-skin-menu hover:text-skin-menu-hover') }}">
                {{ __('Articles') }}
            </a>
            <a href="{{ route('discussions.index') }}" class="border-transparent hover:bg-skin-card-muted hover:border-skin block pl-3 pr-4 py-2 border-l-4 text-base font-medium {{ active(['discussions', 'discussions*'], 'bg-green-50 border-green-500 text-skin-primary', 'text-skin-menu hover:text-skin-menu-hover') }}">
                {{ __('Discussions') }}
            </a>
            <a href="#" class="border-transparent hover:bg-skin-card-muted hover:border-skin block pl-3 pr-4 py-2 border-l-4 text-base font-medium {{ active(['tutorials', 'tutorials*'], 'bg-green-50 border-green-500 text-skin-primary', 'text-skin-menu hover:text-skin-menu-hover') }}">
                {{ __('Vidéos') }}
            </a>
        </div>
        <div class="py-4 px-3 border-t border-skin-light">
            <h4 class="text-sm leading-5 font-medium uppercase tracking-wide text-skin-muted">
                {{ __('Autres') }}
            </h4>
            <div class="mt-5 space-y-6">
                <a href="https://snippets.laravel.cm" class="flex items-center text-skin-base">
                    <x-untitledui-brackets class="w-6 h-6 mr-2 " />
                    {{ __('Snippets') }}
                </a>

                <a href="{{ route('rules') }}" class="flex items-center text-skin-base">
                    <x-untitledui-bookmark class="h-6 w-6 mr-3 -ml-1" />
                    {{ __('Guides') }}
                </a>

                <a href="#" class="flex items-center text-skin-base">
                    <x-untitledui-microphone class="h-6 w-6 mr-2" />
                    {{ __('Podcasts') }}
                    <x-soon />
                </a>

                <a href="#" class="flex items-center text-skin-base">
                    <x-untitledui-check-verified-02 class="h-6 w-6 mr-2" />
                    {{ __('Badges') }}
                    <x-soon />
                </a>

                <a href="#" class="flex items-center text-yellow-500 hover:text-yellow-600">
                    <svg class="h-6 w-6 mr-2" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path d="M23 9.04c0-1.249-1.051-2.27-2.335-2.27-1.285 0-2.336 1.021-2.336 2.27 0 .703.35 1.36.888 1.77l-3.083 2.29-2.99-3.857c.724-.386 1.215-1.135 1.215-1.975C14.359 6.021 13.308 5 12.023 5 10.74 5 9.688 6.021 9.688 7.27c0 .839.467 1.588 1.191 1.974L7.633 13.1 4.76 10.832c.537-.408.91-1.066.91-1.793 0-1.248-1.05-2.269-2.335-2.269C2.051 6.77 1 7.791 1 9.04c0 1.111.817 2.042 1.915 2.223l1.121 5.696v2.36c0 .386.304.681.7.681h14.527c.397 0 .7-.295.7-.68v-2.36l1.122-5.697C22.183 11.082 23 10.151 23 9.04zm-2.335-.908c.513 0 .934.408.934.907 0 .5-.42.908-.934.908s-.935-.408-.935-.908c0-.499.42-.907.934-.907zM12 6.339c.514 0 .934.408.934.908 0 .499-.42.907-.934.907s-.934-.408-.934-.907c0-.5.42-.908.934-.908zm-4.18 8.396a.727.727 0 0 0 .467-.25l3.69-4.47 3.456 4.448c.117.136.28.25.467.272a.683.683 0 0 0 .514-.136l3.036-2.247-.77 3.858H5.32l-.747-3.79 2.733 2.156c.14.114.327.182.514.16zM2.4 9.04c0-.499.42-.907.934-.907s.935.408.935.907c0 .5-.42.908-.935.908-.513 0-.934-.408-.934-.908zm3.036 9.6v-1.067h13.126v1.066H5.437z" />
                    </svg>
                    {{ __('Devenez Prémium') }}
                    <x-soon />
                </a>

                <a href="#" class="flex items-center text-skin-base">
                    <x-heroicon-o-briefcase class="h-6 w-6 mr-3 -ml-1" />
                    {{ __('Jobs') }}
                    <x-soon />
                </a>

            </div>
        </div>
        <div class="pt-4 pb-3 border-t border-skin-light">
            @auth
                <div class="flex items-center px-4">
                    <div class="shrink-0">
                        <img class="h-10 w-10 rounded-full" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}">
                    </div>
                    <div class="ml-3">
                        <div class="text-base font-medium text-skin-inverted">{{ Auth::user()->name }}</div>
                        <div class="text-sm font-medium text-skin-muted">{{ Auth::user()->email }}</div>
                    </div>
                    <button class="ml-auto shrink-0 bg-skin-card p-1 text-skin-muted rounded-full hover:text-skin-base focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                        <span class="sr-only">{{ __('Voir les notifications') }}</span>
                        <x-untitledui-bell  class="h-6 w-6"/>
                    </button>
                </div>
                <div class="mt-3 space-y-1">
                    <a href="{{ route('profile') }}" class="block px-4 py-2 text-base font-medium text-skin-menu hover:text-skin-menu-hover">
                        {{ __('Mon profil') }}
                    </a>
                    <a href="{{ route('user.settings') }}" class="block px-4 py-2 text-base font-medium text-skin-menu hover:text-skin-menu-hover">
                        {{ __('Paramètres') }}
                    </a>
                    <div class="px-4 py-2" role="form">
                        <form method="POST" action="{{ route('logout') }}" role="form">
                            @csrf
                            <button type="submit" class="group flex items-center text-skin-base hover:text-skin-menu-hover font-medium w-full text-base" role="menuitem" tabindex="-1" id="logout-mobile">
                                {{ __('Se déconnecter') }}
                            </button>
                        </form>
                    </div>
                </div>
            @else
                <div class="space-y-1">
                    <a href="{{ route('login') }}" class="block px-4 py-2 text-base font-medium text-skin-menu hover:text-skin-menu-hover">
                        {{ __('Se connecter') }}
                    </a>
                    <a href="{{ route('register') }}" class="block px-4 py-2 text-base font-medium text-flag-green">
                        {{ __('Créer un compte') }}
                    </a>
                </div>
            @endauth
        </div>
    </div>
</nav>
