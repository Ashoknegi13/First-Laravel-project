@php
    $fruits = ['one'=>'apple','two'=>'banana','three'=>'orange','four'=>'graphs'];
     
@endphp

@include('pages.header',['names'=>$fruits] )
<h1>Hello World</h1>

@include("pages.footer")

@includeif("pages.contant")
 








{{-- using @includeWhen  and @includeUnless function to give condition wehn we include file --}}
{{--  include = yes                               @includeWhen(empty($value),"pages.header",['names'=> $fruits]) --}}
{{--  include = no                                @includeWhen(!empty($value),'pages.header',['name'=> $fruits]) --}}

{{--  include = no                                @includeUnless(empty($value),'pages.header',['name'=> $fruits]) --}}
{{--  include = yes                                @includeUnless(!empty($value),'pages.header',['name'=> $fruits]) --}}








  {{--
 {{ 10 + 35 }}
 
 <br><br>

 {{ "This is blade tenmplate syantax" }}

 {!! "<h1>This is blade tenmplate syantax</h1>"   !!}

 {{-- {!! "<script>alert('ashok negi')</script>"  !!} --}}  
 {{-- use ctrl +  /   for comment 

@php
    $age = 18 ;
    $name = ['ashok','ankit','anita','rahul','saurabh','ashok','ankit','anita','rahul','saurabh'];
@endphp


 @foreach ($name as $data )
        @if($loop->even)       
           <li style="color: red">{{ $data }}</li> 
        @elseif ($loop->odd)
           <li style="color: green">{{ $data  }}
        @else   
            <li>{{ $data }}</li>
        @endif 

@endforeach --}}


























 
 

 