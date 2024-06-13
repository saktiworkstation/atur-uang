<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Finpen') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-4xl">
                    <h4 class="pb-3 font-semibold text-xl text-gray-800 leading-tight">
                        {{ __('Detail Finpen') }}
                    </h4>
                    <div
                        class="w-full bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <div class="sm:hidden">
                            <label for="tabs" class="sr-only">Select tab</label>
                            <select id="tabs"
                                class="bg-gray-50 border-0 border-b border-gray-200 text-gray-900 text-sm rounded-t-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option>Statistics</option>
                                <option>Information</option>
                                <option>About this Finpen</option>
                            </select>
                        </div>
                        <ul class="hidden text-sm font-medium text-center text-gray-500 divide-x divide-gray-200 rounded-lg sm:flex dark:divide-gray-600 dark:text-gray-400 rtl:divide-x-reverse"
                            id="fullWidthTab" data-tabs-toggle="#fullWidthTabContent" role="tablist">
                            <li class="w-full">
                                <button id="stats-tab" data-tabs-target="#stats" type="button" role="tab"
                                    aria-controls="stats" aria-selected="true"
                                    class="inline-block w-full p-4 rounded-ss-lg bg-gray-50 hover:bg-gray-100 focus:outline-none dark:bg-gray-700 dark:hover:bg-gray-600">Statistics</button>
                            </li>
                            <li class="w-full">
                                <button id="about-tab" data-tabs-target="#about" type="button" role="tab"
                                    aria-controls="about" aria-selected="false"
                                    class="inline-block w-full p-4 bg-gray-50 hover:bg-gray-100 focus:outline-none dark:bg-gray-700 dark:hover:bg-gray-600">Information</button>
                            </li>
                            <li class="w-full">
                                <button id="faq-tab" data-tabs-target="#faq" type="button" role="tab"
                                    aria-controls="faq" aria-selected="false"
                                    class="inline-block w-full p-4 rounded-se-lg bg-gray-50 hover:bg-gray-100 focus:outline-none dark:bg-gray-700 dark:hover:bg-gray-600">About
                                    this Finpen</button>
                            </li>
                        </ul>
                        <div id="fullWidthTabContent" class="border-t border-gray-200 dark:border-gray-600">
                            <div class="hidden p-4 bg-white rounded-lg md:p-8 dark:bg-gray-800" id="stats"
                                role="tabpanel" aria-labelledby="stats-tab">
                                <dl
                                    class="grid max-w-screen-xl grid-cols-2 gap-8 p-4 mx-auto text-gray-900 sm:grid-cols-3 xl:grid-cols-6 dark:text-white sm:p-8">
                                    <div class="flex flex-col items-center justify-center">
                                        <dt class="mb-2 text-3xl font-extrabold">73M+</dt>
                                        <dd class="text-gray-500 dark:text-gray-400">Developers</dd>
                                    </div>
                                </dl>
                            </div>
                            <div class="hidden p-4 bg-white rounded-lg md:p-8 dark:bg-gray-800" id="about"
                                role="tabpanel" aria-labelledby="about-tab">
                                <h2 class="mb-5 text-2xl font-extrabold tracking-tight text-gray-900 dark:text-white">
                                    Finpen Name : {{ $data->finpen_name }}</h2>
                                <!-- List -->
                                Balance : {{ $data->balance }}<br>
                                Author : {{ $data->Author->name }}<br>
                                Description : {{ $data->description }}
                            </div>
                            <div class="hidden p-4 bg-white rounded-lg dark:bg-gray-800" id="faq" role="tabpanel"
                                aria-labelledby="faq-tab">
                                <h2 id="accordion-flush-heading-1" class="text-gray-900">
                                    What is {{ $data->finpen_name }} Finpen?
                                </h2>
                                <p class="pt-3 text-gray-600">
                                    {{ $data->description }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
