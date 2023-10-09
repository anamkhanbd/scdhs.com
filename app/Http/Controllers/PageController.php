<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view ('index');
    }


    //TOp manus File path starding.......... 
  
    public function downloadFiles()
        {
            return view ('/pages/downloadFiles');
        }

    public function admission()
            {
                return view ('/pages/admission-form');
            }

    public function resultShow()
                {
                    return view ('/pages/showResult');
                }

    public function loginPage()
                    {
                        return view ('/pages/login');
                    }

    public function adminLogin()
                        {
                            return view ('/pages/adminLogin');
                        }

    public function adminPanel()
                            {
                                return view ('/pages/adminpanel');
                            }


    //pages contoller manage 
    public function aboutinstitute()
    {
        return view ('/webpages/about_institute');
    }

    public function missionVission()
        {
            return view ('/webpages/Mission_vission');
        }

    public function history()
            {
                return view ('/webpages/history');
            }

    public function citizenCharter()
                {
                    return view ('/webpages/Citizen_charter');
                }

    public function teacherPermission()
                    {
                        return view ('/webpages/teaching_permission');
                    }

    public function mpoInfo()
                    {
                        return view ('/webpages/mpo_info');
                    }

    public function Infrastructure()
                        {
                            return view ('/webpages/Infrastructure');
                        }

    public function yearlyPlan()
                            {
                                return view ('/webpages/Yearly_working_plan');
                            }

    public function headMaster()
                                {
                                    return view ('/webpages/head_intro');
                                }

    public function contactUS()
                                    {
                                        return view ('/webpages/Contact_us');
                                    }

    public function president()
                                        {
                                            return view ('/webpages/President_Message');
                                        }

    public function headMessage()
                                            {
                                                return view ('/webpages/message-from-head');
                                            }

    public function managingComittee()
                                                {
                                                    return view ('/webpages/Managing_comittee');
                                                }
                                
    public function chairmanList()
                                                    {
                                                        return view ('/webpages/Chairman_list');
                                                    }

      public function principle()
                                                    {
                                                        return view ('/webpages/Principle_list');
                                                    }          

    public function donarList()
                                                        {
                                                            return view ('/webpages/Donars_list');
                                                        }     

    public function exDonars()
                                                            {
                                                                return view ('/webpages/Ex_member_list');
                                                            }  

    public function teacherspages()
                                                                {
                                                                    return view ('/webpages/Teacher_info');
                                                                }  

    public function staffInfo()
                                                                    {
                                                                        return view ('/webpages/Staff_info');
                                                                    }  

    public function classGender()
                                                                        {
                                                                            return view ('/webpages/class_gender_based_education');
                                                                        }  

    public function cateWise()
                                                                            {
                                                                                return view ('/webpages/cate_wise_approved_branch_info');
                                                                            }  






                                                    

}
