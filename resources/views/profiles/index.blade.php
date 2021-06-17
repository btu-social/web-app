<x-app-layout>
    <x-slot name="header">
    Gönderiler

        <div class="col md-5">
                    @livewire('search')
                </div>
    </x-slot>


    @livewire('posts')
    @livewire('places')


    </x-app-layout>