<x-layouts.admin-dash>

      <div class="row">
        
            <div class="col-4 mt-5">
                  @if ($msg = Session::get('success'))
                        <div class="alert alert-success">{{$msg}} </div>
                  @endif
                  
                  <a class="ml-5 btn btn-outline-dark mb-3" href="{{route('allCourcePage')}}">Back</a>

               <form action="{{route('addCourcePost')}}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="mb-3 ml-5" >
                        <label for="exampleFormControlInput1" class="form-label">Title</label>
                        <input name="title" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Title">
                        @error('title')
                              <p class="text-danger">{{$message}}</p>
                        @enderror
                  </div>
                  
                      <div class="mb-3 ml-5" >
                        <label for="exampleFormControlInput1" class="form-label">Price</label>
                        <input name="price" type="text" class="form-control"  placeholder="Enter Price">
                        @error('price')
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
                      @error('image')
                            <p class="text-danger">{{$message}}</p>
                      @enderror
                  </div>
                  
                      <button type="submit" class="ml-5 btn btn-outline-success ">Add Cource</button>
                  </form>
            </div>
      </div>

</x-layouts.admin-dash>