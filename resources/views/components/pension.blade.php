<div id="penModal{{ $pension['kodisno'] }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="CenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 40%">
        <!-- Modal content -->
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title" style="font-weight: bold">{{ $pension['surname'] }}'s Pension Info</h2>
                <button type="button" class="close bg-red-200" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card shadow mb-4">
                    <div class="card-body">
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
