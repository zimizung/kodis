<x-display>
    <div>
        <table class="table table-sm table-bordered">
            <tr>
                <td>
                    Id
                </td>
                <td>
                    persalno
                </td>
                <td>
                    Kodisno
                </td>
                <td>
                    surname
                </td>
                <td>
                    firstname
                </td>
                <td>
                    initials
                </td>
                <td>
                    idno
                </td>
                <td>
                    dob
                </td>
                <td>
                    weddate
                </td>
                <td>
                    gender
                </td>
                <td>
                    maritalstatus
                </td>
                <td>
                    language
                </td>
                <td>
                    incrementmm
                </td>
                <td>
                   lastupd
                </td>
                <td>
                     appointment
                </td>
                <td>
                    maxsal
                </td>
                <td>
                    wangedrag
                </td>
                <td>
                   promotion
                </td>
                <td>
                    time
                </td>
            </tr>
            <?php 
                $s = 1;
            ?>
            @foreach ($personalities as $personality)
                <tr>
                    <td>
                        {{ $personality['id']}}
                    </td>
                    <td>
                        {{ $personality['persalno'] }}
                    </td>
                    <td>
                        {{ $personality['kodisno'] }}
                    </td>
                    <td>
                        {{ $personality['surname'] }}
                    </td>
                    <td>
                        {{ $personality['firstname'] }}
                    </td>
                    <td>
                        {{ $personality['initials'] }}
                    </td>
                    <td>
                        {{ $personality['idno'] }}
                    </td>
                    <td>
                        {{ $personality['dob'] }}
                    </td>
                    <td>
                        {{ $personality['weddate'] }}
                    </td>
                    <td>
                        {{ $personality['gender'] }}
                    </td>
                    <td>
                        {{ $personality['maritalstatus'] }}
                    </td>
                    <td>
                        {{ $personality['language'] }}
                    </td>
                    <td>
                        {{ $personality['incrementmm'] }}
                    </td>
                    <td>
                        {{ $personality['lastupd'] }}
                    </td>
                    <td>
                        {{ $personality['appointment'] }}
                    </td>
                    <td>
                        {{ $personality['maxsal'] }}
                    </td>
                    <td>
                        {{ $personality['wangedrag'] }}
                    </td>
                    <td>
                        {{ $personality['promotion'] }}
                    </td>
                    <td>
                        {{ $personality['time'] }}
                    </td>
                </tr>
                <?php $s++?>
            @endforeach
        </table>
    </div>
</x-home>