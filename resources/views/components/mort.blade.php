<div id="mort" class="mort">
    @if($userMortgage->isEmpty())
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
                    plotnumber
                </td>
                <td>
                    mortgagee
                </td>
                <td>
                    period
                </td>
                <td>
                    loanamount
                </td>
                <td>
                    dateregister
                </td>
                <td>
                    firstinstallment
                </td>
                <td>
                    fiche
                </td>
                <td>
                    accno
                </td>
                <td>
                    allowamt
                </td>
                <td>
                    workcompl
                </td>
                <td>
                    stopallowance
                </td>
                <td>
                    terminateds
                </td>
                <td>
                    reason
                </td>
                <td>
                    remarks
                </td>
            </tr>
            @foreach ( $userMortgage as $mortgage)
                <tr>
                    <td>
                        {{ $mortgage['kodisno'] }}
                    </td>
                    <td>
                        {{ $mortgage['plotnumber'] }}
                    </td>
                    <td>
                        {{ $mortgage['mortgagee'] }}
                    </td>
                    <td>
                        {{ $mortgage['period'] }}
                    </td>
                    <td>
                        {{ $mortgage['loanamount'] }}
                    </td>
                    <td>
                        {{ $mortgage['dateregister'] }}
                    </td>
                    <td>
                        {{ $mortgage['firstinstallment'] }}
                    </td>
                    <td>
                        {{ $mortgage['fiche'] }}
                    </td>
                    <td>
                        {{ $mortgage['accno'] }}
                    </td>
                    <td>
                        {{ $mortgage['allowamt'] }}
                    </td>
                    <td>
                        {{ $mortgage['workcompl'] }}
                    </td>
                    <td>
                        {{ $mortgage['stopallowance'] }}
                    </td>
                    <td>
                        {{ $mortgage['terminateds'] }}
                    </td>
                    <td>
                        {{ $mortgage['reason'] }}
                    </td>
                    <td>
                        {{ $mortgage['remarkes'] }}
                    </td>
                </tr>
            @endforeach
        </table>
        {{ $userMortgage->links('pagination.bootstrap-4') }}
    @endif
    <div class="mb-2" style="display: flex; justify-content:center;">
        <button type="button" id="close" class="btn btn-danger closexc" data-dismiss="modal">Close</button>
    </div>
</div>