<x-app-layout>
   
</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
   @include("admin.admincss")
  </head>
  <body>
  <div class="container-scroller">
    @include("admin.navbar")

    <div style="position: relative; top: 60px; right: -100px">
    <form action="{{url('/update',$data->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        <div>
            <label>Title</label>
            <input style="color:black;" type="text" name= "title" value="{{$data->title}}" required>
        </div>
        <div>
            <label>Price</label>
            <input style="color:black;" type="num" name= "price" value="{{$data->price}}" required>
        </div>
       
        <div>
            <label>Description</label>
            <input style="color:black;" type="text" name= "description" value="{{$data->description}}" required>
        </div>
        <div>
            <label>Old Image</label>
            <img height="200px" width="200px" src="/foodimage/{{$data->image}}">
        </div>
        <div>
            <label>New Image</label>
            <input type="file" name="image" required>
        </div>
        <div>
            <input style="color:black;background-color: white" type="submit" value= "Save">
        </div>  
        </div>
    </form>
</div>

</div>
    
    @include("admin.adminscript")
  </body>
</html>
