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

</div>
	</div>

  <div class="card-body">

<table class="table table-bordered">

<thead>

<tr>


<th>№</th>
<th>Email</th>
<th>Work</th>



</tr>
</thead>
<tbody>
<tr>
<?
$i = 0;
foreach($values as $value){
	$i++;
	unset($values[0]);
	$html = '<tr>';
	$html .= '<td scope="row">'.$i.'</td>';
	foreach($value as $valu){
		$html .= '<td scope="row"> '. $valu.'</td>';
	}
$html .= '<tr>';
echo $html;
}

?>


</tbody>

</table>

</div>


        <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection
