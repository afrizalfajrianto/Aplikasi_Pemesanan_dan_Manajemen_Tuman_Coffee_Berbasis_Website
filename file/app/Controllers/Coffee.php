<?php

namespace App\Controllers;

class Coffee extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Dashboard | Coffee',
            'style' => 'dashboard_style.css',
            'template_style' => 'template_style.css'
        ];

        return view('Coffee/dashboard', $data);
    }
    public function login()
    {
        $data = [
            'title' => 'Login | Coffee',
            'style' => 'create_style.css',
            'template_style' => 'template_2_style.css'
        ];

        return view('Coffee/create_account', $data);
    }
    public function about()
    {
        $data = [
            'title' => 'About | Coffee',
            'style' => 'about_style.css',
            'template_style' => 'template_style.css'
        ];

        return view('Coffee/about', $data);
    }
    public function contact()
    {
        $data = [
            'title' => 'Contact Us | Coffee',
            'style' => 'contact_style.css',
            'template_style' => 'template_style.css'
        ];

        return view('Coffee/contact', $data);
    }
    public function profile()
    {
        $data = [
            'title' => 'Account | Coffee',
            'style' => 'profile_style.css',
            'template_style' => 'template_2_style.css'
        ];

        return view('Coffee/profile', $data);
    }
    public function address()
    {
        $data = [
            'title' => 'Address | Coffee',
            'style' => 'profile_style.css',
            'template_style' => 'template_2_style.css'
        ];

        return view('Coffee/address', $data);
    }
    public function order()
    {
        $data = [
            'title' => 'Order | Coffee',
            'style' => 'profile_style.css',
            'template_style' => 'template_2_style.css'
        ];

        return view('Coffee/order', $data);
    }
    public function bag()
    {
        $data = [
            'title' => 'Bag | Coffee',
            'style' => 'bag_style.css',
            'template_style' => 'template_2_style.css'
        ];

        return view('Coffee/bag', $data);
    }

    public function product()
    {
        $data = [
            'title' => 'Product | Coffee',
            'style' => 'product_style.css',
            'template_style' => 'template_2_style.css'
        ];

        return view('Coffee/product', $data);
    }

    public function coffee()
    {
        $data = [
            'title' => 'Coffee | Coffee',
            'style' => 'product_style.css',
            'template_style' => 'template_2_style.css'
        ];

        return view('Coffee/coffee', $data);
    }


    public function trending()
    {
        $data = [
            'title' => 'Trending coffee | Coffee',
            'style' => 'product_style.css',
            'template_style' => 'template_2_style.css'
        ];

        return view('Coffee/trending', $data);
    }

}
