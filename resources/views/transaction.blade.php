<x-layout>
    <section id="transaction-summary" class="min-h-screen mx-auto mt-12 py-16">
        <div class="max-w-3xl mx-auto bg-rose-100 p-8 rounded-md shadow-lg">
            <h2 class="text-3xl font-bold text-rose-500 mb-6">Transaction Summary</h2>
    
            <!-- Order Details -->
            <div class="mb-6">
                <h3 class="text-xl font-bold text-gray-700 mb-2">Order Details</h3>
                <p class="text-gray-600"><strong>Order Number:</strong> #123456</p>
                <p class="text-gray-600"><strong>Date:</strong> December 25, 2023</p>
            </div>
    
            <!-- Product Details -->
            <div class="mb-6">
                <h3 class="text-xl font-bold text-gray-700 mb-2">Product Details</h3>
                {{-- items --}}
                <div class="flex items-center space-x-4">
                    <img class="w-16 h-16 object-cover rounded-md" src="https://placekitten.com/300/200" alt="Product Image">
                    <div>
                        <p class="text-rose-500 font-bold">Product Name</p>
                        <p class="text-gray-600">Quantity: 1</p>
                        <p class="text-gray-600">Price: $19.99</p>
                    </div>
                </div>
            </div>
            
            {{-- payment method --}}
            <div class="mb-4">
                <h3 class="text-xl font-bold text-gray-700 mb-2">Payment Method</h3>
                <p>Cash on Delivery</p>
            </div>
    
            <!-- Shipping Details -->
            <div class="mb-6">
                <h3 class="text-xl font-bold text-gray-700 mb-2">Shipping Details</h3>
                <p class="text-gray-600"><strong>Shipping Address:</strong> 1234 Rose Street, Cityville</p>
                <p class="text-gray-600"><strong>Expected Delivery:</strong> January 5, 2024</p>
            </div>
    
            <!-- Package Status -->
            <div>
                <h3 class="text-xl font-bold text-gray-700 mb-2">Package Status</h3>
                <p class="text-green-500 font-bold">Shipped</p>
                <p class="text-gray-600">Your package is on the way and expected to arrive by January 5, 2024.</p>
            </div>
        </div>
    </section>

    
</x-layout>