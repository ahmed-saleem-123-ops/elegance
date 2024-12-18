@extends('frunt_layout.master')
@section('content')
     <main>
         <div id="1styear">
             <div class="bg-cover bg-center flex items-center justify-center px-6"
                  style="height: 572px; background-image: url('/assets/images/kalu.jpg');">
                 <div class="flex flex-col items-start md:items-center">
                     <h1 class="text-4xl md:text-6xl mb-3 font-bold text-[#323232] ">404</h1>
                     <p class="mb-3 py-5 max-w-xl text-center text-lg md:text-xl">Oops! The page you are looking for does not exist. It might have been moved or deleted </p>
                     <button class="bg-black text-white px-6 md:px-10 py-2 md:py-3 text-lg font-light">back to home</button>
                 </div>
             </div>
         </div>
     </main>

@endsection