@extends('Welcome')
@section('content')
<center>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<!-- Button trigger modal -->
<button type="button" class="btn btn-outline-danger fw-bold fs-4 rounded-pill" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
 Add Item
</button>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
         <form action="insertData"method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-2">
                <input type="text"placeholder="Enter Book name"class="form-control"name="pname"id="">
            </div>
            <div class="mb-2">
                <input type="text"placeholder="Enter Book price"class="form-control"name="pprice"id="">
            </div>
            <div class="mb-2">
                <input type="file"name="image"class="form-control"name=""id="">
            </div>
            <button type="submit"class="btn btn-outline-danger fw-bold fs-4 rounded-pill">Add record</button>
         </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>

      </div>
    </div>
  </div>
</div>

</center>
<div class="container">
<table class="table mt-5">
<thead class="bg-danger text-white fw-bold" >
<th>Id </th>
  <th>Book name </th>
  <th>Book Price </th>
  <th>Book Image </th>
  <th>Update </th>
  <th>Delete </th>
</thead>
<tbody class="text-danger bg-light fs-4">
@foreach($data as $item)


<tr>
  <form action="Updatedelete"method="get">
  <td class="pt-5"><input type="hidden"name="id"value="{{$item['Id']}}">{{$item['Id']}}</td>
  <td class="pt-5"><input type="hidden"name="name"value="{{$item['Pname']}}">{{$item['Pname']}}</td>
  <td class="pt-5"><input type="hidden"name="price"value="{{$item['PPrice']}}">{{$item['PPrice']}}</td>
  <td class="pt-5"><img src="images/{{$item['PImage']}}" width="100px"height="100px"alt=""></td>
  <td class="pt-5"><input type="submit"value="Update"name="Update"class="btn btn-outline-danger rounded-pill"></td>
  <td class="pt-5"><input type="submit"value="Delete"name="Delete"   class="btn btn-outline-danger rounded-pill"></td>
  </form>

</tr>
@endforeach
</tbody>
</table>
</div>
@endsection
