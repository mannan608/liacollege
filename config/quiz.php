<?php

return [
    'meta_page' => [
        'total_steps' => 5,
        'steps' => [
            1 => [
                'type' => 'choice',
                'key' => 'industry',
                'question' => 'Which industry best matches your experience?',
                'options' => [
                    ['value' => 'aged_care', 'label' => 'Aged Care'],
                    ['value' => 'disability_support', 'label' => 'Disability Support'],
                    ['value' => 'project_management', 'label' => 'Project Management'],
                    ['value' => 'leadership_management', 'label' => 'Leadership & Management'],
                ],
            ],
            2 => [
                'type' => 'choice',
                'key' => 'industry_experience',
                'question' => 'How many years of work experience do you have in your relevant industry?',
                'options' => [
                    ['value' => 'less_than_2_years', 'label' => 'Less than 2 years'],
                    ['value' => '2_to_5_years', 'label' => '2 - 5 years'],
                    ['value' => '5_to_10_years', 'label' => '5 - 10 years'],
                    ['value' => '10_plus_years', 'label' => '10+ years'],
                ],
            ],
            3 => [
                'type' => 'choice',
                'key' => 'qualification_goal',
                'question' => 'What qualification outcome are you looking for?',
                'options' => [
                    ['value' => 'certificate_iii', 'label' => 'Certificate III'],
                    ['value' => 'certificate_iv', 'label' => 'Certificate IV'],
                    ['value' => 'diploma', 'label' => 'Diploma'],
                    ['value' => 'not_sure', 'label' => 'Not sure yet'],
                ],
            ],
            4 => [
                'type' => 'choice',
                'key' => 'start_timeline',
                'question' => 'How soon would you like to start the RPL process?',
                'options' => [
                    ['value' => 'asap', 'label' => 'As soon as possible'],
                    ['value' => 'this_month', 'label' => 'This month'],
                    ['value' => 'next_1_to_3_months', 'label' => 'In 1 - 3 months'],
                    ['value' => 'just_researching', 'label' => 'Just researching'],
                ],
            ],
            5 => [
                'type' => 'personal_info',
                'key' => 'personal_info',
                'question' => 'Tell us where to send your eligibility result.',
                'fields' => [
                    ['name' => 'full_name', 'label' => 'Full Name', 'type' => 'text', 'placeholder' => 'Enter full name'],
                    ['name' => 'phone', 'label' => 'Phone Number', 'type' => 'text', 'placeholder' => 'Enter phone number'],
                    ['name' => 'email', 'label' => 'Email Address', 'type' => 'email', 'placeholder' => 'Enter email'],
                    ['name' => 'country', 'label' => 'Country', 'type' => 'text', 'placeholder' => 'Enter country'],
                ],
            ],
        ],
    ],
];
