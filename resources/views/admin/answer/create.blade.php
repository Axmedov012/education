<x-layouts.admin-dash>

    <div class="row">
        <div class="col-4 mt-5">

            <form action="{{route('answer.store',['application'=>$application->id])}}" method="POST" enctype="multipart/form-data">
                @csrf
                <h2>Answer ID : {{ $application->id }}</h2>
                <div class="mb-3 ml-5" >
                   <textarea name="body"></textarea>
                </div>

                     <button type="submit" class="ml-5 btn btn-outline-success ">Javob berish</button>

                <a href="{{route( 'answer.index' )}}" class="btn btn-outline-danger ml-3">Cancel</a>
            </form>
        </div>
    </div>

</x-layouts.admin-dash>
