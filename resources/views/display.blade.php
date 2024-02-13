@extends('layouts.app')
    @section('content')
        <div class="font-sans antialiased">
            <div class="min-h-screen bg-gray-100">
                <div class="container">
                    <header class="bg-white shadow">
                        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">

                            <div style="display:grid; grid-template-columns:50% 50%; padding-top:10px">
                                <div>
                                    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                                        {{ __('Personal Details') }}
                                    </h2>
                                </div>
                                <div style="display: flex; justify-content:right;">
                                    <a href="{{ url('/home') }}"><button class="btn btn-primary">Home</button></a>
                                </div>
                            </div>

                        </div>
                    </header>
                    <div class="cont py-10">
                        <div style="margin:20px 0px 20px 0px;">
                            <div class="bg-white overflow-hidden shadow sm:rounded-lg" style="padding:20px;">
                                <div style="display: grid; grid-template-columns: 50% 50%">
                                    <div style="display: grid; grid-template-columns: 30% 30%">
                                        <label for="kodis" class="block font-medium text-sm text-gray-700">Kodis No</label>
                                        <input disabled type="text" value="{{$userDetails['kodisno']}}" class="rounded">
                                    </div>
                                    <div style="display: grid; grid-template-columns: 30% 30%">
                                        <label for="kodis" >Marital Status</label>
                                        <input disabled type="text" value="{{$userDetails['maritalstatus']}}" class="rounded">
                                    </div>
                                    <div class="mt-4" style="display: grid; grid-template-columns: 30% 30%">
                                        <label for="kodis" >Persal No</label>
                                        <input disabled type="text" value="{{$userDetails['persalno']}}" class="rounded">
                                    </div>
                                    <div class="mt-4" style="display: grid; grid-template-columns: 30% 30%">
                                        <label for="kodis" >Date Of Marriage</label>
                                        <input disabled type="text" value="{{$userDetails['weddate']}}" class="rounded">
                                    </div>
                                    <div class="mt-4" style="display: grid; grid-template-columns: 30% 30%">
                                        <label for="kodis" >Surname</label>
                                        <input disabled type="text" value="{{$userDetails['surname']}}" class="rounded">
                                    </div>
                                    <div class="mt-4" style="display: grid; grid-template-columns: 30% 30%">
                                        <label for="kodis" >Appiontment</label>
                                        <input disabled type="text" value="{{$userDetails['appointment']}}" class="rounded">
                                    </div>
                                    <div class="mt-4" style="display: grid; grid-template-columns: 30% 30%">
                                        <label for="kodis" >Birth Date</label>
                                        <input disabled type="text" value="{{$userDetails['dob']}}" class="rounded">
                                    </div>
                                    <div class="mt-4" style="display: grid; grid-template-columns: 30% 30%">
                                        <label for="kodis" >Gender</label>
                                        <input disabled type="text" value="{{$userDetails['gender']}}" class="rounded">
                                    </div>
                                    <div class="mt-4" style="display: grid; grid-template-columns: 30% 30%">
                                        <label for="kodis" >Initials</label>
                                        <input disabled type="text" value="{{$userDetails['initials']}}" class="rounded">
                                    </div>
                                </div>
                                <div>
                                    <div>
                                        <div style="display: grid; grid-template-columns: 20% 20% 20% 20% 20%;">
                                            <button id="mortBtn" class="m-2 btn btn-success">Mortgage</button>
                                            <button id="leavBtn" class="m-2 btn btn-success">Leave</button>
                                            <button id="pensBtn" class="m-2 btn btn-success">Pension</button>
                                            <button id="propBtn" class="m-2 btn btn-success">Property</button>
                                            <button id="histBtn" class="m-2 btn btn-success">History</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cont2 py-10">
                        <div style="margin:20px 0px 20px 0px;">
                            <div class="bg-white overflow-hidden shadow sm:rounded-lg" style="padding:20px;">
                                @include('components.mort')
                                @include('components.leav')
                                @include('components.hist')
                                @include('components.pens')
                                @include('components.prop')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
    <script src="{{ asset('js/toddle.js') }}"></script>