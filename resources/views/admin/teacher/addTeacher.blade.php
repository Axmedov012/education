<x-layouts.admin-dash>

      <div class="row">

            <div class="col-4 mt-5">

                 <a class="btn btn-outline-dark mb-3 ml-5" href="{{route('allTeacherPage')}}">Back</a>

                  <form action="{{route('addTeacherPost')}}" method="post" enctype="multipart/form-data" >
                  @csrf
                  <div class="mb-3 ml-5" >
                        <label for="exampleFormControlInput1" class="form-label">Name</label>
                        <input name="name" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Title">
                        @error('name')
                              <p class="text-danger">{{$message}}</p>
                        @enderror
                  </div>

                  <div class="mb-3 ml-5" >
                      <label for="exampleFormControlInput1" class="form-label">Job</label>
                      <input name="job" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Title">
                      @error('job')
                      <p class="text-danger">{{$message}}</p>
                @enderror
                  </div>

                      <div class="mb-3 mt-5 ml-5">
                        <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                        <textarea name="description" class="form-control" rows="3"></textarea>
                        @error('description')
                        <p class="text-danger">{{$message}}</p>
                  @enderror
                  </div>

                  <div class="mb-3 ml-5" >
                        <label for="exampleFormControlInput1" class="form-label">Image</label>
                        <input name="image" type="file" class="form-control">
                      </div>


                      <button type="submit" class="ml-5 btn btn-outline-success ">Add Teacher</button>
                  </form>
            </div>
      </div>

</x-layouts.admin-dash>
