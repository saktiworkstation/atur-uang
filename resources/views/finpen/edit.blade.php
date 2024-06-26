<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Form Edit finpen') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <section>
                        <header>
                            <h2 class="text-lg font-medium text-gray-900">
                                {{ __('Edit finpen') }}
                            </h2>

                            <p class="mt-1 text-sm text-gray-600">
                                {{ __('Added your newes finpen here.') }}
                            </p>
                        </header>

                        <form method="POST" action="/finpen/update/{{ $data->id }}" class="mt-6 space-y-6">
                            @csrf
                            @method('PUT')
                            <div>
                                <x-input-label for="balance" :value="__('First Balance')" />
                                <x-text-input id="balance" name="balance" type="text" class="mt-1 block w-full"
                                    :value="old('balance', $data->balance)" required autofocus autocomplete="balance" />
                                <x-input-error class="mt-2" :messages="$errors->get('balance')" />
                            </div>
                            <div>
                                <x-input-label for="finpen_name" :value="__('Finpen Name')" />
                                <x-text-input id="finpen_name" name="finpen_name" type="text"
                                    class="mt-1 block w-full" :value="old('finpen_name', $data->finpen_name)" required autofocus
                                    autocomplete="finpen_name" />
                                <x-input-error class="mt-2" :messages="$errors->get('finpen_name')" />
                            </div>
                            <div>
                                <x-input-label for="province" :value="__('Province')" />
                                <x-text-input id="province" name="province" type="text" class="mt-1 block w-full"
                                    :value="old('province', $data->province)" required autofocus autocomplete="province" />
                                <x-input-error class="mt-2" :messages="$errors->get('province')" />
                            </div>
                            <div>
                                <x-input-label for="description" :value="__('Description')" />
                                <x-text-input id="description" name="description" type="text"
                                    class="mt-1 block w-full" :value="old('description', $data->description)" required autofocus
                                    autocomplete="description" />
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
