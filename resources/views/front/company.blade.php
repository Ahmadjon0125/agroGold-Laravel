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
            class="text-[16px] sm:text-[18px] lg:text-[22px] text-black flex items-center breadcrumb gap-3 pt-[50px] mb-[33px]"
          >
            <a href="/" class="hover:text-[#77B75F] transition">Главная</a>
            <span class="bg-[#77B75F] w-[2px] h-[30px]"></span>
            <a class="text-[#77B75F]">О компании</a>
          </div>

          <!-- Title -->
          <h1
            class="text-[25px] sm:text-[40px] lg:text-[60px] font-extrabold text-[#474747] mb-[22px] text-center lg:text-start leading-none"
          >
          {{ $company -> {'title_' . $locale} }}
          </h1>

          <div class="w-[60px] h-[8px] bg-[#77B75F] rounded-[20px] mb-[12px] mx-auto lg:mr-auto lg:ml-0"></div>
          <p class="text-[#939393] font-[600] text-[20px] uppercase mb-5 text-center lg:text-start">
            {{ __('app.about') }}
          </p>

          <!-- Top Text -->
          <p class="text-[#474747] leading-relaxed font-[500] text-[18px] mb-4 text-center lg:text-start">
               {{ strip_tags($company -> {'text_' . $locale}) }} 
          </p>

          <!-- Images -->
          <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
            <img
              src="{{ asset('storage/' . $company->img1) }}"
              class="w-full h-[260px] lg:h-[460px] object-cover rounded-[20px] hover:scale-[1.02] hover:-translate-y-1 transition-all duration-300 ease"
              alt=""
            />
            <img
              src="{{ asset('storage/' . $company->img2) }}"
              class="w-full h-[260px] lg:h-[460px] object-cover rounded-[20px] hover:scale-[1.02] hover:-translate-y-1 transition-all duration-300 ease"
              alt=""
            />
          </div>

          <!-- Bottom Paragraphs -->
          <div class="mb-8">
            <p
              class="text-[#474747] leading-relaxed mb-6 font-[500] text-[18px] text-center lg:text-start"
            >
             {{ strip_tags($company -> {'text_' . $locale}) }} 
            </p>

            
          </div>
        </div>
      </section>

      @endsection