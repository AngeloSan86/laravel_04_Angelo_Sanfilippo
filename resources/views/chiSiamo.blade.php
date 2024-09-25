<x-layout>
  <x-navbar />


    <div class="container-fluid">
        <div class="row h-75 align-items-center justify-content-center mt-5">

            <div class="col-12">

                <h1 class="text-center">Chi Siamo?</h1>

            </div>

        </div>
    </div>

    <div class="row justify-content-center align-items-center">
 

          @foreach ($members as $member)
          <div class="col-12 col-md-3 py-5">
            <div class="card mx-auto" style="width: 18rem;">
              <img src="https://picsum.photos/200" class="card-img-top" alt="Immagine casuale">
              <div class="card-body">
                <h5 class="card-title">{{$member['role']}}</h5>
                <p class="card-text">{{$member['name']}}.</p>
                <a href="{{route('details', ['id'=>$member['id']])}}" class="btn btn-primary">More info</a>
              </div>
            </div>
          </div>
          @endforeach




    </div>

    </div>
    
</x-layout>