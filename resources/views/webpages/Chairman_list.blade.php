@extends('layout.main')
@push('title')
    <title>Chirman List </title>
@endpush
@section('main.section')
            
                <div class="container">
                    <div class="col-sm-12 col-12" id="mainpage">
                    <div class="row">
                
                    <div class="col-sm-9 col-12">
                
                        <ul class="list-group p-0">
                        <li class="list-group-item">
                        <span class="student"><span uk-icon="icon: info; ratio: 1.2"></span>&nbsp;&nbsp;চেয়ারম্যান তালিকা</span>
                        </li>
                
                        <li class="list-group-item">
                        <div class="col-sm-12 col-12 p-0">
                            <div class="row">
                
                                                    <div class="col-sm-6 col-12 mt-3" data-aos="fade-right" data-aos-duration="2000">
                                <table class="table table-bordered "id="studenttable">
                                <tr>
                                    <td rowspan="4">
                                    <center><img src="{{url('/images/1741228026638994.jpg')}}" class="img-fluid" id="" style="width: 100px;height: 100px"><br></center>
                                </td>
                                <th>Name</th>
                                <td>মোহাম্মদ সামসুল হক</td>
                                </tr>
                
                                <tr>
                                <th>Designation</th>
                                <td>চেয়ারম্যান</td>
                                </tr>
                                <tr>
                                <th>Mobile</th>
                                <td>01819329055</td>
                                </tr>
                
                                <tr>
                                <th>Email</th>
                                <td>test123@gmail.com</td>
                                </tr>
                
                                <tr>
                                <td colspan="3"><center><a href="#" class="btn btn-outline-success btn-sm">DETAILS</a></center></td> 
                                </tr>               
                            </table>
                            </div><!-----------End Teacher Information----------------------->
                                    
                
                
                        </div>
                        </div>
                        <div class="float-right">
                        
                        </div>
                    </li>
                    </ul>
                    <br>
                
                </div>
                
        <div class="col-sm-3 col-12">
            <div class="col-sm-12 col-12 p-0">
            <ul class="list-group">
            <li class="list-group-item" id="featureheads">সভাপতির বাণী</li>
        </ul>
        <li class="list-group-item p-0 pt-2" id="padd">
            <a href="{{url('/webpages/President_Message')}}"><center><img src="{{url('/images/1741209244067584.jpg')}}" class="img-fluid" style="max-height: 200px;padding-bottom:5px;"></center></a>
            <center><span class="head">মোঃ শামসুল হক<br><a href="{{url('/webpages/President_Message')}}" class="btn btn-success btn-sm btn-block">বিস্তারিত</a></span></center>
        </li>
        </div>
        <div class="col-sm-12 col-12 p-0" style="margin-top:10px;">
            <ul class="list-group">
            <li class="list-group-item" id="featureheads">প্রধান শিক্ষকের বাণী</li>
        </ul>
        <li class="list-group-item p-0 pt-2" id="padd">
            <a href="{{url('/webpages/message-from-head')}}"><center><img src="{{url('/images/6511b91624acf.gif')}}" class="img-fluid" style="max-height: 200px;padding-bottom:5px;"></center></a>
            <center><span class="head">আবু বকর সিদ্দিক<br><a href="{{url('/webpages/message-from-head')}}" class="btn btn-success btn-sm btn-block">বিস্তারিত</a></span></center>
        </li>
        </div>
        <div class="col-sm-12 col-12 p-0 mt-3" data-aos="fade-in" data-aos-duration="1000">
            <ul class="list-group">
            <li class="list-group-item" id="featureheads">গুরুত্বপূর্ণ লিংক</li>
            </ul>
            <div class="feature">
                <a href="{{url('/pages/login')}}" target="_blank"><li style='font-size:12px;'><span uk-icon="icon: triangle-right; ratio: 0.7"></span>&nbsp;&nbsp;Test</li></a>
                <a href="{{url('/pages/login')}}" target="_blank"><li style='font-size:12px;'><span uk-icon="icon: triangle-right; ratio: 0.7"></span>&nbsp;&nbsp;New Link</li></a>
                <a href="dsmoi.gov.bd" target="_blank"><li style='font-size:12px;'><span uk-icon="icon: triangle-right; ratio: 0.7"></span>&nbsp;&nbsp;dsm.com</li></a>
        </div>
        </div>
        <div class="col-sm-12 col-12 p-0 mt-2">
            <ul class="list-group">
            <li class="list-group-item" id="featureheads"> গুগল ম্যাপ </li>
            </ul> 
            <li class="list-group-item p-0 pt-2" id="padd" style="overflow: hidden">
            <center>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7191.681542953389!2d89.50101939643586!3d25.676572518497295!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39e2d3bd83bafbf7%3A0xfdbf331a35340d23!2z4Ka24Ka_4Kas4Kam4KeH4Kas4Kaa4KawIOCmpuCnjeCmrOCmvy3gpq7gp4Lgppbgp4Ag4KaJ4Kaa4KeN4KaaIOCmrOCmv-CmpuCnjeCmr-CmvuCmsuCnnw!5e0!3m2!1sen!2sbd!4v1697005450646!5m2!1sen!2sbd" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>    
                <br></center>
        </li>
        </div>
        <div class="col-sm-12 col-12 p-0 mt-2">
            <ul class="list-group">
            <li class="list-group-item" id="featureheads">অফিসিয়াল ফ্যান পেইজ</li>
            <li class="list-group-item p-0 pt-2" id="padd">
            <center>
                <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Falhelalacademy.edu.bd&tabs=timeline&width=250&height=300&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=338704303143050" width="250" height="300" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
            </li>
        </ul> 
        </div>
        <div class="col-sm-12 col-12 p-0 mt-3" data-aos="fade-in" data-aos-duration="1000">
            <ul class="list-group">
            <li class="list-group-item" id="featurehead">জাতীয় সংগীত</li>
            <iframe width="100%" height="150" src="https://www.youtube.com/embed/SjefET6W3q4?start=13" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </ul>
            </div>
        </div>
        </div> 
        </div>
        </div><!-------End Container------------->
        <div class="col-12  d-lg-none d-xl-none d-md-none btn btn-success "  >
                <a href="https://skillbasedit.com/demo/time_line"style="color:#fff; font-size:24px;" target="blank"> সুবর্ণ জয়ন্তী ও  বঙ্গবন্ধু কর্ণার   </a>
        </div>
   
@endsection