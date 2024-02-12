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
                                            <div>
                                                @if ($userPensions != null)
                                                    <button data-toggle="modal" data-target="#penModal{{$userPensions[0]['kodisno']}}" class="m-2 btn btn-primary">Pension</button>
                                                    <x-pension :pensions="$userPensions"/>
                                                @else
                                                    <button data-toggle="modal" data-target="#resModal" class="m-2 btn btn-primary">Pension</button>
                                                @endif
                                            </div>
                                            <div>
                                                @if ($userProperty != null)
                                                    <button data-toggle="modal" data-target="#proModal{{$userProperty[0]['kodisno']}}" class="m-2 btn btn-primary">Property</button>
                                                    <x-property :properties="$userProperty"/>
                                                @else
                                                    <button data-toggle="modal" data-target="#resModal" class="m-2 btn btn-primary">Property</button>
                                                @endif
                                            </div>
                                            <div>
                                                @if ($userMortgage != null)
                                                    <button data-toggle="modal" data-target="#morModal{{$userMortgage[0]['kodisno']}}" class="m-2 btn btn-primary">Mortgage</button>
                                                    <x-mortgage :mortgages="$userMortgage"/>
                                                @else
                                                    <button data-toggle="modal" data-target="#resModal" class="m-2 btn btn-primary">Mortgage</button>
                                                @endif
                                            </div>
                                            <div>
                                                @if ($userLeave != null)
                                                    <button data-toggle="modal" data-target="#levModal{{$userLeave[0]['kodisno']}}" class="m-2 btn btn-primary">Leave</button>
                                                    <x-leave :leaves="$userLeave"/>
                                                @else
                                                    <button data-toggle="modal" data-target="#resModal" class="m-2 btn btn-primary">Leave</button>
                                                @endif
                                            </div>
                                            <div>
                                                @if ($userHistory != null)
                                                    <button data-toggle="modal" data-target="#hisModal{{$userHistory[0]['kodisno']}}" class="m-2 btn btn-primary">History</button>
                                                    <x-history :histories="$userHistory"/>
                                                @else
                                                    <button data-toggle="modal" data-target="#resModal" class="m-2 btn btn-primary">History</button>
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
        <x-response/>
    @endsection