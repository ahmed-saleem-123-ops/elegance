@extends('frunt_layout.master')
@section('content')

    <main>
        <div id="1styear">
            <div class="bg-cover bg-center flex items-center justify-center px-6"
                 style="height: 572px; background-image: url('/assets/images/Frame\ 111.png');">
                <div class="flex flex-col items-start md:items-center">
                    <h1 class="text-4xl md:text-6xl mb-3 text-[#323232] font-times italic font-normal">Our Blogs</h1>
                    <p class="mb-3 text-lg md:text-xl text-[#383838] font-poppins  tracking-[5.6px] uppercase">True Natural - True Organic</p>
                </div>
            </div>
        </div>

        <div class="container mx-auto grid md:grid-cols-4 overflow-hidden p-6">
            <div class="col-span-3 py-6">
                <div class="">
                    <h1 class="text-4xl text-gray-400 pb-2  italic">Blog</h1>
                    <h1 class=" text-4xl pb-4 max-w-6xl leading-snug">Explore five makeup trends this season for a fresh and adventurous beauty look.</h1>
                    <div class="flex  gap-4 ">
                        <div style=" border-color: #C75D68;" class="border"></div>
                        <p class="">Effortless Beauty: Minimalist Makeup Techniques</p>
                    </div>
                    <p class="pt-6 leading-loose  max-w-4xl">Discover the latest makeup trends of the season
                        and elevate your beauty routine with bold experimentation. From graphic eyeliner to dewy skin,
                        explore diverse styles that reflect your unique personality. Embrace vibrant hues, statement lips, and feathered brows to express your creativity and stay ahead of the curve in the world of beauty.</p>
                    <h1 class="text-secondary font-quentin text-5xl normal-case font-normal italic leading-[50px] tracking-[3.06px] max-w-5xl py-2">
                        Elevate your beauty routine with these trendy looks!
                    </h1>
                    <img src="/assets/images/Rectangle 188.png" class="w-full" style="height: 510px;"  alt="">
                </div>
                <div class="py-16">
                    <h1 class="text-2xl font-bold leading-snug">Title: Five Must-Try Makeup Trends This Season </h1>
                    <p class="py-6">As the seasons change, so do makeup trends. Here are five trends to experiment with:</p>
                    <p>1. Monochromatic Makeup: Use matching shades for eyes, cheeks, and lips.</p>
                    <p>2. Graphic Eyeliner: Try bold, artistic eyeliner designs.</p>
                    <p>3. Dewy Skin: Achieve a radiant glow with hydrating products.</p>
                    <p>4. Statement Lips: Opt for bold lip colors for impact</p>
                    <p>5. Feathered Brows: Embrace soft, natural-looking brows.</p>
                </div>

                <div>
                    <h1 class="font-normal font-times text-2xl">Recent Blogs</h1>
                    <div class="flex flex-col md:flex-row">
                        <div>
                            <div class=" p-4 rounded">
                                <img src="/assets/images/Rectangle 176 (1).png" alt="Product Image" class="w-full rounded">
                            </div>
                            <div class="p-4">
                                <div class="pb-4 flex items-center gap-2">
                                    <div class="border border-[#C75D68] w-10"></div>
                                    <p class="text-[#C75D68]">November 2024</p>
                                    <div class="border border-[#C75D68] w-10"></div>
                                </div>
                                <h3 class="text-xl font-semibold">Effortless Beauty: Minimalist Makeup Techniques</h3>
                                <p class="text-gray-600 mt-2">Explore five makeup trends this season for a fresh and adventurous beauty look.</p>
                                <div class="w-fit py-6">
                                    <button class=" text-sm text-gray-500">READ MORE</button>
                                    <div class="border text-gray-500"></div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class=" p-4 rounded">
                                <img src="/assets/images/Rectangle 176 (2).png" alt="Product Image" class="w-full rounded">
                            </div>
                            <div class="p-4">
                                <div class="pb-4 flex items-center gap-2">
                                    <div class="border border-[#C75D68] w-10"></div>
                                    <p class="text-[#C75D68]">November 2024</p>
                                    <div class="border border-[#C75D68] w-10"></div>
                                </div>
                                <h3 class="text-xl font-semibold">Effortless Beauty: Minimalist Makeup Techniques</h3>
                                <p class="text-gray-600 mt-2">Explore five makeup trends this season for a fresh and adventurous beauty look.</p>
                                <div class="w-fit py-6">
                                    <button class=" text-sm text-gray-500">READ MORE</button>
                                    <div class="border text-gray-500"></div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class=" p-4 rounded">
                                <img src="/assets/images/Rectangle 176 (3).png" alt="Product Image" class="w-full rounded">
                            </div>
                            <div class="p-4">
                                <div class="pb-4 flex items-center gap-2">
                                    <div class="border border-[#C75D68] w-10"></div>
                                    <p class="text-[#C75D68]">November 2024</p>
                                    <div class="border border-[#C75D68] w-10"></div>
                                </div>
                                <h3 class="text-xl font-semibold">Effortless Beauty: Minimalist Makeup Techniques</h3>
                                <p class="text-gray-600 mt-2">Explore five makeup trends this season for a fresh and adventurous beauty look.</p>
                                <div class="w-fit py-6">
                                    <button class=" text-sm text-gray-500">READ MORE</button>
                                    <div class="border text-gray-500"></div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>


            </div>
            <div class="col-span-1 pl-4 py-5">
                <div class="flex  w-full items-center">
                    <input type="text" placeholder="Search..." class="border border-gray-300 bg-[#F9F9F9] rounded-l-md py-2 px-6 "/>
                    <button class="bg-[#E6E6E6] text-[#797979] rounded-r-md py-2 px-4 hover:bg-gray-800 ">
                        Search
                    </button>
                </div>
                <div>
                    <h1 class="font-normal font-times text-2xl pt-6 pb-3">Latest Blog</h1>
                </div>
                <div class="">
                    <div class="rounded">
                        <img src="/assets/images/Rectangle 180 (1).png" alt="Product Image" class="w-full rounded">
                    </div>

                    <div class="">
                        <div class="py-4 flex items-center gap-2">
                            <div class="border border-[#C75D68] w-10"></div>
                            <p class="text-[#C75D68]">November 2024</p>
                            <div class="border border-[#C75D68] w-10"></div>
                        </div>
                        <h3 class="text-xl font-semibold">Effortless Beauty: Minimalist Makeup <br> Techniques</h3>
                        <p class="text-gray-600 mt-2">Explore five makeup trends this season for a fresh and adventurous beauty look.</p>
                        <div class="w-fit pt-5">
                            <button class=" text-sm text-gray-500">READ MORE</button>
                            <div class="border text-gray-500"></div>
                        </div>
                    </div>
                </div>


                <div class="">
                    <h1 class="font-normal font-times text-3xl  pb-3 pt-2">Tags</h1>
                    <div class="flex gap-2">
                        <a href="#" class="border rounded-full p-3 font-poppins border-[#A5A5A5] text-sm">Makeup</a>
                        <a href="#" class="border rounded-full p-3   font-poppins border-[#A5A5A5] text-sm">Face Cream</a>
                        <a href="#" class="border rounded-full  p-3 font-poppins border-[#A5A5A5] text-sm">Skin Care</a>
                        <a href="#" class="border rounded-full p-3  font-poppins border-[#A5A5A5] text-sm">Makeup Tips</a>
                    </div>

                    <div class="">
                        <div class=" mb-8 flex flex-col  pt-10">
                            <h1 class="text-[#BFBFBF] text-2xl font-normal ">Our Gallery</h1>
                            <p class=" leading-none font-['Quentin']  text-3xl font-normal mb-4">
                                Our beauty community
                            </p>

                            <div class="flex gap-4">
                                <div style=" border-color: #C75D68;" class="border w-1 bg-[#C75d68]"></div>
                                <div class="text-start">
                                    <p class="text-[#BFBFBF] text-xl font-normal ">follow us on Instagram </p>
                                    <p class="font-semibold">@EltherealElegance</p>
                                </div>
                            </div>
                        </div>

                        <div class="flex gap-1">
                            <img src="/assets/images/Rectangle 94.png" alt="">
                            <img src="/assets/images/Rectangle 95.png" alt="">
                            <img src="/assets/images/Rectangle 96.png" alt="">
                            <img src="/assets/images/Rectangle 97.png" alt="">
                            <img src="/assets/images/Rectangle 98.png" alt="">
                        </div>
                        <div>
                            <h1 class="font-normal font-times text-4xl italic pt-6 pb-3">Sale Up To 30%</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="secsix" class="py-20">
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


    </main>

@endsection