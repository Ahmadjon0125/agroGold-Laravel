@extends('layouts.app')

@php
    $locale = App::getLocale();
@endphp
@section('content')
    
    <!-- 1-section  -->

    <section class="mt-[86px] lg:mt-[214px]">
        <div class="container">
            <!-- Breadcrumb -->
            <div class="text-[16px] sm:text-[18px] lg:text-[22px] text-black breadcrumb gap-3 pt-[50px] mb-[33px]">
                <a href="/" class="hover:text-[#77B75F] transition">Главная</a>
                <span class="bg-[#77B75F] w-[2px] h-[30px]"></span>
                <a href="/category.html" class="hover:text-[#77B75F]">Категории</a>
                <span class="bg-[#77B75F] w-[2px] h-[30px]"></span>
                <a class="text-[#77B75F]">Гербициды</a>
            </div>

            <!-- Title -->
            <h1
                class="text-[25px] sm:text-[40px] lg:text-[60px] font-extrabold text-[#474747] mb-[22px] text-center lg:text-start leading-none">
                Категории продукции
            </h1>

            <div class="w-[60px] h-[8px] bg-[#77B75F] rounded-[20px] mb-[50px] mx-auto lg:mr-auto lg:ml-0"></div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-[20px]" id="product-grid">
                <div
                    class="relative bg-[#F4F4F4] p-6 rounded-[20px] shadow-md transition-all duration-300 ease-in-out hover:shadow-lg hover:scale-[1.03] hover:-translate-y-2 group product-card">
                    <span
                        class="absolute top-0 left-0 bg-[#77B75F] text-white text-[14px] font-[500] px-[10px] py-[8px] rounded-tl-[20px] rounded-br-[20px] z-10">
                        Гербицид
                    </span>

                    <div class="flex justify-center items-center h-48 mb-6">
                        <img src="./img/prod1.png" alt="ZELLEK GOLD" class="max-h-full max-w-full object-contain" />
                    </div>

                    <h3 class="text-[20px] font-bold text-[#474747] mb-2 text-center uupercase">
                        ZELLEK GOLD
                    </h3>
                    <p class="text-[#939393] text-[16px] font-[500] mb-6 text-center">
                        Duis aute irure dolor in reprehenderit in voluptate velit
                    </p>

                    <div class="flex justify-center">
                        <a href="/tovar.html"
                            class="bg-[#77B75F] text-white text-[12px] font-semibold px-[20px] py-[12px] lg:px-[38px] lg:py-[18px] rounded-[50px] hover:bg-white hover:text-[#77B75F] border-2 border-[#77B75F] uppercase transition-colors duration-300">
                            Подробнее
                        </a>
                    </div>
                </div>

                <div
                    class="relative bg-[#F4F4F4] p-6 rounded-[20px] shadow-md transition-all duration-300 ease-in-out hover:shadow-lg hover:scale-[1.03] hover:-translate-y-2 group product-card">
                    <span
                        class="absolute top-0 left-0 bg-[#77B75F] text-white text-[14px] font-[500] px-[10px] py-[8px] rounded-tl-[20px] rounded-br-[20px] z-10">
                        Гербицид
                    </span>
                    <div class="flex justify-center items-center h-48 mb-6">
                        <img src="./img/prod2.png" alt="OXY GOLD" class="max-h-full max-w-full object-contain" />
                    </div>
                    <h3 class="text-[20px] font-bold text-[#474747] mb-2 text-center uupercase">
                        OXY GOLD
                    </h3>
                    <p class="text-[#939393] text-[16px] font-[500] mb-6 text-center">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit
                    </p>
                    <div class="flex justify-center">
                        <a href="/tovar.html"
                            class="bg-[#77B75F] text-white text-[12px] font-semibold px-[20px] py-[12px] lg:px-[38px] lg:py-[18px] rounded-[50px] hover:bg-white hover:text-[#77B75F] border-2 border-[#77B75F] uppercase transition-colors duration-300">
                            Подробнее
                        </a>
                    </div>
                </div>

                <div
                    class="relative bg-[#F4F4F4] p-6 rounded-[20px] shadow-md transition-all duration-300 ease-in-out hover:shadow-lg hover:scale-[1.03] hover:-translate-y-2 group product-card">
                    <span
                        class="absolute top-0 left-0 bg-[#77B75F] text-white text-[14px] font-[500] px-[10px] py-[8px] rounded-tl-[20px] rounded-br-[20px] z-10">
                        Гербицид
                    </span>
                    <div class="flex justify-center items-center h-48 mb-6">
                        <img src="./img/prod3.png" alt="GOAL GOLD" class="max-h-full max-w-full object-contain" />
                    </div>
                    <h3 class="text-[20px] font-bold text-[#474747] mb-2 text-center uupercase">
                        GOAL GOLD
                    </h3>
                    <p class="text-[#939393] text-[16px] font-[500] mb-6 text-center">
                        Sed do eiusmod tempor incididunt ut labore et dolore
                    </p>
                    <div class="flex justify-center">
                        <a href="/tovar.html"
                            class="bg-[#77B75F] text-white text-[12px] font-semibold px-[20px] py-[12px] lg:px-[38px] lg:py-[18px] rounded-[50px] hover:bg-white hover:text-[#77B75F] border-2 border-[#77B75F] uppercase transition-colors duration-300">
                            Подробнее
                        </a>
                    </div>
                </div>

                <div
                    class="relative bg-[#F4F4F4] p-6 rounded-[20px] shadow-md transition-all duration-300 ease-in-out hover:shadow-lg hover:scale-[1.03] hover:-translate-y-2 group product-card">
                    <span
                        class="absolute top-0 left-0 bg-[#77B75F] text-white text-[14px] font-[500] px-[10px] py-[8px] rounded-tl-[20px] rounded-br-[20px] z-10">
                        Гербицид
                    </span>
                    <div class="flex justify-center items-center h-48 mb-6">
                        <img src="./img/prod4.png" alt="GLIFOSAT" class="max-h-full max-w-full object-contain" />
                    </div>
                    <h3 class="text-[20px] font-bold text-[#474747] mb-2 text-center uupercase">
                        GLIFOSAT
                    </h3>
                    <p class="text-[#939393] text-[16px] font-[500] mb-6 text-center">
                        Cupidatat non proident, sunt in culpa qui officia
                    </p>
                    <div class="flex justify-center">
                        <a href="/tovar.html"
                            class="bg-[#77B75F] text-white text-[12px] font-semibold px-[20px] py-[12px] lg:px-[38px] lg:py-[18px] rounded-[50px] hover:bg-white hover:text-[#77B75F] border-2 border-[#77B75F] uppercase transition-colors duration-300">
                            Подробнее
                        </a>
                    </div>
                </div>

                <div
                    class="relative bg-[#F4F4F4] p-6 rounded-[20px] shadow-md transition-all duration-300 ease-in-out hover:shadow-lg hover:scale-[1.03] hover:-translate-y-2 group product-card">
                    <span
                        class="absolute top-0 left-0 bg-[#77B75F] text-white text-[14px] font-[500] px-[10px] py-[8px] rounded-tl-[20px] rounded-br-[20px] z-10">
                        Гербицид
                    </span>

                    <div class="flex justify-center items-center h-48 mb-6">
                        <img src="./img/prod1.png" alt="ZELLEK GOLD" class="max-h-full max-w-full object-contain" />
                    </div>

                    <h3 class="text-[20px] font-bold text-[#474747] mb-2 text-center uupercase">
                        ZELLEK GOLD
                    </h3>
                    <p class="text-[#939393] text-[16px] font-[500] mb-6 text-center">
                        Duis aute irure dolor in reprehenderit in voluptate velit
                    </p>

                    <div class="flex justify-center">
                        <a href="/tovar.html"
                            class="bg-[#77B75F] text-white text-[12px] font-semibold px-[20px] py-[12px] lg:px-[38px] lg:py-[18px] rounded-[50px] hover:bg-white hover:text-[#77B75F] border-2 border-[#77B75F] uppercase transition-colors duration-300">
                            Подробнее
                        </a>
                    </div>
                </div>

                <div
                    class="relative bg-[#F4F4F4] p-6 rounded-[20px] shadow-md transition-all duration-300 ease-in-out hover:shadow-lg hover:scale-[1.03] hover:-translate-y-2 group product-card">
                    <span
                        class="absolute top-0 left-0 bg-[#77B75F] text-white text-[14px] font-[500] px-[10px] py-[8px] rounded-tl-[20px] rounded-br-[20px] z-10">
                        Гербицид
                    </span>
                    <div class="flex justify-center items-center h-48 mb-6">
                        <img src="./img/prod2.png" alt="OXY GOLD" class="max-h-full max-w-full object-contain" />
                    </div>
                    <h3 class="text-[20px] font-bold text-[#474747] mb-2 text-center uupercase">
                        OXY GOLD
                    </h3>
                    <p class="text-[#939393] text-[16px] font-[500] mb-6 text-center">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit
                    </p>
                    <div class="flex justify-center">
                        <a href="/tovar.html"
                            class="bg-[#77B75F] text-white text-[12px] font-semibold px-[20px] py-[12px] lg:px-[38px] lg:py-[18px] rounded-[50px] hover:bg-white hover:text-[#77B75F] border-2 border-[#77B75F] uppercase transition-colors duration-300">
                            Подробнее
                        </a>
                    </div>
                </div>

                <div
                    class="relative bg-[#F4F4F4] p-6 rounded-[20px] shadow-md transition-all duration-300 ease-in-out hover:shadow-lg hover:scale-[1.03] hover:-translate-y-2 group product-card">
                    <span
                        class="absolute top-0 left-0 bg-[#77B75F] text-white text-[14px] font-[500] px-[10px] py-[8px] rounded-tl-[20px] rounded-br-[20px] z-10">
                        Гербицид
                    </span>
                    <div class="flex justify-center items-center h-48 mb-6">
                        <img src="./img/prod3.png" alt="GOAL GOLD" class="max-h-full max-w-full object-contain" />
                    </div>
                    <h3 class="text-[20px] font-bold text-[#474747] mb-2 text-center uupercase">
                        GOAL GOLD
                    </h3>
                    <p class="text-[#939393] text-[16px] font-[500] mb-6 text-center">
                        Sed do eiusmod tempor incididunt ut labore et dolore
                    </p>
                    <div class="flex justify-center">
                        <a href="/tovar.html"
                            class="bg-[#77B75F] text-white text-[12px] font-semibold px-[20px] py-[12px] lg:px-[38px] lg:py-[18px] rounded-[50px] hover:bg-white hover:text-[#77B75F] border-2 border-[#77B75F] uppercase transition-colors duration-300">
                            Подробнее
                        </a>
                    </div>
                </div>

                <div
                    class="relative bg-[#F4F4F4] p-6 rounded-[20px] shadow-md transition-all duration-300 ease-in-out hover:shadow-lg hover:scale-[1.03] hover:-translate-y-2 group product-card">
                    <span
                        class="absolute top-0 left-0 bg-[#77B75F] text-white text-[14px] font-[500] px-[10px] py-[8px] rounded-tl-[20px] rounded-br-[20px] z-10">
                        Гербицид
                    </span>
                    <div class="flex justify-center items-center h-48 mb-6">
                        <img src="./img/prod4.png" alt="GLIFOSAT" class="max-h-full max-w-full object-contain" />
                    </div>
                    <h3 class="text-[20px] font-bold text-[#474747] mb-2 text-center uupercase">
                        GLIFOSAT
                    </h3>
                    <p class="text-[#939393] text-[16px] font-[500] mb-6 text-center">
                        Cupidatat non proident, sunt in culpa qui officia
                    </p>
                    <div class="flex justify-center">
                        <a href="/tovar.html"
                            class="bg-[#77B75F] text-white text-[12px] font-semibold px-[20px] py-[12px] lg:px-[38px] lg:py-[18px] rounded-[50px] hover:bg-white hover:text-[#77B75F] border-2 border-[#77B75F] uppercase transition-colors duration-300">
                            Подробнее
                        </a>
                    </div>
                </div>

                <div
                    class="relative bg-[#F4F4F4] p-6 rounded-[20px] shadow-md transition-all duration-300 ease-in-out hover:shadow-lg hover:scale-[1.03] hover:-translate-y-2 group product-card">
                    <span
                        class="absolute top-0 left-0 bg-[#77B75F] text-white text-[14px] font-[500] px-[10px] py-[8px] rounded-tl-[20px] rounded-br-[20px] z-10">
                        Гербицид
                    </span>

                    <div class="flex justify-center items-center h-48 mb-6">
                        <img src="./img/prod1.png" alt="ZELLEK GOLD" class="max-h-full max-w-full object-contain" />
                    </div>

                    <h3 class="text-[20px] font-bold text-[#474747] mb-2 text-center uupercase">
                        ZELLEK GOLD
                    </h3>
                    <p class="text-[#939393] text-[16px] font-[500] mb-6 text-center">
                        Duis aute irure dolor in reprehenderit in voluptate velit
                    </p>

                    <div class="flex justify-center">
                        <a href="/tovar.html"
                            class="bg-[#77B75F] text-white text-[12px] font-semibold px-[20px] py-[12px] lg:px-[38px] lg:py-[18px] rounded-[50px] hover:bg-white hover:text-[#77B75F] border-2 border-[#77B75F] uppercase transition-colors duration-300">
                            Подробнее
                        </a>
                    </div>
                </div>

                <div
                    class="relative bg-[#F4F4F4] p-6 rounded-[20px] shadow-md transition-all duration-300 ease-in-out hover:shadow-lg hover:scale-[1.03] hover:-translate-y-2 group product-card">
                    <span
                        class="absolute top-0 left-0 bg-[#77B75F] text-white text-[14px] font-[500] px-[10px] py-[8px] rounded-tl-[20px] rounded-br-[20px] z-10">
                        Гербицид
                    </span>
                    <div class="flex justify-center items-center h-48 mb-6">
                        <img src="./img/prod2.png" alt="OXY GOLD" class="max-h-full max-w-full object-contain" />
                    </div>
                    <h3 class="text-[20px] font-bold text-[#474747] mb-2 text-center uupercase">
                        OXY GOLD
                    </h3>
                    <p class="text-[#939393] text-[16px] font-[500] mb-6 text-center">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit
                    </p>
                    <div class="flex justify-center">
                        <a href="/tovar.html"
                            class="bg-[#77B75F] text-white text-[12px] font-semibold px-[20px] py-[12px] lg:px-[38px] lg:py-[18px] rounded-[50px] hover:bg-white hover:text-[#77B75F] border-2 border-[#77B75F] uppercase transition-colors duration-300">
                            Подробнее
                        </a>
                    </div>
                </div>

                <div
                    class="relative bg-[#F4F4F4] p-6 rounded-[20px] shadow-md transition-all duration-300 ease-in-out hover:shadow-lg hover:scale-[1.03] hover:-translate-y-2 group product-card">
                    <span
                        class="absolute top-0 left-0 bg-[#77B75F] text-white text-[14px] font-[500] px-[10px] py-[8px] rounded-tl-[20px] rounded-br-[20px] z-10">
                        Гербицид
                    </span>
                    <div class="flex justify-center items-center h-48 mb-6">
                        <img src="./img/prod3.png" alt="GOAL GOLD" class="max-h-full max-w-full object-contain" />
                    </div>
                    <h3 class="text-[20px] font-bold text-[#474747] mb-2 text-center uupercase">
                        GOAL GOLD
                    </h3>
                    <p class="text-[#939393] text-[16px] font-[500] mb-6 text-center">
                        Sed do eiusmod tempor incididunt ut labore et dolore
                    </p>
                    <div class="flex justify-center">
                        <a href="/tovar.html"
                            class="bg-[#77B75F] text-white text-[12px] font-semibold px-[20px] py-[12px] lg:px-[38px] lg:py-[18px] rounded-[50px] hover:bg-white hover:text-[#77B75F] border-2 border-[#77B75F] uppercase transition-colors duration-300">
                            Подробнее
                        </a>
                    </div>
                </div>

                <div
                    class="relative bg-[#F4F4F4] p-6 rounded-[20px] shadow-md transition-all duration-300 ease-in-out hover:shadow-lg hover:scale-[1.03] hover:-translate-y-2 group product-card">
                    <span
                        class="absolute top-0 left-0 bg-[#77B75F] text-white text-[14px] font-[500] px-[10px] py-[8px] rounded-tl-[20px] rounded-br-[20px] z-10">
                        Гербицид
                    </span>
                    <div class="flex justify-center items-center h-48 mb-6">
                        <img src="./img/prod4.png" alt="GLIFOSAT" class="max-h-full max-w-full object-contain" />
                    </div>
                    <h3 class="text-[20px] font-bold text-[#474747] mb-2 text-center uupercase">
                        GLIFOSAT
                    </h3>
                    <p class="text-[#939393] text-[16px] font-[500] mb-6 text-center">
                        Cupidatat non proident, sunt in culpa qui officia
                    </p>
                    <div class="flex justify-center">
                        <a href="/tovar.html"
                            class="bg-[#77B75F] text-white text-[12px] font-semibold px-[20px] py-[12px] lg:px-[38px] lg:py-[18px] rounded-[50px] hover:bg-white hover:text-[#77B75F] border-2 border-[#77B75F] uppercase transition-colors duration-300">
                            Подробнее
                        </a>
                    </div>
                </div>




            </div>

            <div class="mb-[100px] mt-[50px] mx-auto text-center block">
                <a id="load-more-btn"
                    class="px-8 py-3 border-2 border-[#D24A43] rounded-full text-sm font-semibold text-[#D24A43] hover:bg-[#D24A43] hover:text-white transition-colors duration-300 uppercase">
                    Показать еще
                </a>
            </div>
        </div>
    </section>

    <x-info />
@endsection
