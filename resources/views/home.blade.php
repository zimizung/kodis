@extends('layouts.app')
    @section('content')
        <div class="container">
            <div>
                <form method="GET" action="{{ url('home') }}">
                    <input name="searchParameter" type="text" class="rounded" placeholder="search by kodis, name, and persal"
                    value="{{$filter}}">
                    <button type="submit" class=" btn btn-primary">Search</button>
                </form>
            </div>
            <div>
                <table class="table table-sm table-bordered">
                    <tr>
                        <td>
                            PersalNo
                        </td>
                        <td>
                            KodisNo
                        </td>
                        <td>
                            Name
                        </td>
                        <td>
                            Surname
                        </td>
                        <td>
                            Initials
                        </td>
                        <td>
                            IDNo
                        </td>
                        <td>
                            Date Of Birth
                        </td>
                        <td>
                            Gender
                        </td>
                        <td>
                            Marital Status
                        </td>
                        <td>
                            Weddate
                        </td>
                        <td>
                            Language
                        </td>
                        <td>
                            Increment mm
                        </td>
                        <td>
                            Maxsal
                        </td>
                        <td>
                            Wangedrag
                        </td>
                        <td>
                            Promotion
                        </td>
                        <td>
                            Lastupd
                        </td>
                        <td>
                            Appointment
                        </td>
                        <td>
                            Time
                        </td>
                        <td>
                            Action
                        </td>
                    </tr>
                    @foreach ( $allPersonalRec as $PersonalRec )
                        <tr>
                            <td>
                                {{$PersonalRec['persalno']}}
                            </td>
                            <td>
                                {{$PersonalRec['kodisno']}}
                            </td>
                            <td>
                                {{$PersonalRec['firstname']}}
                            </td>
                            <td>
                                {{$PersonalRec['surname']}}
                            </td>
                            <td>
                                {{$PersonalRec['initials']}}
                            </td>
                            <td>
                                {{$PersonalRec['idno']}}
                            </td>
                            <td>
                                {{$PersonalRec['dob']}}
                            </td>
                            <td>
                                {{$PersonalRec['gender']}}
                            </td>
                            <td>
                                {{$PersonalRec['maritalstatus']}}
                            </td>
                            <td>
                                {{$PersonalRec['weddate']}}
                            </td>
                            <td>
                                {{$PersonalRec['language']}}
                            </td>
                            <td>
                                {{$PersonalRec['incrementmm']}}
                            </td>
                            <td>
                                {{$PersonalRec['maxsal']}}
                            </td>
                            <td>
                                {{$PersonalRec['wangedrag']}}
                            </td>
                            <td>
                                {{$PersonalRec['promotion']}}
                            </td>
                            <td>
                                {{$PersonalRec['lastupd']}}
                            </td>
                            <td>
                                {{$PersonalRec['appointment']}}
                            </td>
                            <td>
                                {{$PersonalRec['time']}}
                            </td>
                            <td>
                                <a href="{{ route('userDetails',['kodis' => $PersonalRec['kodisno']]) }}" class="btn btn-primary">
                                    Open
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </table>
                @if(isset($filter))
                {{ $allPersonalRec->appends(request()->query())->links('pagination.bootstrap-4') }}
            @else
                {{ $allPersonalRec->links('pagination.bootstrap-4') }}
            @endif
            </div>
        </div>
    @endsection
<script src="./Bootstrap/js/bootstrap.bundle.js"></script>
