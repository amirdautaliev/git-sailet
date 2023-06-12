@extends('admin.layouts.admin')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"></h1>
          </div><!-- /.col -->

          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v2</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
	<div class="row">
<div class="col-2">
<a href = "{{route('admin.client.create')}}" class="btn btn-block btn-primary btn-lg">Добавить Клиента</a>
</div>
	</div>

  <div class="card-body">

<table class="table table-bordered">

<thead>

<tr>

<th style="width: 10px">id</th>

<th>Google sheets</th>


<th >Название Компании</th>
<th style="width: 20px">Google Excel</th>
</tr>
</thead>
<tbody>
<tr>
@foreach($users as $user)
<td>{{$user->id}}</td>
<td>{{$user->last_name}} {{$user->first_name}} {{$user->middle_name}}</td>
<td>{{$user->NameCompany}}</td>
<td><a href="{{route('admin.client.show',$user->id)}}"  target="_blink" class="nav-link"> <i class="nav-icon fas fa-link"></i>{{$user->id}}</a></td>

<tr>
@endforeach
</tr>



</tr>
</tbody>

</table>

</div>


        <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection
