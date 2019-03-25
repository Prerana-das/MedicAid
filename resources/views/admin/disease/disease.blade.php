@extends('layouts.master_admin')
@extends('box.disease.disease')
@section('title')
    Disease
@endsection
@section('content')
    <div class="faculty_area">
        <div class="admin_body">
            <div class="add_faculty">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createModal">
                    <i class="fa fa-plus-circle"></i>&nbsp;Add Disease
                </button>
            </div>
            <div class="faculty_list">
                <table class="table table-striped" id="dataTable">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">S/N</th>
                        <th scope="col">Disease</th>
                        <th scope="col">Description</th>
                         <th scope="col">Tag</th>
                         <th scope="col">Tips</th>
                        <th class="text-right" scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($table as $row)
                    <tr>
                        <th scope="row">{{$row->diseaseID}}</th>
                        <td>{{$row->disease_name}}</td>
                        <td>{{$row->disease_description}}</td>
                        <td>{{$row->disease_tag}}</td>
                         <td>{{$row->tips}}</td>
                        <td class="text-right">
                            <!-- Button trigger modal -->
                            <a href="">
                                <i class="fa fa-edit"></i>
                            </a>
                            <a href="{{action('Admin\Disease\DiseaseController@del',['diseaseID' => $row->diseaseID])}}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
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