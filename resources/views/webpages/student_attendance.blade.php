@extends('layout.main')
@push('title')
    <title> Student Attendance </title>
@endpush
@section('main.section')
    
        <div class="container">
            <div class="col-sm-12 col-12" id="mainpage">
                
                <div class="col-sm-12 col-12 p-0"  data-aos="fade-in" data-aos-duration="2000" >
                <ul class="list-group p-0">
                <li class="list-group-item font-weight-bold bg-success text-light" id="about">শিক্ষার্থী উপস্থিতি তথ্য </li>
                </ul>
                <li class="list-group-item">
                    <div class="table table-responsive">
                        <table id="example" class="display table-bordered" style="width:100%">
                        <thead>
                            <tr style="font-size: 15px;">
                            <th>শ্রেণী</th>
                            <th>মোট শিক্ষার্থীর সংখ্যা</th>
                            <th>উপস্থিত</th>
                            <th>অনুপস্থিত</th>
                            </tr>
                        </thead>
                        <tbody>
            
            
                            <tr style="font-size: 12px;">
                            <td>৬ষ্ঠ</td>
                            <td>১৭২</td>
                            <td>১৫০</td>
                            <td>২২</td>
                            </tr>
                            <tr style="font-size: 12px;">
                            <td>৭ম</td>
                            <td>১৮৪</td>
                            <td>১৬৫</td>
                            <td>১৯</td>
                            </tr>
                            <tr style="font-size: 12px;">
                            <td>৮ম</td>
                            <td>১১৬</td>
                            <td>১০০</td>
                            <td>১৬</td>
                            </tr>
                            <tr style="font-size: 12px;">
                            <td>৯ম</td>
                            <td>১৫১</td>
                            <td>১৩৯</td>
                            <td>১২</td>
                            </tr>
                            <tr style="font-size: 12px;">
                            <td>১০ম</td>
                            <td>১৫১</td>
                            <td>১৩০</td>
                            <td>২১</td>
                            </tr>
            
            
                            
                        </table>
            
                    </div>
        
                </li>
        
        
        
            </div>
                
        </div>
        </div>
        
        
        
        <div class="col-12  d-lg-none d-xl-none d-md-none btn btn-success "  >
                <a href="#"style="color:#fff; font-size:24px;" target="blank"> সুবর্ণ জয়ন্তী ও  বঙ্গবন্ধু কর্ণার   </a>
        </div>
@endsection

