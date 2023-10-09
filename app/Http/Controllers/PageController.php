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









    


}
