@extends('frunt_layout.master')
@section('content')
<main>
    <div class="relative responsive-banner bg-cover bg-center "
         style="background-image: url('/assets/images/Frame 97.png'); ">
        <div class="relative z-10 flex flex-col items-start justify-center h-full max-w-7xl mx-auto px-4 md:px-14 ">

            <h1 class="banner-title mb-2 text-[#323232] font-times italic font-normal leading-normal text-lg md:text-3xl">
                Pink skin formula
            </h1>

            <p class="mb-2 text-sm md:text-xl">
                True Natural - True Organic
            </p>

            <a href="{{ route('products') }}">
                <button class="banner-button bg-black text-white text-xs md:text-base px-3 py-1 md:px-5 md:py-2">
                    EXPLORE MORE
                </button>
            </a>
        </div>
    </div>


    <style>
        .responsive-banner {
            height: 200px; /* Default height for smaller screens */
            background-size: cover;
            background-position: center;
        }

        @media (min-width: 768px)  { /* Medium screens and above */
            .responsive-banner {
                height: 720px;
            }
        }

        @media (min-width: 1024px) { /* Large screens and above */
            .responsive-banner {
                height: 960px;
            }
        }

        .banner-title {
            font-size: 28px; /* Default font size for smaller screens */
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

    <div class="mx-auto px-4 py-6">
        <div class="flex flex-wrap justify-between"  >
            <div class="w-full sm:w-1/2 md:w-1/4 p-2">
                <img src="/assets/images/Group 81.png" alt="Image 1" class="w-35 md:w-full h-35 md:h-auto shadow-md transform transition duration-300 ease-in-out hover:scale-105">
            </div>
            <div class="w-full sm:w-1/2 md:w-1/4 p-2">
                <img src="/assets/images/Group 82.png" alt="Image 2" class="w-35 md:w-full h-35 md:h-autoshadow-md transform transition duration-300 ease-in-out hover:scale-105">
            </div>
            <div class="w-full sm:w-1/2 md:w-1/4 p-2">
                <img src="/assets/images/Group 83.png" alt="Image 3" class="w-35 md:w-full h-35 md:h-auto shadow-md transform transition duration-300 ease-in-out hover:scale-105">
            </div>
            <div class="w-full sm:w-1/2 md:w-1/4 p-2">
                <img src="/assets/images/Group 84.png" alt="Image 4" class="w-35 md:w-full h-35 md:h-auto shadow-md transform transition duration-300 ease-in-out hover:scale-105">
            </div>
        </div>
    </div>

    <div class="flex flex-col items-center py-28">
        <div class="text-center mb-8 flex flex-col items-center">
            <h1 class="text-[#BFBFBF] text-2xl font-normal mb-4">Perfect for you</h1>
            <p class="leading-none font-['Quentin'] text-3xl font-normal mb-4">
                From Editor‘s Pick Collection
            </p>
            <div class="border border-1 w-72"></div>
        </div>

        <div class="flex flex-wrap justify-center gap-6 mb-2">
                @foreach($products as $product)
                    <a href="{{ route('product_detail', $product->id) }}" class="flex flex-col items-center group hover:scale-105 transform transition-all duration-300">
                        <img src="{{ Storage::url($product->img) }}" alt="Image" class="object-cover mb-2 group-hover:opacity-80">
                        <p class="text-center mt-2">{{ $product->title }}</p>
                        <h1 class="text-2xl font-normal text-center mb-2">{{ $product->category->title }}</h1>
                        <p class="text-center">{{ $product->price }}</p>
                    </a>
                @endforeach
        </div>

        <div class="pt-20">
            <a href="{{ route('products') }}" class="p-4 border-2 border-black font-bold text-black hover:bg-black hover:text-white transition-all duration-300">SHOP NOW</a>
        </div>
    </div>


    <div class="mx-auto ">
            <img src="/assets/images/Vector.png"  alt="" style="height: 100%; width: 100%;">
        </div>

        <div>
            <div class=" container mx-auto pt-20">
                <div class="flex flex-col md:flex-row gap-32  px-8 py-12">
                    <div>
                        <img src="/assets/images/Group 110.png" alt="">
                    </div>
                    <div class="flex flex-col justify-center px-6">
                        <h1 class="text-4xl text-gray-400 pb-4 ">About US</h1>
                        <h1 class=" text-4xl pb-4 leading-snug">We Guaranteed a High Quality</h1>
                        <div class="flex  gap-4 ">
                            <div style=" border-color: #C75D68;" class="border "></div>
                            <p class=" max-w-xl">At EtherealElegance, we believe in the transformative power of beauty. Our curated cosmetics collection is meticulously crafted to inspire confidence and elevate your natural allure.</p>
                        </div>
                        <p class="pt-6 leading-loose text-gray-400">We understand that beauty is more than just skin deep; it's about<br> embracing your individuality and expressing your personal style with <br> effortless elegance. That's why we offer premium offerings that cater to <br> modern sophistication, ensuring you feel empowered and beautiful in <br> every moment.</p>
                        <div class="flex gap-10 py-10">
                            <div class="text-center">
                                <h1 style=" color: #C75D68;" class="text-4xl">500 K</h1>
                                <p>Cosmetics sold</p>
                            </div>
                            <div class="text-center">
                                <h1 style=" color: #C75D68;" class="text-4xl">10 +</h1>
                                <p>years Experience</p>
                            </div>
                        </div>
                        <div class="">
                             <a href="{{ route('about') }}" class="py-3 px-5 tracking-wide  border-2 border-black  font-bold text-black hover:bg-black hover:text-white transition-all duration-300">EXPLORE NOW</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="relative bg-cover bg-center" style="height: 758px;  background-image: url('/assets/images/Group\ 122.png');" >
            <div class="relative z-10 flex flex-col items-start justify-center h-full max-w-7xl mx-auto px-14">
                <h1 class="text-4xl text-gray-400 " style="color: #C75D68;">Holiday sets</h1>
                <h1 class="text-4xl md:text-6xl font-normal ">You will love it!</h1>
                <p class="mb-3  py-6 text-s">Unleash the power of radiant skin with our potent formula enriched with nourishing ingredients. Say goodbye to dullness and <br> hello to a luminous glow. Don't miss out, shop now and reveal your best skin yet!</p>
                <div class="">
                    <a href="" class="py-3 px-5 tracking-wide  border-2 border-black  font-bold text-black hover:bg-black hover:text-white transition-all duration-300">READ MORE</a>
               </div>
            </div>
        </div>


        <div id="secone">
            <div class=" container mx-auto">
                <div class="flex flex-col md:flex-row gap-16 md:gap-32  px-8 ">
                    <div class="flex flex-col justify-center">
                        <h1 class="text-4xl  md:pb-4   text-[#BFBFBF]  font-['Quentin'] text-[32px] font-normal tracking-[3.84px]">Best Product</h1>
                        <h1 class=" text-4xl leading-snug">Revolutionizing eye shadow.</h1>
                        <p class="py-3 md:py-6 font-semibold">Embracing a new era in cosmetics</p>
                        <div class="flex  gap-4 ">
                            <div style=" border-color: #C75D68;" class="border"></div>
                            <p class=" max-w-xl text-gray-500">The eye shadow revolution redefines beauty with vibrant colors and innovative formulas, empowering self-expression and creativity in every stroke.</p>
                        </div>
                    </div>
                    <div>
                        <img src="/assets/images/glitz-7 1.png" class="" alt="">
                    </div>
                </div>
            </div>
        </div>

        <div>
            <div class=" container mx-auto ">
                <div class="flex flex-col-reverse md:flex-row gap-10 md:gap-52 md:52  px-8 ">
                    <div>
                        <img src="/assets/images/laura-chouette-IMWmOmgP7kQ-unsplash-removebg-preview (1) 1.png" alt="">
                    </div>
                    <div class="flex flex-col justify-center">
                        <h1 class="text-4xl  pb-4  text-[#BFBFBF]  font-['Quentin'] text-[32px] font-normal tracking-[3.84px]">Best Product</h1>
                        <h1 class=" text-4xl leading-snug">Whitening Serum.</h1>
                        <p class="py-6 font-semibold">Introducing the Whitening Serum, a breakthrough in skincare</p>
                        <div class="flex  gap-4 ">
                            <div style=" border-color: #C75D68;" class="border"></div>
                            <p class=" max-w-xl text-gray-500">Formulated with advanced ingredients, it targets dark spots and uneven skin tone, unveiling a brighter, more radiant complexion.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div id="secsix">
            <div class="bg-cover bg-center flex items-center justify-center px-6"
                style="height: 255px; background-image: url('/assets/images/Frame\ 62.png');">
                <div class="flex flex-col items-center">
                    <p  class="text-black text-center font-serif text-lg italic font-normal leading-[46px] tracking-[0.4px]">Dwell on the beauty of life. Watch the stars, and see yourself running with them.</p>
                    <p class="text-black text-center font-['Poppins'] text-[10px] font-normal pb-4 md:pb-9 leading-normal tracking-[0.2px]">
                        ― Marcus Aurelius, Meditations
                    </p>
                    <button class="bg-black text-white px-6  py-2 md:py-3 text-md md:text-lg font-semi-bold hover:bg-white hover:text-black transition-all duration-300">EXPLORE MORE</button>
                </div>
            </div>
        </div>

    <div>
        <div class="container mx-auto py-20 flex flex-col items-center">
            <div class="justify-center items-center text-center px-8 ">
                <h1 class="text-4xl pb-4 text-[#BFBFBF] font-['Quentin'] text-[32px] font-normal tracking-[3.84px]">Beauty Blog</h1>
                <p class="max-w-3xl mx-auto text-4xl pb-10">We love to share our Story & Experience</p>
            </div>
            <div class="flex flex-col md:flex-row pb-10 px-6 gap-20">
                @foreach($blogs1 as $blog)
                    <div class="border border-gray-400 flex flex-col px-4 items-center group hover:scale-105 transform transition-all duration-300">
                        <div class="p-4">
                            <img src="{{ Storage::url($blog->img) }}" alt="{{ $blog->title }}" class="w-50 h-50  group-hover:opacity-80 transition-opacity duration-300">
                        </div>
                        <div class="flex flex-col items-center text-center mx-auto max-w-sm">
                            <div class="py-4 flex items-center gap-2">
                                <div class="border border-[#C75D68] w-10"></div>
                                <p class="text-[#C75D68]">December 2024</p>
                                <div class="border border-[#C75D68] w-10"></div>
                            </div>
                            <p class="text-gray-600 mt-2">{{ $blog->country }}</p>
                            <p class="text-gray-600 mt-2">{{ $blog->state }}</p>
                            <p class="text-gray-600 mt-2">{{ $blog->city }}</p>
                            <p class="pb-2 font-semibold max-w-72 text-lg">{{ $blog->title}}</p>
                            <div class="w-fit pb-6">
                                <button class="text-sm text-gray-500 group-hover:text-[#C75D68] transition-all duration-300">READ MORE</button>
                                <div class="border text-gray-500 group-hover:border-[#C75D68] transition-all duration-300"></div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="pt-6">
                <a href="{{ route('blog.index') }}" class="py-3 px-5 tracking-wide border-2 border-black font-bold text-black hover:bg-black hover:text-white transition-all duration-300">EXPLORE MORE</a>
            </div>
        </div>
    </div>


    <div class="pb-16">
        <div class="justify-center items-center text-center px-8 ">
            <h1 class="text-4xl  text-[#BFBFBF]  font-['Quentin'] text-[32px] font-normal tracking-[3.84px]">Perfect Experience</h1>
            <p class="max-w-3xl mx-auto text-4xl pb-28">Our Testimonials</p>
        </div>
        <div class="bg-cover bg-center flex justify-end " style=" height: 560px; background-image: url('/assets/images/Rectangle\ 69.png');">
            <div class="flex items-center px-6 md:pr-20">
                <div class="relative py-20 bg-white shadow-lg rounded-lg p-8 max-w-lg border border-gray-300">
                    <h2 class="text-sm font-bold uppercase text-gray-600 mb-4">What Our Client Say</h2>
                    <p class="text-gray-700 mb-6" id="testimonial-text">
                        I'm absolutely in love with EtherealElegance's skincare products! They've completely transformed my skin, leaving it radiant and glowing. Couldn't recommend them enough!
                    </p>
                    <p class="font-semibold text-gray-800" id="testimonial-author">- Sarah M</p>

                    <div class="absolute bottom-4 right-4 flex space-x-2">
                        <span class="w-2 h-2 bg-black rounded-full"></span>
                        <span class="w-2 h-2 bg-gray-400 rounded-full"></span>
                        <span class="w-2 h-2 bg-gray-400 rounded-full"></span>
                    </div>

                    <div class="absolute bottom-0 left-8 transform translate-y-full">
                        <svg width="30" height="20" viewBox="0 0 30 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <polygon points="0,20 30,0 0,0" class="fill-white stroke-gray-300" />
                        </svg>
                    </div>
                </div>
            </div>
    </div>
    </div>

    </main>
@endsection