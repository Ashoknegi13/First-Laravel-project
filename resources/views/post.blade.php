 @extends('layout/masterlayout')

 @section('content')
      <h2>POST page </h2><br>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum quaerat saepe debitis odit earum dolores delectus. Ex numquam similique cum aliquid nobis, voluptates quasi dolorem expedita pariatur delectus dicta blanditiis.</p>
 @endsection


 @section('sidebar')
    @parent
      <p>  hii post page</p>
 @endsection
 


 
@prepend('style')
      <style>
        #container{
          background-color: tan;
        }
      </style>
@endprepend