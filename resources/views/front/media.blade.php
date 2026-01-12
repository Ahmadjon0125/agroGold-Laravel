@extends('layouts.app')

@php
    $locale = App::getLocale();
@endphp
@section('content')
    <!-- 1-section  -->

    <section class="mt-[86px] lg:mt-[214px] mb-[35px] sm:mb-[60px] lg:mb-[91px]">
        <div class="container">
            <!-- Breadcrumb -->
            <div class="text-[16px] sm:text-[18px] lg:text-[22px] text-black breadcrumb gap-3 pt-[50px] mb-[33px]">
                <a href="/" class="hover:text-[#77B75F] transition">Главная</a>
                <span class="bg-[#77B75F] w-[2px] h-[30px]"></span>
                <a class="text-[#77B75F]">Медиа</a>

            </div>




            <div class=" mx-auto  py-8">
                <div class="tabButtons space-x-4 mb-8">
                    <button id="photo-tab"
                        class="tab-button px-[8px] lg:px-[15px] py-[12px] lg:py-[19px] rounded-[20px] text-[14px] sm:text-[16px] font-500 transition-colors duration-300"
                        data-tab="photo-gallery">
                        Фотогалерея
                    </button>
                    <button id="video-tab"
                        class="tab-button px-[8px] lg:px-[15px] py-[12px] lg:py-[19px] rounded-[20px] text-[14px] sm:text-[16px] font-500 transition-colors duration-300"
                        data-tab="video-gallery">
                        Видеогалерея
                    </button>
                </div>



                <div id="tab-content">
                    <div id="photo-gallery" class="tab-pane">
                        <h2
                            class="text-[25px] sm:text-[40px] lg:text-[60px] font-extrabold text-[#474747] mb-[22px] text-center lg:text-start leading-none">
                            Фотогалерея
                        </h2>
                        <div class="w-[60px] h-[8px] bg-[#77B75F] rounded-[20px] mb-[50px] mx-auto lg:mr-auto lg:ml-0">
                        </div>

                        <div class="flex flex-col  gap-6">
                            <div class="w-full  relative rounded-3xl overflow-hidden shadow-xl order-2 lg:order-1">
                                <div id="gallery-main" class="splide h-[350px] sm:h-[450px] lg:h-[500px]">
                                    <div class="splide__track h-full">
                                        <ul class="splide__list">
                                            @foreach ($photos as $photo)
                                                <li class="splide__slide relative">
                                                    <a href="{{ 'storage/' . $photo->photo }}" data-fancybox="gallery"
                                                        data-caption="LOREM IPSUM DOLOR SIT AMET"
                                                        class="block w-full h-full cursor-pointer">
                                                        <img src="{{ 'storage/' . $photo->photo }}" alt="Main Photo 1"
                                                            class="w-full h-full object-cover" />
                                                    </a>
                                                    <div
                                                        class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent">
                                                        <div class="absolute bottom-6 left-6 text-white">
                                                            <h3 class="text-[20px] uppercase font-[700] mb-[7px]">
                                                                {{ $photo ->{'title_' . $locale} }}
                                                            </h3>
                                                            <p class="text-[16px] font-[500]">
                                                                {{ strip_tags( $photo ->{'text_' . $locale} ) }}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="w-full  order-2">
                                <div id="gallery-thumb-list"
                                    class="grid grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-2 sm:gap-3 md:gap-4 lg:h-[150px] p-1">
                                    @foreach ($photos as $photo)
                                        <div data-slide-index="{{ $loop->index }}"
                                            class="thumb-item rounded-[20px] overflow-hidden cursor-pointer transition-all duration-300">
                                            <img src="{{ 'storage/' . $photo->photo }}" alt="Thumbnail 1"
                                                class="w-full h-full object-cover" />
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                    </div>

                    <div id="video-gallery" class="tab-pane hidden">
                        <h2
                            class="text-[25px] sm:text-[40px] lg:text-[60px] font-extrabold text-[#474747] mb-[22px] text-center lg:text-start leading-none">
                            Видеогалерея
                        </h2>
                        <div class="w-[60px] h-[8px] bg-[#77B75F] rounded-[20px] mb-[50px] mx-auto lg:mr-auto lg:ml-0">
                        </div>


                        <div class=" mx-auto ">

                            <div class="mb-6 rounded-[20px] overflow-hidden ">
                                <a href="URL_TO_LARGE_VIDEO_DEFAULT" id="main-media-link" data-fancybox="main-media"
                                    class="block relative w-full pt-[56.25%]  h-[350px] lg:h-[660px]">

                                    <img src="/img/categoryBg.jpg" alt="Asosiy media posteri"
                                        class="absolute inset-0 w-full h-full object-cover" id="main-media-element" />

                                    <div
                                        class="absolute inset-0 flex items-center justify-center bg-black/30 transition-opacity hover:opacity-100">
                                        <img src="{{ 'storage/img/play.png'}}" alt="">
                                    </div>

                                    <div
                                        class="absolute bottom-0 left-0 p-8 text-white bg-gradient-to-t from-black/70 to-transparent w-full">
                                        <h2 class="text-3xl font-bold uppercase mb-2" id="main-title">LOREM IPSUM DOLOR
                                            SIT AMET (DEFAULT)</h2>
                                        <p class="text-sm" id="main-description">Duis aute irure dolor in reprehenderit in
                                            voluptate velit.</p>
                                    </div>
                                </a>
                            </div>
                         
                            <div class="grid grid-cols-2 md:grid-cols-3 gap-2 lg:gap-6">

                              @foreach ($videos as $video )
                         
                                <a class="media-thumbnail group block rounded-xl overflow-hidden  hover:shadow-lg transition-shadow duration-300 cursor-pointer"
                                    data-media-url="{{ $video->link }}"
                                    data-title="{{ $video->{'title_' . $locale} }}" data-description="{{ $video-> {'text_' . $locale} }}">
                                    <div class="relative  sm:h-[200px] lg:h-[260px]">
                                        <div
                                            class="hidden group-hover:block media-overlay absolute inset-0 bg-[#77B75F]/50 transition-opacity">
                                        </div>
                                        <div
                                            class="hidden group-hover:flex media-play-icon-wrapper absolute inset-0 items-center justify-center z-10">
                                            <img src=" {{ 'storage/img/play.png'}}" alt="" class="w-12 h-12">
                                        </div>
                                        <img src="{{ 'storage/' . $video->poster }}" alt="Kichik rasm 1"
                                            class="w-full h-full object-cover media-poster-source" />
                                    </div>
                                    <div class=" text-center bg-[#F4F4F4]  py-[15px] lg:py-[25px] h-full">
                                        <h3
                                            class="text-[16px] lg:text-[20px] leading-none font-[700] uppercase text-[#474747] group-hover:text-[#77B75F] media-title-text">
                                            {{ $video->{'title_' . $locale} }}</h3>
                                    </div>
                                </a>

                           @endforeach


                            </div>
                        </div>

                    </div>
                </div>
            </div>




        </div>
    </section>

    <x-info />
@endsection
