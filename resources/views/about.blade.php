 @extends('layout/masterlayout')

 
@section('content')
        <h2>About page</h2>
           @verbatim
           <div id="app">{{ message }}</div>                   
           @endverbatim  
 @endsection



 @section('title')
        about
@endsection



  

@push('script')
<script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>



<script>
  const { createApp, ref } = Vue

  createApp({
    setup() {
      const message = ref('Hello from ashok vue!')
      return {
        message
      }
    }
  }).mount('#app')
</script>
@endpush