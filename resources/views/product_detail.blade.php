@extends('frunt_layout.master')
@section('content')

    <main>
    <div id="1styear">
        <div class="bg-cover bg-center flex items-center justify-center px-6"
             style="height: 387px; background-image: url('/assets/images/Frame\ 111.png');">
            <div class="flex flex-col items-start md:items-center">
                <h1 class="text-4xl md:text-6xl mb-3 text-[#323232] font-times italic font-normal">Product</h1>
                <p class="mb-3 text-lg md:text-xl text-[#383838] font-poppins  tracking-[5.6px] uppercase">True Natural - True Organic</p>
            </div>
        </div>
    </div>

        <div id="login-popup" class="fixed inset-0 flex items-center justify-center z-50" style="display: none;">
            <div class="overlay fixed inset-0 bg-gray-900 opacity-50" onclick="closePopup()"></div>
            <div class="popup bg-white rounded-lg shadow-lg p-6 relative z-10 max-w-sm w-full">
                <h2 class="text-2xl font-semibold text-gray-800 mb-4">Please Login</h2>
                <p class="text-gray-600 mb-1">You need to log in to add items to your cart.</p>
                <p class="text-sm text-center text-gray-600 mb-2">Don’t have an account? <a href="{{ route('user.register') }}" class="text-red-500 hover:underline">SIGN UP</a></p>
                <div class="flex justify-between">
                    <a href="{{ route('user.login') }}" class="bg-black text-white font-semibold py-2 px-4 rounded  hover:opacity-80 ">Login</a>
                    <button onclick="closePopup()" class="bg-gray-300 text-gray-800 font-semibold py-2 px-4 rounded hover:bg-gray-400">Close</button>
                </div>
            </div>

        </div>



        <div class=" container mx-auto py-20">
        <div class="flex flex-col md:flex-row justify-between  px-8 py-12">
            <div>
                <img src="{{ Storage::url($product->img) }}" alt="Image 1" >
            </div>
            <div class="flex flex-col justify-center p-14 shadow-xl">
                <h1 class=" text-5xl pb-2 uppercase font-semibold leading-snug">{{ $product->title }}</h1>
                <div class="flex gap-3">
                    <i class="fa-solid fa-star text-[#FFA030]"></i>
                    <i class="fa-solid fa-star text-[#FFA030]"></i>
                    <i class="fa-solid fa-star text-[#FFA030]"></i>
                    <i class="fa-solid fa-star text-[#FFA030]"></i>
                    <i class="fa-solid fa-star text-[#FFA030]"></i>
                </div>
                <h1 style=" color: #C75D68;" class="text-4xl font-bold py-3">${{ $product->price }}</h1>
                <div class="pl-6">
                    <ul class="list-disc">
                        <li>No one can deny your sleek style with these handsome Madden by Steve Madden® <br> Cale 6 oxfords.</li>
                        <li>Man-made upper features a plain toe</li>
                        <li>Lace-up closure. </li>
                        <li>Man-made lining.</li>
                    </ul>
                </div>
                <div class="flex items-center gap-2 pt-2">
                    <i class="fa-regular fa-circle-check"></i>
                    <p>Available <span class="font-bold">56 </span>products in stock</p>

                </div>
                <div class="flex items-center pt-3 space-x-2">
                    <input type="number" class="border border-gray-300 rounded p-1 w-16 text-center" id="quantity" value="1" min="1" />
                    <button id="add-to-cart" data-id="{{ $product->id }}" class="ml-2 bg-black  text-white font-semibold py-2 px-4 hover:opacity-80 rounded">
                        Add to Cart
                    </button>

                </div>

                <div class="pt-6">
                    <a href="{{ route('cart.view') }}" class="uppercase bg-[#C75D68] text-white py-3 px-20 font-poppins">Buy now</a>
                </div>
                <div class="py-6 space-y-1">
                    <p class="uppercase font-poppins text-[#A5A5A5]"><span class="font-bold font-poppins text-black">sku: </span>00345k</p>
                    <p class="uppercase font-poppins text-[#A5A5A5]"><span class="font-bold font-poppins text-black">category: </span>{{ $product->category->title }}</p>
                    <p class="uppercase font-poppins text-[#A5A5A5]"><span class="font-bold font-poppins text-black">tags: </span> skin care , lips, lipstick</p>
                </div>
            </div>
        </div>
    </div>

    <div class=" pb-10  container mx-auto">
        <div class="border border-[#C6C1C1] p-10">
            <ul class="list-disc">
                <li class="text-[#9D9D9D]">No one can deny your sleek style with these handsome Madden by Steve Madden® Cale 6 oxfords.</li>
                <li class="text-[#9D9D9D]">Man-made upper features a plain toe.</li>
                <li class="text-[#9D9D9D]">Lace-up closure.</li>
                <li class="text-[#9D9D9D]">Man-made lining.</li>
                <li class="text-[#9D9D9D]">Cushioned footbed.</li>
                <li class="text-[#9D9D9D]">Man-made outsole.</li>
                <li class="text-[#9D9D9D]">Imported.</li>
                <li class="text-[#9D9D9D]">Product measurements were taken using size 11, width D - Medium. Please note that measurements may vary by size.</li>
                <li class="text-[#9D9D9D]">Weight of footwear is based on a single item, not a pair.</li>
            </ul>
        </div>
    </div>


        <div class="">
            <div class="text-center mb-8 flex flex-col items-center pt-20">
                <h1 class="text-[#BFBFBF] text-2xl font-normal ">You might alsoLike</h1>
                <p class=" leading-none font-['Quentin']  text-3xl font-normal mb-4">
                    Add Related products to weekly line up
                </p>
             </div>

            <div class="">
                <div class="swiper-container my-10 overflow-hidden pb-16">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide flex flex-col items-center text-center">
                            <img src="/assets/images/Group 185 (5).png" alt="Slide 1" style="height: 412px; width: 367px;" class="">
                            <p class=" text-center mt-2"> Lipstick</p>
                            <h1 class=" text-2xl font-normal text-center  mb-2">Perfect for you</h1>
                            <p class=" text-center">$16.00</p>
                        </div>
                        <div class="swiper-slide flex flex-col items-center text-center">
                            <img src="/assets/images/Group 185 (2).png" alt="Slide 1" style="height: 412px; width: 367px;" class="">
                            <p class=" text-center mt-2"> Lipstick</p>
                            <h1 class=" text-2xl font-normal text-center  mb-2">Perfect for you</h1>
                            <p class=" text-center">$16.00</p>
                        </div>
                        <div class="swiper-slide flex flex-col items-center text-center">
                            <img src="/assets/images/Group 185 (1).png" alt="Slide 1" style="height: 412px; width: 367px;" class="">
                            <p class=" text-center mt-2"> Lipstick</p>
                            <h1 class=" text-2xl font-normal text-center  mb-2">Perfect for you</h1>
                            <p class=" text-center">$16.00</p>
                        </div>
                        <div class="swiper-slide flex flex-col items-center text-center">
                            <img src="/assets/images/Group 185 (3).png" alt="Slide 1" style="height: 412px; width: 367px;" class="">
                            <p class=" text-center mt-2"> Lipstick</p>
                            <h1 class=" text-2xl font-normal text-center  mb-2">Perfect for you</h1>
                            <p class=" text-center">$16.00</p>
                        </div>
                        <div class="swiper-slide flex flex-col items-center text-center">
                            <img src="/assets/images/Group 185 (4).png" alt="Slide 1" style="height: 412px; width: 367px;" class="">
                            <p class=" text-center mt-2"> Lipstick</p>
                            <h1 class=" text-2xl font-normal text-center  mb-2">Perfect for you</h1>
                            <p class=" text-center">$16.00</p>
                        </div>
                        <div class="swiper-slide flex flex-col items-center text-center">
                            <img src="/assets/images/Group 185 (6).png" alt="Slide 1" style="height: 412px; width: 367px;" class="">
                            <p class=" text-center mt-2"> Lipstick</p>
                            <h1 class=" text-2xl font-normal text-center  mb-2">Perfect for you</h1>
                            <p class=" text-center">$16.00</p>
                        </div>
                        <div class="swiper-slide flex flex-col items-center text-center">
                            <img src="/assets/images/Group 185 (7).png" alt="Slide 1" style="height: 412px; width: 367px;" class="">
                            <p class=" text-center mt-2"> Lipstick</p>
                            <h1 class=" text-2xl font-normal text-center  mb-2">Perfect for you</h1>
                            <p class=" text-center">$16.00</p>
                        </div>
                        <div class="swiper-slide flex flex-col items-center text-center">
                            <img src="/assets/images/Group 185 (8).png" alt="Slide 1" style="height: 412px; width: 367px;" class="">
                            <p class=" text-center mt-2"> Lipstick</p>
                            <h1 class=" text-2xl font-normal text-center  mb-2">Perfect for you</h1>
                            <p class=" text-center">$16.00</p>
                        </div>
                        <div class="swiper-slide flex flex-col items-center text-center">
                            <img src="/assets/images/Group 185 (9).png" alt="Slide 1" style="height: 412px; width: 367px;" class="">
                            <p class=" text-center mt-2"> Lipstick</p>
                            <h1 class=" text-2xl font-normal text-center  mb-2">Perfect for you</h1>
                            <p class=" text-center">$16.00</p>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
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