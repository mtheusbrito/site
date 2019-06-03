@if(session('success'))
@if(session('success')['success'])

  <div class="alert alert-success alert-dismissible fade show" role="alert"> 
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      </h4> {{ session('success')['messages']}}
      
    </div>

@else


  <div class="alert alert-danger alert-dismissible fade show" role="alert" > 
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      </h4> {{ session('success')['messages']}}
      
</div>
@endif
@endif
