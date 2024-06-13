<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Form Create Finpen') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <section>
                        <header>
                            <h2 class="text-lg font-medium text-gray-900">
                                {{ __('Create Finpen') }}
                            </h2>

                            <p class="mt-1 text-sm text-gray-600">
                                {{ __('Added your newes Finpen here.') }}
                            </p>
                        </header>

                        <form method="POST" action="{{ route('finpen.store') }}" class="mt-6 space-y-6">
                            @csrf
                            <div>
                                <x-input-label for="balance" :value="__('balance')" />
                                <x-text-input id="balance" name="balance" type="number" class="mt-1 block w-full"
                                    :value="old('balance')" required autofocus autocomplete="balance"
                                    placeholder="beginning balance" />
                                <x-input-error class="mt-2" :messages="$errors->get('balance')" />
                            </div>
                            <div>
                                <x-input-label for="finpen_name" :value="__('finpen_name')" />
                                <x-text-input id="finpen_name" name="finpen_name" type="text"
                                    class="mt-1 block w-full" :value="old('finpen_name')" required autofocus
                                    autocomplete="finpen_name" placeholder="My Monthly fee" />
                                <x-input-error class="mt-2" :messages="$errors->get('finpen_name')" />
                            </div>
                            <div>
                                <x-input-label for="province" :value="__('province')" />
                                <x-text-input id="province" name="province" type="text" class="mt-1 block w-full"
                                    :value="old('province')" required autofocus autocomplete="province" placeholder="Bali" />
                                <x-input-error class="mt-2" :messages="$errors->get('province')" />
                            </div>
                            <div>
                                <x-input-label for="description" :value="__('description')" />
                                <x-text-input id="description" name="description" type="text"
                                    class="mt-1 block w-full" :value="old('description')" required autofocus
                                    autocomplete="description" placeholder="Description of this Finpen" />
                                <x-input-error class="mt-2" :messages="$errors->get('description')" />
                            </div>

                            <div class="flex items-center gap-4">
                                <x-primary-button>{{ __('Save') }}</x-primary-button>
                            </div>
                        </form>
                    </section>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
