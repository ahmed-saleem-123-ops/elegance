@extends('frunt_layout.master')
@section('content')
<main>
    <div id="secsix">
        <div class="bg-cover bg-center flex items-center justify-center px-6"
             style="height: 572px; background-image: url('/assets/images/ok.png');">
            <div class="flex flex-col items-center">
                <h1 class="text-4xl md:text-6xl mb-3 text-[#323232] font-times text-[56px] italic font-normal leading-normal">About us</h1>
                <p class="mb-3 text-lg md:text-xl">True Natural - True Organic</p>
            </div>
        </div>
    </div>


    <div id="secone">
        <div class=" container mx-auto py-20 ">
            <div class="flex flex-col md:flex-row gap-32  px-8 ">
                <div class="flex flex-col justify-center">
                    <h1 class="text-4xl  pb-4  text-[#BFBFBF]  font-['Quentin'] text-[32px] font-normal tracking-[3.84px]">
                        Our Story</h1>
                    <h1 class=" text-4xl leading-snug pb-6">Elevate your beauty with EtherealElegance</h1>
                    <div class="flex  gap-4 ">
                        <div style=" border-color: #C75D68;" class="border"></div>
                        <p class=" max-w-xl ">EtherealElegance offers a curated collection of skincare and makeup
                            products aimed at enhancing natural beauty and individual style. </p>
                    </div>
                    <p class="py-6 max-w-xl">With a focus on quality ingredients and diverse offerings, the brand
                        fosters confidence and self-expression. Beyond products, EtherealElegance provides a
                        supportive community with tips, tutorials, and inspiration for unlocking inner beauty and
                        realizing personal potential.</p>
                </div>
                <div>
                    <img src="/assets/images/1st.png" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="container mx-auto py-20 flex flex-col items-center">
        <div class="flex flex-col md:flex-row gap-32  pb-10 px-6 py-6 ">
            <div class=" flex flex-col shadow-md p-8  items-center">
                <div class="pt-2">
                    <img src="/assets/images/Group 146.png" alt="">
                </div>
                <div class="flex flex-col items-center text-center mx-auto max-w-sm">
                    <div class="text-center ">
                        <h1 style=" color: #C75D68;" class="text-4xl py-3">10 +</h1>
                        <p>years Experience</p>
                    </div>
                </div>
            </div>
            <div class="flex flex-col shadow-md p-8  items-center">
                <div class="pt-2">
                    <img src="/assets/images/Group 147.png" alt="">
                </div>
                <div class="flex flex-col items-center text-center mx-auto max-w-sm">
                    <div class="text-center ">
                        <h1 style=" color: #C75D68;" class="text-4xl py-3">500 k</h1>
                        <p>Cosmetics sold</p>
                    </div>
                </div>
            </div>
            <div class="flex flex-col shadow-md p-8 items-center">
                <div class="pt-2">
                    <img src="/assets/images/Group 170.png" alt="">
                </div>
                <div class="flex flex-col items-center text-center mx-auto max-w-sm">
                    <div class="text-center ">
                        <h1 style=" color: #C75D68;" class="text-4xl py-3">40</h1>
                        <p>Clients Happy</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class=" flex flex-col items-center ">
        <div class="text-center mb-8 flex flex-col items-center">
            <h1 class="text-[#BFBFBF] text-2xl font-normal mb-4">Our Memebers</h1>
            <p class=" leading-none font-['Quentin']  text-3xl font-normal mb-4">
                Meet the Faces of EtherealElegance
            </p>
        </div>

        <div class="flex flex-wrap justify-center gap-8 ">
            <div class="">
                <img src="/assets/images/Rectangle 140.png" alt="Image 1" class="mb-2">
                <h1 class=" text-xl font-semibold text-center  "> EMILY JOHNSON</h1>
                <p class=" text-center">Founder</p>
            </div>
            <div class="">
                <img src="/assets/images/Rectangle 141.png" alt="Image 1" class="mb-2">
                <h1 class=" text-xl font-semibold text-center  "> LIAM ANDERSON</h1>
                <p class=" text-center">Co - Founder</p>
            </div>
            <div class="">
                <img src="/assets/images/Rectangle 142.png" alt="Image 1" class="mb-2">
                <h1 class=" text-xl font-semibold text-center  "> ETHAN THOMPSON</h1>
                <p class=" text-center">Marketing Director</p>
            </div>
            <div class="">
                <img src="/assets/images/Rectangle 143.png" alt="Image 1" class="mb-2">
                <h1 class=" text-xl font-semibold text-center  ">SOPHIA ROBERTS</h1>
                <p class=" text-center">Creative Director</p>
            </div>
        </div>
    </div>

    <div class="pt-16">
        <div class="text-center mb-8 flex flex-col items-center pt-20">
            <h1 class="text-[#BFBFBF] text-2xl font-normal mb-4">Experience Diversity</h1>
            <p class=" leading-none font-['Quentin']  text-3xl font-normal mb-4">
                Explore Our Range of Leading Brand Products
            </p>
        </div>
        <div class="mx-auto">
            <img src="/assets/images/Vector.png" class="w-full" alt="">
        </div>
    </div>

    <div class="pt-16">
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


    <div class="">
        <div class="swiper-container my-10 overflow-hidden pb-16">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="/assets/images/Rectangle 94.png" alt="Slide 1" class="w-full  h-96 object-cover">
                </div>
                <div class="swiper-slide">
                    <img src="/assets/images/Rectangle 95.png" alt="Slide 2" class="w-full  h-96 object-cover">
                </div>
                <div class="swiper-slide">
                    <img src="/assets/images/Rectangle 96.png" alt="Slide 1" class="w-full h-96 object-cover">
                </div>
                <div class="swiper-slide">
                    <img src="/assets/images/Rectangle 97.png" alt="Slide 1" class="w-full  h-96 object-cover">
                </div>
                <div class="swiper-slide">
                    <img src="/assets/images/Rectangle 98.png" alt="Slide 1" class="w-full  h-96 object-cover">
                </div>
                <div class="swiper-slide">
                    <img src="/assets/images/Rectangle 99.png" alt="Slide 1" class="w-full  h-96 object-cover">
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</main>

@endsection