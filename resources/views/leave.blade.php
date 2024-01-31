<x-display>
    <div style="width: 50%">
        <table class="table table-sm table-bordered">
            <tr>
                <td>
                    id
                </td>
                <td>
                    Kodisno
                </td>
                <td>
                    Leave Type
                </td>
                <td>
                    Leave Condition
                </td>
                <td>
                    Start Date
                </td>
                <td>
                    End date
                </td>
                <td>
                    Days
                </td>
                <td>
                    Payment
                </td>
            </tr>
            @foreach ($leaves as $leave)
                <tr>
                    <td>
                        {{ $leave['id'] }}
                    </td>
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
    </div>
</x-display>