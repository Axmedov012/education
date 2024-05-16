<x-layouts.admin-dash>

      <div class="row">
            <div class="col-4 mt-5">
               <a class="btn btn-outline-dark mb-4 ml-3" href="{{route('allCourcePage')}}">Back</a>
                  
               <form action="{{route('updateCourcePost')}}" method="POST" enctype="multipart/form-data">

                  @csrf
                  <div class="mb-3 ml-5" >
                        <label for="exampleFormControlInput1" class="form-label">Title</label>
                        <input name="title" type="text"  value="{{$course->title}}" class="form-control" id="exampleFormControlInput1" placeholder="Enter Title">
                      </div>
                  
                      <div class="mb-3 ml-5" >
                        <label for="exampleFormControlInput1" class="form-label">Price</label>
                        <input name="price" type="text" value="{{$course->price}}" class="form-control"  placeholder="Enter Price">
                      </div>
                  
                      <div class="mb-3 mt-5 ml-5">
                        <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                        <textarea name="description" class="form-control" rows="3">{{$course->description}}</textarea>
                  </div>
                  
                  <div class="mb-3 ml-5" >
                        <label for="exampleFormControlInput1" class="form-label">Image</label>
                        <input name="image" type="file" class="form-control">
                        <img src="{{asset('asset/img/'.$course->image)}}" width="100" height="100">
                      </div>
                          <!-- hidden  id chaqirish  -->
                      <input type="hidden" value="{{ $course->id }}" name="courceId" >
                  
                      <button type="submit" class="ml-5 btn btn-outline-success ">Edit Cource</button>
                  </form>
            </div>
      </div>

</x-layouts.admin-dash>