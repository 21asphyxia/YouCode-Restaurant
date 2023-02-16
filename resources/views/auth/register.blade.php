<x-guest-layout>
    <div class="mb-10 text-center md:mb-16">
        <a href="javascript:void(0)" class="mx-auto inline-block max-w-[160px]">
            <img src="{{ 'images/logo/logo.png' }}"
                alt="logo" />
        </a>
    </div>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="mb-6">
            <input type="text" id="name" name="name" placeholder="Name"
                class="bordder-[#E9EDF4] w-full rounded-md border bg-[#FCFDFE] py-3 px-5 text-base text-body-color placeholder-[#ACB6BE] outline-none focus:border-primary focus-visible:shadow-none" value="{{ old('name') }}" required autofocus />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>
        <div class="mb-6">
            <input type="email" name="email" placeholder="Email"
                class="bordder-[#E9EDF4] w-full rounded-md border bg-[#FCFDFE] py-3 px-5 text-base text-body-color placeholder-[#ACB6BE] outline-none focus:border-primary focus-visible:shadow-none" value="{{ old('email') }}" required autofocus />
        </div>
        <div class="mb-6">
            <input type="password" placeholder="Password"
                class="bordder-[#E9EDF4] w-full rounded-md border bg-[#FCFDFE] py-3 px-5 text-base text-body-color placeholder-[#ACB6BE] outline-none focus:border-primary focus-visible:shadow-none" name="password" required autocomplete="current-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>
        <div class="mb-6">
            <input type="password" placeholder="Confirm Password"
                class="bordder-[#E9EDF4] w-full rounded-md border bg-[#FCFDFE] py-3 px-5 text-base text-body-color placeholder-[#ACB6BE] outline-none focus:border-primary focus-visible:shadow-none" name="password_confirmation" required autocomplete="current-password" />
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>
        <div class="mb-10">
            <input type="submit" value="Sign up"
            class="bordder-primary w-full cursor-pointer rounded-md border bg-primary py-3 px-5 text-base text-white transition hover:bg-opacity-90" />
        </div>
    </form>
    <p class="text-base text-[#adadad]">
        {{ __('Already registered?') }}
        <a class="text-primary" href="{{ route('login') }}">
            Login
        </a>
    </p>
    <div>
        <span class="absolute top-1 right-1">
            <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <circle cx="1.39737" cy="38.6026" r="1.39737"
                    transform="rotate(-90 1.39737 38.6026)" fill="#3056D3" />
                <circle cx="1.39737" cy="1.99122" r="1.39737"
                    transform="rotate(-90 1.39737 1.99122)" fill="#3056D3" />
                <circle cx="13.6943" cy="38.6026" r="1.39737"
                    transform="rotate(-90 13.6943 38.6026)" fill="#3056D3" />
                <circle cx="13.6943" cy="1.99122" r="1.39737"
                    transform="rotate(-90 13.6943 1.99122)" fill="#3056D3" />
                <circle cx="25.9911" cy="38.6026" r="1.39737"
                    transform="rotate(-90 25.9911 38.6026)" fill="#3056D3" />
                <circle cx="25.9911" cy="1.99122" r="1.39737"
                    transform="rotate(-90 25.9911 1.99122)" fill="#3056D3" />
                <circle cx="38.288" cy="38.6026" r="1.39737"
                    transform="rotate(-90 38.288 38.6026)" fill="#3056D3" />
                <circle cx="38.288" cy="1.99122" r="1.39737"
                    transform="rotate(-90 38.288 1.99122)" fill="#3056D3" />
                <circle cx="1.39737" cy="26.3057" r="1.39737"
                    transform="rotate(-90 1.39737 26.3057)" fill="#3056D3" />
                <circle cx="13.6943" cy="26.3057" r="1.39737"
                    transform="rotate(-90 13.6943 26.3057)" fill="#3056D3" />
                <circle cx="25.9911" cy="26.3057" r="1.39737"
                    transform="rotate(-90 25.9911 26.3057)" fill="#3056D3" />
                <circle cx="38.288" cy="26.3057" r="1.39737"
                    transform="rotate(-90 38.288 26.3057)" fill="#3056D3" />
                <circle cx="1.39737" cy="14.0086" r="1.39737"
                    transform="rotate(-90 1.39737 14.0086)" fill="#3056D3" />
                <circle cx="13.6943" cy="14.0086" r="1.39737"
                    transform="rotate(-90 13.6943 14.0086)" fill="#3056D3" />
                <circle cx="25.9911" cy="14.0086" r="1.39737"
                    transform="rotate(-90 25.9911 14.0086)" fill="#3056D3" />
                <circle cx="38.288" cy="14.0086" r="1.39737"
                    transform="rotate(-90 38.288 14.0086)" fill="#3056D3" />
            </svg>
        </span>
        <span class="absolute left-1 bottom-1">
            <svg width="29" height="40" viewBox="0 0 29 40" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <circle cx="2.288" cy="25.9912" r="1.39737"
                    transform="rotate(-90 2.288 25.9912)" fill="#3056D3" />
                <circle cx="14.5849" cy="25.9911" r="1.39737"
                    transform="rotate(-90 14.5849 25.9911)" fill="#3056D3" />
                <circle cx="26.7216" cy="25.9911" r="1.39737"
                    transform="rotate(-90 26.7216 25.9911)" fill="#3056D3" />
                <circle cx="2.288" cy="13.6944" r="1.39737"
                    transform="rotate(-90 2.288 13.6944)" fill="#3056D3" />
                <circle cx="14.5849" cy="13.6943" r="1.39737"
                    transform="rotate(-90 14.5849 13.6943)" fill="#3056D3" />
                <circle cx="26.7216" cy="13.6943" r="1.39737"
                    transform="rotate(-90 26.7216 13.6943)" fill="#3056D3" />
                <circle cx="2.288" cy="38.0087" r="1.39737"
                    transform="rotate(-90 2.288 38.0087)" fill="#3056D3" />
                <circle cx="2.288" cy="1.39739" r="1.39737"
                    transform="rotate(-90 2.288 1.39739)" fill="#3056D3" />
                <circle cx="14.5849" cy="38.0089" r="1.39737"
                    transform="rotate(-90 14.5849 38.0089)" fill="#3056D3" />
                <circle cx="26.7216" cy="38.0089" r="1.39737"
                    transform="rotate(-90 26.7216 38.0089)" fill="#3056D3" />
                <circle cx="14.5849" cy="1.39761" r="1.39737"
                    transform="rotate(-90 14.5849 1.39761)" fill="#3056D3" />
                <circle cx="26.7216" cy="1.39761" r="1.39737"
                    transform="rotate(-90 26.7216 1.39761)" fill="#3056D3" />
            </svg>
        </span>
    </div>
</x-guest-layout>
