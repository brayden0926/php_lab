<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function tablelet()
    {
        $data = [
            'title' => 'Table LAB',
            'heading' => 'SDLC',
            'todo_list' => [
                'Week_1' => [
                    'title' => 'Requirement Gathering and Analysis',
                    'description' => 'You should analyze relevant requirements and create an SRS (Software Requirement Specification) file.'
                ],
                'Week_2' => [
                    'title' => 'Design',
                    'description' => 'Follow the SRS to design the software architecture (OOD) and select appropriate technologies.'
                ],
                'Week_3' => [
                    'title' => 'Implementation or Coding',
                    'description' => 'Follow the SRS and the design from the previous week to implement your project (OOP).'
                ],
                'Week_4' => [
                    'title' => 'Testing',
                    'description' => 'Follow the SRS and the design from the previous weeks to test your project, identify and fix bugs to meet the client requirements.'
                ],
                'Week_5' => [
                    'title' => 'Deployment',
                    'description' => 'Deploy your project in the UAT (User Acceptance Testing) environment.'
                ],
                'Week_6' => [
                    'title' => 'Maintenance',
                    'description' => 'Follow the SRS to maintain your project.'
                ],
            ]
        ];

        return view('view', $data);
    }
}
