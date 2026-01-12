@extends('layouts.app')

@php
    $locale = App::getLocale();
@endphp

@section('content')
    <!-- 1-section -->
    <section class="hero relative h-[400px] sm:h-[500px] lg:h-[700px] mt-[106px]">
        <div class="swiper">
            <div class="swiper-wrapper">
                @foreach ($sliders as $slider)
                    <div class="swiper-slide z-0"
                        style="
                background: url('{{ asset('storage/' . $slider->bgImg) }}') no-repeat center / cover;
              ">
                        <div class="absolute w-full h-full z-1"
                            style="
                  background: linear-gradient(
                      180deg,
                      rgba(0, 0, 0, 0.6),
                      rgba(7, 7, 7, 0) 50%,
                      rgba(7, 7, 7, 0) 100%
                    ),
                    rgba(0, 0, 0, 0.4);
                ">
                        </div>
                        <div class="container">
                            <div class="slide-content text-white z-2 relative text-center lg:text-start">
                                <h2
                                    class="lg:text-[80px] sm:text-[50px] text-[30px] leading-none font-[800] mb-[15px] sm:mb-[20px] lg:mb-[29px] uppercase">
                                    {{ $slider->{'title_' . $locale} }}
                                </h2>
                                <span
                                    class="bg-[#77B75F] w-[110px] h-[6px] lg:h-[12px] inline-block rounded-[10px] mb-[10px] lg:mb-[19px]"></span>
                                <p
                                    class="lg:text-[22px] sm:text-[18px] text-[16px] mb-[15px] sm:mb-[25px] lg:mb-[33px] font-[500]">
                                    {{ strip_tags($slider->{'text_' . $locale}) }}
                                </p>
                                <a href="#"
                                    class="bg-[#77B75F] font-[600] text-[14px] text-white hover:bg-white hover:text-[#77B75F] px-[24px] py-[12px] lg:px-[44px] lg:py-[22px] rounded-[50px] transition-all duration-400 ease uppercase">
                                    {{ __('app.read_more') }}
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="container">
                <div class="swiper-pagination justify-center lg:justify-start z-5"></div>
            </div>
        </div>
    </section>
    <!-- 2-section -->
    <section class="relative lg:-top-40 z-2 py-[20px]">
        <div class="container">
            <div class="flex flex-col lg:flex-row gap-10 lg:gap-[80px] lg:items-end">
                <div
                    class="w-full lg:w-[calc(100%-580px)] xl:w-[calc(100%-600px)] lg:pt-[180px] text-center lg:text-start mb-[30px] sm:mb-0">
                    <h2 class="lg:text-[60px] sm:text-[45px] text-[25px] leading-none font-[800] mb-[22px] text-[#474747]">
                        {{ $company->{'title_' . $locale} }}
                    </h2>
                    <span class="bg-[#77B75F] w-[60px] h-[5px] lg:h-[8px] inline-block rounded-[10px] mb-[12px]"></span>
                    <p class="lg:text-[20px] sm:text-[18px] text-[16px] mb-[20px] font-[600] text-[#939393] uppercase">
                        {{ __('app.about') }}
                    </p>
                    <p class="sm:text-[18px] text-[16px] mb-[31px] font-[500] text-[#474747]">
                        {{ strip_tags($company->{'text_' . $locale}) }}
                    </p>
                    <a href="#"
                        class="bg-[#77B75F] border-2 border-[#77B75F] font-[600] text-[12px] text-white hover:bg-white hover:text-[#77B75F] px-[24px] py-[12px] lg:px-[44px] lg:py-[22px] rounded-[50px] transition-all duration-400 ease uppercase">
                        {{ __('app.read_more') }}
                    </a>
                </div>

                <div class="w-full lg:w-[500px] mt-2 lg:mt-0 hidden sm:block">
                    <div>
                        <img src="{{ asset('storage/' . $company->img1) }}"
                            class="w-full lg:w-[500px] h-[300px] rounded-[20px] mb-5 lg:mb-[30px] object-cover"
                            alt="" />
                    </div>

                    <div>
                        <img src="{{ asset('storage/' . $company->img2) }}"
                            class="w-full lg:w-[500px] h-[410px] rounded-[20px] object-cover" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- 3-section -->
    <section class="relative py-8 lg:py-20 bg-[#F4F4F4] overflow-hidden">
        <div class="absolute inset-0 z-0">
            <img src="{{ asset('storage/img/categoryBg.jpg') }}" alt="Background" class="w-full h-full object-cover" />
            <div class="absolute inset-0 bg-black/50"></div>
        </div>

        <div class="container relative z-10">
            <div class="flex flex-col lg:flex-row lg:justify-between items-center mb-12">
                <h2 class="text-[32px] md:text-[48px] font-bold text-white mb-[20px] text-center lg:mb-0">
                    Категории удобрений
                </h2>
                <a href="#"
                    class="px-4 md:px-7 py-3 md:py-[21px] border-2 border-white rounded-[30px] text-[14px] font-[600] uppercase text-white hover:bg-white hover:text-black transition-colors duration-300">
                    ВСЕ КАТЕГОРИИ
                </a>
            </div>

            <div class="grid grid-cols-2 lg:grid-cols-3 gap-[10px] sm:gap-[20px] lg:gap-[30px] categGrid">
                <a href="/category.html"
                    class="relative bg-white p-4 sm:p-8 lg:p-10 rounded-[20px] shadow-lg hover:shadow-xl transition-all duration-300 ease-in-out hover:scale-[1.03] hover:-translate-y-2 group text-center lg:text-start cursor-pointer">
                    <img src="./img/barg.png" alt="Leaf"
                        class="hidden sm:block absolute top-0 right-0 w-25 h-25 sm:w-30 sm:h-30 xl:w-40 xl:h-40 z-10" />
                    <div
                        class="bg-[#F4F4F4] rounded-full w-[50px] h-[50px] sm:w-[100px] sm:h-[100px] md:w-[150px] md:h-[150px] flex items-center justify-center mb-6 relative z-0 mx-auto lg:ml-0">
                        <img src="./img/categ1.svg" alt="Fungicides Icon"
                            class="w-[30px] h-[30px] sm:w-[50px] sm:h-[50px] md:w-[70px] md:h-[70px]" />
                    </div>
                    <h3 class="text-[16px] sm:text-[18px] lg:text-[20px] font-bold text-[#474747] mb-4">
                        ФУНГИЦИДЫ
                    </h3>
                    <p class="text-[#939393] text-[16px] font-[500] hidden sm:block">
                        Sed do eiusmod tempor incididunt ut labore et dolore magna
                        aliqua
                    </p>
                </a>

                <a href="/category.html"
                    class="relative bg-white p-4 sm:p-8 lg:p-10 rounded-[20px] shadow-lg hover:shadow-xl transition-all duration-300 ease-in-out hover:scale-[1.03] hover:-translate-y-2 group text-center lg:text-start cursor-pointer">
                    <img src="./img/barg.png" alt="Leaf"
                        class="hidden sm:block absolute top-0 right-0 w-25 h-25 sm:w-30 sm:h-30 xl:w-40 xl:h-40 z-10" />
                    <div
                        class="bg-[#F4F4F4] rounded-full w-[50px] h-[50px] sm:w-[100px] sm:h-[100px] md:w-[150px] md:h-[150px] flex items-center justify-center mb-6 relative z-0 mx-auto lg:ml-0">
                        <img src="./img/categ2.svg" alt="Fungicides Icon"
                            class="w-[30px] h-[30px] sm:w-[50px] sm:h-[50px] md:w-[70px] md:h-[70px]" />
                    </div>
                    <h3 class="text-[16px] sm:text-[18px] lg:text-[20px] font-bold text-[#474747] mb-4">
                        ФУНГИЦИДЫ
                    </h3>
                    <p class="text-[#939393] text-[16px] font-[500] hidden sm:block">
                        Sed do eiusmod tempor incididunt ut labore et dolore magna
                        aliqua
                    </p>
                </a>

                <a href="/category.html"
                    class="relative bg-white p-4 sm:p-8 lg:p-10 rounded-[20px] shadow-lg hover:shadow-xl transition-all duration-300 ease-in-out hover:scale-[1.03] hover:-translate-y-2 group text-center lg:text-start cursor-pointer">
                    <img src="./img/barg.png" alt="Leaf"
                        class="hidden sm:block absolute top-0 right-0 w-25 h-25 sm:w-30 sm:h-30 xl:w-40 xl:h-40 z-10" />
                    <div
                        class="bg-[#F4F4F4] rounded-full w-[50px] h-[50px] sm:w-[100px] sm:h-[100px] md:w-[150px] md:h-[150px] flex items-center justify-center mb-6 relative z-0 mx-auto lg:ml-0">
                        <img src="./img/categ3.svg" alt="Seeds Icon"
                            class="w-[30px] h-[30px] sm:w-[50px] sm:h-[50px] md:w-[70px] md:h-[70px]" />
                    </div>
                    <h3 class="text-[16px] sm:text-[18px] lg:text-[20px] font-bold text-[#474747] mb-4">
                        СЕМЕННЫЕ ЛЕКАРСТВА
                    </h3>
                    <p class="text-[#939393] text-[16px] font-[500] hidden sm:block">
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi
                    </p>
                </a>

                <a href="/category.html"
                    class="relative bg-white p-4 sm:p-8 lg:p-10 rounded-[20px] shadow-lg hover:shadow-xl transition-all duration-300 ease-in-out hover:scale-[1.03] hover:-translate-y-2 group text-center lg:text-start cursor-pointer">
                    <img src="./img/barg.png" alt="Leaf"
                        class="hidden sm:block absolute top-0 right-0 w-25 h-25 sm:w-30 sm:h-30 xl:w-40 xl:h-40 z-10" />
                    <div
                        class="bg-[#F4F4F4] rounded-full w-[50px] h-[50px] sm:w-[100px] sm:h-[100px] md:w-[150px] md:h-[150px] flex items-center justify-center mb-6 relative z-0 mx-auto lg:ml-0">
                        <img src="./img/categ4.svg" alt="Insecticides Icon"
                            class="w-[30px] h-[30px] sm:w-[50px] sm:h-[50px] md:w-[70px] md:h-[70px]" />
                    </div>
                    <h3 class="text-[16px] sm:text-[18px] lg:text-[20px] font-bold text-[#474747] mb-4">
                        ИНСЕКТИЦИДЫ
                    </h3>
                    <p class="text-[#939393] text-[16px] font-[500] hidden sm:block">
                        Duis aute irure dolor in reprehenderit in voluptate velit
                    </p>
                </a>

                <a href="/category.html"
                    class="relative bg-white p-4 sm:p-8 lg:p-10 rounded-[20px] shadow-lg hover:shadow-xl transition-all duration-300 ease-in-out hover:scale-[1.03] hover:-translate-y-2 group text-center lg:text-start cursor-pointer">
                    <img src="./img/barg.png" alt="Leaf"
                        class="hidden sm:block absolute top-0 right-0 w-25 h-25 sm:w-30 sm:h-30 xl:w-40 xl:h-40 z-10" />
                    <div
                        class="bg-[#F4F4F4] rounded-full w-[50px] h-[50px] sm:w-[100px] sm:h-[100px] md:w-[150px] md:h-[150px] flex items-center justify-center mb-6 relative z-0 mx-auto lg:ml-0">
                        <img src="./img/categ5.svg" alt="Defoliation Icon"
                            class="w-[30px] h-[30px] sm:w-[50px] sm:h-[50px] md:w-[70px] md:h-[70px]" />
                    </div>
                    <h3 class="text-[16px] sm:text-[18px] lg:text-[20px] font-bold text-[#474747] mb-4">
                        ДЕФОЛИАЦИЯ
                    </h3>
                    <p class="text-[#939393] text-[16px] font-[500] hidden sm:block">
                        Esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
                        occaecat
                    </p>
                </a>

                <a href="/category.html"
                    class="relative bg-white p-4 sm:p-8 lg:p-10 rounded-[20px] shadow-lg hover:shadow-xl transition-all duration-300 ease-in-out hover:scale-[1.03] hover:-translate-y-2 group text-center lg:text-start cursor-pointer">
                    <img src="./img/barg.png" alt="Leaf"
                        class="hidden sm:block absolute top-0 right-0 w-25 h-25 sm:w-30 sm:h-30 xl:w-40 xl:h-40 z-10" />
                    <div
                        class="bg-[#F4F4F4] rounded-full w-[50px] h-[50px] sm:w-[100px] sm:h-[100px] md:w-[150px] md:h-[150px] flex items-center justify-center mb-6 relative z-0 mx-auto lg:ml-0">
                        <img src="./img/categ6.svg" alt="Complex Fertilizers Icon"
                            class="w-[30px] h-[30px] sm:w-[50px] sm:h-[50px] md:w-[70px] md:h-[70px]" />
                    </div>
                    <h3 class="text-[16px] sm:text-[18px] lg:text-[20px] font-bold text-[#474747] mb-4">
                        КОМПЛЕКСНЫЕ УДОБРЕНИЯ
                    </h3>
                    <p class="text-[#939393] text-[16px] font-[500] hidden sm:block">
                        Cupidatat non proident, sunt in culpa qui officia deserunt
                        mollit anim
                    </p>
                </a>
            </div>
        </div>
    </section>

    <!-- 4-section -->
    <section class="py-8 lg:py-20 bg-white">
        <div class="container">
            <div class="flex flex-col lg:flex-row lg:justify-between justify-center items-center mb-12">
                <h2 class="text-[32px] md:text-[48px] font-bold text-[#333] mb-3 lg:mb-0 text-center leading-none">
                    Лучшие продукты
                </h2>
                <a href="#"
                    class="px-8 py-3 border-2 border-[#D24A43] rounded-full text-sm font-semibold text-[#D24A43] hover:bg-[#D24A43] hover:text-white transition-colors duration-300 uppercase">
                    ВСЯ ПРОДУКЦИЯ
                </a>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                <a href="/"
                    class="relative bg-[#F4F4F4] p-6 rounded-[20px] shadow-md transition-all duration-300 ease-in-out hover:shadow-lg hover:scale-[1.03] hover:-translate-y-2 group">
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
                        <button
                            class="cursor-pointer bg-[#77B75F] text-white text-[12px] font-semibold px-[20px] py-[12px] lg:px-[38px] lg:py-[18px] rounded-[50px] hover:bg-white hover:text-[#77B75F] border-2 border-[#77B75F] uppercase transition-colors duration-300">
                            Подробнее
                        </button>
                    </div>
                </a>

                <div
                    class="relative bg-[#F4F4F4] p-6 rounded-[20px] shadow-md transition-all duration-300 ease-in-out hover:shadow-lg hover:scale-[1.03] hover:-translate-y-2 group">
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
                        <a href="#"
                            class="bg-[#77B75F] text-white text-[12px] font-semibold px-[20px] py-[12px] lg:px-[38px] lg:py-[18px] rounded-[50px] hover:bg-white hover:text-[#77B75F] border-2 border-[#77B75F] uppercase transition-colors duration-300">
                            Подробнее
                        </a>
                    </div>
                </div>

                <div
                    class="relative bg-[#F4F4F4] p-6 rounded-[20px] shadow-md transition-all duration-300 ease-in-out hover:shadow-lg hover:scale-[1.03] hover:-translate-y-2 group">
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
                        <a href="#"
                            class="bg-[#77B75F] text-white text-[12px] font-semibold px-[20px] py-[12px] lg:px-[38px] lg:py-[18px] rounded-[50px] hover:bg-white hover:text-[#77B75F] border-2 border-[#77B75F] uppercase transition-colors duration-300">
                            Подробнее
                        </a>
                    </div>
                </div>

                <div
                    class="relative bg-[#F4F4F4] p-6 rounded-[20px] shadow-md transition-all duration-300 ease-in-out hover:shadow-lg hover:scale-[1.03] hover:-translate-y-2 group">
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
                        <a href="#"
                            class="bg-[#77B75F] text-white text-[12px] font-semibold px-[20px] py-[12px] lg:px-[38px] lg:py-[18px] rounded-[50px] hover:bg-white hover:text-[#77B75F] border-2 border-[#77B75F] uppercase transition-colors duration-300">
                            Подробнее
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 5-section -->
    <section class="relative py-8 lg:py-20 overflow-hidden">
        <div class="absolute inset-0 z-0">
            <img src="{{ asset('storage/img/partnerBg.jpg') }}" alt="Partners Background"
                class="w-full h-full object-cover" />
            <div class="absolute inset-0 bg-black/30"></div>
        </div>

        <div class="container relative z-10">
            <h2 class="text-[32px] md:text-[48px] font-bold text-white mb-12 text-center lg:text-start">
                Страны-партнёры
            </h2>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mx-auto">
                <div
                    class="flex items-center bg-white p-6 sm:p-8 lg:p-10 rounded-xl shadow-md transition-all duration-300 ease-in-out hover:shadow-lg hover:scale-[1.03] hover:-translate-y-1 ">
                    <img src="{{ asset('storage/img/logo.svg') }}" alt="Germany Flag"
                        class="w-25 h-25 rounded-full mr-4 object-cover" />
                    <span class="text-lg font-semibold text-[#333]">ГЕРМАНИЯ</span>
                </div>

                <div
                    class="flex items-center bg-white p-6 sm:p-8 lg:p-10 rounded-xl shadow-md transition-all duration-300 ease-in-out hover:shadow-lg hover:scale-[1.03] hover:-translate-y-1 ">
                    <img src="./img/flag2.svg" alt="UAE Flag" class="w-25 h-25 rounded-full mr-4 object-cover" />
                    <span class="text-lg font-semibold text-[#333]">ОАЗ, ДУБАЙ</span>
                </div>

                <div
                    class="flex items-center bg-white p-6 sm:p-8 lg:p-10 rounded-xl shadow-md transition-all duration-300 ease-in-out hover:shadow-lg hover:scale-[1.03] hover:-translate-y-1 ">
                    <img src="./img/flag3.svg" alt="Russia Flag" class="w-25 h-25 rounded-full mr-4 object-cover" />
                    <span class="text-lg font-semibold text-[#333]">РОССИЯ</span>
                </div>

                <div
                    class="flex items-center bg-white p-6 sm:p-8 lg:p-10 rounded-xl shadow-md transition-all duration-300 ease-in-out hover:shadow-lg hover:scale-[1.03] hover:-translate-y-1 ">
                    <img src="./img/flag4.svg" alt="Spain Flag" class="w-25 h-25 rounded-full mr-4 object-cover" />
                    <span class="text-lg font-semibold text-[#333]">ИСПАНИЯ</span>
                </div>

                <div
                    class="flex items-center bg-white p-6 sm:p-8 lg:p-10 rounded-xl shadow-md transition-all duration-300 ease-in-out hover:shadow-lg hover:scale-[1.03] hover:-translate-y-1 ">
                    <img src="./img/flag5.svg" alt="China Flag" class="w-25 h-25 rounded-full mr-4 object-cover" />
                    <span class="text-lg font-semibold text-[#333]">КИТАЙ</span>
                </div>

                <div
                    class="flex items-center bg-white p-6 sm:p-8 lg:p-10 rounded-xl shadow-md transition-all duration-300 ease-in-out hover:shadow-lg hover:scale-[1.03] hover:-translate-y-1 ">
                    <img src="./img/flag6.svg" alt="Turkey Flag" class="w-25 h-25 rounded-full mr-4 object-cover" />
                    <span class="text-lg font-semibold text-[#333]">ТУРЦИЯ</span>
                </div>
            </div>
        </div>
    </section>

    <!-- 6-section -->
    <section class="py-8 lg:py-20 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-[32px] md:text-[60px] font-[800] text-[#474747] mb-[20px] sm:mb-[32px] lg:mb-[52px]">
                Фотогалерея
            </h2>

            <div class="flex flex-col lg:flex-row gap-6">
                <div class="w-full lg:w-2/3 relative rounded-3xl overflow-hidden shadow-xl order-2 lg:order-1">
                    <div id="gallery-main" class="splide h-[350px] sm:h-[450px] lg:h-[500px]">
                        <div class="splide__track h-full">
                            <ul class="splide__list">
                                @foreach ($photos as $photo)
                                    <li class="splide__slide relative">
                                        <a href="./img/mainThumb.jpg" data-fancybox="gallery"
                                            data-caption="LOREM IPSUM DOLOR SIT AMET"
                                            class="block w-full h-full cursor-pointer">
                                            <img src="{{ asset('storage/' . $photo->photo) }}" alt="Main Photo 1"
                                                class="w-full h-full object-cover" />
                                        </a>
                                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent">
                                            <div class="absolute bottom-6 left-6 text-white">
                                                <h3 class="text-[20px] uppercase font-[700] mb-[7px]">
                                                    {{ $photo->{'title_' . $locale} }}
                                                </h3>
                                                <p class="text-[16px] font-[500]">
                                                    {{ strip_tags($photo->{'title_' . $locale}) }}
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="w-full lg:w-1/3 order-2">
                    <div id="gallery-thumb-list"
                        class="grid grid-cols-3 md:grid-cols-4 lg:grid-cols-2 gap-2 sm:gap-3 md:gap-4 lg:h-[500px] p-1">
                   @foreach ($photos as $photo)
                         
                   
                        <div data-slide-index="{{ $loop->index }}"
                            class="thumb-item rounded-[20px] overflow-hidden cursor-pointer transition-all duration-300">
                            <img src="{{ asset('storage/' . $photo->photo) }}" alt="Thumbnail 1" class="w-full h-full object-cover" />
                        </div>

                       @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 7-section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row items-center justify-between mb-10">
                <h2 class="text-[32px] md:text-[48px] font-bold text-[#333] mb-4">
                    {{ __('app.news') }}
                </h2>
                <a href="{{ route('news.page') }}"
                    class="uppercase px-6 py-3 border-2 border-[#E33B44] text-[#E33B44] rounded-full hover:bg-[#E33B44] hover:text-white transition-colors duration-300 text-[14px] font-semibold">
                    {{ __('app.allNews') }}
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($news->take(-3) as $new)
                    <a href="{{ route('newsIn.page', [
                        'id' => $new->id,
                        'slug' => $new->{'slug_' . $locale},
                    ]) }}"
                        class="news-item bg-[#F8F8F8] rounded-[20px] overflow-hidden group hover:shadow-md hover:scale-[1.03] hover:-translate-y-1 transition-all duration-400 ease cursor-pointer">
                        <div class="relative h-[200px] md:h-[220px]">
                            <img src="{{ asset('storage/' . $new->img) }}" alt="Yangilik 1"
                                class="w-full h-full object-cover" />
                            <div
                                class="absolute bottom-0 left-0 bg-[#77B75F] text-white text-14px md:text-[16px] font-[500] px-3 py-2 md:px-5 md:py-3 rounded-tr-[20px]">
                                {{ date('d.m.Y', strtotime($new->newsDate)) }}
                            </div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-[20px] font-[700] uppercase group-hover:text-[#77B75F] text-[#474747] mb-4">
                                {{ $new->{'title_' . $locale} }}
                            </h3>
                            <p class="text-sm text-[#777] leading-relaxed">
                                {{ strip_tags(Str::limit($new->{'text_' . $locale}, 150)) }}
                            </p>
                        </div>
                    </a>
                @endforeach


            </div>
        </div>
    </section>

    <x-info />
@endsection
