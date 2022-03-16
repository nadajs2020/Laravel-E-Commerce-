@if(\Illuminate\Support\Facades\Session::has('success'))
   {{-- <div class="card shadow bg-success text-white mb-3">
       <div class="card-body"> --}}
       <div class="alert alert-success">
           <p class="m-0 text-white">
               {{\Illuminate\Support\Facades\Session::get('success')}}
           </p>
       </div>
       {{-- </div>
   </div> --}}
@endif
