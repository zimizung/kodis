<div id="hist" class="hist" style="display: none">
    @if($userHistory != null)
        <table class="table table-sm table-bordered">
            <tr>
                <td>
                    Kodisno
                </td>
                <td>
                    compno
                </td>
                <td>
                    post
                </td>
                <td>
                    datefrom
                </td>
                <td>
                    dateto
                </td>
                <td>
                    descr
                </td>
                <td>
                    category
                </td>
                <td>
                    rg
                </td>
                <td>
                    salary
                </td>
                <td>
                    hours
                </td>
                <td>
                    outs
                </td>
            </tr>
            @foreach ($userHistory as $history)
                <tr>
                    <td>
                        {{ $history['kodisno'] }}
                    </td>
                    <td>
                        {{ $history['compno'] }}
                    </td>
                    <td>
                        {{ $history['post'] }}
                    </td>
                    <td>
                        {{ $history['datefrom'] }}
                    </td>
                    <td>
                        {{ $history['dateto'] }}
                    </td>
                    <td>
                        {{ $history['descr'] }}
                    </td>
                    <td>
                        {{ $history['category'] }}
                    </td>
                    <td>
                        {{ $history['rg'] }}
                    </td>
                    <td>
                        {{ $history['salary'] }}
                    </td>
                    <td>
                        {{ $history['hours'] }}
                    </td>
                    <td>
                        {{ $history['outs'] }}
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