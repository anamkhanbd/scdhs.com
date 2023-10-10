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
            return view ('pages/downloadFiles');
        }

    public function admission()
            {
                return view ('pages/admission-form');
            }

    public function resultShow()
                {
                    return view ('pages/showResult');
                }

    public function loginPage()
                    {
                        return view ('pages/login');
                    }

    public function adminLogin()
                        {
                            return view ('pages/adminLogin');
                        }

    public function adminPanel()
                            {
                                return view ('pages/adminpanel');
                            }


    //pages contoller manage 
    public function aboutinstitute()
    {
        return view ('webpages/about_institute');
    }

    public function missionVission()
        {
            return view ('webpages/Mission_vission');
        }

    public function history()
            {
                return view ('webpages/history');
            }

    public function citizenCharter()
                {
                    return view ('webpages/Citizen_charter');
                }

    public function teacherPermission()
                    {
                        return view ('webpages/teaching_permission');
                    }

    public function mpoInfo()
                    {
                        return view ('webpages/mpo_info');
                    }

    public function Infrastructure()
                        {
                            return view ('webpages/Infrastructure');
                        }

    public function yearlyPlan()
                            {
                                return view ('webpages/Yearly_working_plan');
                            }

    public function headMaster()
                                {
                                    return view ('webpages/head_intro');
                                }

    public function contactUS()
                                    {
                                        return view ('webpages/Contact_us');
                                    }

    public function president()
                                        {
                                            return view ('webpages/President_Message');
                                        }

    public function headMessage()
                                            {
                                                return view ('webpages/message-from-head');
                                            }

    public function managingComittee()
                                                {
                                                    return view ('webpages/Managing_comittee');
                                                }
                                
    public function chairmanList()
                                                    {
                                                        return view ('webpages/Chairman_list');
                                                    }

      public function principle()
                                                    {
                                                        return view ('webpages/Principle_list');
                                                    }          

    public function donarList()
                                                        {
                                                            return view ('webpages/Donars_list');
                                                        }     

    public function exDonars()
                                                            {
                                                                return view ('webpages/Ex_member_list');
                                                            }  

    public function teacherspages()
                                                                {
                                                                    return view ('webpages/Teacher_info');
                                                                }  

    public function staffInfo()
                                                                    {
                                                                        return view ('webpages/Staff_info');
                                                                    }  

    public function classGender()
                                                                        {
                                                                            return view ('webpages/class_gender_based_education');
                                                                        }  

    public function cateWise()
                                                                            {
                                                                                return view ('webpages/cate_wise_approved_branch_info');
                                                                            }  

    public function attendance()
                                                                                {
                                                                                    return view ('webpages/student_attendance');
                                                                                }

    public function classSix()
                                                                                    {
                                                                                        return view ('webpages/six_class_student_info');
                                                                                    }

    public function classSeven()
                                                                                    {
                                                                                        return view ('webpages/seven_class_student_info');
                                                                                    }

    public function classEight()
                                                                                        {
                                                                                            return view ('webpages/eight_class_student_info');
                                                                                        }

    public function classNine()
                                                                                            {
                                                                                                return view ('webpages/nine_class_student_info');
                                                                                            }

    public function classTen()
                                                                                                {
                                                                                                    return view ('webpages/ten_class_student_info');
                                                                                                }

        public function holiDay()
                                                                            {
                                                                                return view ('webpages/Holiday_list');
                                                                            }

    public function academic()
                                                                            {
                                                                                return view ('webpages/Academic_Calender');
                                                                            }

      public function classRutine()
                                                                            {
                                                                                return view ('webpages/Class_routine');
                                                                            }  

            public function syllabas()
                                                                            {
                                                                                return view ('webpages/Syllabus');
                                                                            }                                                                  

        public function rules()
                                                                            {
                                                                                return view ('webpages/Rules_regulation');
                                                                            } 

        public function uniform()
                                                                            {
                                                                                return view ('webpages/Uniform');
                                                                            }
        public function fees()
                                                                            {
                                                                                return view ('webpages/Fees');
                                                                            }

           public function onlineClassRutine()
                                                                            {
                                                                                return view ('webpages/Online_Classroutine');
                                                                            }     
                                                                                                                                       
            public function sports()
                                                                            {
                                                                                return view ('webpages/Sports');
                                                                            }

              public function culturalAvtivitis()
                                                                            {
                                                                                return view ('webpages/Cultural_Activities');
                                                                            }                                                              


            public function scoutes()
                                                                            {
                                                                                return view ('webpages/Scouts');
                                                                            }  

            public function redcresent()
                                                                            {
                                                                                return view ('webpages/Red_Crescent');
                                                                            }

            public function tour()
                                                                            {
                                                                                return view ('webpages/Study_Tour');
                                                                            }
                public function stCafinent()
                                                                            {
                                                                                return view ('webpages/Student_Cafinet');
                                                                            }
                      
                 public function debate()
                                                                            {
                                                                                return view ('webpages/Debate');
                                                                            }                                                            

                public function languageClub()
                                                                            {
                                                                                return view ('webpages/Language_Club');
                                                                            } 

                public function fair()
                                                                            {
                                                                                return view ('webpages/Science_Fair');
                                                                            } 

                public function prospects()
                                                                            {
                                                                                return view ('webpages/Prospects');
                                                                            } 

                public function admissionRules()
                                                                            {
                                                                                return view ('webpages/Admission_Rules');
                                                                            }

                public function admissionQ()
                                                                            {
                                                                                return view ('webpages/Admission_Question');
                                                                            }

                public function admissionResult()
                                                                            {
                                                                                return view ('webpages/Admission_Result');
                                                                            }

                public function examRules()
                                                                            {
                                                                                return view ('webpages/Exam_rules');
                                                                            }

                public function examRutines()
                                                                            {
                                                                                return view ('webpages/Exam_routine');
                                                                            }

                public function examSuggestion()
                                                                            {
                                                                                return view ('webpages/Suggestion');
                                                                            }

                public function examOnlineResults()
                                                                            {
                                                                                return view ('webpages/showResult');
                                                                            }

                public function gallary()
                                                                            {
                                                                                return view ('webpages/Photo_gallery');
                                                                            }

                public function Videogallary()
                                                                            {
                                                                                return view ('webpages/Video_gallery');
                                                                            }

                public function magazine()
                                                                            {
                                                                                return view ('webpages/Magazine');
                                                                            }



                                                                            // index pages some one side link 
               public function indexNotices()
                                                                            {
                                                                                return view ('webpages/Notices');
                                                                            } 



                                                                            
                                                                            

}
