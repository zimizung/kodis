<div id="morModal{{ $mortgage['kodisno'] }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="CenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 40%">
        <!-- Modal content -->
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title" style="font-weight: bold">{{ $mortgage['surname'] }}'s mortgage Info</h2>
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
                        </table>
                    </div>
                </div>
            </div>

            <div class="flex items-center justify-center mt-2">
                <div class="col-md-6">
                    <button type="button" data-dismiss="modal" class="btn btn-danger">Close</button>
                </div>
            </div>

        </div>
    </div>
</div>
