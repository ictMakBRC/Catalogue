<div class="modal fade" id="Specimentype" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add a new specimen type</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">	<span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ url('catalogue/specimenTypes/add') }}" method="POST">
                <div class="modal-body">

                        @csrf

                        <div class="row">
                            <div class="col-md-12">


                                <div class="mb-3">
                                    <label  class="form-label">Specimen type</label>
                                    <input type="text" id="specimen_type" name="specimen_type" class="form-control"  required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Storage temperature</label>
                                    <input type="text" id="storage_temperature" name="storage_temperature" class="form-control"  required>
                                </div>
                                <div class="mb-3">
                                    <label  class="form-label">Container type</label>
                                    <input type="text" id="container_type" name="container_type" class="form-control"  required>
                                </div>
                            </div> <!-- end col -->

                        </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>


        </div>
    </div>
</div>
