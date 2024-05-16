
<x-layouts.main>


<x-navbar>

</x-navbar>

  <x-1header>

  </x-1header>

<!--
   <x-2category>
  </x-2category>

  <x-3instructor>
</x-3instructor>
-->



<x-4bestEdu>

</x-4bestEdu>


<!-- cource -->
<div class="untree_co-section bg-light">
  <div class="container">
    <div class="row justify-content-center mb-5">
      <div class="col-lg-7 text-center" data-aos="fade-up" data-aos-delay="0">
        <h2 class="line-bottom text-center mb-4">The Right Course For You</h2>
        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
      </div>
    </div>
    <div class="row">

      @foreach ($courses as $cource)

      <div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-4 mb-lg-0">
        <div class="custom-media">
          <a href="#"><img src="{{asset('asset/img/'.$cource->image)}}" alt="Image" class="img-fluid"></a>
          <div class="custom-media-body">
            <div class="d-flex justify-content-between pb-3">
              <div class="text-primary"><span class="uil uil-book-open"></span> <span>43 lesson</span></div>
              <div class="review"><span class="icon-star"></span> <span>4.8</span></div>
            </div>
            <h3>{{$cource->title}}</h3>
            <p class="mb-4">{{$cource->description}}</p>
            <div class="border-top d-flex justify-content-between pt-3 mt-3 align-items-center">
              <div><span class="price">{{$cource->price}}</span></div>
              <div><a href="{{route('applications.index')}}">Learn More</a></div>
            </div>
          </div>
        </div>
      </div>

      @endforeach

      </div>
    </div>
  </div>
</div>

<!-- end cource -->



 <!--  About as -->
<div class="untree_co-section">
  <div class="container">
    <div class="row justify-content-between">
      <div class="col-lg-5 mb-5">
        <h2 class="line-bottom mb-4" data-aos="fade-up" data-aos-delay="0">About Us</h2>
        <p data-aos="fade-up" data-aos-delay="100">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
        <ul class="list-unstyled ul-check mb-5 primary" data-aos="fade-up" data-aos-delay="200">
          <li>Separated they live</li>
          <li>Bookmarksgrove right at the coast</li>
          <li>large language ocean</li>
        </ul>

        <div class="row count-numbers mb-5">
          <div class="col-4 col-lg-4" data-aos="fade-up" data-aos-delay="0">
            <span class="counter d-block"><span data-number="12023">0</span><span>+</span></span>
            <span class="caption-2">No. Students</span>
          </div>
          <div class="col-4 col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <span class="counter d-block"><span data-number="12" >0</span><span></span></span>
            <span class="caption-2">No. Teachers</span>
          </div>

        </div>

        <p data-aos="fade-up" data-aos-delay="200">
          <a href="#" class="btn btn-primary mr-1">Admission</a>
          <a href="#" class="btn btn-outline-primary">Learn More</a>
        </p>
      </div>
      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
        <div class="bg-1"></div>
          <span class="play-wrap"><span class="icon-play"></span></span>
          <img src="{{asset('asset/images/img-school-4-min.jpg')}}" alt="Image" class="img-fluid rounded">
        </a>
      </div>
    </div>
  </div>
</div>

 <!-- end About as -->


           <!--  News Page   -->
<div class="container">
  <div class="row justify-content-center mb-5">
    <div class="col-lg-7 text-center" data-aos="fade-up" data-aos-delay="0">
      <h2 class="line-bottom text-center mb-4">School News</h2>
      <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
    </div>
  </div>

    @foreach ($news as $new)


  <div class="row align-items-stretch">
    <div class="col-lg-6"  data-aos="fade-up" data-aos-delay="100">
      <div class="media-h d-flex h-100">

        <figure>
          <img src="{{asset('asset/newsImg/'.$new->image)}}" alt="Image">
        </figure>

        <div class="media-h-body">
          <h2 class="mb-3"><a href="#">{{$new->title}}</a></h2>
          <div class="meta mb-2"><span class="icon-calendar mr-2"></span><span>{{$new->created_at}}</span></div>

          <p>{{$new->description}}</p>

          <p><a href="#">Learn More</a></p>
        </div>
      </div>
    </div>

  </div>

  @endforeach


</div>
</div>
 <!-- end News  -->



<x-9pricing>

</x-9pricing>

<x-10chooseUs>

</x-10chooseUs>

  </x-layouts.main>
