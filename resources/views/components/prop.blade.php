<div id="prop" class="prop">
    @if($userProperty->isEmpty())
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
            @foreach($userProperty as $property)
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
            @endforeach
        </table>
        {{ $userProperty->links('pagination.bootstrap-4') }}
    @endif
    <div class="mb-2" style="display: flex; justify-content:center;">
        <button type="button" id="close" class="btn btn-danger closexc" data-dismiss="modal">Close</button>
    </div>
</div>