@if ($errors->any())
<div class="col-sm-12">
  <div class="alert alert-warning">
     @foreach($errors->all() as $error)
     <p>{{ $error }}</p>
      @endforeach
  </div>
</div> 
@endif

@if (session('success'))
<div class="col-sm-12">
   <div class="alert alert-success"> 
   	   {{ session('success') }}
   </div>
</div>    
@endif

@if (session('error'))
<div class="col-sm-12">
   <div class="alert alert-danger"> 
   	   {{ session('error') }}
   </div>
</div>
@endif