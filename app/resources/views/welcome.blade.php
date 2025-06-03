<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <div class="text-center">
            <h1 class="text-2xl font-bold mb-4">
                Welcome to <span class="text-indigo-600">Teams R Us</span>
            </h1>

            <p class="text-gray-700 dark:text-gray-300 mb-6 px-6">
                <strong>Teams R Us</strong> helps build optimized project teams based on skills, experience, and personality types. 
                You can register, manage profiles, create groups and collaborate on projects.
            </p>

            @auth
                <p class="text-green-600 dark:text-green-400 font-semibold mb-4">
                    You're already logged in as <strong>{{ Auth::user()->name }}</strong>!
                </p>
                <a href="{{ route('dashboard') }}" 
                   class="block w-full px-6 py-3 bg-indigo-600 text-white rounded hover:bg-indigo-700 transition font-semibold mb-4">
                    Go to Dashboard
                </a>
            @else
                <div class="flex flex-col space-y-4 mt-6">
                    <a href="{{ route('login') }}" 
                       class="block w-full px-6 py-3 bg-indigo-600 text-white rounded hover:bg-indigo-700 transition font-semibold">
                        Log In
                    </a>
                    <br>
                    <a href="{{ route('register') }}" 
                       class="block w-full px-6 py-3 bg-gray-200 text-gray-800 rounded hover:bg-gray-300 transition font-semibold">
                        Register
                    </a>
                </div>
            @endauth
        </div>
    </x-authentication-card>
</x-guest-layout>
