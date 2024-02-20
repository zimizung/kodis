<div id="hist" class="hist" style="display: none">
    @if($userHistory->isEmpty())
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
                    Compno
                </td>
                <td>
                    Post
                </td>
                <td>
                    Date From
                </td>
                <td>
                    Date To
                </td>
                <td>
                    Descr
                </td>
                <td>
                    Category
                </td>
                <td>
                    RG
                </td>
                <td>
                    Salary
                </td>
                <td>
                    Hours
                </td>
                <td>
                    Outs
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
        {{ $userHistory->links('pagination.bootstrap-4') }}
    @endif
    <div class="mb-2" style="display: flex; justify-content:center;">
        <button type="button" id="close" class="btn btn-danger closexc" data-dismiss="modal">Close</button>
    </div>
</div>