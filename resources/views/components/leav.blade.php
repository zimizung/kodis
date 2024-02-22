<div id="leav" class="leav">
    @if($userLeave->isEmpty())
        <div style="display: flex; justify-content:center; margin-bottom:5px;">
            No Data Found
        </div>
    @else
        <table class="table table-sm table-bordered">
            <tr>
                <td>
                    Kodisno
                </td>
                <td>
                    LeaveType
                </td>
                <td>
                    LeaveCondition
                </td>
                <td>
                    Start Date
                </td>
                <td>
                    End Date
                </td>
                <td>
                    Days
                </td>
                <td>
                    Payment
                </td>
            </tr>
            @foreach ( $userLeave as $leave)
                <tr>
                    <td>
                        {{ $leave['kodisno'] }}
                    </td>
                    <td>
                        {{ $leave['leavetype'] }}
                    </td>
                    <td>
                        {{ $leave['leavecondition'] }}
                    </td>
                    <td>
                        {{ $leave['leavefrom'] }}
                    </td>
                    <td>
                        {{ $leave['leaveto'] }}
                    </td>
                    <td>
                        {{ $leave['days'] }}
                    </td>
                    <td>
                        {{ $leave['payment'] }}
                    </td>
                </tr>
            @endforeach
        </table>
        {{ $userLeave->links('pagination.bootstrap-4') }}
    @endif
    <div class="mb-2" style="display: flex; justify-content:center;">
        <button type="button" id="close" class="btn btn-danger closexc" data-dismiss="modal">Close</button>
    </div>
</div>