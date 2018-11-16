<?php
/**
 * Created by PhpStorm.
 * User: Madila
 * Date: 13/11/2018
 * Time: 13:06
 */

namespace OllieFordandCo\Amaranth\Engine;

use Illuminate\Routing\Router;

class Auth {

    /**
     * Register the typical authentication routes for an application.
     *
     * @param  array  $options
     * @return void
     */
    public function routes(array $options = []) {
        // Authentication Routes...
        Router::get('login', 'Auth\LoginController@showLoginForm')->name('login');
        Router::post('login', 'Auth\LoginController@login');
        Router::post('logout', 'Auth\LoginController@logout')->name('logout');

        // Registration Routes...
        if ($options['register'] ?? true) {
            Router::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
            Router::post('register', 'Auth\RegisterController@register');
        }

        // Password Reset Routes...
        Router::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
        Router::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
        Router::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
        Router::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');

        // Email Verification Routes...
        if ($options['verify'] ?? false) {
            Router::emailVerification();
        }
    }

    /**
     * Register the typical email verification routes for an application.
     *
     * @return void
     */
    public function emailVerification()
    {
        Router::get('email/verify', 'Auth\VerificationController@show')->name('verification.notice');
        Router::get('email/verify/{id}', 'Auth\VerificationController@verify')->name('verification.verify');
        Router::get('email/resend', 'Auth\VerificationController@resend')->name('verification.resend');
    }


}