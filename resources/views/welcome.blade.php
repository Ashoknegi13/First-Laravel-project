 @extends('layout/masterlayout')


 {{-- @section('content')
    <h1>Home page </h1>     
   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae, aspernatur exercitationem a repellendus esse minima officiis enim est cumque excepturi nesciunt aliquid omnis temporibus tenetur quae odit ipsam natus nihil!</p>
 
@endsection --}}

@section('title')
        home
@endsection



@section('sidebar')
    @parent
    <p> this is side bar </p>
@endsection


@push('script')
    <script src="/example.js"></script>
    <script src="/view.js"></script>
@endpush

 

@push('style')
    <link rel="stylesheet" href="css/bootstrap.css">
@endpush



@prepend('style')
        <style>
            #aside{
                background-color: tan;
            }
        </style>
@endprepend