<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');
/**
 * Middleware: StudentMiddleware
 * 
 * Automatically generated via CLI.
 */
class StudentMiddleware
{
    /**
     * Handle the incoming request
     *
     * @param Closure $next
     * @return mixed
     */
    public function handle(Closure $next)
    {
        if (!isset($_SESSION['student_access']) || $_SESSION['student_access'] !== true) {
            redirect('/no_access');
        }
        return $next();
    }
}
