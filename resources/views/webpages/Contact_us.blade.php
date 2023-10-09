@extends('layout.main')
@push('title')
    <title>Contact Page </title>
@endpush
@section('main.section')
    

                    <div class="container">
                        <div class="col-sm-12 col-12" id="mainpage">
                        <div class="row">
                    
                        <div class="col-sm-9 col-12">
                    
                    
                            <div class="col-sm-12 col-12 p-0"  data-aos="fade-in" data-aos-duration="2000" >
                            <ul class="list-group p-0">
                            <li class="list-group-item font-weight-bold bg-success text-light" id="about">যোগাযোগ করুন</li>
                            </ul>
                            <li class="list-group-item">
                            <div style="font-size: 14px; line-height: 25px; text-align: justify;">
                                        <p style="margin-bottom: 10px;">আমাদের সাথে যোগাযোগ করুন</p><div style="">আল-হেলাল একাডেমী সোনাগাজী<div style="">উপজেলা:&nbsp;সোনাগাজী।&nbsp;<br>জেলা:&nbsp;ফেনী।&nbsp;</div><div style="">মোবাইল:&nbsp;<span style="text-align: justify;">01728563480</span><br><br><span style="text-align: justify;">জি-মেইল: alhelalacademysonagazi@gmail.com</span><br></div></div>
                                
                            </div><br>
                    
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7353.494810386533!2d91.386832!3d22.848833!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3753451f0b8e519f%3A0x3a7c5be17f194cb4!2sAl%20Helal%20Academy%2C%20Sonagazi%20-%20Olamabazar%20-%20Chardarbeshpur%20-%20Companiganj%20Rd%2C%20Sonagazi%20Municipality!5e0!3m2!1sen!2sbd!4v1660564264838!5m2!1sen!2sbd&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot; referrerpolicy=&quot;no-referrer-when-downgrade" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    
                            </li>
                    
                    
                    
                        </div>
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
                            
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1093.1045997695203!2d91.38646537546839!3d22.848701614936264!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3753451f0b8e519f%3A0x3a7c5be17f194cb4!2sAl%20Helal%20Academy%2C%20Sonagazi%20-%20Olamabazar%20-%20Chardarbeshpur%20-%20Companiganj%20Rd%2C%20Sonagazi%20Municipality!5e0!3m2!1sen!2sbd!4v1660653244311!5m2!1sen!2sbd" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                
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