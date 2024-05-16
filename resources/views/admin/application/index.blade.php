
<x-layouts.main>
    <h3 class="d-flex justify-content-center mt-4">
        <p>Kursni Sotib Olish Haqida Xabar Yuborish</p>
    </h3>
    <div class="d-flex justify-content-center">
        <div class="col-4 mt-5">

            <a class="btn btn-outline-dark mb-4 ml-5" href="{{route('home.page')}}">Orqaga</a>

            @if(Session::get('success'))
                <div class="alert alert-success">{{Session::get('success')}}</div>
            @endif
            <form action="{{route('applications.store')}}" method="POST" enctype="multipart/form-data" >
                @csrf
                <div class="mb-3 ml-5" >
                    <label for="exampleFormControlInput1" class="form-label">Ismingiz</label>
                    <input name="name" type="text" class="form-control" placeholder=" Ismingiz">
                    @error('name')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-3 ml-5" >
                    <label for="exampleFormControlInput1" class="form-label">Raqamingiz</label>
                    <input name="phone_number" type="text" class="form-control" placeholder="Raqamingiz">
                    @error('phone_number')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-3 mt-5 ml-5">
                    <label for="exampleFormControlTextarea1" class="form-label">Xabar Yozish</label>
                    <textarea name="description" class="form-control" rows="3"></textarea>
                    @error('description')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>

                <button type="submit" class=" ml-5 btn btn-outline-success mb-4">Yuborish</button>
            </form>
        </div>
    </div>

</x-layouts.main>
