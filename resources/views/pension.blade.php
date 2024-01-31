<x-home>
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
                    Pensno
                </td>
                <td>
                    Admtofund
                </td>
                <td>
                    Admservcounts
                </td>
                <td>
                    Pensexit
                </td>
                <td>
                    Salary
                </td>
                <td>
                    Remarks
                </td>
            </tr>
            <?php 
                $s = 1;
            ?>
            @foreach ($records as $record)
                <tr>
                    <td>
                        {{ $s }}
                    </td>
                    <td>
                        {{ $record['kodisno'] }}
                    </td>
                    <td>
                        {{ $record['pensno'] }}
                    </td>
                    <td>
                        {{ $record['admtofund'] }}
                    </td>
                    <td>
                        {{ $record['admservcounts'] }}
                    </td>
                    <td>
                        {{ $record['pensexit'] }}
                    </td>
                    <td>
                        {{ $record['salary'] }}
                    </td>
                    <td>
                        {{ $record['remarkes'] }}
                    </td>
                </tr>
                <?php $s++?>
            @endforeach
        </table>
    </div>
</x-home>