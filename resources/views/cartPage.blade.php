<x-layout>
    {{-- <!-- Cart Page -->
    <section id="cart" class="container mx-auto py-8">
        <h2 class="text-3xl font-bold text-rose-500 mb-4">Your Shopping Cart</h2>

        <!-- Cart Items -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Cart Item 1 -->
            <div class="max-w-sm rounded overflow-hidden shadow-lg">
                <img class="w-full" src="https://placekitten.com/300/200" alt="Product Image">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">Product Name</div>
                    <p class="text-gray-700 text-base mb-3">Product description goes here...</p>
                    <p class="text-rose-500 font-bold text-xl">$19.99</p>
                </div>
                <div class="px-6 py-4 flex items-center">
                    <!-- Increase and Decrease Buttons -->
                    <button class="bg-rose-500 hover:bg-rose-400 text-white font-bold py-2 px-4 rounded">-</button>
                    <span class="mx-2 text-rose-500 font-bold">1</span>
                    <button class="bg-rose-500 hover:bg-rose-400 text-white font-bold py-2 px-4 rounded">+</button>
                </div>
                <div class="px-6 py-4">
                    <!-- Remove Item Button -->
                    <button class="bg-red-500 hover:bg-red-400 text-white font-bold py-2 px-4 rounded w-full">Remove Item</button>
                </div>
            </div>

            <!-- Cart Item 2 (Add more items as needed) -->

        </div>

        <!-- Cart Summary -->
        <div class="mt-8">
            <h3 class="text-xl font-bold text-rose-500 mb-4">Cart Summary</h3>
            <div class="flex justify-between mb-2">
                <span class="text-gray-700">Subtotal:</span>
                <span class="text-rose-500 font-bold">$19.99</span>
            </div>
            <div class="flex justify-between">
                <span class="text-gray-700">Total:</span>
                <span class="text-rose-500 font-bold">$19.99</span>
            </div>
        </div>

        <!-- Checkout Button -->
        <div class="mt-8">
            <button class="bg-rose-500 hover:bg-rose-400 text-white font-bold py-2 px-4 rounded w-full">Proceed to Checkout</button>
        </div>
    </section> --}}

    <section id="cart" class="container flex flex-col md:flex-row mx-auto px-6 mt-32 mb-32 gap-4">
        <!--  first-col  -->
        <div class="w-full md:w-1/2">
            <!--  card  -->
            <div class="flex flex-col md:flex-row bg-rose-100 rounded-md mb-4">
                <div class="w-full md:w-1/2">
                    <img class="h-48 w-full object-cover" src="https://placekitten.com/300/200" alt="Product Image">
                </div>
                <div class="w-full md:w-1/2 flex flex-col justify-between space-y-2 p-4">
                    <div>
                        <h1 class="text-xl font-bold text-rose-500">Product Name</h1>
                        <p class="text-gray-700">Price: $19.99</p>
                        <p class="text-gray-700">Quantity: 1</p>
                    </div>
                    <div class="w-full flex justify-end">
                        <button class="text-white bg-red-500 p-2 rounded-md">Remove</button>
                    </div>
                </div>
            </div>
            <!--  card  -->

            
        </div>
        <!--  first-col-end  -->
    
        <!--  2nd-col  -->
        <div class="w-full md:w-1/2 px-6 rounded py-4">
            <h3 class="text-xl font-bold text-rose-500 mb-4">Cart Summary</h3>
            <div class="flex justify-between mb-2">
                <span class="text-gray-700">Subtotal:</span>
                <span class="text-rose-500 font-bold">$19.99</span>
            </div>
            <div class="flex justify-between">
                <span class="text-gray-700">Total:</span>
                <span class="text-rose-500 font-bold">$19.99</span>
            </div>
            <div class="mt-8">
               <form action="/checkout" method="POST">
                @csrf
                <button class="bg-rose-500 hover:bg-rose-400 text-white font-bold py-2 px-4 rounded w-full">Proceed to Checkout</button>
               </form>
            </div>
        </div>
        <!--  2nd-col-end  -->
    </section>
</x-layout>