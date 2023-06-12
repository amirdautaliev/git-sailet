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

        <form action="{{route('admin.client.store')}}" method="POST" enctype='multipart/form-data'>
          @csrf
            <div class="row">
                <div class="col-xl-6">
                    <div id="panel-1" class="panel">
                        <div class="panel-container">
                            <div class="panel-hdr">
                                <h2>Общая информация</h2>
                            </div>
                            <div class="panel-content">
                                <!-- username -->
                                <div class="form-group">
                                    <label class="form-label" for="simpleinput" >Компания</label>
                                    <input type="text" id="simpleinput" class="form-control" name = "NameCompany">
                                </div>
                                <!-- Фамилиия -->
                                <div class="form-group">
                                    <label class="form-label" for="simpleinput">Фамилия</label>
                                    <input type="text" id="simpleinput" class="form-control" name = "last_name">
                                </div>

                                <!-- Имя -->
                                <div class="form-group">
                                    <label class="form-label" for="simpleinput">Имя</label>
                                    <input type="text" id="simpleinput" class="form-control" name="first_name">
                                </div>

                                <!-- отчество -->
                                <div class="form-group">
                                    <label class="form-label" for="simpleinput">Отчество</label>
                                    <input type="text" id="simpleinput" class="form-control" name="middle_name">
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="col-xl-6">
                    <div id="panel-1" class="panel">
                        <div class="panel-container">
                            <div class="panel-hdr">
                                <h2>Безопасность</h2>
                            </div>
                            <div class="panel-content">
                                <!-- email -->
                                <div class="form-group">
                                    <label class="form-label" for="simpleinput">Email</label>
                                    <input type="text" id="simpleinput" class="form-control" name="email">
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="simpleinput">Password</label>
                                    <input type="password" id="simpleinput" class="form-control" name="password">
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="example-fileinput">Загрузить аватар</label>
                                    <input type="file"  name ='images' id="example-fileinput" class="form-control-file">
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>

                <div class="col-xl-12">
                    <div id="panel-1" class="panel">
                        <div class="panel-container">
                            <div class="panel-hdr">
                                <h2>Ссылки</h2>
                            </div>
                            <div class="panel-content">
                                <div class="row">
                                   <div class="col-md-4">
                                    <div class="form-group">
                            
                                    <label class="form-label" for="simpleinput">Excel sheets</label>
                                    <input type="text" id="simpleinput" class="form-control" name="link_Google_table">
                                          </div>
                                </div>   
                                <div class="col-md-4">
                                    <div class="form-group">
                                    <label class="form-label" for="simpleinput">Google Drive</label>
                                    <input type="text" id="simpleinput" class="form-control" name="link_Google_disk">
                                
                                    </div>
                    
                                </div>   
                                    </div>

                                    <div class="col-md-12 mt-3 d-flex flex-row-reverse">
                                        <button class="btn btn-success">Добавить</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </form>
	</div>
        <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection
