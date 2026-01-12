@extends('layouts.app')

@php
    $locale = App::getLocale();
@endphp
@section('content')
    <!-- 1-section  -->

    <section class="mt-[86px] lg:mt-[214px]">
        <div class="container">
            <div
                class="text-[16px] sm:text-[18px] lg:text-[22px] text-black flex items-center breadcrumb gap-3 pt-[50px] mb-[33px]">
                <a href="/" class="hover:text-[#77B75F] transition">Главная</a>
                <span class="bg-[#77B75F] w-[2px] h-[30px]"></span>
                <a class="text-[#77B75F]">Контакты</a>
            </div>

            <div class="flex flex-col lg:flex-row gap-8 lg:gap-16 items-start">
                <div class="bg-white rounded-[20px] w-full md:w-1/2 xl:w-[45%] mx-auto">
                    <h3
                        class="text-[25px] md:text-[40px] font-[800] text-[#474747] mb-[10px] lg:mb-[18px] text-center lg:text-start">
                        Контакты
                    </h3>
                    <div class="w-[60px] h-[8px] bg-[#77B75F] rounded-[20px] mb-[50px] mx-auto lg:mr-auto lg:ml-0"></div>

                    <div class="">
                        <div class="flex items-center">
                            <span class="text-[#77B75F] text-2xl mt-1">
                                <svg width="50" height="50" viewBox="0 0 50 50" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <rect width="50" height="50" rx="25" fill="#77B75F" />
                                    <g clip-path="url(#clip0_0_1)">
                                        <path
                                            d="M22.1531 17.7685C21.9125 17.1872 21.2781 16.8779 20.6719 17.0435L17.9219 17.7935C17.3781 17.9435 17 18.4372 17 18.9997C17 26.731 23.2688 32.9997 31 32.9997C31.5625 32.9997 32.0563 32.6216 32.2063 32.0779L32.9563 29.3279C33.1219 28.7216 32.8125 28.0872 32.2312 27.8466L29.2312 26.5966C28.7219 26.3841 28.1313 26.531 27.7844 26.9591L26.5219 28.4997C24.3219 27.4591 22.5406 25.6779 21.5 23.4779L23.0406 22.2185C23.4688 21.8685 23.6156 21.281 23.4031 20.7716L22.1531 17.7716V17.7685Z"
                                            fill="white" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_0_1">
                                            <rect width="16" height="16" fill="white"
                                                transform="translate(17 17)" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </span>

                            <div class="text-[#474747] text-[15px] font-[500] leading-relaxed ml-[14px]">
                                <span
                                    class="flex flex-col gap-[1px] header-callback font-semibold text-[#474747] text-[16px] md:text-[18px] xl:text-[20px]">



                                    @foreach ($contacts as $contact)
                                        <a href="tel:{{ $contact->phone }}">{{ $contact->phone }} </a>
                                    @endforeach
                                </span>
                            </div>
                        </div>

                        @foreach ($contacts as $contact)
                            <div class="flex items-center my-[20px] sm:my-[30px] xl:my-[40px]">
                                <span class="text-[#77B75F] mt-1">
                                    <svg width="50" height="50" viewBox="0 0 50 50" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect width="50" height="50" rx="25" fill="#77B75F" />
                                        <path
                                            d="M24.5 24.6C23.979 24.6 23.4794 24.3893 23.111 24.0142C22.7427 23.6391 22.5357 23.1304 22.5357 22.6C22.5357 22.0696 22.7427 21.5609 23.111 21.1858C23.4794 20.8107 23.979 20.6 24.5 20.6C25.021 20.6 25.5206 20.8107 25.889 21.1858C26.2573 21.5609 26.4643 22.0696 26.4643 22.6C26.4643 22.8626 26.4135 23.1227 26.3148 23.3654C26.216 23.608 26.0714 23.8285 25.889 24.0142C25.7066 24.1999 25.49 24.3472 25.2517 24.4478C25.0134 24.5483 24.758 24.6 24.5 24.6ZM24.5 17C23.0413 17 21.6424 17.59 20.6109 18.6402C19.5795 19.6904 19 21.1148 19 22.6C19 26.8 24.5 33 24.5 33C24.5 33 30 26.8 30 22.6C30 21.1148 29.4205 19.6904 28.3891 18.6402C27.3576 17.59 25.9587 17 24.5 17Z"
                                            fill="white" />
                                    </svg>
                                </span>
                                <div
                                    class="text-[#474747] text-[16px] md:text-[18px] xl:text-[20px] font-[500] leading-relaxed ml-[14px]">
                                    <p>{{ $contact->{'address_' . $locale} }}</p>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>

                <div class="w-full lg:w-1/2 xl:w-[55%] pt-10 lg:pt-0">
                    <h2
                        class="text-[25px] md:text-[40px] font-[800] text-[#474747] mb-[10px] lg:mb-[18px] text-center lg:text-start">
                        Свяжитесь с нами
                    </h2>
                    <div class="w-[60px] h-[8px] bg-[#77B75F] rounded-[20px] mb-[30px] mx-auto lg:mr-auto lg:ml-0"></div>
                    <form class="space-y-6">
                        <div>
                            <input type="text" placeholder="Ваше имя"
                                class="w-full pl-[30px] py-[18px] placeholder-[#474747] placeholder-font-medium rounded-[20px] outline-none bg-[#F4F4F4] transition duration-200" />
                        </div>
                        <div>
                            <input type="tel" placeholder="Номер телефона"
                                class="w-full pl-[30px] py-[18px] placeholder-[#474747] placeholder-font-medium rounded-[20px] outline-none bg-[#F4F4F4] transition duration-200" />
                        </div>
                        <div>
                            <input type="email" placeholder="Email"
                                class="w-full pl-[30px] py-[18px] placeholder-[#474747] placeholder-font-medium rounded-[20px] outline-none bg-[#F4F4F4] transition duration-200" />
                        </div>
                        <div>
                            <textarea rows="5" placeholder="Комментарий"
                                class="w-full pl-[30px] py-[18px] placeholder-[#474747] placeholder-font-medium rounded-[20px] outline-none bg-[#F4F4F4] transition duration-200 resize-y"></textarea>
                        </div>

                        <div class="text-right">
                            <button type="submit"
                                class="bg-[#77B75F] text-white text-[12px] font-semibold border-2 px-[20px] py-[12px] lg:px-[40px] lg:py-[22px] rounded-[50px] hover:bg-white hover:text-[#77B75F] uppercase transition-colors duration-300">
                                Отправить
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- -section  -->
    <section>
        <div class="container">
            <h2
                class="text-[25px] md:text-[40px] font-[800] text-[#474747] mb-[10px] lg:mb-[18px] text-center lg:text-start">
                Мы на карте
            </h2>
            <div class="w-[60px] h-[8px] bg-[#77B75F] rounded-[20px] mb-[30px] mx-auto lg:mr-auto lg:ml-0"></div>
        </div>

            <iframe
                src="{{ $map->map }}"
                width="100%" height="full" style="border: 0" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade" class="h-[300px] lg:h-[700px]"></iframe>

    </section>
@endsection
