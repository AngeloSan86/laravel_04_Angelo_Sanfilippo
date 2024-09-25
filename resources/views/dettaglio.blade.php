<x-layout>
<x-navbar />


    <div class="container-fluid vh-100">
        <div class="row h-75 align-items-center justify-content-center">

            <div class="col-12 align-items-center justify-content-center mx-auto">

                <h1 class="text-center">{{$membro['role']}}</h1>

                <h3 class="text-center">{{$membro['name']}}</h3>



            </div>

      
            <div class="d-flex align-items-center justify-content-center mx-auto">
                <button>
                    <a class="nav-link" href="{{route('about')}}">Back</a>
                </button>

            </div>




            
        </div>




    </div>

    </div>
    

</x-layout>