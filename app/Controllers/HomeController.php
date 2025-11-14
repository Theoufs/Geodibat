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

    public function energie() {
        return view('services/energie', $this->data);                        // Display page view
    }

    public function plomberie() {
        return view('services/plomberie', $this->data);                        // Display page view
    }

    public function securite() {
        return view('services/securite', $this->data);                        // Display page view
    }

    public function immobilier() {
        return view('services/immobilier', $this->data);                        // Display page view
    }

    public function automobile() {
        return view('services/automobile', $this->data);                        // Display page view
    }

    public function informatique() {
        return view('services/informatique', $this->data);                        // Display page view
    }
}
