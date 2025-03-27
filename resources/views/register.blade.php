<x-layouts.auth>
<div
  style="animation: slideInFromLeft 1s ease-out;"
  class="max-w-md w-full bg-gradient-to-r from-blue-800 to-purple-600 rounded-xl shadow-2xl overflow-hidden p-8 space-y-8"
>
  <h2
    style="animation: appear 2s ease-out;"
    class="text-center text-4xl font-extrabold text-white"
  >
    Join Millions Of Developers
  </h2>
  <p style="animation: appear 3s ease-out;" class="text-center text-gray-200">
    Sign up and start your adventure
  </p>
  <form method="POST" action="#" class="space-y-6">
    @csrf
    @method('POST')

    <div class="relative">
      <input
        placeholder="John Doe"
        class="peer h-10 w-full border-b-2 border-gray-300 text-white bg-transparent placeholder-transparent focus:outline-none focus:border-purple-500"
        required
        id="name"
        name="name"
        type="name"
        value="{{ old('name') }}"
      />
      <label
        class="absolute left-0 -top-3.5 text-gray-500 text-sm transition-all peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-2 peer-focus:-top-3.5 peer-focus:text-purple-500 peer-focus:text-sm"
        for="name"
        >Full Name</label
      >
      @error('name')
        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
      @enderror
    </div>

    <div class="relative">
      <input
        placeholder="john@example.com"
        class="peer h-10 w-full border-b-2 border-gray-300 text-white bg-transparent placeholder-transparent focus:outline-none focus:border-purple-500"
        required
        id="email"
        name="email"
        type="email"
        value="{{ old('email') }}"
      />
      <label
        class="absolute left-0 -top-3.5 text-gray-500 text-sm transition-all peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-2 peer-focus:-top-3.5 peer-focus:text-purple-500 peer-focus:text-sm"
        for="email"
        >Email address</label
      >
        @error('email')
            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
        @enderror
    </div>
    <div class="relative">
      <input
        placeholder="Password"
        class="peer h-10 w-full border-b-2 border-gray-300 text-white bg-transparent placeholder-transparent focus:outline-none focus:border-purple-500"
        required=""
        id="password"
        name="password"
        type="password"
      />
      <label
        class="absolute left-0 -top-3.5 text-gray-500 text-sm transition-all peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-2 peer-focus:-top-3.5 peer-focus:text-purple-500 peer-focus:text-sm"
        for="password"
        >Password</label
      >
       @error('password')
            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
        @enderror
    </div>

    <div class="relative">
      <input
        placeholder="Password Confirmation"
        class="peer h-10 w-full border-b-2 border-gray-300 text-white bg-transparent placeholder-transparent focus:outline-none focus:border-purple-500"
        required=""
        id="password_confirmation"
        name="password_confirmation"
        type="password_confirmation"
      />
      <label
        class="absolute left-0 -top-3.5 text-gray-500 text-sm transition-all peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-2 peer-focus:-top-3.5 peer-focus:text-purple-500 peer-focus:text-sm"
        for="password_confirmation"
        >Confirm Password</label
      >
         @error('password_confirmation')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
          @enderror
    </div>

    <button
      class="w-full py-2 px-4 bg-purple-500 hover:bg-purple-700 rounded-md shadow-lg text-white font-semibold transition duration-200 cursor-pointer"
      type="submit"
    >
      Sign Up
    </button>
  </form>
  <div class="text-center text-gray-300">
    Already have an account?
    <a class="text-purple-300 hover:underline" href="/login">Sign in</a>
  </div>
</div>
</x-layouts.auth>
