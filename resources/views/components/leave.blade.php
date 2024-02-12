<div id="levModal{{ $leaves[0]['kodisno'] }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="CenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 40%">
        <!-- Modal content -->
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title" style="font-weight: bold">{{ $leaves[0]['surname'] }}'s leave Info</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card shadow mb-4" style="width:100%;">
                    <div class="card-body">
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
                            @foreach ( $leaves as $leave)
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
                    </div>
                </div>
            </div>
            <div class="mb-2" style="display: flex; justify-content:center;">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
