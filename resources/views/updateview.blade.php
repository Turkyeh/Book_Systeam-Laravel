@extends('welcome')
@section('content')


<div class="col-md-4 m-auto border mt-3 p-2 border-info">
   <h2 class="text-center text-warning">Update </h2>
 <form action="updatedata" method="get">
 <div class="mb-2">
    <label for="">Product Name </label>
    <input type="text"name="name"value="{{$Pname}}"class="form-control"id="">
 </div>
 <div class="mb-2">
    <label for="">Product Price </label>
    <input type="text"name="price"value="{{$PPrice}}"class="form-control"id="">
 </div>
 <br>
 <input type="hidden" name="" value="{{$Pid}}">
 {{-- you can youse this to search  --}}
 <button type="submit" class="btn btn-outline-warning rounded-pill">Update</button>
 </form>

</div>

@endsection
