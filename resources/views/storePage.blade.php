<x-layout>
   <div class="container mx-auto px-4 mt-16 mb-32">
        <div class="pt-10">

            <div class="container mx-auto mt-4 flex justify-end mb-4">
                <!-- Search Form -->
                <form action="/search" method="GET" class="flex items-center space-x-4">
                    <input type="text" name="query" placeholder="Search..." class="p-2 border-2 border-rose-500 rounded-md">
                    <button type="submit" class=" bg-rose-500 text-white p-2 rounded-md hover:bg-rose-400">Search</button>
                </form>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4 grid-auto-flow-dense">
                @for ($i = 0; $i < 10; $i++)
                    <!-- Card Component -->
                    <div class="max-w-sm rounded overflow-hidden shadow-lg mb-4">
                        <img class="w-full" src="https://images.unsplash.com/photo-1612817288484-6f916006741a?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                        <div class="px-6 py-4">
                            <div class="font-bold text-xl mb-2">Product Name</div>
                            <p class="text-gray-700 text-base mb-3">Description</p>
                            <p class="text-rose-500 font-bold text-xl">Price</p>
                        </div>
                        <div class="px-6 py-4 flex items-center">
                            <!-- Increase and Decrease Buttons -->
                            <button class="bg-rose-500 hover:bg-rose-400 text-white font-bold py-2 px-4 rounded" onclick="decreaseQuantity()">-</button>
                            <span class="mx-2 text-rose-500 font-bold" id="quantity">1</span>
                            <button class="bg-rose-500 hover:bg-rose-400 text-white font-bold py-2 px-4 rounded" onclick="increaseQuantity()">+</button>
                        </div>
                        <div class="px-6 py-4">
                            <!-- Add to Cart Form -->
                            <form action="/add-to-cart" method="POST">
                                @csrf
                                <input type="hidden" name="product_id" value="123">
                                <input type="hidden" name="quantity" id="cart-quantity" value="1">
                                <button type="submit" class="bg-rose-500 hover:bg-rose-400 text-white font-bold py-2 px-4 rounded w-full">
                                    Add to Cart
                                </button>
                            </form>
                        </div>
                    </div>
                    <!-- End Card Component -->
                @endfor
            </div>
        </div>
   </div>

   <script src="/js/quantity.js"></script>
   <script src="/js/tab.js"></script>
</x-layout>