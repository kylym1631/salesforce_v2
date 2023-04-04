<li class="team-list  py-10 px-6 bg-gray-800 text-center rounded-lg xl:px-10 xl:text-left group hover:shadow-lg hover:shadow-green-500 transition duration-500 ease-in-out">
    <div class=" space-y-6 xl:space-y-10">
        <img
            class="mx-auto h-40 w-40 object-cover  rounded-full xl:w-56 xl:h-56  transition duration-500 ease-in-out transform group-hover:rounded-full group-hover:scale-110"
            src="assets/images/{{$person['img']}}" alt="">
        <div class="space-y-2 xl:flex xl:items-center xl:justify-between">
            <div class="font-medium text-lg leading-6 space-y-1">
                <div class="flex justify-center">
                    <h3 class="text-white">{{$person['name']}}</h3>
                    <span class="relative flex h-3 w-3 ml-4">
                                      <span
                                          class="animate-ping absolute inline-flex h-full w-full rounded-full bg-green-400 opacity-75"></span>
                                      <span class="relative inline-flex rounded-full h-3 w-3 bg-green-500"></span>
                                   </span>
                </div>
                <p class="text-green-400">{{$person['role']}}</p>
            </div>

            <ul role="list" class="flex justify-center items-center space-x-5">
                <li>
                    <a href="{{$person['instagram']}}" class="text-gray-400 hover:text-green-400">
                        <span class="sr-only">Instagram</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="currentColor" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <rect x="4" y="4" width="16" height="16" rx="4" />
                            <circle cx="12" cy="12" r="3" />
                            <line x1="16.5" y1="7.5" x2="16.5" y2="7.501" />
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="{{$person['linkedin']}}" class="text-gray-400 hover:text-green-400">
                        <span class="sr-only">LinkedIn</span>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                            <path fill-rule="evenodd"
                                  d="M16.338 16.338H13.67V12.16c0-.995-.017-2.277-1.387-2.277-1.39 0-1.601 1.086-1.601 2.207v4.248H8.014v-8.59h2.559v1.174h.037c.356-.675 1.227-1.387 2.526-1.387 2.703 0 3.203 1.778 3.203 4.092v4.711zM5.005 6.575a1.548 1.548 0 11-.003-3.096 1.548 1.548 0 01.003 3.096zm-1.337 9.763H6.34v-8.59H3.667v8.59zM17.668 1H2.328C1.595 1 1 1.581 1 2.298v15.403C1 18.418 1.595 19 2.328 19h15.34c.734 0 1.332-.582 1.332-1.299V2.298C19 1.581 18.402 1 17.668 1z"
                                  clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</li>

