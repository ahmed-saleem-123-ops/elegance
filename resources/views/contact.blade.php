@extends('frunt_layout.master')
@section('content')


    <main>
        <div id="1styear">
            <div class="bg-cover bg-center flex items-center justify-center px-6"
                 style="height: 572px; background-image: url('assets/images/Frame 97.png');">
                <div class="flex flex-col items-start md:items-center">
                    <h1 class="text-4xl md:text-6xl mb-3 text-[#323232] font-times italic font-normal">Get in Touch</h1>
                    <p class="mb-3 text-lg md:text-xl text-[#383838] font-poppins  tracking-[5.6px] uppercase">True Natural - True Organic</p>
                </div>
            </div>
        </div>

        <div class="flex items-center justify-center">
            <div class="bg-white shadow-lg md:w-2/3 py-24 px-10 text-center rounded-lg z-10 md:absolute">
                <p class="text-[#BFBFBF] font-quentin text-[32px] italic font-normal leading-normal">Contact us</p>
                <h2 class="text-2xl md:text-3xl font-semibold mb-6">Feel Free to Contact Us</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <!-- Phone & Email -->
                    <div>
                        <h3 class="font-semibold text-lg mb-2">Phone & Email</h3>
                        <p class="text-gray-700">+ (123) 1800-8979-9897</p>
                        <p class="text-gray-700">EtherealElegance@gmail.com</p>
                    </div>
                    <!-- Address -->
                    <div>
                        <h3 class="font-semibold text-lg mb-2">Address</h3>
                        <p class="text-gray-700">New York, USA</p>
                        <p class="text-gray-700">1039 First Avenue, Muswell Hill</p>
                    </div>
                    <!-- Opening Times -->
                    <div>
                        <h3 class="font-semibold text-lg mb-2">Opening Times</h3>
                        <p class="text-gray-700">Mon - Fri 10:00 - 19:00</p>
                    </div>
                </div>
            </div>
        </div>

        <div class=" lg:pt-32">
            <div class="text-center mb-8 flex flex-col items-center pt-20">
                <h1 class="text-[#BFBFBF] text-2xl font-normal mb-4">Experience Diversity</h1>
                <p class="leading-none font-['Quentin'] text-3xl font-normal mb-4">
                    Explore Our Range of Leading Brand Products
                </p>
            </div>
            <div class="mx-auto">
                <img src="assets/images/Vector.png" class="w-full" alt="">
            </div>
        </div>

        <div id="sec-8">
            <div class="flex flex-col md:flex-row items-center py-10">
                <div class="">
                    <img class="h-723 w-955 object-cover" src="assets/images/Rectangle 171.png" alt="">
                </div>
                <div class="pl-16">
                    <h1 class="text-3xl font-poppins pb-2">Email Us </h1>
                    <p class="text-[#A5A5A5]">Feel free to reach out to us anytime! We're here to assist you with any inquiries or <br>
                        <br> concerns you may have.</p>

                    <form action="{{ route('contact') }}" method="POST" class="py-6 space-y-6">
                    @csrf
                        <div class="flex flex-col md:flex-row gap-6">
                            <input
                                    class="border border-gray-300 rounded h-14 px-4 placeholder:text-gray-500 focus:outline-none focus:ring-2 focus:ring-blue-500 w-full"
                                    type="text"
                                    name="name"
                                    placeholder="Name"
                                    required>
                            <input
                                    class="border border-gray-300 rounded h-14 px-4 placeholder:text-gray-500 focus:outline-none focus:ring-2 focus:ring-blue-500 w-full"
                                    type="email"
                                    name="email"
                                    placeholder="Email"
                                    required>
                        </div>
                        <div>
                        <textarea
                                name="message"
                                placeholder="Write your message..."
                                class="border border-gray-300 rounded w-full h-40 px-4 py-2 placeholder:text-gray-500 focus:outline-none focus:ring-2 focus:ring-blue-500 resize-none"
                                required>
                        </textarea>
                        </div>

                        <!-- Submit Button -->
                        <div class="w-fit pt-3">
                            <button
                                    type="submit"
                                    class="px-4 font-semibold tracking-normal py-3 bg-black text-white">
                                Send Message
                            </button>
                        </div>
                    </form>

                </div>

                <div>

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