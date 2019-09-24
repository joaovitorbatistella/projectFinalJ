@if ($errors->any())
	<div class="container">
	  <div class="alert alert-danger">
	    <ul>
	      @foreach ($errors->all() as $error)
	      <li>{{ $error }}</li>
	      @endforeach
	    </ul>
	  </div>
	</div>
  @endif
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<head>

    <!--
            $table->date('dataNascimento'); 
            $table->integer('nivel'); 
            $table->string('telefone');
            $table->string('cpf');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
      -->
</head>
<body>

<form class="form-horizontal" method="POST" action="/cadastrocliente">
@csrf
<fieldset>
<div class="panel panel-primary">
    <div class="panel-heading">Cadastro de Cliente</div>
    
    <div class="panel-body">
<div class="form-group">
<!--
<div class="form-group">   
<div class="col-md-4 control-label">
    <img id="logo" src="http://blogdoporao.com.br/wp-content/uploads/2016/12/Faculdade-pitagoras.png"/>
</div>
<div class="col-md-4 control-label">
    <h1>Cadastro de Cliente</h1>
    
</div>
</div>
    -->
<div class="col-md-11 control-label">
        <p class="help-block"><h11>*</h11> Campo Obrigatório </p>
</div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-2 control-label" for="Nome">Nome <h11>*</h11></label>  
  <div class="col-md-8">
  <input id="name" name="name" placeholder="" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" required="" type="text">
  @if ($errors->has('name'))
      <span class="invalid-feedback">
          <strong>{{ $errors->first('name') }}</strong>
      </span>
  @endif
  </div>
</div>
<div class="form-group">
  <label class="col-md-2 control-label" for="password">Senha <h11>*</h11></label>  
  <div class="col-md-8">
  <input id="password" name="password" placeholder="" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" required="" type="password">
  @if ($errors->has('password'))
      <span class="invalid-feedback">
          <strong>{{ $errors->first('password') }}</strong>
      </span>
  @endif
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-2 control-label" for="Nome">CPF <h11>*</h11></label>  
  <div class="col-md-2">
  <input id="cpf" name="cpf" placeholder="Apenas números" class="form-control input-md" required="" type="text" maxlength="11" pattern="[0-9]+$">
  </div>
  
  

<!-- Multiple Radios (inline) -->


<!-- Prepended text-->
<div class="form-group">
  <label class="col-md-2 control-label" for="prependedtext">Telefone <h11>*</h11></label>
  <div class="col-md-2">
    <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
      <input id="telefone" name="telefone" class="form-control" placeholder="XX XXXXX-XXXX" required="" type="text" maxlength="13" pattern="\[0-9]{2}\ [0-9]{4,6}-[0-9]{3,4}$"
      @if ($errors->has('telefone'))
        <span class="invalid-feedback">
            <strong>{{ $errors->first('telefone') }}</strong>
        </span>
      @endif
      OnKeyPress="formatar('## #####-####', this)">
    </div>
  </div>
 </div> 

<!-- Prepended text-->
<div class="form-group">
  <label class="col-md-2 control-label" for="prependedtext">Email </label>
  <div class="col-md-5">
    <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
      <input id="email" name="email" class="form-control" placeholder="email@email.com" required="" type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" >
      @if ($errors->has('email'))
        <span class="invalid-feedback">
            <strong>{{ $errors->first('email') }}</strong>
        </span>
      @endif
    </div>
  </div>
</div>


<!-- Search input-->

<!-- Prepended text-->
<div class="form-group">
  <label class="col-md-2 control-label" for="prependedtext">Endereço</label>
  <div class="col-md-4">
    <div class="input-group">
      <span class="input-group-addon">Rua</span>
      <input id="rua" name="rua" class="form-control" placeholder="" required="" type="text">
      @if ($errors->has('rua'))
        <span class="invalid-feedback">
            <strong>{{ $errors->first('rua') }}</strong>
        </span>
      @endif
    </div>
    
  </div>
    <div class="col-md-2">
    <div class="input-group">
      <span class="input-group-addon">Nº <h11>*</h11></span>
      <input id="numero" name="numero" class="form-control" placeholder="" required=""  type="numeric">
      @if ($errors->has('numero'))
        <span class="invalid-feedback">
            <strong>{{ $errors->first('numero') }}</strong>
        </span>
      @endif
    </div>
    
  </div>
  
  <div class="col-md-3">
    <div class="input-group">
      <span class="input-group-addon">Bairro</span>
      <input id="bairro" name="bairro" class="form-control" placeholder="" required="" type="text">
      @if ($errors->has('bairro'))
        <span class="invalid-feedback">
            <strong>{{ $errors->first('bairro') }}</strong>
        </span>
      @endif
    </div>
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-2 control-label" for="prependedtext"></label>
  <div class="col-md-4">
    <div class="input-group">
      <span class="input-group-addon">Cidade</span>
      <input id="cidade" name="cidade" class="form-control" placeholder="" required=""   type="text">
      @if ($errors->has('cidade'))
        <span class="invalid-feedback">
            <strong>{{ $errors->first('cidade') }}</strong>
        </span>
      @endif
    </div>
    
  </div>
  
   <div class="col-md-2">
    <div class="input-group">
      <span class="input-group-addon">Estado</span>
      <input id="uf" name="uf" class="form-control" placeholder="" required=""   type="text">
      @if ($errors->has('uf'))
        <span class="invalid-feedback">
            <strong>{{ $errors->first('uf') }}</strong>
        </span>
      @endif
    </div>
    
  </div>
</div>
<div class="form-group">
    
  <label class="col-md-2 control-label" for="selectbasic">Nivel*</label>
  
  <div class="col-md-3">
    <select required id="nivel" name="nivel" class="form-control">
    <option value=""></option>
      <option value="0">Cliente</option>
      <option value="1">Administrador</option>
    </select>
  </div>
</div>
<!-- Select Basic -->  
  </div>
 
 
<!-- Button (Double) -->
<div class="form-group">
  <label class="col-md-2 control-label" for="Cadastrar"></label>
  <div class="col-md-8">
    <button id="Cadastrar" name="Cadastrar" class="btn btn-success" type="Submit">Cadastrar</button>
    <button id="Cancelar" name="Cancelar" class="btn btn-danger" type="Reset">Cancelar</button>
  </div>
</div>

</div>
</div>


</fieldset>
</form>

</body>
</html>