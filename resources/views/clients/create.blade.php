@extends('layout.main')
@section('content')
<section class="content-header">
      <br>
      <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="/clientes"><i class="fa fa-plus-circle"></i> Clientes</a></li>
        <li class="active"><i class="fa fa-plus"></i> Formulário</li>
      </ol>
</section>
<section class="content">
      <div class="box box-default">
            <div class="row">
                  <div class="box-header with-border">
                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                              <h3>Formulário</h3>
                        </div>
                  </div>
            </div>
      <div class="box-body">
            <div class="row">
      		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
      			@if (count($errors)>0)
      			<div class="alert alert-danger">
      				<ul>
      				@foreach ($errors->all() as $error)
      					<li>{{$error}}</li>
      				@endforeach
      				</ul>
      			</div>
      			@endif
      		</div>
      	</div>

	      {!!Form::open(array('url'=>'clients','method'=>'POST','autocomplete'=>'off'))!!}
            {{Form::token()}}
      
            <div class="row">
            	<div class="col-lg-6 col-sm-6 col-xs-12">
	            	<div class="form-group">
	            	    <label for="nome">Nome</label>
	            	    <input type="text" name="name" required value="{{old('nome')}}" class="form-control" placeholder="Nome...">
	            	</div>
            	</div>
            	
              <div class="col-lg-6 col-sm-6 col-xs-12">
                   <div class="form-group">
                         <label for="email">Email</label>
                         <input type="text" name="email" class="form-control" placeholder="Email...">
                    </div>
              </div>
              
              <div class="col-lg-6 col-sm-6 col-xs-12">
                     <div class="form-group">
                          <label for="telefone">Telefone</label>
                          <input type="text" name="phone" class="form-control" placeholder="Telefone...">
                    </div>
              </div>

            	<div class="col-lg-6 col-sm-6 col-xs-12">
            		<div class="form-group">
	            	    <label for="endereco">Endereço</label>
	            	    <input type="text" name="address" required value="{{old('endereco')}}" class="form-control" placeholder="Endereço...">
	            	</div>	
            	</div>

                  <div class="col-lg-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label for="endereco">CPF</label>
                            <input type="text" name="cpf" required value="{{old('cpf')}}" class="form-control" placeholder="CPF do cliente...">
                        </div>      
                  </div>
            </div>
            
            <div class="form-group">
            	<button class="btn btn-primary" type="submit">Salvar</button>
            	<a href="/clients" class="btn btn-default">Cancelar</a>
            </div>
		{!!Form::close()!!}
      </div>
      </div>
</section>
		
@stop