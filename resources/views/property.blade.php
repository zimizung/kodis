<x-display>
    <div>
        <table class="table table-sm table-bordered">
            <tr>
                <td>
                    Id
                </td>
                <td>
                    Kodisno
                </td>
                <td>
                    Plotno
                </td>
                <td>
                    Bonds
                </td>
                <td>
                    Address1
                </td>
                <td>
                    Address2
                </td>
                <td>
                    Address3
                </td>
                <td>
                    Postal code
                </td>
                <td>
                    Occupation date
                </td>
                <td>
                    Sale date
                </td>
                <td>
                    Other property
                </td>
                <td>
                    Number of owners
                </td>
                <td>
                    Date Vacated
                </td>
                <td>
                    Transfer date
                </td>
            </tr>
            <?php 
                $s = 1;
            ?>
            @foreach ($records as $record)
                <tr>
                    <td>
                         {{ $record['id'] }}
                    </td>
                    <td>
                        {{ $record['kodisno'] }}
                    </td>
                    <td>
                        {{ $record['plotno'] }}
                    </td>
                    <td>
                        {{ $record['bonds'] }}
                    </td>
                    <td>
                        {{ $record['addr1'] }}
                    </td>
                    <td>
                        {{ $record['addr2'] }}
                    </td>
                    <td>
                        {{ $record['addr3'] }}
                    </td>
                    <td>
                        {{ $record['pcode'] }}
                    </td>
                    <td>
                        {{ $record['occupationdate'] }}
                    </td>
                    <td>
                        {{ $record['saledate'] }}
                    </td>
                    <td>
                        {{ $record['otherproperty'] }}
                    </td>
                    <td>
                        {{ $record['numberowners'] }}
                    </td>
                    <td>
                        {{ $record['datevacated'] }}
                    </td>
                    <td>
                        {{ $record['transferdate'] }}
                    </td>
                </tr>
                <?php $s++?>
            @endforeach
        </table>
    </div>
</x-home>