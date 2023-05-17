@extends('welcome')

@section('content')
<center> 
<!-- Button trigger modal -->
<button type="button" class="btn btn-outline-danger fw-bold fs-4 rounded-pill"  data-bs-toggle="modal" data-bs-target="#staticBackdrop">
  Add Record
</button>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">CRUD</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="insertData" method ='POST' enctype="multipart/form-data">
            @csrf
            <div class="mb-2">
                <input type ="text" placeholder ="enter Product Name" class ="form-control" name="pname" id ="">
      </div>
      <div class="mb-2">
                <input type ="text" placeholder ="enter Product Price" class ="form-control" name="pprice" id ="">
      </div>
      <div class="mb-2">
                <input type ="file"   name ="image" class ="form-control" name="" id ="">
      </div>
      <button type ="Submit " class="btn btn-outline-danger fw-bold fs-4 rounded-pill"> Add Record </button> 
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
</center>
<div class="container">
<table class ="table mt-5" >
    <thead class ="bg-danger text-white fw-bold" >
        <th> Id</th>
        <th> Product Name </th>
        <th> Product Price </th>
        <th> Product Image </th>
        <th> Update </th>
        <th> Delete</th>             

</thead>
<tbody>

@foreach($data as $item)
<tr>
  <form action="updatedelete" method="get">
   <td ><input type ="hidden" name="id" value="{{$item['Id']}}">{{$item['Id']}} </td>
   <td> <input type ="hidden"   name=" name" value="{{$item['PName']}}">{{$item['PName']}} </td>
   <td><input type ="hidden"  name =" price" value="{{$item['PPrice']}}">{{$item['PPrice']}} </td>
   <td><img src="images/{{$item['PImage']}}"> </td>
<td class="pt-5"><input type="submit" class ="btn btn-outline-danger rounded-pill"  name ="update "value = "Update"></td>
<td class="pt-5"><input type="submit" class ="btn btn-outline-danger rounded-pill" value = "delete"></td>
</form>
</tr>
@endforeach
</tbody>

</table>
</div>
@endsection