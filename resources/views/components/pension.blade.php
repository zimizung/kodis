<style>
    /* Modal Content/Box */
    .modal-contentx.my-custom-modal {
        background-color: #fefefe !important;
        margin: 5% auto !important; /* 15% from the top and centered */
        padding-bottom: 20px !important;
        border: 1px solid #888 !important;
        width: 30% !important; /* Could be more or less, depending on screen size */
        box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19) !important;
        -webkit-animation-name: animatetop !important;
        -webkit-animation-duration: 0.4s !important;
        animation-name: animatetop !important;
        animation-duration: 0.4s !important
    }
</style>
<div id="penModal{{ $pensions[0]['kodisno'] }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="CenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 40%">
        <!-- Modal content -->
        <div class="modal-content my-custom-modal">
            <div class="modal-header">
                <h2 class="modal-title" style="font-weight: bold">{{ $pensions[0]['surname'] }}'s Pension Info</h2>
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
                            @foreach ( $pensions as $pension)
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
                                        {{ $pension['remarks'] }}
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