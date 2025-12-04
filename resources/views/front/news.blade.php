@extends('layouts.app')

@php
    $locale = App::getLocale();
@endphp
@section('content')
    <!-- 1-section  -->

    <section class="mt-[86px] lg:mt-[214px]">
        <div class="container">
            <!-- Breadcrumb -->
            <div
                class="text-[16px] sm:text-[18px] lg:text-[22px] text-black flex items-center breadcrumb gap-3 pt-[50px] mb-[33px]">
                <a href="/" class="hover:text-[#77B75F] transition">Главная</a>
                <span class="bg-[#77B75F] w-[2px] h-[30px]"></span>
                <a class="text-[#77B75F]">{{ __('app.news') }}</a>
            </div>

            <!-- Title -->
            <h1
                class="text-[25px] sm:text-[40px] lg:text-[60px] font-extrabold text-[#474747] mb-[22px] text-center lg:text-start leading-none">
               {{ __('app.news') }}
            </h1>

            <div class="w-[60px] h-[8px] bg-[#77B75F] rounded-[20px] mb-[50px] mx-auto lg:mr-auto lg:ml-0"></div>


            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($news as $new)
                    <a href="{{ route('newsIn.page', $new->{ 'slug_' . $locale } ) }}"
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

            <div class="mb-[100px] mt-[50px]  text-center ">
                <a id="load-more"
                    class="px-8 py-3 border-2 border-[#D24A43] rounded-full text-sm font-semibold text-[#D24A43] hover:bg-[#D24A43] hover:text-white transition-colors duration-300 uppercase">
                    Показать еще
                </a>
            </div>


        </div>
    </section>
@endsection
