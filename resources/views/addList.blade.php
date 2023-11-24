<x-app-layout>
    <x-guest-layout>
        <x-auth-card>
            <x-slot name="logo">
                <img src="/images/AddIcon.jpg" style="width: 200px"/>
            </x-slot>
            <div name="title" style="text-align: center;font-size: 40px">Add Task Category</div>
            <form method="POST" action="{{ route('lists.store') }}">
                @csrf
                <!-- Name -->
                <div>
                    <x-input-label for="list_name" :value="__('Name')" />

                    <x-text-input id="list_name" class="block mt-1 w-full" type="text" name="list_name" :value="old('list_name')" required autofocus />

                    <x-input-error :messages="$errors->get('list_name')" class="mt-2" />
                </div>
                <div class="flex items-center justify-end mt-4">
                    <x-primary-button class="ml-4">
                        {{ __('ADD') }}
                    </x-primary-button>
                </div>
            </form>
            @include('message')
        </x-auth-card>
    </x-guest-layout>

</x-app-layout>

