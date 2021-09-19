<?php

namespace Portfolio\Controllers;

use Portfolio\Models\Me;
use Symfony\Component\Mailer\Transport;
use Symfony\Component\Mailer\Mailer;
use Symfony\Component\Mime\Email;

class MainController extends CoreController
{

    public function home()
    {
        $me = new Me();
        $skills = $me->getSkills();

        $this->show('home/home', [
            'skills' => $skills,
        ]);
    }

    public function portfolio()
    {
        $this->show('portfolio/portfolio');
    }

    public function contact()
    {
        $this->show('partials/contact');
    }

    public function mail()
    {
        $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
        $from = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        $subject = filter_input(INPUT_POST, 'subject', FILTER_SANITIZE_STRING);
        $message = filter_input(INPUT_POST, 'message');

        $errors = [];
        if (!$name) {
            $errors[] = 'Nom absent ou incorrect';
        }
        if (!$from) {
            $errors[] = 'Email absent ou incorrect';
        }
        if (!$subject) {
            $errors[] = 'Objet absent ou incorrect';
        }

        if (empty($errors)) {
            $to      = 'jimmy.martin952@gmail.com';
            $headers = array(
                'From' => 'webmaster@example.com',
            );

            mail($to, $subject, $message, $headers);
        } else {
            $this->show('error/err404');
        }
    }
}
