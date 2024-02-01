<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Welcome to EMSYS</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="/css/home.css" rel="stylesheet">

        <!-- Styles -->
        <style>
            /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, sans-serif;font-feature-settings:normal}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::-webkit-backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.relative{position:relative}.mx-auto{margin-left:auto;margin-right:auto}.mx-6{margin-left:1.5rem;margin-right:1.5rem}.ml-4{margin-left:1rem}.mt-16{margin-top:4rem}.mt-6{margin-top:1.5rem}.mt-4{margin-top:1rem}.-mt-px{margin-top:-1px}.mr-1{margin-right:0.25rem}.flex{display:flex}.inline-flex{display:inline-flex}.grid{display:grid}.h-16{height:4rem}.h-7{height:1.75rem}.h-6{height:1.5rem}.h-5{height:1.25rem}.min-h-screen{min-height:100vh}.w-auto{width:auto}.w-16{width:4rem}.w-7{width:1.75rem}.w-6{width:1.5rem}.w-5{width:1.25rem}.max-w-7xl{max-width:80rem}.shrink-0{flex-shrink:0}.scale-100{--tw-scale-x:1;--tw-scale-y:1;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.grid-cols-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.items-center{align-items:center}.justify-center{justify-content:center}.gap-6{gap:1.5rem}.gap-4{gap:1rem}.self-center{align-self:center}.rounded-lg{border-radius:0.5rem}.rounded-full{border-radius:9999px}.bg-gray-100{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-red-50{--tw-bg-opacity:1;background-color:rgb(254 242 242 / var(--tw-bg-opacity))}.bg-dots-darker{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")}.from-gray-700\/50{--tw-gradient-from:rgb(55 65 81 / 0.5);--tw-gradient-to:rgb(55 65 81 / 0);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-transparent{--tw-gradient-to:rgb(0 0 0 / 0);--tw-gradient-stops:var(--tw-gradient-from), transparent, var(--tw-gradient-to)}.bg-center{background-position:center}.stroke-red-500{stroke:#ef4444}.stroke-gray-400{stroke:#9ca3af}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.text-center{text-align:center}.text-right{text-align:right}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-sm{font-size:0.875rem;line-height:1.25rem}.font-semibold{font-weight:600}.leading-relaxed{line-height:1.625}.text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-2xl{--tw-shadow:0 25px 50px -12px rgb(0 0 0 / 0.25);--tw-shadow-colored:0 25px 50px -12px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-gray-500\/20{--tw-shadow-color:rgb(107 114 128 / 0.2);--tw-shadow:var(--tw-shadow-colored)}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.selection\:bg-red-500 *::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-red-500::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-gray-900:hover{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.hover\:text-gray-700:hover{--tw-text-opacity:1;color:rgb(55 65 81 / var(--tw-text-opacity))}.focus\:rounded-sm:focus{border-radius:0.125rem}.focus\:outline:focus{outline-style:solid}.focus\:outline-2:focus{outline-width:2px}.focus\:outline-red-500:focus{outline-color:#ef4444}.group:hover .group-hover\:stroke-gray-600{stroke:#4b5563}.z-10{z-index: 10}@media (prefers-reduced-motion: no-preference){.motion-safe\:hover\:scale-\[1\.01\]:hover{--tw-scale-x:1.01;--tw-scale-y:1.01;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}}@media (prefers-color-scheme: dark){.dark\:bg-gray-900{--tw-bg-opacity:1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:bg-gray-800\/50{background-color:rgb(31 41 55 / 0.5)}.dark\:bg-red-800\/20{background-color:rgb(153 27 27 / 0.2)}.dark\:bg-dots-lighter{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")}.dark\:bg-gradient-to-bl{background-image:linear-gradient(to bottom left, var(--tw-gradient-stops))}.dark\:stroke-gray-600{stroke:#4b5563}.dark\:text-gray-400{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:shadow-none{--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.dark\:ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.dark\:ring-inset{--tw-ring-inset:inset}.dark\:ring-white\/5{--tw-ring-color:rgb(255 255 255 / 0.05)}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.group:hover .dark\:group-hover\:stroke-gray-400{stroke:#9ca3af}}@media (min-width: 640px){.sm\:fixed{position:fixed}.sm\:top-0{top:0px}.sm\:right-0{right:0px}.sm\:ml-0{margin-left:0px}.sm\:flex{display:flex}.sm\:items-center{align-items:center}.sm\:justify-center{justify-content:center}.sm\:justify-between{justify-content:space-between}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width: 768px){.md\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}}@media (min-width: 1024px){.lg\:gap-8{gap:2rem}.lg\:p-8{padding:2rem}}
    
        </style>
        
    </head>

    <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="max-w-7xl mx-auto p-6 lg:p-8">
                <div id="home"  class="flex justify-center">
                    <!-- Your logo SVG -->
                    <h3 class="company-name" style="-webkit-background-clip: text;"
                        > EMSYS</h3>
                    </div>
                
                <p class="shortcut" style="text-align: center;"> 
                    <a href="#home">Home</a> 
                    <a href="#details" style="margin: 0px 8px;">Details</a>
                    <a href="#features" style="margin: 0px 8px;">Features</a> 
                    <a href="#gallery" style="margin: 0px 8px;">Gallery</a> 
                    <a href="#contact" style="margin: 0px 8px;">Contacts</a> 
                </p>

                <br><br>
                <div class="home-separator"></div>

                <div id="details" class="home-details">
                    <div class="home-details1">
                    <div class="home-container">
                        <span class="home-text2 sectionTitle">
                        <span>Details</span>
                        <br />
                        </span>
                        <h2 class="home-heading heading2">
                        Powerful Event Management Solution
                        </h2>

                        <span class="home-sub-heading">
                        Our event management system provides comprehensive tools and
                        features to simplify the planning, execution, and analysis of your
                        events. From registration and ticketing to attending the event,
                        we&apos;ve got you covered.
                        </span>
                    </div>

                    <img alt="image" src="https://images.unsplash.com/photo-1559223607-a43c990c692c?crop=entropy&amp;cs=tinysrgb&amp;fit=max&amp;fm=jpg&amp;ixid=M3w5MTMyMXwwfDF8cmFuZG9tfHx8fHx8fHx8MTcwNDcyMjk3N3w&amp;ixlib=rb-4.0.3&amp;q=80&amp;w=400" class="home-details-image"/>
                </div>
                
                <br>


                <div id="features">
                    <div class="home-container">
                        <span class="home-text2 sectionTitle">
                        <span>Features</span>
                        <br />
                        </span>
                        <h2 class="home-heading heading2">Key Features</h2>
                        <span class="home-sub-heading">
                        Discover the powerful features of our event management system
                        </span>
                    </div>

                    <div class="mt-16">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
                            <a href="{{ route('register') }}" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                                <div>
                                    <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAACXBIWXMAAAsTAAALEwEAmpwYAAADBElEQVR4nO2YO2hUQRSGv03AB1nBwkpERJEEKxMEBQUfjTEWBklsjRZiZa1VTCuxEG1srUXEPgbEEK2020QUk9UVxICQiGgMjgz8Fyb7uDtz916zWe4PU5yZM+fOv+c1s9Ac3cAQcB+YAd4DPzRKwDQwAQyQDgaBT4DRKGuuJWwD5h2jzYbVHQUKLXyzXMduOQ0i74A54A5wBtgP9Gj0AmeBe8CC8+FX0ksCo9FIbohbwFqDXzgEXcCY84suAacDbbQFkQjWU4+1fxU4pfkjwJ+AMI0Qp/MFGKYKe4HvnkReA7Mx6zZHJh3PRGE2kTIRA1Sqw2JaC888iPh4rOB4ZjagAJiA0KpZu+S4aldKRKIwi3JmJGsiBeCNJq5rbk3D92NxuCLdkqdXygHld905jkr4DGx1CsDNlIjYhroo/X4P/cEqMnENcd05xiXYzu2L0Kp2X/q3A/YEnyNK8vNJDXjgnPSnAvYEn+ODhANJDXigV/r2hpAmjHuOFQnFAAN/teeQp/4O6S9L3hLQT4xvz1mWYD/mi5faY2/Al9uFyLyEgwFEtgMPHUOP1DMaoc8pwWnCuESeS0hy5x+TV6IbbyMM/Y9kn5Bgr+JJYPPkLfDCo/zaUp8ZkQEJC2peaaPbaXCHU7Ztqq8oc5qwoZI2rlblx04nHIOSuQ5q1ked60Bc0oai6Ly/L2ruRtKqVAc16wUlq9HVu5U3t2vziWzOxNiMO6wJJYIeP0tamGyRjN17V7a+AftCD9MKEfTGXnU805MwnCJP/AZONtHPhIjFCeCrc7W/5lnNupRrH7V3Sf+6sBFEdjthNusoLqoXDKpLFzX6dLN9UPWGmGkSTpkTqQDHnDgfcUqzzyipOlXnVyp3qTpouG4nf9WZ79ejaEqHXdEoaW68SbPbECKG5CimHD4mKyLHgT0N1p4CPzcLEZPBgXIi5B6h5erTNlXLdBqResiTnbz8koeW6bQcMZ1StcxmJ9JuMDmRNoPpeI9UNjChkw77T08NhjcZmQpwIXO/5yAc/wBVWilpwmFHSgAAAABJRU5ErkJggg==">                                    </div>

                                    <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Organize Event</h2>

                                    <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                    Create, update, or delete your event seamlessly. Perfect for planning, refining details, or adapting to changes. Your event, your way!                                 </p>
                                </div>

                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                                </svg>
                            </a>

                            <a href="{{ route('register') }}" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                                <div>
                                    <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAACXBIWXMAAAsTAAALEwEAmpwYAAADJUlEQVR4nNWaW2iPYRzHP3OckYit2QVX5MycSkz8MSnkwt0uCFdEuZGSRC7Vltlk5nThEIloDpHTBffEbjGaMzVMMtOvvm89vf0Pe/+H/d/nW09b7/P8nvf3eU7v7/ltUDwNALYBL4CXwE6gBM9kEKeB3lA5oTovNBA4K8d/AhtU7Hd71uzDzIQhEk5dDdDlw8wYxHk5+gNYmqRNAvitNiuJoQYBFx2IJSnaTQL+araqiCHEJUF0pYEwNandQWK4nM45p9LaDO2fq90sYjYTF0LHa6Z1/0rtJhDDPfEdqAWW9eFYfSKbFcRsT3wDFoTq9wNXgYoktgdkZ4NQVA0GLjsQ85O0uaX6F0lgxulUs/otKd4xDJhDgSGuyImvwLwU7SoEkcrZTar7pzDG+ikFxgIbgQ7VHytEBDBEyyWAmJuhvTm1GShLUb8V6E4SiwWlRz9b8hkBGMQ1dfwli2m3EW8AKkPP7eSqB9oFZQPUBqxSBBDEZq35gDGI6w5EdRZ91MveHA7DpJMLs5ccNBS4oY4+ZwmBnG93It8oWi27TnKAaHMgZpObKrV5F0e0q80FxE6Qm+rgUwHCiVKgDhgdYWntyeYlt2X8EZhJ/lWn/p8B5X2AiHwRsw/RHQdiBoXRGEHYe+5lgDiaDcRdGX8AplNYlesgOZwGojEqRJlGpr8gkmkRsN6BOBIVYjhwX8bvgWn0vxaGvuoN2UA8cCCmUhytcyCOR4UYATxyzugpFEcJZzmd0uB6tZzC6aHIwWFcllNNrhAPfYcY6dyXO32GeCrjt8BEiqOcwg7TSRl3+AyB00EhAsB+g0BXSOtkDR5DmPalSPMHV9lReACBTobWEIzNzmNlxu35L0WjYdDYQLgwLU4+KYht/ijR5gZtTUpOxw4iUInuzfaCN7qp2Y0wuB/sdhywzEcsIVxV6yKVKqTu1qwlS4fGBqIvOiRnzuAxhGmyHHqNxxBBTqtXf7T0FsI0Xo69w2MI064+7JHYQ1Tpu9KTJtSPPQRK6Qf7I+ErBHKs0QlnlpOnS1GxYJp9/6eYZDPjFi9mgpAMZocSzla2F3Mm/gNI6Tt0U7RcdQAAAABJRU5ErkJggg==">
                                    </div>

                                    <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Buy Ticket</h2>

                                    <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                    Click, purchase, and you're in! Secure your spot at the event effortlessly.
                                </p>
                                </div>

                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                                </svg>
                            </a>

                            <a href="{{ route('register') }}" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                                <div>
                                    <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFAAAABQCAYAAACOEfKtAAAACXBIWXMAAAsTAAALEwEAmpwYAAAEFklEQVR4nO2cXYhWRRjHf36mWBqJaWtIqHQTZAphyILCQqRtRJEiBlYXhYY3eaGuiWVlEF4JEiRBKIJpHxchIYquH3gViKaJHyCKCokZ1YYoaicm/geGbXX3PWfmnDnnzA/Oxfvyvs//mf/OzDkz87wLkUgkEolEIpFI+UwCBvXx/ktAN/A3kHi6TOz9QCcVYjDwPPAlcEkN+ajXZz71aNq9rk8InDHAasu09LoCzOvV88z7t4AVQJvHnEzsldJKQu2Jw5XkH5Zp54A1wLQ+hm+3PmO+UxSrpLmPwJgFnLGM2wt03GPOS+nRZ332vN60SfMvAmEQsBa4rcR+BmYP8Lup2UVTlu7/GAnsVDJ3gHXAUAZOow0cqWFqErkOzMkQIyn5Ko2hwI9K4iLwZMY4jTVwoxK4DEzJEaeRQ/gVid8Ans0Zq3EGPqb5zogvdhCvcQZukfA3juI1ysAZwD9alE8soSFHgMM5XmfVdcZ3EjXPeq5opSHGjEM5XmfVdcITwF0tvcY6jNuYIfyBBDc7jtsYA3+RYHuBDck75wUzB06W2J/AEMex79eQvHNeMHPgmxIzSzfXNGIIb5JYl4fYjTBwj8TM2QYVmgOz6jrnrMSe8RDb5xyYVdc5v0nM1eqjUUN4lHWKNcJD/NobuF5CP3mKX8ah0sSiDpWmADe1gfCcJ439aow5aiyKrqKONX+Q0FceNTqlcUsmtnnueV3WlPSiR63/qgcSrT7G+xRSmUXRZyEf+64uSA/Il1MMnRpS6Zzo4+qRhteeh8osjOApYJhvsboxQcPWGPhC2clUkW0y73vqy0Ld/Z3P7e16ZLmhHei6ckqdZKbLoGaf76gCf0h9maw2Xm+xhqdflijwBdW81JU1audW14FPKvBr1JchwHm109QtOuV3BTZF4HXlDbXxjGq3nbLDqmFeBjxAvRhu9b5FPgQeBQ5YT+2mZO2dGj1IL1W7TvjofXap7svAccvI8zpUcnrHKpjx1qbwq0UIGiPnW2fBieaNqvKt2rC7n4J35wwGXi9x19gFC6xdpdJukElFDXzcGrpvl5lIUkEDzTPfQeW9q+ihWwcD11qPZePKTiapmIEz9aOfuz5WHHU3cJS1m/4ZgZBUyMDPleuxkFZTSUUMnKafm5lTt6cIiB4Z+CBhkxZBbSAwTiuxpwmXucrxGvAwgbFZyb1PuKQ/enyPAOlQcr8CD3nUaaW+z2aSznLMVDOaQOmWiTs8PtW3Ut9n865y+5qAmWr9Rm6n557YKtuV11sETrtl4lUd0EzPeXfOOmz7Os8xuQTPVKskbaDX/eqYsw5bm/SP+ggVogP4QofU/RUEZa1jHijpP7uo8q55qSuYqqyUWiYamJNoYE6igTmJBuYkGhiJRCKRSCRCafwLjNw8aXXxeOAAAAAASUVORK5CYII=">
                                    </div>

                                    <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Browse Event</h2>

                                    <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                    Explore upcoming events effortlessly! Scroll through, find what interests you, and get ready for a great time.                                </p>
                                </div>

                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                                </svg>
                            </a>

                            <a href="{{ route('register') }}" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                                <div>
                                    <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAACXBIWXMAAAsTAAALEwEAmpwYAAAA5UlEQVR4nO2Uyw7EIAhF/f+fvrMZZ9G0w+tiLHISFyYoPQUZo2kaK3Cu7fKhmoiWa7w1cTTfeSIQPsy6Z+c7V8S61z5W9o85RwTOUrN+xKRFJNgVkXBXxBoffSN0EeuynmflSxd52rPzpRFtnW14hQgWrlTKiWS2FlrkD8zxq20jKM+fLTKxJNbguQ87i0QqrsLSCp7SlxG5A8L56P3LQIsE+tbTSt77Yc1XTkQLOx6sx1xWBMG5zmolRFurnMjEK+KNv9IiSGotKf6J7d7IchEJ2rj80iJX0sahErDH7+tFmqYZPz5tSUDqAOA2MAAAAABJRU5ErkJggg==">
                                    </div>

                                    <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">View Ticket</h2>

                                    <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                    Present the acquired ticket as evidence of purchase for entry to the event.</p>
                                </div>

                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                                </svg>
                            </a>
                            
                        </div>
                </div>

                <div id="gallery" class="home-gallery">
                    <div class="home-gallery1">

                        <h1 class="home-text2 sectionTitle">
                        Event Management System Gallery
                        </h1>
                        <span class="home-sub-heading">
                        Explore our event management system in action
                        </span>
                        <br>

                        <div class="home-container4">
                        <div class="gallery-card3-gallery-card gallery-card3-root-class-name">
                            <img
                            alt="image"
                            src="https://images.unsplash.com/photo-1473396413399-6717ef7c4093?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w5MTMyMXwwfDF8cmFuZG9tfHx8fHx8fHx8MTcwNDcyMjk3M3w&ixlib=rb-4.0.3&q=80&w=400"
                            class="gallery-card3-image"
                            />
                        </div>
                        <div
                            class="gallery-card3-gallery-card gallery-card3-root-class-name1"
                        >
                            <img
                            alt="image"
                            src="https://images.unsplash.com/photo-1560523160-754a9e25c68f?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w5MTMyMXwwfDF8cmFuZG9tfHx8fHx8fHx8MTcwNDcyMjk3M3w&ixlib=rb-4.0.3&q=80&w=400"
                            class="gallery-card3-image"
                            />
                        </div>
                        <div
                            class="gallery-card3-gallery-card gallery-card3-root-class-name3"
                        >
                            <img
                            alt="image"
                            src="https://images.unsplash.com/photo-1492538368677-f6e0afe31dcc?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w5MTMyMXwwfDF8cmFuZG9tfHx8fHx8fHx8MTcwNDcyMjk3M3w&ixlib=rb-4.0.3&q=80&w=400"
                            class="gallery-card3-image"
                            />
                        </div>
                        <div
                            class="gallery-card3-gallery-card gallery-card3-root-class-name2"
                        >
                            <img
                            alt="image"
                            src="https://images.unsplash.com/photo-1517263904808-5dc91e3e7044?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w5MTMyMXwwfDF8cmFuZG9tfHx8fHx8fHx8MTcwNDcyMjk3M3w&ixlib=rb-4.0.3&q=80&w=400"
                            class="gallery-card3-image"
                            />
                        </div>
                        <div
                            class="gallery-card3-gallery-card gallery-card3-root-class-name4"
                        >
                            <img
                            alt="image"
                            src="https://images.unsplash.com/photo-1595037935521-15ce2282a03e?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w5MTMyMXwwfDF8cmFuZG9tfHx8fHx8fHx8MTcwNDcyMjk3M3w&ixlib=rb-4.0.3&q=80&w=400"
                            class="gallery-card3-image"
                            />
                        </div>
                        <div
                            class="gallery-card3-gallery-card gallery-card3-root-class-name5"
                        >
                            <img
                            alt="image"
                            src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w5MTMyMXwwfDF8cmFuZG9tfHx8fHx8fHx8MTcwNDcyMjk3M3w&ixlib=rb-4.0.3&q=80&w=400"
                            class="gallery-card3-image"
                            />
                        </div>
                        <div
                            class="gallery-card3-gallery-card gallery-card3-root-class-name6"
                        >
                            <img
                            alt="image"
                            src="https://images.unsplash.com/photo-1522327646852-4e28586a40dd?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w5MTMyMXwwfDF8cmFuZG9tfHx8fHx8fHx8MTcwNDcyMjk3M3w&ixlib=rb-4.0.3&q=80&w=400"
                            class="gallery-card3-image"
                            />
                        </div>
                        <div
                            class="gallery-card3-gallery-card gallery-card3-root-class-name7"
                        >
                            <img
                            alt="image"
                            src="https://images.unsplash.com/photo-1540317580384-e5d43616b9aa?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w5MTMyMXwwfDF8cmFuZG9tfHx8fHx8fHx8MTcwNDcyMjk3M3w&ixlib=rb-4.0.3&q=80&w=400"
                            class="gallery-card3-image"
                            />
                        </div>
                        <div
                            class="gallery-card3-gallery-card gallery-card3-root-class-name8"
                        >
                            <img
                            alt="image"
                            src="https://images.unsplash.com/photo-1550305080-4e029753abcf?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w5MTMyMXwwfDF8cmFuZG9tfHx8fHx8fHx8MTcwNDcyMjk3M3w&ixlib=rb-4.0.3&q=80&w=400"
                            class="gallery-card3-image"
                            />
                        </div>
                        <div
                            class="gallery-card3-gallery-card gallery-card3-root-class-name9"
                        >
                            <img
                            alt="image"
                            src="https://images.unsplash.com/photo-1503428593586-e225b39bddfe?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w5MTMyMXwwfDF8cmFuZG9tfHx8fHx8fHx8MTcwNDcyMjk3M3w&ixlib=rb-4.0.3&q=80&w=400"
                            class="gallery-card3-image"
                            />
                        </div>
                        <div
                            class="gallery-card3-gallery-card gallery-card3-root-class-name10"
                        >
                            <img
                            alt="image"
                            src="https://images.unsplash.com/photo-1519764803046-8ba615c54c0c?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w5MTMyMXwwfDF8cmFuZG9tfHx8fHx8fHx8MTcwNDcyMjk3M3w&ixlib=rb-4.0.3&q=80&w=400"
                            class="gallery-card3-image"
                            />
                        </div>
                        <div
                            class="gallery-card3-gallery-card gallery-card3-root-class-name11"
                        >
                            <img
                            alt="image"
                            src="https://images.unsplash.com/photo-1505672816494-045c036ed2b1?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w5MTMyMXwwfDF8cmFuZG9tfHx8fHx8fHx8MTcwNDcyMjk3M3w&ixlib=rb-4.0.3&q=80&w=400"
                            class="gallery-card3-image"
                            />
                        </div>
                    </div>
                </div>
            </div>

                
                <div id="contact" class="contact">

                    <div class="home-gallery1">
                        <h1 style="text-align: center;" class="home-text2 sectionTitle">Contact Us</h1>
                        <span class="home-sub-heading">Get in touch with us for any inquiries or feedback</span>
                    </div>
                    <div class="home-separator"></div>

                    <div id="contact-details" class="contact-details">

                        <div>
                            <img class="hq" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAACB0lEQVR4nO2Zy04bMRRADxJNUxXBrpsKtf2dwg9Af4GWRUTpKgqodFGJr6GrAn1AKn4AdQEs+gFseIgoIsiVpRvpysrY48kDg3ykq0k892X7OpmxIfP4eAE0gF/AP6Aj15/Sbu8nyTTQArqA8Yi93xT9ZJgDjgKJu/IHmCUBngI/nOQOgCXgNVAH3sj3Q0dvX+zHxjNgAzgDeiVG9RZY8fibAt6LXshXT+K2JI9Kybcjy+JDSd+rkX7bMpNRbEQG+R3p3+rH+LcLP4ozZbwGPBmgc6B0liP9v3PWjIuN91HpnMR2QNd8rUDnXOm8ivRvF3jf1voZRM1ZE1Ho6SviTunE/q5b/b7t3ZB5VDas7HwSMUzuwD0N0hd5ADMJSgfYIvBPeZVAosYjNj8vWw95BjKpsS3T9rXg/qI8El9LbdrPCwGfMTbbgfhB+m9X9ury2VOrmwX+Ym26nvil0AHcUQwtuLcjsDEF8YfugH4D2wFeinxT7XsjsDHj6sClardJ9JlX7RcjsDHj6oDP8aRsSpE7oMgzUIVcQopcQlXIJaTIJRRDXQ4jTELSKLuTbZPfTSBhM0C+l9nk/ZRAosYjdp/Wy1+lvO7ZF50UNWdQj0MGekfiOWkwo3K6idlWT3EGTkIGrQTq3Axz0FHlaGlSclj2qKkuPT0tebg3TulJHs0q52SZzGPnP+9uN0NfVllIAAAAAElFTkSuQmCC">
                            <p><strong>Headquarters:</strong> Persiaran Multimedia, 63100 Cyberjaya</p>
                        </div>

                        <div>
                            <img class="ph" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAACXBIWXMAAAsTAAALEwEAmpwYAAADS0lEQVR4nO2ZS0hUURjHf6ZZGJWUVqYWGbQSMlpkRYtE2oRBRAVFmGIYZLWM1tKqwih6CLWpXUXagx4LSVr0EiwhIm3Rg4qg1J5oz4lD/wuHYebOXBnvnIH5wd3M/c7c79x7vv/5vu9AlixpZR3QA4wCfcByMox84DgQibqGgVIyhOlAlxwfAVqAIuCyfrtOBjAHeCyH3wJLo+591L1GHGYa0CtHnwLzY9hs1f1PwDwcZBJwR04+AWb62Ha4vMQOyLlXQFkCW7PEBmVfj2MMybHVSdpvk70ZV4JDjMqxwgBjrmmMWWrO8FxOVQYYU6agN+M24wgdcsioUhB2aFw/jtAih84GHFekcb+BHBxgIfAX+AJMDTBuuyZi8jFn6JJTO5O0nwy8dFGGN1nrPS8J+/2yfwRMwCFylZoY55oT2M4CPsu2FgfZIOfeAQU+du2yMxmxk+QAD+TkQZ/Y+CqbJhxmCfAT+AOsimOzxyq0FuAwrVbgF8T5cldl8zDBMkx7qdsnR03JG4tCSxw6JRZOUqVS1zja4LORfpBNuyu7eywarNp9WUyL/50VL/jbcJijliTH66DUWF/vMI4yEbgtJ+/6BHad1C6iitNJioEXcvKGxCAWG63JtLkaM4uA93LyvI9K1VnL7JSrarZYm6Bx8rTPG6+xBKAzznLMlZiYpNNsvgNKXENjBfAticCutqS5J6pPVmvtU9HXRWA2IbEG+GFNJt6XqbA2zSGVxl5GEFHcmVqmSPe8jNp0NLeENZn11mTO+MSCyQCuRL114/A+JaA25RITz65DfbRQvoy3zC74qJn5YrsVNydVz/jRaMXioPpo485K66E3EySQpjWbLKVW7yyiJTmXEPIyT5rvpbj7WG91Qod9UqWU7jNeM+JNih9YYomEketQMoBuPXDUJ2seCzP0v98JMTc7Zq3tEykqvPZa+V6oNFjN8QGJwliptqR+LWmgytrBTRpyCJgS8D8qLCE5QhrJVw/gl1XXNCfZBCwGnmncLS3btGMOVu9bsdOv9my8XnO5ld70BuxJjzs5agJ6bzmixvk5HWlU6njcZM+vLbkNLYkMSp4Oh7p0ChCJc3VrYhmBCeZdwCWp24iy39aAKU2WLKSQf3jSBy3qRwNwAAAAAElFTkSuQmCC">
                            <p><strong>Phone:</strong> 1-300-80-0668</p>
                        </div>

                        <div>
                            <img class="web" src="data:image/png;base64,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">
                            <p><strong>Website:</strong> <a href="https://www.mmu.edu.my/" target="_blank">https://www.mmu.edu.my/</a></p>
                        </div>
                                                    
                        <div>
                            <img class="email" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAACXBIWXMAAAsTAAALEwEAmpwYAAAB7UlEQVR4nO3YT6hNURTH8Y/nP+UlQoT0CgMGDKSkSCkpSSmlGChTQ6NXeiNTQwO9kjJRMjFgQErKSzJhQAyI/Mn//3/e0a316vS69/Z679x7zzntb+06nb322nuf3W+vtQ6JRCKR6BFZTZrabaSqZLXdyIDqMdBsI5+wX3XYg/etxD6K0+hTXqbhJP61EvtgrvMK+pWP/lhbFmsdbCX2/HE9xgblYR0eNpFBy1trFUbi3Rcc1Hv24WOs6cG4i6nt9TsHw7m+s5ip+0wPzY7GOi5i/mTiyHH8jv6bWKp7LMK1mPtPCHxKAXE7XoXNc2zReTbhacz5FruKiuwrcCfsfuKYznEY32Kue1hddIoyG2fG6WaW4pgRehjzfx5zO5lrHcH3GHMby02dJbiRO/GGNruSNG7Gsxj3BjtNnm14Gb5eYGu3s9/FuD6BW6UdjS//K3zcwrJepfHj7/kLmDeBcY04da6gOJUVWY8cwtfwcx9r2tiuxN2w/YGjZSus1uNR+HqH3U1sduB12DzBxrJWiAtwOfz9xakoCRqp94nQUqPvKhaWvdTtw1BON5eijdU7QwXXO1mna/a9+JDz/xkHqvrzYW2UBCPx3Amy2v5FqSpZ2kjJyNKJlIwsnUjJyGp7IlnFm9psJJFIJBK6zX+RmLvdeUFJ9AAAAABJRU5ErkJggg==">
                            <p><strong>Email:</strong> <a href="mailto:1191103320@student.mmu.edu.my">1191103320@student.mmu.edu.my</a></p>
                        </div>

                    </div>

                    <div id="map" class="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3984.614999387675!2d101.6395575!3d2.9265004!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cdb6e4a9d3b7a1%3A0xd0f74e8ad10f1129!2sMultimedia%20University%20-%20MMU%20Cyberjaya!5e0!3m2!1sen!2smy!4v1705368736204!5m2!1sen!2smy" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                        

                    <div class="home-footer">
                        <footer class="home-footer1">
                            <div class="home-container5">
                            <span class="home-logo2">EMSYS</span>

                            <p class="shortcut" style="text-align: center;"> 
                                        <a href="#home">Home</a> 
                                        <a href="#details" style="margin: 0px 8px;">Details</a>
                                        <a href="#features" style="margin: 0px 8px;">Features</a> 
                                        <a href="#gallery" style="margin: 0px 8px;">Gallery</a> 
                                        <a href="#contact" style="margin: 0px 8px;">Contacts</a> 
                                    </p>

                            </div>
                            <div class="home-separator"></div>
                            <div class="home-container6">
                            <span class="home-text8">© 2024 EMSYS, All Rights Reserved.</span>
                            <div class="home-icon-group1">

                                <a href="https://twitter.com/event_mgmt?lang=en" target="_blank" rel="noopener noreferrer">
                                    <svg viewBox="0 0 950.8571428571428 1024" class="home-icon10">
                                        <path
                                            d="M925.714 233.143c-25.143 36.571-56.571 69.143-92.571 95.429 0.571 8 0.571 16 0.571 24 0 244-185.714 525.143-525.143 525.143-104.571 0-201.714-30.286-283.429-82.857 14.857 1.714 29.143 2.286 44.571 2.286 86.286 0 165.714-29.143 229.143-78.857-81.143-1.714-149.143-54.857-172.571-128 11.429 1.714 22.857 2.857 34.857 2.857 16.571 0 33.143-2.286 48.571-6.286-84.571-17.143-148-91.429-148-181.143v-2.286c24.571 13.714 53.143 22.286 83.429 23.429-49.714-33.143-82.286-89.714-82.286-153.714 0-34.286 9.143-65.714 25.143-93.143 90.857 112 227.429 185.143 380.571 193.143-2.857-13.714-4.571-28-4.571-42.286 0-101.714 82.286-184.571 184.571-184.571 53.143 0 101.143 22.286 134.857 58.286 41.714-8 81.714-23.429 117.143-44.571-13.714 42.857-42.857 78.857-81.143 101.714 37.143-4 73.143-14.286 106.286-28.571z"
                                        ></path>
                                    </svg>
                                </a>

                                <a href="https://www.facebook.com/groups/667945000082593/" target="_blank" rel="noopener noreferrer">
                                    <svg viewBox="0 0 877.7142857142857 1024" class="home-icon12">
                                        <path
                                            d="M585.143 512c0-80.571-65.714-146.286-146.286-146.286s-146.286 65.714-146.286 146.286 65.714 146.286 146.286 146.286 146.286-65.714 146.286-146.286zM664 512c0 124.571-100.571 225.143-225.143 225.143s-225.143-100.571-225.143-225.143 100.571-225.143 225.143-225.143 225.143 100.571 225.143 225.143zM725.714 277.714c0 29.143-23.429 52.571-52.571 52.571s-52.571-23.429-52.571-52.571 23.429-52.571 52.571-52.571 52.571 23.429 52.571 52.571zM438.857 152c-64 0-201.143-5.143-258.857 17.714-20 8-34.857 17.714-50.286 33.143s-25.143 30.286-33.143 50.286c-22.857 57.714-17.714 194.857-17.714 258.857s-5.143 201.143 17.714 258.857c8 20 17.714 34.857 33.143 50.286s30.286 25.143 50.286 33.143c57.714 22.857 194.857 17.714 258.857 17.714s201.143 5.143 258.857-17.714c20-8 34.857-17.714 50.286-33.143s25.143-30.286 33.143-50.286c22.857-57.714 17.714-194.857 17.714-258.857s5.143-201.143-17.714-258.857c-8-20-17.714-34.857-33.143-50.286s-30.286-25.143-50.286-33.143c-57.714-22.857-194.857-17.714-258.857-17.714zM877.714 512c0 60.571 0.571 120.571-2.857 181.143-3.429 70.286-19.429 132.571-70.857 184s-113.714 67.429-184 70.857c-60.571 3.429-120.571 2.857-181.143 2.857s-120.571 0.571-181.143-2.857c-70.286-3.429-132.571-19.429-184-70.857s-67.429-113.714-70.857-184c-3.429-60.571-2.857-120.571-2.857-181.143s-0.571-120.571 2.857-181.143c3.429-70.286 19.429-132.571 70.857-184s113.714-67.429 184-70.857c60.571-3.429 120.571-2.857 181.143-2.857s120.571-0.571 181.143 2.857c70.286 3.429 132.571 19.429 184 70.857s67.429 113.714 70.857 184c3.429 60.571 2.857 120.571 2.857 181.143z"
                                        ></path>
                                    </svg>
                                </a>

                                <a href="https://www.instagram.com/eventiaevents/?hl=en" target="_blank" rel="noopener noreferrer">
                                    <svg viewBox="0 0 602.2582857142856 1024" class="home-icon14">
                                        <path
                                            d="M548 6.857v150.857h-89.714c-70.286 0-83.429 33.714-83.429 82.286v108h167.429l-22.286 169.143h-145.143v433.714h-174.857v-433.714h-145.714v-169.143h145.714v-124.571c0-144.571 88.571-223.429 217.714-223.429 61.714 0 114.857 4.571 130.286 6.857z"
                                        ></path>
                                    </svg>
                                </a>

                            </div>
                        </div>
                    </footer>
                </div>
</html>
