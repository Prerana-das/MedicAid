@extends('layouts.master_admin')
@extends('box.age.age')
@section('title')
    Age
@endsection
@section('content')
    <div class="faculty_area">
        <div class="admin_body">
            <div class="add_faculty">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createModal">
                    <i class="fa fa-plus-circle"></i>&nbsp;Add Age
                </button>
            </div>
            <div class="faculty_list">
                <table class="table table-striped" id="dataTable">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">S/N</th>
                        <th scope="col">Age</th>
                        <th class="text-right" scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($table as $row)
                    <tr>
                        <th scope="row">{{$row->ageID}}</th>
                        <td>{{$row->age}}</td>
                        <td class="text-right">
                            <!-- Button trigger modal -->
                            <a href="">
                                <i class="fa fa-edit"></i>
                            </a>
                            <a href="{{action('Admin\Age\AgeController@del',['ageID' => $row->ageID])}}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script type="text/javascript">
    
    </script>
@endsection