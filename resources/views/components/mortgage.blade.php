<div id="morModal{{ $mortgages[0]['kodisno'] }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="CenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 40%">
        <!-- Modal content -->
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title" style="font-weight: bold">{{ $mortgages[0]['surname'] }}'s mortgage Info</h2>
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
                            @foreach ( $mortgages as $mortgage)
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
                    </div>
                </div>
            </div>
            <div class="mb-2" style="display: flex; justify-content:center;">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
