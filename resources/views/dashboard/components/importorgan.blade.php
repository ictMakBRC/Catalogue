<div class="modal fade" id="importOrgan" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Upload CSV</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">	<span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ url('catalogue/organs/import') }}" method="POST" name="importform"
            enctype="multipart/form-data"  onsubmit="return checkfile()">
                <div class="modal-body">

                        @csrf

                        <div class="row">
                            <div class="col-md-12">

                                <input type="hidden" name="batch" value="{{rand(400,9999).time()}}">
                                <div class="mb-3">
                                    <label  class="form-label">Upload an organ CSV file</label>
                                    <input type="file" name="file" id="image-uploadify" required class="form-control" onchange="checkfile(this);">
                                </div>

                                {{-- <input id="image-uploadify" type="file" accept=".xlsx,.xls,.csv" multiple> --}}
                            </div> <!-- end col -->

                        </div>
                        <script type="text/javascript" language="javascript">
                            function checkfile(sender) {
                                var validExts = new Array(".xlsx", ".xls", ".csv");
                                var fileExt = sender.value;
                                fileExt = fileExt.substring(fileExt.lastIndexOf('.'));
                                if (validExts.indexOf(fileExt) < 0) {

                                           swal('Error', "Invalid file selected, valid files are of " +
                                           validExts.toString() + " types.", 'warning');
                                           document.getElementById('image-uploadify').value= null;
                                  return false;

                                }
                                else return true;
                            }
                            </script>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Import</button>
                </div>
            </form>
            <div class="fm-menu">
                <div class="list-group list-group-flush">
                    <a href="javascript:;" class="list-group-item py-1 text-primary"><i class='bx bx-file me-2'></i><span>CSV Template</span></a>
                    <a href="javascript:;" class="list-group-item py-1 text-primary"><i class='bx bx-file me-2'></i><span>Upload guide</span></a>
                    <a href="javascript:;" class="list-group-item py-1 text-primary"><i class='bx bx-file me-2'></i><span>Project List</span></a>
                    <a href="javascript:;" class="list-group-item py-1 text-primary"><i class='bx bx-file me-2'></i><span>Sample type List</span></a>
                </div>


        </div>
    </div>
</div>
