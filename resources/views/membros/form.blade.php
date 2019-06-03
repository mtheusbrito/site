@include('template.formulario.text',['label'=> 'Nome','class'=>'col-sm-2 col-form-label','input' => 'nome', 'attributes' => ['required','placeholder'=> '','class'=> 'form-control']])
@include('template.formulario.email',['label'=> 'Email','class'=>'col-sm-2 col-form-label','input' => 'email', 'attributes' => ['required','placeholder'=> '','class'=> 'form-control']])
@include('template.formulario.text',['label'=> 'Cargo','class'=>'col-sm-2 col-form-label','input' => 'cargo', 'attributes' => ['required','placeholder'=> '','class'=> 'form-control']])

@include('template.formulario.textarea',['label'=> 'Descrição','class'=>'col-sm-2 col-form-label','input' => 'descricao', 'attributes' => ['required','placeholder'=> '','class'=> 'form-control']])
@include('template.formulario.file',['label'=> 'Avatar','class'=>'col-sm-2 col-form-label','input' => 'image', 'attributes' => ['placeholder'=> '','class'=> 'form-control ']])


<div class="form-group row">
<label class="col-sm-2 col-form-label"></label>
@if(isset($membro->avatar))

    <img width="100" height="100" src="{{ asset($membro->avatar) }}"> 
@endif

</div>