<div class=" px-4 md:px-8 mx-auto">
    <!-- text - start -->
    <div class="mb-10 md:mb-16">
        <h2  class=" text-gray-100 text-2xl lg:text-3xl font-bold text-center my-4 md:my-6">Get in touch</h2>

        <p class="max-w-screen-md text-gray-100 md:text-lg text-center mx-auto">Ready to take the first step towards
            becoming a web developer? Contact us to learn more about our frontend bootcamp.</p>
    </div>

    <!-- text - end -->

    <!-- form - start -->
    <form wire:submit.prevent="submitForm"  class="form max-w-screen-md grid sm:grid-cols-2 gap-4 mx-auto ">

        @if(session('success_message'))
            <x-success-message />
        @endif
        @csrf
        <div>
            <!-- <label for="name" class="inline-block  text-gray-100 text-sm sm:text-base mb-2">Name</label> -->
            <input wire:model="name" name="name" placeholder="your://name"
                   class="w-full bg-gray-800 text-base font-thin text-green-300  opacity-90 border font-mono rounded outline-none transition duration-100 px-3 py-2  @error('name') border-red-500 @enderror"

            />
            @error('name')
            <p class="text-red-500 mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div>

            <!-- <label for="email" class="inline-block text-gray-100 text-sm sm:text-base mb-2">Email</label> -->
            <input wire:model="email" name="email" placeholder="your://email"
                   class="w-full bg-gray-800 text-green-300 opacity-90 border font-mono rounded outline-none transition duration-100 px-3 py-2  @error('email') border-red-500 @enderror"/>
            @error('email')
            <p class="text-red-500 mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="sm:col-span-2">
            <!-- <label for="message" class="inline-block text-gray-100 text-sm sm:text-base mb-2">Message</label> -->
            <textarea wire:model="message" name="message" placeholder="your://message"
                      class="w-full h-64 bg-gray-800 opacity-90 text-green-300 font-mono border rounded outline-none transition duration-100 px-3 py-2 @error('message') border-red-500 @enderror"></textarea>
            @error('textarea')
            <p class="text-red-500 mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="sm:col-span-2 flex justify-between items-center">
            <button
                type="submit"
                    class="flex items-center active:bg-green-700 focus-visible:ring ring-green-300 text-white text-sm md:text-base  text-center  outline-none transition duration-100 px-8 py-3 disabled:opacity-50">
                <svg wire:loading wire:target="submitForm" class="animate-spin -ml-1 mr-3 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                     viewBox="0 0 24 24">
                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                    <path class="opacity-75" fill="currentColor"
                          d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                    </path>
                </svg>
                <span>Start Coding</span>
            </button>

            <!-- <span class="text-gray-500 text-sm">*Required</span> -->
        </div>

        {{--            <p class="text-gray-400 text-xs">By signing up to our newsletter you agree to our <a href="#" class="hover:text-green-500 active:text-green-600 underline transition duration-100">Privacy Policy</a>.</p>--}}
    </form>
    <!-- form - end -->
</div>
