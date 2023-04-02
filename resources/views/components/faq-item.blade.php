<div class="bg-gray-800 rounded-lg p-5">
    <div class="flex justify-between items-center border-b gap-4 pb-4 mb-4">
        <h3 class="text-green-500 sm:text-lg md:text-xl font-semibold">{{$question['question']}}</h3>

        <span
            class="w-8 h-8 inline-flex justify-center items-center shrink-0 bg-green-500 text-gray-200 rounded-full">
                  <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd"
                          d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z"
                          clip-rule="evenodd"/>
                  </svg>
                </span>
    </div>

    <p class="text-gray-300">{{$question['answer']}}</p>
</div>
