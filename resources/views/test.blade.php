@php
    $user = "ashok negi";
    $fruits = ['apple','banana','graphs','banana'];
@endphp


<script>
    // var data = @json($user);        this is first way to use php variable
    // var data = {{ Js::from($user)  }};     this is second  options it is blade template options 
    // console.log(data);


    // conver php array in js 
    // var  data  = @json($fruits);  // this is first option
    var data = {{ Js::from($fruits) }};

    data.forEach(function(value){
        console.log(value);
    });
  



</script>