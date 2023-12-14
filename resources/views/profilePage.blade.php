<x-layout>
    <div class="container mx-auto mt-8">
        <div class="max-w-md mx-auto bg-white p-8 rounded-md shadow-md">
            <h2 class="text-2xl font-bold text-rose-500 mb-6">Profile Information</h2>
    
            <form action="/profile" method="POST">
                @csrf
                @method('PUT')
    
                <!-- Name -->
                <div class="mb-4">
                    <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                    <input type="text" id="name" name="name" value="{{ auth()->user()->name }}"
                           class="mt-1 p-2 w-full border rounded-md focus:outline-none focus:ring focus:border-rose-500">
                </div>
    
                <!-- Email -->
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="email" id="email" name="email" value="{{ auth()->user()->email }}"
                           class="mt-1 p-2 w-full border rounded-md focus:outline-none focus:ring focus:border-rose-500">
                </div>
    
                <!-- Update Profile Button -->
                <div class="mb-6">
                    <button type="submit" class="bg-rose-500 text-white p-2 rounded-md hover:bg-rose-400">Update Profile</button>
                </div>
            </form>
    
            <!-- Change Password Link -->
            <div class="text-sm text-gray-600">
                <a href="{{ route('password.request') }}" class="text-rose-500 hover:text-rose-700">Change Password</a>
            </div>
        </div>
    </div>
</x-layout>