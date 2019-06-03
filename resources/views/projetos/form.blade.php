@include('template.formulario.text',['label'=> 'Titulo','class'=>'col-sm-2 col-form-label','input' => 'titulo', 'attributes' => ['required','placeholder'=> '','class'=> 'form-control ']])
@include('template.formulario.text',['label'=> 'Subtitulo','class'=>'col-sm-2 col-form-label','input' => 'subtitulo', 'attributes' => ['required','placeholder'=> '','class'=> 'form-control ']])
@include('template.formulario.textarea',['label'=> 'Descricao','class'=>'col-sm-2 col-form-label','input' => 'descricao', 'attributes' => ['required','placeholder'=> '','class'=> 'form-control ']])
@include('template.formulario.file',['label'=> 'Imagem','class'=>'col-sm-2 col-form-label','input' => 'image', 'attributes' => ['placeholder'=> '','class'=> 'form-control ']])


<div class="form-group row">
<label class="col-sm-2 col-form-label"></label>
@if(isset($projeto->imagem))

    <img width="300" height="300" src="{{ asset($projeto->imagem) }}"> 
@endif

</div>