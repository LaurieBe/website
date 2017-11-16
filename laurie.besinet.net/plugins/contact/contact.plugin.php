<?php

    /**
     *  Contact plugin
     *
     *  @package Monstra
     *  @subpackage Plugins
     *  @author Romanenko Sergey / Awilum
     *  @copyright 2012 Romanenko Sergey / Awilum
     *  @version 1.1.0
     *
     */


    // Register plugin
    Plugin::register( __FILE__,                    
                    __('Contact', 'contact'),
                    __('Contact plugin for Monstra', 'contact'),  
                    '1.1.0',
                    'Awilum',                 
                    'http://monstra.org/');


    /**
     * Shorcode: {contact recipient="admin@site.org"}
     */ 
    Shortcode::add('contact', 'Contact::_shorcode');


    /**
     * Usage: <?php Contact::display('admin@site.org'); ?>
     */
    class Contact {

        public static function _shorcode($attributes) {
            return Contact::form($attributes['recipient']);
        }

        public static function form($recipient) {

            $name  = Request::post('contact_name'); 
            $email = Request::post('contact_email');                    
            $body  = Request::post('contact_body'); 

            $errors = array();

            if (Request::post('contact_submit')) {

                if (Security::check(Request::post('csrf'))) {

                    if (Request::post('contact_name') == '' || Request::post('contact_email') == '' || Request::post('contact_body') == '') {
                        $errors['contact_empty_fields'] = __('Empty required fields!', 'contact');
                    }

                    if ( ! Valid::email(Request::post('contact_email'))) {
                        $errors['contact_email_not_valid'] = __('Email address is not valid!', 'contact');
                    }

                    if (Option::get('captcha_installed') == 'true' && ! CryptCaptcha::check(Request::post('answer'))) { 
                        $errors['users_captcha_wrong'] = __('Captcha code is wrong', 'users');
                    }

                    if (count($errors) == 0) {
                    
                        $recipient = $recipient;
                        $subject = $name;
                        $header = "From: ". $name . " <" . $email . ">\r\n";

                        if (mail($recipient, $subject, $body, $header)) {
                            Notification::set('success', __('A letter has been sent!', 'contact'));
                            Request::redirect(Page::url());
                        } else {
                            Notification::set('error', __('A Letter was not sent!', 'contact'));
                        }

                    }

                } else { die('csrf detected!'); }

            }

            return View::factory('contact/views/frontend/form')
                    ->assign('name', $name)
                    ->assign('email', $email)
                    ->assign('body', $body)
                    ->assign('errors', $errors)
                    ->render();            
        }


        public static function display($recipient) {
            echo Contact::form($recipient);          
        }

    }