<div
    class="rounded-lg    relative  bg-white p-6 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-500">
    <div>
        <span class="rounded-lg inline-flex p-3 bg-{{$advantage['icon-color']}}-50 text-{{$advantage['icon-color']}}-700 ring-4 ring-white">
                  {!! $advantage['icon'] !!}
        </span>
    </div>
    <div class="mt-8">
        <h3 class="text-lg font-medium">
            <div  class="focus:outline-none">
                <!-- Extend touch target to entire panel -->
                <span class="absolute inset-0" aria-hidden="true"></span>
                {{$advantage['title']}}
            </div>
        </h3>
        <p class="mt-2 text-sm text-gray-500">
            {{$advantage['description']}}
        </p>
    </div>
    <span class="pointer-events-none absolute top-6 right-6 text-gray-300 "
          aria-hidden="true">
                  {!! $advantage['icon'] !!}
      </span>
</div>
