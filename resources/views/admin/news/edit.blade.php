<x-layouts.admin-dash>

      <div class="row">
            <div class="col-4 mt-5">
               
               <a class="btn btn-outline-dark mb-3 ml-5" href="{{route('allNewsPage')}}">Back</a>
                  
               <form action="{{route('updateNewsPost')}}" method="POST" enctype="multipart/form-data">
                  @csrf
      
                  <div class="mb-3 ml-5" >
                        <label for="exampleFormControlInput1" class="form-label">Title</label>
                        <input name="title" type="text"  value="{{$news->title}}" class="form-control"  placeholder="Enter Title">
                      </div>
                                  
                      <div class="mb-3 mt-5 ml-5">
                        <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                        <textarea name="description" class="form-control" rows="3">{{$news->description}}</textarea>
                  </div>
                  
                  <div class="mb-3 ml-5" >
                        <label for="exampleFormControlInput1" class="form-label">Image</label>
                        <input name="image" type="file" class="form-control">
                        <img src="{{asset('asset/newsImg/'.$news->image)}}" width="100" height="100">
                      </div>
                          <!-- hidden  id chaqirish  -->
                      <input type="hidden" value="{{ $news->id }}" name="newsId" >
                  
                      <button type="submit" class="ml-5 btn btn-outline-success ">Edit News</button>
                  </form>
            </div>
      </div>

</x-layouts.admin-dash>