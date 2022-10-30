<x-header>
	

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>



<div class="list">
@foreach($data as $item)
@if($item->status == 0)
<div class="row">
<div class="col-2"></div>

    <div class="col-1">
    <style>
      img{
        border: 1px solid gray;
      }
    </style>
    <img   height="80px" width="80px" src="{{ asset('images/'.$item->product->image)}}" alt="">
   

    </div>
    
    <div class="col-5">

  
    
    <div class="card border-success mb-3" style="max-width: 80rem;">
     <div class="card-header bg-transparent border-success">  
     {{  $item->product->name}}   
  </div>
    <div class="card-body">
    <class="card-title"> 
      
      {{ number_format($item->money) }} VND 
      <br>
	  {{$item->lastName }} {{ $item->firstsName }}-{{$item->telephone }} - {{$item->address }}
	<br>
     x{{ $item->soluong}}
	

  </div>


  
</div>

<!-- endd d -->

    </div>
  
    <div class="col-2">
    <form action="{{ url('order/'.$item->id)}}" method="post">
    @method('PUT')
    @csrf
      
    <button type="submit" class="btn btn-danger">Hủy đơn hàng</button>
    </form>
    </div>
   
</div>
</div>
@endif
    @endforeach

  
</body>

</html>
</x-header>



