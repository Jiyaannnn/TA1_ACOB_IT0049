<?php

namespace App\Controllers;

class Customers extends BaseController
{
    public function index(): string
    {
        // This static array temporarily acts like a database table for the activity.
        $customers = [
            ['full_name' => 'Angelo Pineda', 'email' => 'anpineda@fit.edu.ph', 'phone' => '09074144816'],
            ['full_name' => 'Richmon Miguel', 'email' => 'rbmiguel@fit.edu.ph', 'phone' => '09927918909'],
            ['full_name' => 'Howard Callanta', 'email' => 'hmcallanta@fit.edu.ph', 'phone' => '09084589753'],
            ['full_name' => 'Gerard Doroja', 'email' => 'gbdoroja@fit.edu.ph', 'phone' => '09615331576'],
            ['full_name' => 'Tristan Cachapero', 'email' => 'tbcachapero@fit.edu.ph', 'phone' => '09760997496'],
        ];

        // Each array key becomes a variable that the view can display.
        return view('customers/index', [
            'title'      => 'Customer Accounts',
            'activePage' => 'customers',
            'customers'  => $customers,
        ]);
    }
}
