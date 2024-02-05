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
                    Compno
                </td>
                <td>
                    Post
                </td>
                <td>
                    Date from
                </td>
                <td>
                    Date to
                </td>
                <td>
                    Descr
                </td>
                <td>
                    Category
                </td>
                <td>
                     Rg
                </td>
                <td>
                    Sale date
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
                        {{ $record['compno'] }}
                    </td>
                    <td>
                        {{ $record['post'] }}
                    </td>
                    <td>
                        {{ $record['datefrom'] }}
                    </td>
                    <td>
                        {{ $record['dateto'] }}
                    </td>
                    <td>
                        {{ $record['descr'] }}
                    </td>
                    <td>
                        {{ $record['category'] }}
                    </td>
                    <td>
                        {{ $record['rg'] }}
                    </td>
                    <td>
                        {{ $record['salary'] }}
                    </td>
                    <td>
                        {{ $record['hours'] }}
                    </td>
                    <td>
                        {{ $record['outs'] }}
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