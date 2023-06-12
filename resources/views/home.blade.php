@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
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
