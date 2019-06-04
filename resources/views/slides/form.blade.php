@include('template.formulario.text',['label'=> 'Titulo','class'=>'col-sm-2 col-form-label','input' => 'titulo', 'attributes' => ['required','placeholder'=> '','class'=> 'form-control ']])
@include('template.formulario.text',['label'=> 'Texto','class'=>'col-sm-2 col-form-label','input' => 'texto', 'attributes' => ['required','placeholder'=> '','class'=> 'form-control ']])
@include('template.formulario.file',['label'=> 'Imagem','class'=>'col-sm-2 col-form-label','input' => 'image', 'attributes' => ['placeholder'=> '','class'=> 'form-control ']])


<div class="form-group row">
<label class="col-sm-2 col-form-label"></label>
@if(isset($slide->imagem))

    <img width="300" height="300" src="{{ asset($slide->imagem) }}"> 
@endif

</div>