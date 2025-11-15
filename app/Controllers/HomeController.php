<?php
namespace App\Controllers;

use App\Controllers\Base;
use App\Models\TeamModel;
use App\Models\FeedbackModel;
use App\Models\MailthemeModel;
use App\Models\MailModel;

class HomeController extends BaseController
{
    public function index() {
        return view('homepage', $this->data);                        // Display page view
    }

    public function contact() {
        return view('contact', $this->data);                        // Display page view
    }
    public function references() {
        return view('services/references', $this->data);                        // Display page view
    }

    public function travaux() {
        return view('services/travaux', $this->data);                        // Display page view
    }

    public function geometre() {
        return view('services/geometre', $this->data);                        // Display page view
    }

}
