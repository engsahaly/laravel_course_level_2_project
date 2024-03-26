<aside class="sidebar-left border-right bg-white shadow" id="leftSidebar" data-simplebar>
    <a href="#" class="btn collapseSidebar toggle-btn d-lg-none text-muted ml-2 mt-3" data-toggle="toggle">
        <i class="fe fe-x"><span class="sr-only"></span></i>
    </a>
    <nav class="vertnav navbar navbar-light">
        <!-- nav bar -->
        <div class="w-100 mb-4 d-flex">
            <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="./index.html">
                <svg version="1.1" id="logo" class="navbar-brand-img brand-sm" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 120 120"
                    xml:space="preserve">
                    <g>
                        <polygon class="st0" points="78,105 15,105 24,87 87,87 	" />
                        <polygon class="st0" points="96,69 33,69 42,51 105,51 	" />
                        <polygon class="st0" points="78,33 15,33 24,15 87,15 	" />
                    </g>
                </svg>
            </a>
        </div>

        {{-- Home page --}}
        <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item w-100">
                <a class="nav-link" href="{{ route('admin.index') }}">
                    <i class="fe fe-home fe-16"></i>
                    <span class="ml-3 item-text">{{ __('keywords.home') }}</span>
                </a>
            </li>
        </ul>

        <p class="text-muted nav-heading mt-4 mb-1">
            <span>{{ __('keywords.components') }}</span>
        </p>
        <ul class="navbar-nav flex-fill w-100 mb-2">
            {{-- Services --}}
            <x-sidebar-tab href="{{ route('admin.services.index') }}" icon="fe-codesandbox"
                name="{{ __('keywords.services') }}"></x-sidebar-tab>

            {{-- features --}}
            <x-sidebar-tab href="{{ route('admin.features.index') }}" icon="fe-bookmark"
                name="{{ __('keywords.features') }}"></x-sidebar-tab>

            {{-- messages --}}
            <x-sidebar-tab href="{{ route('admin.messages.index') }}" icon="fe-message-square"
                name="{{ __('keywords.messages') }}"></x-sidebar-tab>

            {{-- subscribers --}}
            <x-sidebar-tab href="{{ route('admin.subscribers.index') }}" icon="fe-users"
                name="{{ __('keywords.subscribers') }}"></x-sidebar-tab>

            {{-- testmonials --}}
            <x-sidebar-tab href="{{ route('admin.testmonials.index') }}" icon="fe-message-circle"
                name="{{ __('keywords.testmonials') }}"></x-sidebar-tab>

            {{-- settings --}}
            <x-sidebar-tab href="{{ route('admin.settings.index') }}" icon="fe-settings"
                name="{{ __('keywords.settings') }}"></x-sidebar-tab>
        </ul>

    </nav>
</aside>
