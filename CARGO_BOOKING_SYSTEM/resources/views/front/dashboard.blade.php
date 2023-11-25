<x-front-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>

        
    </x-slot>

    

    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                  <center> <b>You're logged in!</b> </center>  
                </div>
            </div>
        </div>
    </div>


    <div class="py-2">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                <center>
                    <a href="{{ route('cargo.create') }}" title="Booking" class="btn btn-primary">
                        <b>CARGO BOOKING</b>
                    </a>
                </center>
            </div>
        </div>
    </div>
    </div>



    <div class="py-2">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                <center>
                    <a href="{{ route('office') }}" title="Cargo Officies Details" class="btn btn-primary">
                        <b>Cargo Officies</b>
                    </a>
                </center>
            </div>
        </div>
    </div>
</div>

<div class="py-2">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                <center>
                    <a href="{{ route('price') }}" title="Cargo Prices Details" class="btn btn-primary">
                        <b>Cargo price Details</b>
                    </a>
                </center>
            </div>
        </div>
    </div>
</div>

<div class="py-2">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                <center>
                    <a href="{{ route('customer') }}" title="Customer Care" class="btn btn-primary">
                        <b>Customer Care</b>
                    </a>
                </center>
            </div>
        </div>
    </div>
</div>

</x-front-layout>


