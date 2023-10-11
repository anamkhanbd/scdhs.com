@extends('layout.main')
@push('title')
    <title>Shyllabas </title>
@endpush
@section('main.section')
                
            <div class="container">
                <div class="col-sm-12 col-12" id="mainpage">
            #ta-aos="fade-in" data-aos-duration="2000" >
                <ul class="list-group p-0">
                    <li class="list-group-item font-weight-bold bg-success text-light" id="about">সিলেবাস</li>
                    <li class="list-group-item">
            
                    <div class="table table-responsive">
                        <table id="example" class="display table-bordered" style="width:100%">
                        <thead>
                            <tr style="font-size: 15px;">
                            <th>SL.</th>
                            <th>Date</th>
                            <th>Class</th>
                            <th>Title</th>
                            <th>Download</th>
                            </tr>
                        </thead>
                        <tbody>
            
            
                            
                                        
                            
            
                            <tr style="font-size: 12px;">
                            <td>1</td>
                            <td><a href="#" style="text-decoration: none;color: black">2022-08-11</a></td>
                            <td><a href="#" style="text-decoration: none;color: black"></a></td>
                            
                            <td><a href="#" style="text-decoration: none;color: black">পাঠ্যসূচি</a></td>
            
                            <td>
                                                <a  href="#" class="btn btn-sm btn-danger" download="পাঠ্যসূচি">
                                <img src="{{url('images/pdf_icon.png')}}" class="img-fluid"></a>
                                                    </td>
                            </tr>
            
            
                                            
            
            
                            </table>
            
                        </div>
            
                        </li>
            
                    </ul>
                    </div>
                </div>
            
            
            
            
            
                </div>
            </div>
            
            
            
            
            
            
            
            
            
            
            <div class="col-12  d-lg-none d-xl-none d-md-none btn btn-success "  >
                    <a href="#"style="color:#fff; font-size:24px;" target="blank"> সুবর্ণ জয়ন্তী ও  বঙ্গবন্ধু কর্ণার   </a>
            </div>
  
@endsection
