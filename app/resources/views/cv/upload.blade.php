<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold text-gray-800 dark:text-gray-200 leading-tight px-4 sm:px-6 lg:px-8">
            {{ __('Upload CV') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8"> 

            <div class="bg-white dark:bg-gray-800 shadow-md sm:rounded-lg p-6 border border-gray-200 dark:border-gray-700">

                <p class="text-sm text-gray-600 dark:text-gray-300 mb-6">
                    Please upload your CV in <strong>PDF, DOC, or DOCX</strong> format.
                    This helps teams assess your skills and experience. Max size: <strong>10MB</strong>.
                </p>

                @if (session('success'))
                    <div class="mb-4 px-6 py-3 bg-green-100 text-green-800 dark:bg-green-700 dark:text-white rounded">
                        {{ session('success') }}
                    </div>
                @endif

                @if ($errors->any())
                    <div class="mb-4 px-6 py-3 bg-red-100 text-red-800 dark:bg-red-700 dark:text-white rounded">
                        {{ $errors->first('cv') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('cv.upload.store') }}" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-4">
                        <x-label for="cv" value="Select your CV file" />
                        <x-input id="cv" type="file" name="cv" accept=".pdf,.doc,.docx"
                            class="block mt-2 w-full text-sm text-gray-900 dark:text-gray-100
                                   file:mr-4 file:py-2 file:px-4
                                   file:rounded-md file:border-0
                                   file:text-sm file:font-semibold
                                   file:bg-indigo-600 file:text-white
                                   hover:file:bg-indigo-700 transition" />
                        @error('cv')
                            <p class="text-sm text-red-600 mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                    <x-button class="mt-6 w-full justify-center">
                        Upload CV
                    </x-button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
