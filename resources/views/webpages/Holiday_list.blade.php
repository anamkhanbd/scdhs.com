@extends('layout.main')
@push('title')
    <title>Holy Day List </title>
@endpush
@section('main.section')
                                    
                                <div class="container">
                                    <div class="col-sm-12 col-12" id="mainpage">
                                
                                
                                    <div class="col-sm-12 col-12 p-0"  data-aos="fade-in" data-aos-duration="2000" >
                                    <ul class="list-group p-0">
                                        <li class="list-group-item font-weight-bold bg-success text-light" id="about">ছুটির তালিকা</li>
                                        <li class="list-group-item">
                                
                                        <div class="table table-responsive">
                                            <table id="example" class="display table-bordered" style="width:100%">
                                            <thead>
                                                <tr style="font-size: 15px;">
                                                <th>SL.</th>
                                                <th>Date</th>
                                                <th>Title</th>
                                                <th>Download</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                
                                
                                                
                                                            
                                                
                                
                                                <tr style="font-size: 12px;">
                                                <td>1</td>
                                                <td><a href="#" style="text-decoration: none;color: black">2022-07-31</a></td>
                                                <td><a href="#" style="text-decoration: none;color: black">ছুটির তালিকা</a></td>
                                                <td>
                                                                    <a  href="#" class="btn btn-sm btn-danger" >
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
