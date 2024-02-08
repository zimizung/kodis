<div id="proModal{{ $property['kodisno'] }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="CenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 40%">
        <!-- Modal content -->
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title" style="font-weight: bold">{{ $property['surname'] }}'s property Info</h2>
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
                                    Plotno
                                </td>
                                <td>
                                    bonds
                                </td>
                                <td>
                                    addr1
                                </td>
                                <td>
                                    addr2
                                </td>
                                <td>
                                    addr3
                                </td>
                                <td>
                                    pcode
                                </td>
                                <td>
                                    occupationdate
                                </td>
                                <td>
                                    saledate
                                </td>
                                <td>
                                    otherproperty
                                </td>
                                <td>
                                    numberowners
                                </td>
                                <td>
                                    datevacated
                                </td>
                                <td>
                                    transferdate
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    {{ $property['kodisno'] }}
                                </td>
                                <td>
                                    {{ $property['plotno'] }}
                                </td>
                                <td>
                                    {{ $property['bonds'] }}
                                </td>
                                <td>
                                    {{ $property['addr1'] }}
                                </td>
                                <td>
                                    {{ $property['addr2'] }}
                                </td>
                                <td>
                                    {{ $property['addr3'] }}
                                </td>
                                <td>
                                    {{ $property['pcode'] }}
                                </td>
                                <td>
                                    {{ $property['occupationdate'] }}
                                </td>
                                <td>
                                    {{ $property['saledate'] }}
                                </td>
                                <td>
                                    {{ $property['otherproperty'] }}
                                </td>
                                <td>
                                    {{ $property['numberowners'] }}
                                </td>
                                <td>
                                    {{ $property['datevacated'] }}
                                </td>
                                <td>
                                    {{ $property['transferdate'] }}
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>

            <div class="flex items-center justify-center my-2">
                <div class="col-md-6">
                    <button type="button" data-dismiss="modal" class="btn btn-danger">Close</button>
                </div>
            </div>

        </div>
    </div>
</div>