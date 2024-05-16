<x-layouts.admin-dash>

      <div class="row">
          
            <div class="col-4 mt-5">
               
                  <a class="btn btn-outline-dark mb-3 ml-5" href="{{route('allTeacherPage')}}">Back</a>

               <form action="{{route('updateTeacherPost')}}" method="POST" enctype="multipart/form-data" >
                  @csrf
                  <div class="mb-3 ml-5" >
                        <label for="exampleFormControlInput1" class="form-label">Name</label>
                        <input name="name" type="text" value="{{$teachers->name}}" class="form-control"  placeholder="Enter Title">
                      </div>
                  
                  <div class="mb-3 ml-5" >
                      <label for="exampleFormControlInput1" class="form-label">Job</label>
                      <input name="job" type="text" value="{{$teachers->job}}" class="form-control"  placeholder="Enter job">
                  </div>

                      <div class="mb-3 mt-5 ml-5">
                        <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                        <textarea name="description" class="form-control" rows="3">{{$teachers->description}}</textarea>
                  </div>
                  
                  <div class="mb-3 ml-5" >
                        <label for="exampleFormControlInput1" class="form-label">Image</label>
                        <input name="image" type="file" class="form-control">
                        <img src="{{asset('asset/teacherImg/'.$teachers->image)}}" width="100" height="100">    
                  </div>
                        <input type="hidden" name="teacherId" value="{{$teachers->id}} ">

                      <button type="submit" class="ml-5 btn btn-outline-success ">Edit Teacher</button>
                  </form>
            </div>
      </div>

</x-layouts.admin-dash>