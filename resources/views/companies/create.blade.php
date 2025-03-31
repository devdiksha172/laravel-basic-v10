<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <section>
                        <header>
                            <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                                {{ __('Create Company') }}
                            </h2>
                            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                                {{ __("Enter company details below.") }}
                            </p>
                        </header>
                    
                        <form method="post" action="{{ route('companies.store') }}" class="mt-6 space-y-6" enctype="multipart/form-data">
                            @csrf
                    
                            <div>
                                <x-input-label for="name" :value="__('Company Name')" />
                                <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" required autofocus value="{{ old('name') }}" />
                                <x-input-error class="mt-2" :messages="$errors->get('name')" />
                            </div>
                    
                            <div>
                                <x-input-label for="email" :value="__('Email')" />
                                <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" value="{{ old('email') }}" />
                                <x-input-error class="mt-2" :messages="$errors->get('email')" />
                            </div>
                    
                            <div>
                                <x-input-label for="logo" :value="__('Company Logo')" />
                                <input id="logo" name="logo" type="file" class="mt-1 block w-full border p-2" accept="image/*" onchange="previewImage(event,'logoPreview')">
                                <x-input-error class="mt-2" :messages="$errors->get('logo')" />
                                <div class="mt-2">
                                    <img id="logoPreview" src="{{ old('logo') ? asset('storage/' . old('logo')) : '' }}" alt="Logo Preview" class="w-32 h-32 object-cover">
                                </div>
                            </div>
                    
                            <div>
                                <x-input-label for="website" :value="__('Website')" />
                                <x-text-input id="website" name="website" type="url" class="mt-1 block w-full" value="{{ old('website') }}" />
                                <x-input-error class="mt-2" :messages="$errors->get('website')" />
                            </div>
                    
                            <div class="flex items-center gap-4">
                                <x-primary-button>{{ __('Create') }}</x-primary-button>
                            </div>
                        </form>
                    </section>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
