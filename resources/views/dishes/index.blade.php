<!-- Dish add form -->
<x-app-layout>
    <div class="mx-auto p-4 sm:p-6 lg:p-8">
        {{-- add button --}}
            <div class="flex-shrink-0 flex justify-end">
                <form method="GET" action="{{ route('dishes.create') }}">
                    @csrf
                    <x-primary-button type="submit">{{ __('Add a new dish') }}</x-primary-button>
                </form>
            </div>
        <div class="mt-6 bg-white shadow-sm rounded-lg divide-y">
            @foreach ($dishes as $dish)
                <div class="p-6 flex space-x-2 items-center justify-center flex-wrap space-y-6">
                    <div class="flex-shrink-0">
                        <img class="h-24" src="{{ 'images/' . $dish->image }}" alt="{{ $dish->name }}" />
                    </div>
                    <div class="flex flex-col w-full">
                        <h3 class="text-lg text-center font-medium leading-6 text-gray-900">{{ $dish->name }}</h3>
                        <p class="mt-1 truncate text-center text-sm leading-5 text-gray-500">{{ $dish->description}}</p>
                        <p class="text-sm text-center leading-5 text-gray-500">{{ $dish->day }}</p>
                    </div>
                    <div class="flex-shrink-0">
                        <p class="text-sm leading-5 text-gray-500">{{ $dish->user->name }}</p>
                        <p class="text-sm leading-5 text-gray-500"> Created at : {{ $dish->created_at->format('d/m/Y') }}</p>
                        @unless ($dish->created_at->eq($dish->updated_at))
                            <p class="text-sm leading-5 text-gray-500"> Updated at : {{ $dish->updated_at->format('d/m/Y') }}</p>
                        @endunless
                    </div>
                    @if ($dish->user->is(auth()->user()))
                    <div class="flex-shrink-0 flex space-x-6">
                        <form method="GET" action="{{ route('dishes.edit', $dish) }}">
                            @csrf
                            <x-primary-button type="submit">{{ __('Edit') }}</x-primary-button>
                        </form>
                        <form method="POST" action="{{ route('dishes.destroy', $dish) }}">
                            @csrf
                            @method('DELETE')
                            <x-primary-button type="submit">{{ __('Delete') }}</x-primary-button>
                        </form>
                    </div>
                    @endif
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>