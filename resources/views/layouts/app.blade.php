<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet" />
    <!-- fancybox  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css" />
    <!-- splidejs -->
    <link href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" rel="stylesheet" />
    <!-- swiper -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <!-- tailwind -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <!-- css -->
    <link rel="stylesheet" href="{{ asset('css/main.css') }}" />
    <title>Agro Gold</title>
</head>

<body>
    <header class="fixed z-50 top-0 w-full" id="mainHeader">
        <div>
            <div class="bg-white bottomShadow lg:shadowNone">
                <div class="container">
                    <div id="toggle" class="flex items-center py-[20px]">
                        <a href="/">
                            <img src="{{ asset('/img/logo.svg') }}" alt="site-logo"
                                class="w-[180px] lg:w-[240px] h-[66px]" />
                        </a>
                        <div class="flex ml-auto">
                            <div class="flex items-center">
                                <div class="hidden lg:flex">
                                    <svg width="50" height="50" viewBox="0 0 50 50" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect width="50" height="50" rx="25" fill="#77B75F" />
                                        <g clip-path="url(#clip0_0_1)">
                                            <path
                                                d="M22.1531 17.7687C21.9125 17.1875 21.2781 16.8781 20.6719 17.0437L17.9219 17.7937C17.3781 17.9437 17 18.4375 17 19C17 26.7312 23.2688 33 31 33C31.5625 33 32.0563 32.6218 32.2063 32.0781L32.9563 29.3281C33.1219 28.7218 32.8125 28.0875 32.2312 27.8468L29.2312 26.5968C28.7219 26.3843 28.1313 26.5312 27.7844 26.9593L26.5219 28.5C24.3219 27.4593 22.5406 25.6781 21.5 23.4781L23.0406 22.2187C23.4688 21.8687 23.6156 21.2812 23.4031 20.7718L22.1531 17.7718V17.7687Z"
                                                fill="white" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_0_1">
                                                <rect width="16" height="16" fill="white"
                                                    transform="translate(17 17)" />
                                            </clipPath>
                                        </defs>
                                    </svg>

                                    <div class="ml-[14px]">
                                        <span
                                            class="flex justify-center gap-[10px] header-callback font-semibold text-[#474747] text-[16px] md:text-[18px] xl:text-[20px]">
                                            @foreach ($contacts->take(2) as $contact)
                                                <a href="tel:{{ $contact->phone }}">{{ $contact->phone }} <span>,
                                                    </span> </a>
                                            @endforeach

                                        </span>
                                        <p class="text-[#939393] font-[500] text-[14px]">
                                            @foreach ($contacts->take(1) as $contact)
                                                {{ $contact->{'address_' . $locale} }}
                                            @endforeach
                                        </p>
                                    </div>

                                    <div class="w-0 lg:w-[1px] h-[35px] bg-[#939393] mx-[8px] xl:mx-[36px]"></div>
                                </div>
                                <!-- lang -->
                                <div class="ml-auto text-end lang-dropdown">
                                    <button class="lang-btn" id="langBtn">
                                        <div class="flex items-center text-[14px] lanBtnVal">
                                            <div id="lanBtnVal">{{ strtoupper(app()->getLocale()) }}</div>
                                            <img src="{{ asset('storage/img/arrowLang.svg') }}" class="ml-[6px]"
                                                alt="" />
                                        </div>
                                    </button>
                                    <div class="lang-menu bg-white" id="langMenu">

                                        <a href="{{ route('set.lang', ['lang' => 'uz']) }}">UZ</a>

                                        <a href="{{ route('set.lang', ['lang' => 'ru']) }}">RU</a>

                                        <a href="{{ route('set.lang', ['lang' => 'en']) }}">EN</a>
                                    </div>
                                </div>

                                <a href=""
                                    class="hidden lg:block md:px-[20px] xl:px-[32px] py-[18px] bg-[#D24A43] text-white font-semibold
                                     text-[12px] uppercase rounded-[50px] ml-[40px] border-2 border-[#D24A43]
                                      hover:bg-white hover:text-[#D24A43] transition-all duration-500 ease">{{ __('app.write') }}</a>
                            </div>
                        </div>

                        <!-- Burger Button -->
                        <div class="burger w-[50px] h-[50px] rounded-full bg-[#77B75F] ml-4 text-white" id="burger">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="{{ request()->is('/') ? '' : 'isPage' }}"
                style="--bg-image-url: url('{{ asset('../storage/img/heroBg.jpg') }}')">
                <div class="container">
                    <ul class="py-[42px] text-white hidden lg:flex items-center gap-25 headerList">
                        <li><a href="{{ route('company.page') }}">{{ __('app.about') }}</a></li>
                        <li><a href="{{ route('category.page') }}">{{ __('app.catalog') }}</a></li>
                        <li><a href="{{ route('news.page') }}">{{ __('app.news') }}</a></li>
                        <li><a href="{{ route('media.page') }}">{{ __('app.media') }}</a></li>
                        <li><a href="{{ route('blog.page') }}">{{ __('app.blog') }}</a></li>
                        <li><a href="{{ route('contact.page') }}">{{ __('app.contacts') }}</a></li>
                    </ul>
                </div>
            </nav>
        </div>

        <!-- Mobile Navigation -->
        <div class="mobile-nav" id="mobileNav">
            <div class="mobile-nav-content flex flex-col justify-between h-full">
                <div class="mobile-content mt-15 lg:mt-0">
                    <ul class="navList flex lg:hidden">
                        <li><a href="{{ route('company.page') }}">{{ __('app.about') }}</a></li>
                        <li><a href="{{ route('category.page') }}">{{ __('app.catalog') }}</a></li>
                        <li><a href="{{ route('news.page') }}">{{ __('app.news') }}</a></li>
                        <li><a href="{{ route('media.page') }}">{{ __('app.media') }}</a></li>
                        <li><a href="{{ route('blog.page') }}">{{ __('app.blog') }}</a></li>
                        <li><a href="{{ route('contact.page') }}">{{ __('app.contacts') }}</a></li>
                    </ul>

                    <a href=""
                        class="block lg:hidden py-[18px] bg-[#D24A43] text-white font-semibold text-[12px] uppercase rounded-[50px] text-center mb-[25px] border-2 border-[#D24A43] hover:bg-white hover:text-[#D24A43] transition-all duration-500 ease">
                        {{ __('app.write') }}</a>
                </div>

                <div class="bg-[#F4F4F4] py-[30px] px-[25px] block lg:hidden">
                    <div class="flex items-center">
                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <rect width="30" height="30" rx="15" fill="#77B75F" />
                            <g clip-path="url(#clip0_0_1)">
                                <path
                                    d="M13.2911 10.6614C13.1467 10.3126 12.7661 10.127 12.4023 10.2264L10.7523 10.6764C10.4261 10.7664 10.1992 11.0626 10.1992 11.4001C10.1992 16.0389 13.9605 19.8001 18.5992 19.8001C18.9367 19.8001 19.233 19.5733 19.323 19.247L19.773 17.597C19.8723 17.2333 19.6867 16.8526 19.338 16.7083L17.538 15.9583C17.2323 15.8308 16.878 15.9189 16.6698 16.1758L15.9123 17.1001C14.5923 16.4758 13.5236 15.407 12.8992 14.087L13.8236 13.3314C14.0805 13.1214 14.1686 12.7689 14.0411 12.4633L13.2911 10.6633V10.6614Z"
                                    fill="white" />
                            </g>
                            <defs>
                                <clipPath id="clip0_0_1">
                                    <rect width="9.6" height="9.6" fill="white"
                                        transform="translate(10.1992 10.2002)" />
                                </clipPath>
                            </defs>
                        </svg>
                        <span
                            class="ml-2 flex flex-col justify-center header-callback font-semibold text-[#474747] text-[16px] md:text-[18px] xl:text-[20px]">
                            <a href="tel:+998972731347">+998 97 273 13 47 <span>, </span>
                            </a>
                            <a href="tel:+998934424101">
                                +998 93 442 41 01 <span> ,</span></a>
                        </span>
                    </div>
                    <div class="flex items-center">
                        <div>
                            <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect width="30" height="30" rx="15" fill="#77B75F" />
                                <path
                                    d="M14.6984 14.7602C14.3859 14.7602 14.0861 14.6338 13.8651 14.4087C13.644 14.1837 13.5199 13.8785 13.5199 13.5602C13.5199 13.2419 13.644 12.9367 13.8651 12.7117C14.0861 12.4866 14.3859 12.3602 14.6984 12.3602C15.011 12.3602 15.3108 12.4866 15.5318 12.7117C15.7528 12.9367 15.877 13.2419 15.877 13.5602C15.877 13.7178 15.8465 13.8738 15.7873 14.0194C15.7281 14.165 15.6413 14.2973 15.5318 14.4087C15.4224 14.5202 15.2924 14.6085 15.1495 14.6689C15.0065 14.7292 14.8532 14.7602 14.6984 14.7602ZM14.6984 10.2002C13.8232 10.2002 12.9839 10.5542 12.365 11.1843C11.7461 11.8144 11.3984 12.6691 11.3984 13.5602C11.3984 16.0802 14.6984 19.8002 14.6984 19.8002C14.6984 19.8002 17.9984 16.0802 17.9984 13.5602C17.9984 12.6691 17.6508 11.8144 17.0319 11.1843C16.413 10.5542 15.5737 10.2002 14.6984 10.2002Z"
                                    fill="white" />
                            </svg>
                        </div>

                        <p class="text-[#939393] font-[500] text-[14px] ml-2">
                            г. Ташкент, Яккасарайский р-н, Ш. Руставели 85
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Overlay -->
        <div class="overlay" id="overlay"></div>
    </header>
    <!-- main/sections -->
    <main>


        @yield('content')


    </main>
    <!-- footer  -->
    <footer class="relative bg-cover bg-center text-white pt-8 md:pt-16 pb-0"
        style="background-image: url('{{ asset('storage/img/footerBg.jpg') }}')">
        <div class="absolute inset-0 bg-[#4B8435] opacity-80"></div>

        <div class="container">
            <div class="relative z-10">
                <div
                    class="flex flex-col sm:flex-row justify-center items-center text-center md:text-start sm:justify-between pb-10">
                    <div class="mb-10 sm:mb-0 flex flex-col items-center sm:items-start">
                        <a href="/" class="block mb-8">
                            <img src="{{ asset('storage/img/footerLogo.svg') }}" alt="AgroGold+"
                                class="w-[300px] mr-3" />
                        </a>

                        <div class="flex space-x-[20px] md:space-x-[30px] ml-2">
                            <a href="#"
                                class="fooLink w-[34px] h-[34px] flex items-center justify-center rounded-full">
                                <svg width="34" height="34" viewBox="0 0 34 34" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <rect opacity="0.2" width="34" height="34" rx="17"
                                        fill="white" />
                                    <path
                                        d="M16.9633 9.34961C17.9811 9.38596 19.0353 9.38596 20.0531 9.42231C20.9619 9.45866 21.798 9.60407 22.5978 10.0766C23.6156 10.6946 24.2336 11.6034 24.4517 12.7667C24.5608 13.4573 24.5971 14.1844 24.6335 14.8751C24.6698 16.4018 24.6335 17.9286 24.6335 19.4554C24.6335 20.2551 24.5971 21.0548 24.3426 21.8182C23.8337 23.3086 22.7795 24.2174 21.2528 24.5082C20.5621 24.6537 19.835 24.6537 19.1444 24.69C17.6176 24.7264 16.1272 24.69 14.6004 24.69C13.8007 24.69 13.0009 24.6537 12.2375 24.3992C10.7471 23.8903 9.83834 22.8361 9.54752 21.3093C9.40212 20.6186 9.40212 19.8916 9.36577 19.2009C9.32941 17.6741 9.36577 16.1474 9.36577 14.6206C9.36577 13.8209 9.40212 13.0211 9.65658 12.2577C10.1655 10.7673 11.2197 9.85853 12.7465 9.56772C13.4371 9.42231 14.1642 9.42231 14.8549 9.38596C15.5092 9.34961 16.2362 9.34961 16.9633 9.34961ZM23.2521 16.8744C23.2157 16.8744 23.2521 16.8744 23.2521 16.8744C23.2157 16.2564 23.2157 15.6748 23.2157 15.0568C23.2157 14.4752 23.1794 13.8936 23.1067 13.3119C22.9613 12.0033 22.1979 11.1308 20.9256 10.8764C20.2713 10.731 19.5442 10.731 18.8899 10.731C17.5812 10.6946 16.3089 10.6946 15.0003 10.731C14.3459 10.731 13.6916 10.7673 13.0736 10.8764C11.9831 11.0581 11.2197 11.6761 10.8925 12.7667C10.7835 13.1302 10.7471 13.4937 10.7108 13.8572C10.6744 15.2386 10.6744 16.6199 10.6744 18.0013C10.6744 18.8737 10.7108 19.7825 10.7835 20.655C10.8925 21.9636 11.6923 22.8724 13.0009 23.0905C13.6553 23.1996 14.3459 23.2359 15.0366 23.2359C16.3089 23.2723 17.5812 23.2359 18.8899 23.2359C19.4715 23.2359 20.0531 23.1996 20.6348 23.1269C21.18 23.0905 21.689 22.9088 22.1252 22.5453C22.8522 21.9636 23.1067 21.2002 23.143 20.3278C23.2157 19.2373 23.2157 18.0377 23.2521 16.8744Z"
                                        fill="white" />
                                    <path
                                        d="M20.8891 17.0197C20.8891 19.2008 19.1442 20.9457 16.9631 20.9457C14.782 20.9457 13.0371 19.2008 13.0371 16.9834C13.0371 14.8386 14.8183 13.0938 16.9994 13.0938C19.1442 13.0937 20.8891 14.8386 20.8891 17.0197ZM16.9267 19.5643C18.3081 19.5643 19.4713 18.4011 19.4713 17.0197C19.4713 15.6384 18.3081 14.4751 16.9267 14.4751C15.509 14.4751 14.3821 15.6384 14.3821 17.0197C14.3821 18.4011 15.5454 19.5643 16.9267 19.5643Z"
                                        fill="white" />
                                    <path
                                        d="M21.9437 12.9117C21.9437 13.4206 21.5439 13.8569 21.0349 13.8569C20.526 13.8569 20.0898 13.4206 20.1261 12.9117C20.1261 12.4028 20.526 12.0029 21.0349 12.0029C21.5439 12.0029 21.9437 12.4028 21.9437 12.9117Z"
                                        fill="white" />
                                </svg>
                            </a>

                            <a href="#"
                                class="fooLink w-[34px] h-[34px] flex items-center justify-center rounded-full">
                                <svg viewBox="0 0 34 34" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="34.000000" height="34.000000"
                                    fill="none" customFrame="#000000">
                                    <rect id="Rectangle 120" width="34.000000" height="34.000000" x="0.000000"
                                        y="0.000000" rx="17.000000" fill="rgb(255,255,255)"
                                        fill-opacity="0.200000003" />

                                    <path id="Vector"
                                        d="M20.6774 16.9997L18.4607 16.9997L18.4607 24.9331L15.1552 24.9331L15.1552 16.9997L13.5996 16.9997L13.5996 14.1997L15.1552 14.1997L15.1552 12.372C15.1552 11.0886 15.7774 9.06641 18.4607 9.06641L20.9107 9.06641L20.9107 11.7886L19.1607 11.7886C18.8885 11.7886 18.4607 11.9442 18.4607 12.5664L18.4607 14.1997L20.9496 14.1997L20.6774 16.9997Z"
                                        fill="rgb(255,255,255)" fill-rule="nonzero" />
                                </svg>
                            </a>

                            <a href="#"
                                class="fooLink w-[34px] h-[34px] flex items-center justify-center rounded-full">
                                <svg width="34" height="34" viewBox="0 0 34 34" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <rect opacity="0.2" width="34" height="34" rx="17"
                                        fill="white" />
                                    <path
                                        d="M24.3 11.8128C24.2585 12.1862 24.1755 12.6011 24.0926 12.9745C23.3873 16.2936 22.6819 19.6126 21.9766 22.9317C21.9352 23.1392 21.8937 23.3051 21.8107 23.4711C21.6447 23.7615 21.3958 23.8445 21.0639 23.7615C20.8565 23.72 20.6905 23.637 20.5245 23.5126C19.4458 22.7243 18.4086 21.936 17.3299 21.1477C17.2055 21.0647 17.1225 21.0647 16.998 21.1892C16.4587 21.6871 15.9608 22.2264 15.4215 22.7243C15.214 22.9317 15.0066 23.0562 14.7162 23.0147C14.5087 23.0147 14.3842 22.9317 14.3428 22.7243C14.0108 21.6871 13.6789 20.6913 13.347 19.6541C13.2226 19.3222 13.0981 18.9488 13.0151 18.6169C12.9736 18.4924 12.9321 18.4095 12.7662 18.368C11.729 18.0361 10.6918 17.7042 9.65455 17.4137C9.53009 17.3723 9.36413 17.3308 9.23967 17.2478C8.94925 17.0818 8.90776 16.8329 9.19818 16.584C9.36413 16.418 9.57157 16.335 9.82051 16.2521C11.2311 15.7127 12.6417 15.1734 14.0523 14.634C17.1225 13.4723 20.1511 12.2692 23.2213 11.1075C23.2628 11.1075 23.2628 11.1075 23.3043 11.066C23.8851 10.8586 24.3 11.149 24.3 11.8128ZM14.7576 22.0605C14.7991 22.019 14.7991 21.9775 14.7991 21.9775C14.8821 21.2307 14.9236 20.4839 15.0066 19.7371C15.0066 19.5711 15.0895 19.4052 15.214 19.2807C17.2055 17.4967 19.1969 15.7127 21.1884 13.9287C21.3128 13.8042 21.4373 13.7213 21.5618 13.5968C21.6032 13.5553 21.6862 13.5138 21.6447 13.4308C21.6032 13.3479 21.5203 13.3479 21.4373 13.3479C21.2713 13.3479 21.1469 13.4308 21.0224 13.5138C18.5746 15.0489 16.1268 16.584 13.6789 18.1605C13.5545 18.2435 13.513 18.3265 13.5545 18.4924C13.8449 19.4052 14.1353 20.3179 14.4672 21.2307C14.5502 21.4381 14.6332 21.7285 14.7576 22.0605Z"
                                        fill="white" />
                                </svg>
                            </a>
                        </div>
                    </div>

                    <div class="flex flex-col space-y-2 fooNav">
                        <a href="{{ route('company.page') }}" class="hover:opacity-80">{{ __('app.about') }}</a>
                        <a href="{{ route('category.page') }}" class="hover:opacity-80">{{ __('app.catalog') }}</a>
                        <a href="{{ route('news.page') }}" class="hover:opacity-80">{{ __('app.news') }}</a>
                        <a href="{{ route('media.page') }}" class="hover:opacity-80">{{ __('app.media') }}</a>
                        <a href="{{ route('blog.page') }}" class="hover:opacity-80">{{ __('app.blog') }}</a>
                        <a href="{{ route('contact.page') }}" class="hover:opacity-80">{{ __('app.contacts') }}</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-full relative z-10">
            <div class="border-b border-white/20"></div>
        </div>

        <div class="w-full relative z-10 pt-4 pb-4">
            <div class="container">
                <div
                    class="relative flex flex-col md:flex-row justify-center items-center md:justify-between text-[16px] font-[500] text-white/70 space-y-2 md:space-y-0">
                    <p>«Agro Gold+» Все права защищены</p>
                    <p>© Copyright 2025 - Web developed by SDS Group</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- fancybox -->
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
    <!-- splide -->
    <script src=" https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
    <!-- swiperJs -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!-- main.js -->
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>
