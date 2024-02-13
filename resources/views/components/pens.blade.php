<div id="pens" class="pens" style="display: none">
    @if($userPensions != null)
        <table class="table table-sm table-bordered">
            <tr>
                <td>
                    Kodisno
                </td>
                <td>
                    Pfund
                </td>
                <td>
                    Pensno
                </td>
                <td>
                    Admtofund
                </td>
                <td>
                    admservcounts
                </td>
                <td>
                    pensexit
                </td>
                <td>
                    salary
                </td>
                <td>
                    noncontr
                </td>
                <td>
                    reason
                </td>
                <td>
                    remarkes
                </td>
            </tr>
            @foreach ( $userPensions as $pension)
                <tr>
                    <td>
                        {{ $pension['kodisno'] }}
                    </td>
                    <td>
                        {{ $pension['pfund'] }}
                    </td>
                    <td>
                        {{ $pension['pensno'] }}
                    </td>
                    <td>
                        {{ $pension['admtofund'] }}
                    </td>
                    <td>
                        {{ $pension['admservcounts'] }}
                    </td>
                    <td>
                        {{ $pension['pensexit'] }}
                    </td>
                    <td>
                        {{ $pension['salary'] }}
                    </td>
                    <td>
                        {{ $pension['noncontr'] }}
                    </td>
                    <td>
                        {{ $pension['reason'] }}
                    </td>
                    <td>
                        {{ $pension['remarkes'] }}
                    </td>
                </tr>
            @endforeach
        </table>
    @else
        <div style="display: flex; justify-content:center; margin-bottom:5px;">
            No Data Found
        </div>
    @endif
    <div class="mb-2" style="display: flex; justify-content:center;">
        <button type="button" id="close" class="btn btn-danger closexc" data-dismiss="modal">Close</button>
    </div>
</div>