@foreach ($data['events'] as $event)
    <div
        class="max-w-sm bg-white dark:bg-slate-850 px-6 pt-6 pb-2 rounded-xl shadow-lg transform hover:scale-105 transition duration-500">
        <div class="relative">
            @foreach ($event->getMedia() as $mediaItem)
                <div class="h-48 overflow-hidden rounded-xl">
                    <img class="w-full h-full object-cover" src="{{ $mediaItem->getUrl() }}" alt="Event Image" />
                </div>
            @endforeach
            <p class="absolute top-0 bg-green-300 text-gray-800 font-semibold py-1 px-3 rounded-br-lg rounded-tl-lg">
                {{ $event->price }}$</p>
            <p
                class="absolute top-0 right-0 bg-orange-300 text-gray-800 font-semibold py-1 px-3 rounded-bl-lg rounded-tr-lg">
                {{ $event->category->name }}</p>
        </div>
        <h1 class="mt-4 text-gray-800 dark:text-white text-2xl font-bold cursor-pointer">{{ $event->title }}</h1>
        <div class="my-4">
            <div class="flex space-x-1 items-center">
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-indigo-600 mb-1.5" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </span>
                <p>{{ $event->deadline }}</p>
            </div>
            <div class="flex space-x-1 items-center">
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-indigo-600 mb-1.5" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M16 4v12l-4-2-4 2V4M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                </span>
                <p>{{ $event->place_number }} places</p>
            </div>
            <div class="p-6 pt-10 flex justify-between">
                <form action="{{ route('approve.event', ['id' => $event->id]) }}" method="post">
                    @csrf
                    <button data-ripple-light="true" type="submit"
                        class="select-none rounded-lg bg-blue-500 py-3 px-6 text-center align-middle font-sans text-xs font-bold uppercase text-white shadow-md shadow-blue-500/20 transition-all hover:shadow-lg hover:shadow-blue-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none">
                        Approve
                    </button>
                </form>
                <form action="{{ route('decline.event', ['id' => $event->id]) }}" method="post">
                    @csrf
                    <button data-ripple-light="true" type="submit"
                        class="select-none rounded-lg bg-red-500 py-3 px-6 text-center align-middle font-sans text-xs font-bold uppercase text-white shadow-md shadow-blue-500/20 transition-all hover:shadow-lg hover:shadow-blue-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none">
                        Decline
                    </button>
                </form>
            </div>
        </div>
    </div>
@endforeach
