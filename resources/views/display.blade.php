@extends('layouts.app')
    @section('content')
        <div class="font-sans antialiased">
            <div class="min-h-screen bg-gray-100">
                <div class="container">
                    <header class="bg-white shadow">
                        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">

                            <div style="display:grid; grid-template-columns:50% 50%">
                                <div>
                                    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                                        {{ __('Personal Details') }}
                                    </h2>
                                </div>
                            </div>

                        </div>
                    </header>
                    <div class="cont py-10">
                        <div style="margin:20px 0px 20px 0px;">
                            <div class="bg-white overflow-hidden shadow sm:rounded-lg" style="padding:20px;">
                                <div style="display: grid; grid-template-columns: 50% 50%">
                                    <div>
                                        <label for="kodis" >Kodis No</label>
                                        <input disabled type="text" value="{{$userDetails['kodisno']}}">
                                    </div>
                                    <div>
                                        <label for="kodis" >Marital Status</label>
                                        <input disabled type="text" value="{{$userDetails['maritalstatus']}}">
                                    </div>
                                    <div class="mt-4">
                                        <label for="kodis" >Persal No</label>
                                        <input disabled type="text" value="{{$userDetails['persalno']}}">
                                    </div>
                                    <div class="mt-4">
                                        <label for="kodis" >Date Of Marriage</label>
                                        <input disabled type="text" value="{{$userDetails['weddate']}}">
                                    </div>
                                    <div class="mt-4">
                                        <label for="kodis" >Surname</label>
                                        <input disabled type="text" value="{{$userDetails['surname']}}">
                                    </div>
                                    <div class="mt-4">
                                        <label for="kodis" >Appiontment</label>
                                        <input disabled type="text" value="{{$userDetails['appointment']}}">
                                    </div>
                                    <div class="mt-4">
                                        <label for="kodis" >Birth Date</label>
                                        <input disabled type="text" value="{{$userDetails['dob']}}">
                                    </div>
                                    <div class="mt-4">
                                        <label for="kodis" >Gender</label>
                                        <input disabled type="text" value="{{$userDetails['gender']}}">
                                    </div>
                                    <div class="mt-4">
                                        <label for="kodis" >Initials</label>
                                        <input disabled type="text" value="{{$userDetails['initials']}}">
                                    </div>
                                </div>
                                <div>
                                    <div>
                                        <div style="display: grid; grid-template-columns: 20% 20% 20% 20% 20%;">
                                            <div>
                                                <button data-toggle="modal" data-target="#proModal{{$userPension['kodisno']}}" class="m-2">Property</button>
                                                @if ($userProperty != null)
                                                    <x-property :property="$userProperty"/>
                                                @endif
                                            </div>
                                            <div>
                                                <button data-toggle="modal" data-target="#morModal{{$userPension['kodisno']}}" class="m-2">Mortgage</button>
                                                @if ($userMortgage != null)
                                                    <x-mortgage :mortgage="$userMortgage"/>
                                                @endif
                                            </div>
                                            <div>
                                                <button data-toggle="modal" data-target="#levModal{{$userPension['kodisno']}}" class="m-2">Leave</button>
                                                @if ($userLeave != null)
                                                    <x-leave :leave="$userLeave"/>
                                                @endif
                                            </div>
                                            <div>
                                                <button data-toggle="modal" data-target="#hisModal{{$userPension['kodisno']}}" class="m-2">History</button>
                                                @if ($userHistory != null)
                                                    <x-history :history="$userHistory"/>
                                                @endif
                                            </div>
                                            <div>
                                                <button data-toggle="modal" data-target="#penModal{{$userPension['kodisno']}}" class="m-2">Pension</button>
                                                @if ($userPension != null)
                                                    <x-pension :pension="$userPension"/>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection