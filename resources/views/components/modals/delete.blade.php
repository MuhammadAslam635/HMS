@props(['data' => null])


<div class="modal modal-fade" id="deleteModal" wire:ignore>
    <div class="modal-dialog  modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <div class="modal-title">
                    <h2>{{!empty($data) ? $data->name : ''}}</h2>
                </div>
            </div>
            <div class="modal-body">
                <form action="#" >
                    <p>Are you sure to delet this user?</p>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success btn-flat">Yes</button>
                <button type="button" data-dismiss="modal" class="btn btn-primary btn-flat">No</button>
            </div>

            </form>

        </div>
    </div>
</div>