<div id="hisModal{{ $histories[0]['kodisno'] }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="CenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 40%">
        <!-- Modal content -->
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title" style="font-weight: bold">{{ $histories[0]['surname'] }}'s history Info</h2>
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
                            @foreach ($histories as $history)
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
                                        {{ $history['out'] }}
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
