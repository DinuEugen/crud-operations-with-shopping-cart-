<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Admin dashboard') }}
        </h2>
    </x-slot>
    <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
        <x-nav-link :href="route('product.create')" :active="request()->routeIs('product.create')">
            {{ __('Create a product') }}
        </x-nav-link>
        <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
            <x-nav-link :href="route('product.index')" :active="request()->routeIs('product.index')">
                {{ __('View all products') }}
            </x-nav-link>
            <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                <x-nav-link :href="route('customer.create')" :active="request()->routeIs('customer.create')">
                    {{ __('Create a customer') }}
                </x-nav-link>
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link :href="route('customer.index')" :active="request()->routeIs('customer.index')">
                        {{ __('View all customers') }}
                    </x-nav-link>


</x-app-layout>