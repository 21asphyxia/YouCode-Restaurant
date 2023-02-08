<x-app-layout>
    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
        <form method="POST" action="{{ route('dishes.store') }}" enctype="multipart/form-data"> 
            @csrf
            <div class="flex flex-col">
                <label for="name" class="text-sm font-medium leading-5 text-gray-700">Name</label>
                <input id="name" name="name" type="text" class="mt-1 form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5" value="{{ old('name') }}" />
                <x-input-error :messages="$errors->get('name')" />
            </div>
            <div class="mt-6 flex flex-col">
                <label for="description" class="text-sm font-medium leading-5 text-gray-700">Description</label>
                <textarea id="description" name="description" rows="3" class="mt-1 form-textarea block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5">{{ old('description') }}</textarea>
                <x-input-error :messages="$errors->get('description')" />
            </div>
            <div class="mt-6 flex flex-col">
                <label for="image" class="text-sm font-medium leading-5 text-gray-700">Image</label>
                <input id="image" name="image" type="file" class="mt-1 form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                <x-input-error :messages="$errors->get('image')" />
            </div>
            <div class="mt-6 flex flex-col">
                <label for="day" class="text-sm font-medium leading-5 text-gray-700">Day</label>
                <select id="day" name="day" class="mt-1 form-select block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                    <option selected disabled hidden>Select a day</option>
                    <option @if(old('day') == 'Monday') selected @endif value="Monday">Monday</option>
                    <option @if(old('day') == 'Tuesday') selected @endif value="Tuesday">Tuesday</option>
                    <option @if(old('day') == 'Wednesday') selected @endif value="Wednesday">Wednesday</option>
                    <option @if(old('day') == 'Thursday') selected @endif value="Thursday">Thursday</option>
                    <option @if(old('day') == 'Friday') selected @endif value="Friday">Friday</option>
                </select>
                <x-input-error :messages="$errors->get('day')" />
            </div>
            <x-primary-button class="mt-4">{{ __('Add Dish') }}</x-primary-button>
        </form>
    </div>
</x-app-layout>