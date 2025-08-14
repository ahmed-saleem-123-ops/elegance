<footer class="bg-gray-900 text-white py-20 relative">
     
        <div class="container mx-auto grid grid-cols-1 md:grid-cols-3 gap-8 text-center md:text-left">
        
            <div>
                <h2 class="text-lg font-bold uppercase mb-4">Contact</h2>
                <p>58 White St., New York</p>
                <p>EtherealElegance@gmail.com</p>
                <p>+1 (800) 987 456 98</p>
            </div>
    
            
            <div class="flex flex-col items-center md:items-center">
                <div class=" absolute -top-11 bg-white text-black py-2 px-4 mb-4">
                    <div class="border p-2 border-black">
                        <h3 class="text-lg font-bold">Ethereal <br> Elegance</h3>
                    </div>
                    
                </div>
                <p class="text-gray-400 mb-6">
                    Enhance your natural beauty with our curated collection of cosmetics
                </p>

                <div class="flex space-x-4 mb-6">
                    <a href="https://www.instagram.com/" target="_blank" class="text-gray-400 hover:text-white">
                        <i class="fab fa-instagram text-xl"></i>
                    </a>
                    <a href="https://www.facebook.com/" target="_blank" class="text-gray-400 hover:text-white">
                        <i class="fab fa-facebook text-xl"></i>
                    </a>
                </div>
               
                <div class="flex flex-col md:flex-row space-x-2 md:space-x-6">
                    <a href="{{ route('home') }}" class="hover:text-white " >Home</a>
                    <a href="{{ route('about') }}" class="hover:text-white" >ABOUT US</a>
                    <a href="{{ route('products') }}" class="hover:text-white">SHOP</a>
                    <a href="{{ route('contact') }}" class="hover:text-white">CONTACT US</a>
                    <a href="{{ route('blog.index') }}" class="hover:text-white">BLOGS</a>
                </div>
            </div>
    
   
            <div class="flex flex-col items-center ">
                <h2 class="text-md font-bold uppercase mb-4">Subscribe to our Newsletter</h2>
                <form class="flex items-center">
                    <input type="email" placeholder="Email" class="w-full px-4 py-2 rounded-l-lg text-black focus:outline-none" />
                    <button class="bg-white text-black px-4 py-2 rounded-r-lg hover:bg-gray-300">
                        <i class="fas fa-arrow-right"></i> 
                    </button>
                </form>
            </div>
        </div>
  
        <div class="container mx-auto mt-12 border-t border-gray-700 pt-6 text-center">
            <p class="text-gray-500">COPYRIGHT © 2024 Ethereal Elegance</p>
        </div>
    </footer>


