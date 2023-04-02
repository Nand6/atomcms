<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="turbolinks-cache-control" content="no-cache">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ setting('hotel_name') }} - @stack('title')</title>
		
		<meta name="vindretros" content="l2czNtDkfn9nIqSkUFgkqPovjSIGUXWA" />

        <link rel="icon" type="image/gif" sizes="18x17" href="{{ asset('assets/images/habbis_icon.ico') }}">

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css" />
        <script src="https://unpkg.com/@popperjs/core@2"></script>
        <script src="https://unpkg.com/tippy.js@6"></script>
        <link rel="stylesheet" href="https://unpkg.com/tippy.js@6/animations/scale.css"/>

        <script defer src="https://unpkg.com/@alpinejs/ui@3.10.5-beta.8/dist/cdn.min.js"></script>
        <script defer src="https://unpkg.com/@alpinejs/focus@3.10.5/dist/cdn.min.js"></script>

        @vite(['resources/themes/atom/css/app.css', 'resources/themes/atom/js/app.js'])
        @stack('scripts')
		
		<script type="text/javascript">
			console.log(`
                                                                                                                             
                                                                                                                             
HHHHHHHHH     HHHHHHHHH               AAA               BBBBBBBBBBBBBBBBB   BBBBBBBBBBBBBBBBB   IIIIIIIIII   SSSSSSSSSSSSSSS 
H:::::::H     H:::::::H              A:::A              B::::::::::::::::B  B::::::::::::::::B  I::::::::I SS:::::::::::::::S
H:::::::H     H:::::::H             A:::::A             B::::::BBBBBB:::::B B::::::BBBBBB:::::B I::::::::IS:::::SSSSSS::::::S
HH::::::H     H::::::HH            A:::::::A            BB:::::B     B:::::BBB:::::B     B:::::BII::::::IIS:::::S     SSSSSSS
  H:::::H     H:::::H             A:::::::::A             B::::B     B:::::B  B::::B     B:::::B  I::::I  S:::::S            
  H:::::H     H:::::H            A:::::A:::::A            B::::B     B:::::B  B::::B     B:::::B  I::::I  S:::::S            
  H::::::HHHHH::::::H           A:::::A A:::::A           B::::BBBBBB:::::B   B::::BBBBBB:::::B   I::::I   S::::SSSS         
  H:::::::::::::::::H          A:::::A   A:::::A          B:::::::::::::BB    B:::::::::::::BB    I::::I    SS::::::SSSSS    
  H:::::::::::::::::H         A:::::A     A:::::A         B::::BBBBBB:::::B   B::::BBBBBB:::::B   I::::I      SSS::::::::SS  
  H::::::HHHHH::::::H        A:::::AAAAAAAAA:::::A        B::::B     B:::::B  B::::B     B:::::B  I::::I         SSSSSS::::S 
  H:::::H     H:::::H       A:::::::::::::::::::::A       B::::B     B:::::B  B::::B     B:::::B  I::::I              S:::::S
  H:::::H     H:::::H      A:::::AAAAAAAAAAAAA:::::A      B::::B     B:::::B  B::::B     B:::::B  I::::I              S:::::S
HH::::::H     H::::::HH   A:::::A             A:::::A   BB:::::BBBBBB::::::BBB:::::BBBBBB::::::BII::::::IISSSSSSS     S:::::S
H:::::::H     H:::::::H  A:::::A               A:::::A  B:::::::::::::::::B B:::::::::::::::::B I::::::::IS::::::SSSSSS:::::S
H:::::::H     H:::::::H A:::::A                 A:::::A B::::::::::::::::B  B::::::::::::::::B  I::::::::IS:::::::::::::::SS 
HHHHHHHHH     HHHHHHHHHAAAAAAA                   AAAAAAABBBBBBBBBBBBBBBBB   BBBBBBBBBBBBBBBBB   IIIIIIIIII SSSSSSSSSSSSSSS   


`);
		</script>
    </head>

    <body class="flex flex-col min-h-screen site-bg dark:bg-gray-800">
        <x-messages.flash-messages />

        <div id="app" class="bg-gray-100 dark:bg-gray-900">
            {{-- Top header --}}
            @auth
                <x-top-header />
            @endauth

            {{-- Site Header --}}
            <x-site-header />

            {{-- Navigation --}}
            <nav class="relative bg-white shadow dark:bg-gray-900">
                {{-- relative w-full flex flex-col items-center md:flex-row md:items- md:justify-between gap-x-8 uppercase font-semibold text-[14px] mt-5 --}}
                <div class="px-4 mx-auto max-w-7xl h-auto md:h-[60px] flex md:items-center md:justify-between">
                    <div class="h-full w-full">
                        <x-navigation.mobile-menu />

                        <x-navigation.navigation-menu />
                    </div>

                    <x-navigation.theme-mode-switcher />
                    <x-navigation.language-selector>
                        <img src="/assets/images/icons/flags/{{ session()->has('locale') ? session()->get('locale') : config('habbo.site.default_language') }}.png" alt="">
                    </x-navigation.language-selector>
                </div>
            </nav>

            {{-- Content --}}
            <main class="overflow-hidden site-bg">
                <div class="max-w-7xl mx-auto p-6 grid grid grid-cols-12 gap-x-3 gap-y-8 mt-10 md:mt-0">
                    {{ $slot }}
                </div>
            </main>
        </div>

        <x-footer />

        @if(setting('cms_color_mode') === 'dark')
            <script>
                if(localStorage.getItem("theme") === null) {
                    document.documentElement.classList.add("dark");
                    localStorage.setItem("theme", 'dark');
                }
            </script>
        @endif

        @stack('javascript')
	
		</script>
    </body>
</html>
