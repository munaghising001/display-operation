
@extends('welcome')

@section('content')

<!-- <center> -->
<div class="col-md-4 m-auto border mt-3 p-2 border-info ">
    <h2 class ="text-center text-warning"> Update View</h2>

<form action="update" method="get">

<div class="mb-2 ">

    <label for="">Product Name</label>

    <input type="text" name ="name" value="{{$pname}}" class="form-control" id="">

</div>
<div class="mb-2 ">

    <label for="">Product Price</label>

    <input type="text" name ="price" value = "{{$pprice}}"  class="form-control" id="">

</div>
<br>
<input type="text" name ="" value="{{$pid}}"> 
<button type ="submit" class ="btn btn-outline-warning rounded-p">update</button>
</form>
</div>
<!-- <center> -->

 @endsection