@section('box')
    <!-- Modal -->
    <div class="modal modal_zindex fade" id="createModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle"><i class="fa fa-plus-square"></i> Add Age</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{action('Admin\Specialist\SpecialistController@save')}}" method="post" enctype="multipart/form-data">

                    {{csrf_field()}}

                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group input-group-sm mb-2">
                                    <label>Specialist</label>
                                    <input type="text" placeholder="Specialist" name="specialist_name" class="form-control" >
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-sm btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <!--Edit Modal -->
    <div class="modal fade" id="ediModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle1" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle1">Edit department</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{action('Admin\Age\AgeController@edit')}}" id="ediForm" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <input type="hidden" name="id">
                      <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group input-group-sm mb-2">
                                    <label>Age</label>
                                    <input type="text" placeholder="Age" name="age" class="form-control" >
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-sm btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection