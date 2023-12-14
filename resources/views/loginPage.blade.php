<x-layout>
   <section id="login-form" class="">
    
        <!-- Login Form -->
        <div class="h-screen mx-auto flex items-center justify-centerbg-rose-200">
            <div class="bg-white p-8 rounded-lg shadow-md w-full md:w-96">
                <div class="mb-4">
                    <h2 class="text-3xl font-bold text-left text-rose-500">Login</h2>
                </div>
                <!-- Form -->
                <form class="" action="/login" method="POST">
                    @csrf
                    <!-- username Input -->
                    <div class="mb-4">
                        <label for="username" class="block text-sm font-medium text-gray-700 ">username</label>
                        <input type="text" id="username" name="username" value="{{ old('username')}}" class="mt-1 p-2 w-full border rounded-md bg-white text-rose-500 border-rose-500">
                        @error('username')
                            <p class="text-red-700">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Password Input -->
                    <div class="mb-6">
                        <label for="password" class="block text-sm font-medium text-gray-700 ">Password</label>
                        <input type="password" id="password" name="password" class="mt-1 p-2 w-full border rounded-md text-rose-500 border-rose-500">
                        @error('password')
                            <p class="text-red-700">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <!-- Submit Button -->
                    <button type="submit" class="bg-rose-500 text-white p-2 rounded-md w-full hover:bg-rose-400">Login</button>
                </form>
                <!-- Additional Links -->
                <div class="mt-4 text-center text-gray-700">
                    <p class="mb-2">Don't have an account? <a href="/signUp" class="text-rose-500">Signup</a></p>
                    {{-- <a href="#" class="text-rose-500">Forgot password?</a> --}}
                </div>
            
            </div>
        </div>
   </section>
</x-layout>