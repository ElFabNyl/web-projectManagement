<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function dashoardUser ()
    {
       $data = [
           'titre' => "Dashboard Client |",
           'page' => "Dashboard",
        ];
       return view('User.dashboard', $data);
    }

    public function projetsUser ()
    {
        $data = [
            'titre' => "Projets Client |",
            'page' => "Projects",
        ];
        return view('User.projets', $data);
    }

    public function notificationUser ()
    {
        $data = [
            'titre' => "Notification Client |",
            'page' => "Notifications",
        ];
        return view('User.notification', $data);
    }

    public function newprojetsUser ()
    {
        $data = [
            'titre' => "New Projet Client |",
            'page' => "Projects > Project Name",
        ];
        return view('User.new-projets', $data);
    }

    public function invoiceUser ()
    {
        $data = [
            'titre' => "Invoice Client |",
            'page' => "Invoice",
        ];
        return view('User.invoice', $data);
    }

    public function detailsinvoiceUser ()
    {
        $data = [
            'titre' => "Details Invoice Client |",
        ];
        return view('User.invoice-details', $data);
    }
}
