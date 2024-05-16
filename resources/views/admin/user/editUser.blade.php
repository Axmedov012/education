<x-layouts.admin-dash>

      <div class="row">
            <div class="col-4 mt-5">

                  <a class="btn btn-outline-dark mb-4 ml-5" href="{{route('allUserPage')}}">Back</a>

               <form action="{{route('updateUserPost')}}" method="POST"  >
                  @csrf
                  <div class="mb-3 ml-5" >
                        <label  class="form-label">name</label>
                        <input name="name" type="text" value="{{$user->name}}" class="form-control"  placeholder="Enter name">
                        @error('name')
                             <p class="text-danger">{{$message}}</p>
                        @enderror
                   </div>
                  
                  <div class="mb-3 ml-5" >
                        <label  class="form-label">email</label>
                        <input name="email" type="email" value="{{$user->email}}" class="form-control">
                        @error('email')
                              <p class="text-danger">{{$message}}</p>
                        @enderror
                  </div>
                  <input type="hidden" name="userId" value="{{$user->id}}">

                      <button type="submit" class="ml-5 btn btn-outline-success ">Edit User</button>
                  </form>
            </div>
      </div>

</x-layouts.admin-dash>