@extends('layout.main')
@push('title')
    <title>MPO Information</title>
@endpush
@section('main.section')
    
                    <div class="container">
                        <div class="col-sm-12 col-12" id="mainpage">
                            
                            <div class="col-sm-12 col-12 p-0"  data-aos="fade-in" data-aos-duration="2000" >
                            <ul class="list-group p-0">
                            <li class="list-group-item font-weight-bold bg-success text-light" id="about">এমপিও/জাতীয়করণ তথ্য </li>
                            </ul>
                            <li class="list-group-item">
                            <div class="table table-responsive">
                                <table id="example" class="display table-bordered" style="width:100%">
                                <thead>
                                    <tr style="font-size: 15px;">
                                    <th>বিষয়</th>
                                    <th>স্তর</th>
                                    <th>স্মারক নং</th>
                                    <th>তারিখ</th>
                                    <th>ইমেইজ</th>
                                    </tr>
                                </thead>
                                <tbody>
                    
                    
                                    <tr style="font-size: 12px;">
                                    <td>১ম এমপিওভুক্তি</td>
                                    <td>নিম্ন মাধ্যমিক</td>
                                    <td>০১০২০৩০৪০৫</td>
                                    <td>০১/০৯/২০২৩</td>
                                    <td><a  href="#" class="btn btn-sm btn-danger" download="#" ><img src="https://skillbasedit.com/demo/public/frontend/img/pdf_icon.png" class="img-fluid"></a></td>
                                    </tr>
                    
                    
                                    
                                </table>
                    
                            </div>
                    
                            </li>
                    
                    
                    
                        </div>
                    
                    </div>
                    </div>
                    
                    
                    
                    <div class="col-12  d-lg-none d-xl-none d-md-none btn btn-success "  >
                            <a href="https://skillbasedit.com/demo/time_line"style="color:#fff; font-size:24px;" target="blank"> সুবর্ণ জয়ন্তী ও  বঙ্গবন্ধু কর্ণার   </a>
                    </div>
   
@endsection