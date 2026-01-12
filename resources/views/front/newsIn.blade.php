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
            <a href="/" class="hover:text-[#77B75F] transition">{{ __('app.home') }}</a>
            <span class="bg-[#77B75F] w-[2px] h-[30px]"></span>
            <a href="/news.html" class="hover:text-[#77B75F]">{{ __('app.news') }}</a>
            <span class="bg-[#77B75F] w-[2px] h-[30px]"></span>
            <a class="text-[#77B75F]"> {{ $new->{'title_' . $locale} }}</a>
          </div>

          <!-- Title -->
          <h1
            class="text-[25px] sm:text-[40px] lg:text-[60px] font-extrabold text-[#474747] mb-[22px] text-center lg:text-start leading-none"
          >
             {{ $new->{'title_' . $locale} }}
          </h1>

          <div
            class="w-[60px] h-[8px] bg-[#77B75F] rounded-[20px] mb-[50px] mx-auto lg:mr-auto lg:ml-0"
          ></div>

          <div class="">
            <div
              class=" "
            >
              <div class="relative h-[300px] md:h-[600px] rounded-[20px]">
                <img
                  src="{{ asset('storage/' . $new->img) }}"
                  alt="Yangilik 1"
                  class="w-full h-full object-cover rounded-[20px]"
                />
                <div
                  class="absolute bottom-0 left-0 bg-[#77B75F] text-white text-14px md:text-[16px] font-[500] px-3 py-2 md:px-5 md:py-3 rounded-tr-[20px] rounded-bl-[20px]"
                >
                    {{ date('d.m.Y', strtotime($new->newsDate)) }}
                </div>
              </div>
              <div class="my-[38px]">
                <p class="text-sm text-[#474747] font-[500] text-[18px] leading-relaxed">
                  {{ strip_tags(Str::limit($new->{'text_' . $locale}, 150)) }}
                </p>
              </div>
            </div>
          </div>

        </div>
      </section>

      <x-info />
  @endsection