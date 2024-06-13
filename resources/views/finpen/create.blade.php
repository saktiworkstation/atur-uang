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
                                <x-input-label for="saldo" :value="__('saldo')" />
                                <x-text-input id="saldo" name="saldo" type="number" class="mt-1 block w-full"
                                    :value="old('saldo')" required autofocus autocomplete="saldo" />
                                <x-input-error class="mt-2" :messages="$errors->get('saldo')" />
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
