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
                <a class="text-[#77B75F]">Категории</a>
            </div>

            <!-- Title -->
            <h1
                class="text-[25px] sm:text-[40px] lg:text-[60px] font-extrabold text-[#474747] mb-[22px] text-center lg:text-start leading-none">
                Категории продукции
            </h1>

            <div class="w-[60px] h-[8px] bg-[#77B75F] rounded-[20px] mb-[50px] mx-auto lg:mr-auto lg:ml-0"></div>


            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-[30px] categShadow mb-8 sm:mb-15 lg:mb-25">
            @foreach ( $categorys as $category)
              
          
              <a  href="{{ route('catalog.page', [
                        'id' => $category->id,
                        'slug' => $category->{'slug_' . $locale},
                    ]) }}"
                    class="relative bg-white p-10 rounded-[20px] shadow-lg hover:shadow-xl transition-all duration-300 ease-in-out hover:scale-[1.03] hover:-translate-y-2 group text-center lg:text-start cursor-pointer">
                    <img src="{{ asset('storage/img/barg.png') }}" alt="Leaf"
                        class="absolute top-0 right-0 w-25 h-25 sm:w-30 sm:h-30 xl:w-40 xl:h-40 z-10" />
                    <div
                        class="bg-[#F4F4F4] rounded-full w-[100px] h-[100px] md:w-[150px] md:h-[150px] flex items-center justify-center mb-6 relative z-0 mx-auto lg:ml-0">
                        <img src="{{ asset('storage/' . $category->img) }}" alt="Fungicides Icon"
                            class="w-[50px] h-[50px] md:w-[70px] md:h-[70px]" />
                    </div>
                    <h3 class="text-[20px] font-bold text-[#474747] mb-4">
                        {{ $category-> {'title_' . $locale} }}
                    </h3>
                    <p class="text-[#939393] text-[16px] font-[500]">
                        {{ strip_tags($category-> {'text_' . $locale}) }}
                    </p>
                </a>
  @endforeach
    
            </div>
        </div>
    </section>

    <x-info />
@endsection
