<x-layout>
   <section id="hero" class="mb-32 bg-rose-200">
     <div class="container flex flex-col-reverse md:flex-row items-center pt-10 pb-4 px-4 mx-auto space-y-0 md:space-y-0">
        {{-- left --}}
        <div class="flex flex-col space-y-12 w-full md:w-1/2 mt-4 md:mt-0"> 
            <h1 class="text-3xl md:text-4xl lg:text-6xl xl:text-7xl text-center font-bold  md:text-left text-rose-500 w-full">
                Explore a Spectrum of heartfelt Body Care, Tailored to Present Your Unique Beauty.
            </h1>
          <div class="flex justify-center space-x-1 md:justify-start">
            <a class="text-white p-2 bg-rose-500 rounded-lg hover:bg-rose-400 ">Order Now!</a>
            <a class="text-white p-2 bg-rose-500 rounded-lg hover:bg-rose-400 ">About us</a>
          </div>
        </div>
        {{-- Right --}}
        <div  class="md:w-1/2">
           <img class="rounded-full" src="./face1.jpg" alt="">
        </div>
    </div>
   </section>


   {{-- product section --}}
   <section id="product-section" class="mb-32">
        {{-- title section --}}
       <div class="container mx-auto px-4 space-y-1">
            <h1 class="text-3xl md:text-4xl lg:text-6xl xl:text-7xl text-center font-bold  md:text-left text-rose-500 w-full">
            Popular Products 
            </h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis ex animi cupiditate dolorum quasi ipsa voluptatem.</p>
        </div>
        {{-- card container --}}
        <div class="container mx-auto px-4 mt-10 flex flex-col md:flex-row gap-3 items-center">
            {{-- cards --}}
            <div class="w-full md:w-1/3 rounded overflow-hidden shadow-xl bg-rose-100">
                <img class="full" src="https://images.unsplash.com/photo-1612817288484-6f916006741a?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                <div class="px-6 py-4">
                    <div class="font-bold text-rose-500 text-xl mb-2">Moisturizer</div>
                    <p class="text-gray-700 text-base mb-3">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, Nonea! Maiores et perferendis eaque, exercitationem praesentium nihil.
                    </p>
                    <div class="flex justify-between items-center">
                        <p class="text-rose-400 text-base">
                            Price ₱140.00
                         </p>
                         <a class="p-2 bg-rose-500 hover:bg-rose-400 rounded-md text-white"  href="">Add to cart</a>
                    </div>
                </div>   
            </div>

            {{-- cards --}}
            <div class="w-full md:w-1/3 rounded overflow-hidden shadow-xl bg-rose-100">
                <img class="full" src="https://images.unsplash.com/photo-1612817288484-6f916006741a?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                <div class="px-6 py-4">
                    <div class="font-bold text-rose-500 text-xl mb-2">Moisturizer</div>
                    <p class="text-gray-700 text-base mb-3">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, Nonea! Maiores et perferendis eaque, exercitationem praesentium nihil.
                    </p>
                    <div class="flex justify-between items-center">
                        <p class="text-rose-400 text-base">
                            Price ₱140.00
                         </p>
                         <a class="p-2 bg-rose-500 hover:bg-rose-400 rounded-md text-white"  href="">Add to cart</a>
                    </div>
                </div>   
            </div>

            {{-- cards --}}
            <div class="w-full md:w-1/3 rounded overflow-hidden shadow-xl bg-rose-100">
                <img class="full" src="https://images.unsplash.com/photo-1612817288484-6f916006741a?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                <div class="px-6 py-4">
                    <div class="font-bold text-rose-500 text-xl mb-2">Moisturizer</div>
                    <p class="text-gray-700 text-base mb-3">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, Nonea! Maiores et perferendis eaque, exercitationem praesentium nihil.
                    </p>
                    <div class="flex justify-between items-center">
                        <p class="text-rose-400 text-base">
                            Price ₱140.00
                         </p>
                         <a class="p-2 bg-rose-500 hover:bg-rose-400 rounded-md text-white"  href="">Add to cart</a>
                    </div>
                </div>   
            </div>
        </div>
   </section>

   <section id="beauty-products" class="mb-32">
        <div class="container mx-auto px-4">
            <h1 class="text-3xl md:text-4xl lg:text-6xl xl:text-7xl text-center font-bold  md:text-left text-rose-500 w-full">
                Our Products
            </h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis est, commodi odio velit fuga ipsam cum accusamus laboriosam.</p>
        </div>
        <div class="container mx-auto px-4 flex flex-col-reverse md:flex-row">
            {{-- 2 columns --}}
        </div>
   </section>

   <section id="customer-review">

   </section>

   <section id="footer"></section>
</x-layout>