@extends('frunt_layout.master')
@section('content')
<main>

    <div id="1styear">
        <div class="responsive-banner bg-cover bg-center flex items-center justify-center px-6"
             style=" background-image: url('/assets/images/Frame 97.png');">
            <div class="flex flex-col items-start md:items-center">
                <h1 class="text-2xl md:text-6xl text-[#323232] font-times italic font-normal">Our Blogs</h1>
                <p class="mb-3 text-sm md:text-xl text-[#383838] font-poppins  tracking-[5.6px] uppercase">True Natural - True Organic</p>
            </div>
        </div>
    </div>

    <style>
        .responsive-banner {
            height: 200px;
            background-size: cover;
            background-position: center;
        }

        @media (min-width: 768px)  { /* Medium screens and above */
            .responsive-banner {
                height: 400px;
            }
        }

        @media (min-width: 1024px) { /* Large screens and above */
            .responsive-banner {
                height: 572px;
            }
        }

        .banner-title {
            font-size: 32px; /* Default font size for smaller screens */
        }

        @media (min-width: 768px) {
            .banner-title {
                font-size: 48px;
            }
        }

        @media (min-width: 1024px) {
            .banner-title {
                font-size: 56px;
            }
        }

        .banner-button {
            padding: 8px 16px; /* Default button padding */
            font-size: 14px;
        }

        @media (min-width: 768px) {
            .banner-button {
                padding: 12px 20px;
                font-size: 16px;
            }
        }

        @media (min-width: 1024px) {
            .banner-button {
                padding: 16px 24px;
                font-size: 18px;
            }
        }

    </style>

    <div class="container mx-auto p-4 grid grid-cols-1 md:grid-cols-3 ">
        <!-- First Column -->
        @foreach($blogs as $blog)
        <div class="">
            <div class=" p-4 rounded">
                <img src="{{ Storage::url($blog->img) }}" alt="{{ $blog->title }}" style="width: 70%; height: 70%;" class="w-50 h-50  group-hover:opacity-80 transition-opacity duration-300" >
            </div>
            <div class="p-4">
                <div class="py-4 flex items-center gap-2">
                    <div class="border border-[#C75D68] w-10"></div>
                    <p class="text-[#C75D68]">November 2024</p>
                    <div class="border border-[#C75D68] w-10"></div>
                </div>
                <h3 class="text-xl font-semibold">{{ $blog->title }}</h3>
                <p class="text-gray-600 mt-2">{{ $blog->country }}</p>
                <p class="text-gray-600 mt-2">{{ $blog->state }}</p>
                <p class="text-gray-600 mt-2">{{ $blog->city }}</p>


                <p class="text-gray-600 mt-2">{{ $blog->description }}</p>

                <div class="w-fit pt-4">
                    <button class=" text-sm text-gray-500">READ MORE</button>
                    <div class="border text-gray-500"></div>
                </div>
            </div>
        </div>
    @endforeach

    </div>



    <div id="secsix">
        <div class="bg-cover bg-center flex items-center justify-center px-6"
             style="height: 255px; background-image: url('/assets/images/Frame\ 62.png');">
            <div class="flex flex-col items-center">
                <p  class="text-black text-center font-serif text-lg italic font-normal leading-[46px] tracking-[0.4px]">Dwell on the beauty of life. Watch the stars, and see yourself running with them.</p>
                <p class="text-black text-center font-['Poppins'] text-[10px] font-normal pb-9 leading-normal tracking-[0.2px]">
                    ― Marcus Aurelius, Meditations
                </p>
                <button class="bg-black text-white px-6  py-2 md:py-3 text-lg font-semi-bold">EXPLORE MORE</button>
            </div>
        </div>
    </div>


    <div class="">
        <div class="text-center mb-8 flex flex-col items-center pt-20">
            <h1 class="text-[#BFBFBF] text-2xl font-normal ">Our Gallery</h1>
            <p class=" leading-none font-['Quentin']  text-3xl font-normal mb-4">
                Welcome to our beauty community
            </p>

            <div class="flex  gap-4 pt-6">
                <div style=" border-color: #C75D68;" class="border w-1 bg-[#C75d68]"></div>
                <div class="text-start">
                    <p class="text-[#BFBFBF] text-xl font-normal ">follow us on Instagram </p>
                    <p class="font-semibold">@EltherealElegance</p>
                </div>
            </div>
        </div>
    </div>


{{--    <div class="">--}}
{{--        <div class="swiper-container my-10 overflow-hidden pb-16">--}}
{{--            <div class="swiper-wrapper">--}}
{{--                <div class="swiper-slide">--}}
{{--                    <img src="/assets/images/pppp.png" alt="Slide 1"  class="object-cover">--}}
{{--                    --}}{{--                        <img src="http://127.0.0.1:5501/public/assets/images/pppp.png" alt="Slide 1" class=" object-cover">--}}
{{--                </div>--}}
{{--                <div class="swiper-slide">--}}
{{--                    <img src="/assets/images/llll.png" alt="Slide 1"  class="object-cover">--}}
{{--                    --}}{{--                        <img src="http://127.0.0.1:5501/public/assets/images/llll.png" alt="Slide 2" class="object-cover">--}}
{{--                </div>--}}
{{--                <div class="swiper-slide">--}}
{{--                    <img src="/assets/images/qqqq.png" alt="Slide 1" class="object-cover">--}}
{{--                    --}}{{--                        <img src="http://127.0.0.1:5501/public/assets/images/qqqq.png" alt="Slide 1" class=" object-cover">--}}
{{--                </div>--}}
{{--                <div class="swiper-slide">--}}
{{--                    <img src="/assets/images/wwww.png" alt="Slide 1"  class="object-cover">--}}
{{--                    --}}{{--                        <img src="http://127.0.0.1:5501/public/assets/images/wwww.png" alt="Slide 1" class="object-cover">--}}
{{--                </div>--}}
{{--                <div class="swiper-slide">--}}
{{--                    <img src="/assets/images/eeee.png" alt="Slide 1"  class="object-cover">--}}
{{--                    --}}{{--                        <img src="http://127.0.0.1:5501/public/assets/images/eeee.png" alt="Slide 1" class=" object-cover">--}}
{{--                </div> <div class="swiper-slide">--}}
{{--                    <img src="/assets/images/pppp.png" alt="Slide 1" class="object-cover">--}}
{{--                    --}}{{--                        <img src="http://127.0.0.1:5501/public/assets/images/pppp.png" alt="Slide 1" class=" object-cover">--}}
{{--                </div> <div class="swiper-slide">--}}
{{--                    <img src="/assets/images/llll.png" alt="Slide 1"  class="object-cover">--}}
{{--                    --}}{{--                        <img src="http://127.0.0.1:5501/public/assets/images/llll.png" alt="Slide 1" class=" object-cover">--}}
{{--                </div> <div class="swiper-slide">--}}
{{--                    <img src="/assets/images/wwww.png" alt="Slide 1"  class="object-cover">--}}
{{--                    --}}{{--                        <img src="http://127.0.0.1:5501/public/assets/images/wwww.png" alt="Slide 1" class=" object-cover">--}}
{{--                </div>--}}
{{--                <div class="swiper-slide">--}}
{{--                    <img src="/assets/images/pppp.png" alt="Slide 1"  class="object-cover">--}}
{{--                    --}}{{--                        <img src="http://127.0.0.1:5501/public/assets/images/pppp.png" alt="Slide 1" class=" object-cover">--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="swiper-pagination"></div>--}}
{{--        </div>--}}
{{--    </div>--}}

</main>

@endsection