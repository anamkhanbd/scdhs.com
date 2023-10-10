@extends('layout.main')
@push('title')
    <title>Student Cafinet </title>
@endpush
@section('main.section')
    
<div class="container">
    <div class="col-sm-12 col-12" id="mainpage">
     <div class="row">
   
      <div class="col-sm-9 col-12">
   
   
        <div class="col-sm-12 col-12 p-0"  data-aos="fade-in" data-aos-duration="2000" >
          <ul class="list-group p-0">
           <li class="list-group-item font-weight-bold bg-success text-light" id="about">ছাত্র / ছাত্রী ক্যাবিনেট নিউজ</li>
         </ul>
         <li class="list-group-item pb-5">
   
                           <div class="row mt-3 border p-3">
             <div class="col-md-3 col-12">
               <img src="{{url('images/150522_09_40_13.jpg')}}" class="img-fluid" style="max-height: 300px;">
             </div>   
             <div class="col-md-9 col-12">
               <h4><a href="#" class="text-dark">Students Cabinet</a></h4>
               <span style="color: gray;">2022-05-15</span><br><br>
               <span><h2 style="font-family: Tahoma, Geneva, sans-serif; font-weight: bold; line-height: 1.1; color: rgb(51, 51, 51); margin-bottom: 0px; font-size: 18px; border: 0px; padding: 0px; text-align: justify;">ভুমিকাঃ</h2><p><br style="color: rgb(51, 51, 51); font-family: Tahoma, Geneva, sans-ser...</span><br>
               
             </div>          
           </div>
   
                   
   
           <div class="float-right mt-4">
             
           </div>
   
   
   
         </li>
   
   
   
       </div>
     </div>
@endsection

