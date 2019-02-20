<?php
/**
 * Created by PhpStorm.
 * User: Zinces
 * Date: 2019/2/20
 * Time: 15:52
 */
namespace App\Http\Traits;


use Illuminate\Support\Facades\Mail;

trait SendEmail{
    protected function sendEmailConfirmationTo($user)
    {
        $view = 'emails.confirm';
        $data = compact('user');
//        $from = '305977606@qq.com';
//        $name = 'Zinces';
        $to = $user->email;
        $subject = "感谢注册 Sample 应用！请确认你的邮箱。";

        Mail::send($view, $data, function ($message) use ($to, $subject) {
//            $message->from($from, $name)->to($to)->subject($subject);
            $message->to($to)->subject($subject);
        });
    }
}