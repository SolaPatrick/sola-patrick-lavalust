<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

/**
 * Controller: StudentController
 * 
 * Automatically generated via CLI.
 */
class StudentController extends Controller {
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $student = [
            'id'            => 'MCC2024-01543',
            'name'          => 'Patrick Noel M. Sola',
            'course'        => 'BS Information Technology',
            'year_level'    => '3rd Year',
            'section'       => 'III-F6',
            'email'         => 'solapatrick@gmail.com'
        ];
        
        $_SESSION['student_access'] = true;
        $this->call->view('student_page', $student);
    }

    public function no_access()
    {
        $this->call->view('no_access');
    }

    public function profile()
    {
        $profile = [
        'address'   => 'Calapan City, Oriental Mindoro',
        'contact'   => '0912-345-6789',
        'skills'    => 'PHP, HTML/CSS, JavaScript, Figma',
        'hobbies'   => 'Web development, gaming, reading',
        'bio'       => 'heyhey',
        'social'    => 'google.com'
        ];

        $this->call->view('student_profile', $profile);
    }
}