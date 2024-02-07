<style>
    .modal-content{
        width: 60%;
        margin: 5% auto;
    }
</style>

<div id="penModal{{$pension['kodisno']}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="CenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 40%">
         <!-- Modal content -->
        <div class="modal-content">
            <div class="modal-header">
                 <h2 class="modal-title" style="font-weight: bold">{{$pension['surname']}}'s Pension Info</h2>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
            </div>
            <div class="modal-body">
                <div class="card shadow mb-4" style="width:100%;">
                    <div class="card-body">
                        {{$pension}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
