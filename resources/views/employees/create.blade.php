<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <section>
                        <header>
                            <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                                {{ __('Create Employee') }}
                            </h2>
                            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                                {{ __("Enter employee details below.") }}
                            </p>
                        </header>
                    
                        <form method="post" action="{{ route('employees.store') }}" class="mt-6 space-y-6">
                            @csrf
                        
                            <!-- First Name -->
                            <div>
                                <x-input-label for="first_name" :value="__('First Name')" />
                                <x-text-input id="first_name" name="first_name" type="text" class="mt-1 block w-full" required autofocus value="{{ old
                                ('first_name') }}" />
                                <x-input-error class="mt-2" :messages="$errors->get('first_name')" />
                            </div>
                        
                            <!-- Last Name -->
                            <div>
                                <x-input-label for="last_name" :value="__('Last Name')" />
                                <x-text-input id="last_name" name="last_name" type="text" class="mt-1 block w-full" required  value="{{ old
                                ('last_name') }}" />
                                <x-input-error class="mt-2" :messages="$errors->get('last_name')" />
                            </div>
                        
                            <!-- Company -->
                            <div>
                                <x-input-label for="company_id" :value="__('Company')" />
                                <select id="company_id" name="company_id" class="mt-1 block w-full" required>
                                    <option value="">Select Company</option>
                                    @foreach($companies as $company)
                                        <option value="{{ $company->id }}" {{ old('company_id')==$company->id ? 'selected':'' }}>{{ $company->name }}</option>
                                    @endforeach
                                </select>
                                <x-input-error class="mt-2" :messages="$errors->get('company_id')" />
                            </div>
                        
                            <!-- Email -->
                            <div>
                                <x-input-label for="email" :value="__('Email')" />
                                <x-text-input id="email" name="email" type="email" class="mt-1 block w-full"  value="{{ old
                                ('email') }}"/>
                                <x-input-error class="mt-2" :messages="$errors->get('email')" />
                            </div>
                        
                            <!-- Phone -->
                            <div>
                                <x-input-label for="phone" :value="__('Phone')" />
                                <x-text-input id="phone" name="phone" type="text" class="mt-1 block w-full" value="{{ old
                                ('phone') }}"/>
                                <x-input-error class="mt-2" :messages="$errors->get('phone')" />
                            </div>
                    
                            <div class="flex items-center gap-4">
                                <x-primary-button>{{ __('Create Employee') }}</x-primary-button>
                            </div>
                        </form>
                    </section>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
