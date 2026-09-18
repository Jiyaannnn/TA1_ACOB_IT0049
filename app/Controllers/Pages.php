<?php

namespace App\Controllers;

class Pages extends BaseController
{
    // Shared data avoids repeating the same student details in multiple methods.
    private function sharedData(string $title, string $activePage): array
    {
        return [
            'title'      => $title,
            'activePage' => $activePage,
            'name'       => 'Jian Edward A. Acob',
            'section'    => 'TW32',
            'course'     => 'IT0049 - Web System Technologies',
        ];
    }

    public function index(): string
    {
        // The controller passes data to the view as the second view() argument.
        return view('pages/home', $this->sharedData('Dashboard', 'home'));
    }

    public function about(): string
    {
        // activePage lets the shared navigation highlight the current page.
        return view('pages/about', $this->sharedData('About', 'about'));
    }
}
