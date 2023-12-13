<x-layout>
   <section id="hero" class="mt-16 mb-32 bg-rose-200">
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
   <section id="product-section" class="mb-32 md:py-24">
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
            <div class="flex-auto rounded overflow-hidden shadow-xl bg-rose-100">
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
            <div class="flex-auto rounded overflow-hidden shadow-xl bg-rose-100">
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
            <div class="flex-auto rounded overflow-hidden shadow-xl bg-rose-100">
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


   {{-- product section --}}
   <section id="category-section" class="mb-32 bg-rose-200">
    {{-- title section --}}
   <div class="container mx-auto px-4 space-y-1 pt-10">
        <h1 class="text-3xl md:text-4xl lg:text-6xl xl:text-7xl text-center font-bold  md:text-left text-rose-500 w-full">
            What we offer
        </h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis ex animi cupiditate dolorum quasi ipsa voluptatem.</p>
    </div>
    {{-- card container --}}
    <div class="container mx-auto px-4 mt-10 flex flex-col-reverse md:flex-row gap-3 items-center pb-10">
        {{-- card --}}
        <div class="relative group">
            <img class="w-full h-50 object-cover rounded-md" src="https://images.unsplash.com/photo-1612817288484-6f916006741a?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
            <div class="absolute inset-0 flex items-center justify-center opacity-0 transition-opacity duration-300 bg-black bg-opacity-75 group-hover:opacity-100">
                <h5 class="text-center text-white text-3xl font-bold">Lotion</h5>
            </div>
            <a href="#"  class="absolute bottom-4 left-1/2 transform -translate-x-1/2 opacity-0 transition-opacity duration-300 group-hover:opacity-100 bg-rose-500 text-white px-4 py-2 rounded-md">Shop Now</a>
        </div>

        {{-- card --}}
        <div class="relative group">
            <img class="w-full h-50 object-cover rounded-md" src="https://images.unsplash.com/photo-1612817288484-6f916006741a?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
            <div class="absolute inset-0 flex items-center justify-center opacity-0 transition-opacity duration-300 bg-black bg-opacity-75 group-hover:opacity-100">
                <h5 class="text-center text-white text-3xl font-bold">Lotion</h5>
            </div>
            <a href="#" class="absolute bottom-4 left-1/2 transform -translate-x-1/2 opacity-0 transition-opacity duration-300 group-hover:opacity-100 bg-rose-500 text-white px-4 py-2 rounded-md">Shop Now</a>
        </div>

        {{-- card --}}
        <div class="relative group">
            <img class="w-full h-50 object-cover rounded-md" src="https://images.unsplash.com/photo-1612817288484-6f916006741a?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
            <div class="absolute inset-0 flex items-center justify-center opacity-0 transition-opacity duration-300 bg-black bg-opacity-75 group-hover:opacity-100">
                <h5 class="text-center text-white text-3xl font-bold">Lotion</h5>
            </div>
            <a href="#"  class="absolute bottom-4 left-1/2 transform -translate-x-1/2 opacity-0 transition-opacity duration-300 group-hover:opacity-100 bg-rose-500 text-white px-4 py-2 rounded-md">Shop Now</a>
        </div>

        {{-- card --}}
        <div class="relative group">
            <img class="w-full h-50 object-cover rounded-md" src="https://images.unsplash.com/photo-1612817288484-6f916006741a?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
            <div class="absolute inset-0 flex items-center justify-center opacity-0 transition-opacity duration-300 bg-black bg-opacity-75 group-hover:opacity-100">
                <h5 class="text-center text-white text-3xl font-bold">Lotion</h5>
            </div>
            <a href="#" class="absolute bottom-4 left-1/2 transform -translate-x-1/2 opacity-0 transition-opacity duration-300 group-hover:opacity-100 bg-rose-500 text-white px-4 py-2 rounded-md">Shop Now</a>
        </div>
    </div>
</section>
   
   

   {{-- <section id="product" class="mb-32">
    <div class="container mx-auto px-4 space-y-1">
        <h1 class="text-3xl md:text-4xl lg:text-6xl xl:text-7xl text-center font-bold md:text-left text-rose-500 w-full">
            What we offer
        </h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis ex animi cupiditate dolorum quasi ipsa voluptatem.</p>
    </div>

    <div class="container mx-auto px-4 mt-10 grid grid-cols-1 md:grid-cols-{{ 3 }} gap-3">
        @for($i = 0; $i < 6; $i++)
        <div class="rounded overflow-hidden shadow-xl bg-rose-100">
            <div class="flex-auto rounded overflow-hidden shadow-xl bg-rose-100">
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
        @endfor
    </div>
</section> --}}

   <section id="customer-review" class="mb-32 py-16">
        <div class="container mx-auto p-4 mb-5">
            <h1 class="text-3xl md:text-4xl lg:text-6xl xl:text-7xl text-center font-bold md:text-left text-rose-500 w-full">
                Our Customer Reviews
            </h1>
            <p class="">
                 Discover what our valued customers are saying about their experiences with our products and services. 
                We take pride in delivering quality and satisfaction, and your feedback helps us continuously improve. 
                Read through the reviews below to get a sense of the Cerecia experience!
            </p>
        </div>
        <div class="flex flex-col md:flex-row justify-center items-center">
            <!-- First Testimonial Card -->
            <div class="max-w-md mx-4 bg-rose-100 shadow-lg rounded-md overflow-hidden mb-4">
                <div class="flex items-center justify-between px-6 py-4">
                    <div class="flex items-center">
                        <img class="w-10 h-10 rounded-full mr-4" src="https://randomuser.me/api/portraits/men/1.jpg" alt="User Avatar">
                        <div>
                            <div class="font-bold text-xl">Charlene</div>
                            <p class="text-gray-700 text-sm">Customer</p>
                        </div>
                    </div>
                    <div class="flex items-center">
                        <div class="text-rose-500">
                            <!-- Change the value to reflect the rating (e.g., 4.5) -->
                            ★★★★☆
                        </div>
                        <span class="inline-block bg-rose-500 text-white py-1 px-2 rounded-full text-xs ml-2">Satisfied</span>
                    </div>
                </div>
                <div class="px-6 py-4">
                    <p class="text-gray-700 text-base">
                        "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce gravida odio nec quam viverra, vel dapibus justo ultricies."
                    </p>
                </div>
            </div>
        
            <!-- Second Testimonial Card -->
            <div class="max-w-md mx-4 bg-rose-100 shadow-lg rounded-md overflow-hidden mb-4">
                <div class="flex items-center justify-between px-6 py-4">
                    <div class="flex items-center">
                        <img class="w-10 h-10 rounded-full mr-4" src="https://randomuser.me/api/portraits/men/1.jpg" alt="User Avatar">
                        <div>
                            <div class="font-bold text-xl">Charlene</div>
                            <p class="text-gray-700 text-sm">Customer</p>
                        </div>
                    </div>
                    <div class="flex items-center">
                        <div class="text-rose-500">
                            <!-- Change the value to reflect the rating (e.g., 4.5) -->
                            ★★★★☆
                        </div>
                        <span class="inline-block bg-rose-500 text-white py-1 px-2 rounded-full text-xs ml-2">Satisfied</span>
                    </div>
                </div>
                <div class="px-6 py-4">
                    <p class="text-gray-700 text-base">
                        "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce gravida odio nec quam viverra, vel dapibus justo ultricies."
                    </p>
                </div>
            </div>

            <div class="max-w-md mx-4 bg-rose-100 shadow-lg rounded-md overflow-hidden mb-4">
                <div class="flex items-center justify-between px-6 py-4">
                    <div class="flex items-center">
                        <img class="w-10 h-10 rounded-full mr-4" src="https://randomuser.me/api/portraits/men/1.jpg" alt="User Avatar">
                        <div>
                            <div class="font-bold text-xl">Charlene</div>
                            <p class="text-gray-700 text-sm">Customer</p>
                        </div>
                    </div>
                    <div class="flex items-center">
                        <div class="text-rose-500">
                            <!-- Change the value to reflect the rating (e.g., 4.5) -->
                            ★★★★☆
                        </div>
                        <span class="inline-block bg-rose-500 text-white py-1 px-2 rounded-full text-xs ml-2">Satisfied</span>
                    </div>
                </div>
                <div class="px-6 py-4">
                    <p class="text-gray-700 text-base">
                        "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce gravida odio nec quam viverra, vel dapibus justo ultricies."
                    </p>
                </div>
            </div>
        </div>
   </section>

   <!-- Contact Section -->
    <section id="contact" class="bg-rose-200 py-16 md:py-32 ">
        <div class="container mx-auto">
           <div class="p-4">
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-center md:text-left text-rose-500 mb-8">Contact Us</h2>
                <p class="text-lg text-center text-rose-500 md:text-left mb-8">
                    Have a question, concern, or just want to say hello? 
                    We'd love to hear from you! Feel free to reach out 
                    using the contact form below. Your feedback is important to us, 
                    and we're here to assist you in any way we can.
                </p>
           </div>
            <div class="flex flex-col md:flex-row items-center justify-center space-y-4 md:space-y-0 md:space-x-8">
                <!-- Contact Form -->
                <form class="flex-1 max-w-md mx-auto md:mx-0">
                    <div class="mb-4">
                        <label for="name" class="block text-sm font-medium text-rose-500">Your Name</label>
                        <input type="text" id="name" name="name" class="mt-1 p-2 w-full border rounded-md bg-white text-rose-500">
                    </div>

                    <div class="mb-4">
                        <label for="email" class="block text-sm font-medium text-rose-500">Your Email</label>
                        <input type="email" id="email" name="email" class="mt-1 p-2 w-full border rounded-md bg-white text-rose-500">
                    </div>

                    <div class="mb-4">
                        <label for="message" class="block text-sm font-medium text-rose-500">Message</label>
                        <textarea id="message" name="message" rows="4" class="mt-1 p-2 w-full border rounded-md bg-white text-rose-500"></textarea>
                    </div>

                    <button type="submit" class="bg-rose-500 text-white p-2 rounded-md hover:bg-rose-400">Submit</button>
                </form>

                <!-- Contact Information -->
                <div class="flex-1 max-w-md mx-auto md:mx-0 mt-8 md:mt-0">
                    <div class="mb-4">
                        <p class="text-lg font-medium text-rose-500">Contact Information</p>
                    </div>
                    <ul class="list-disc pl-6 text-white">
                        <li class="mb-2 text-rose-500">Email: example@example.com</li>
                        <li class="mb-2 text-rose-500">Phone: +1 (123) 456-7890</li>
                        <li class="mb-2 text-rose-500">Address: 123 Main Street, Cityville</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

   {{-- footer --}}
   <footer class="bg-rose-800 text-white py-4">
    <div class="container mx-auto flex flex-col items-center">
        <div class="flex items-center mb-4">
            <img class="w-8 h-8 mr-2" src="" alt="Your Logo">
            <span class="text-xl font-bold">Cerescia</span>
        </div>
        <div class="flex space-x-4">
            <a href="#" class="hover:text-gray-300">Home</a>
            <a href="#" class="hover:text-gray-300">Products</a>
            <a href="#" class="hover:text-gray-300">About Us</a>
            <a href="#" class="hover:text-gray-300">Contact</a>
        </div>
        <div class="mt-4">
            <p>&copy; 2023 Your Company. All rights reserved.</p>
        </div>
    </div>
</footer>
</x-layout>