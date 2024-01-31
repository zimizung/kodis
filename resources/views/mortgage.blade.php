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
                    Plot Number
                </td>
                <td>
                    Mortgages
                </td>
                <td>
                    Period
                </td>
                <td>
                    Loan Amount
                </td>
                <td>
                    Date register
                </td>
                <td>
                    First Installment
                </td>
                <td>
                    Fiche
                </td>
                <td>
                    Account No
                </td>
                <td>
                    Allowance Amount
                </td>
                <td>
                    Work Complete
                </td>
                <td>
                    Stop Allowance
                </td>
                <td>
                    Terminated
                </td>
                <td>
                    Reason
                </td>
                <td>
                    Remark
                </td>
            </tr>
            @foreach ($mortgages as $mortgage)
                <tr>
                    <td>
                        {{ $mortgage['id'] }}
                    </td>
                    <td>
                        {{ $mortgage['kodisno'] }}
                    </td>
                    <td>
                        {{ $mortgage['plotnumber'] }}
                    </td>
                    <td>
                        {{ $mortgage['mortgages'] }}
                    </td>
                    <td>
                        {{ $mortgage['period'] }}
                    </td>
                    <td>
                        {{ $mortgage['loadamount'] }}
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
                        {{ $mortgage['allowmat'] }}
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
                        {{ $mortgage['remarks'] }}
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</x-display>