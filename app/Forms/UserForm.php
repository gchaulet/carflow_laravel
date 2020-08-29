<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;
use Kris\LaravelFormBuilder\Field;

class UserForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('first_name', Field::TEXT, [
                'label' => 'First Name',
                'rules' => 'required|min:5'
            ])
            ->add('last_name', Field::TEXT, [
                'label' => 'Name',
                'rules' => 'required|min:5'
            ])
            ->add('birthdate', Field::DATE, [
                'label' => 'Date de naissance',
                'rules' => 'required',
            ])
            ->add('email',  Field::TEXT, [
                'rules' => 'required|min:5'
            ])
            ->add('phone',  Field::TEXT, [
                'rules' => 'required|min:5'
            ])
            ->add('address',  Field::TEXT, [
                'label' => 'Adresse',
                'rules' => 'required|min:5'
            ])
            ->add('postal_code',  Field::TEXT, [
                'label' => 'Code postal',
                'rules' => 'required|numeric'
            ])
            ->add('town',  Field::TEXT, [
                'label' => 'Ville',
                'rules' => 'required|min:5'
            ])
            ->add('password',  Field::PASSWORD, [
                'label' => 'Mot de passe',
                'rules' => 'required|min:5'
            ])
            ->add('submit', 'submit');

    }
}
