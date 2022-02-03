<?php


namespace App\classes;
class Student
{
    protected $text;
    protected $result =[];
    protected $students;

    public function __construct($post =null)
    {
        if (isset($post['search']))
        {
            $this->text = $post['search'];
        }
    }


    public function getAllStudent()
    {
        return [
            0 =>[
                'name' => 'shehon khan',
                'mobile' => '01970481744',
                'email' => 'shehonkhan@gmail.com',
                'address' => 'klabagan',
            ],
            1 =>[
                'name' => 'nahid khan',
                'mobile' => '01631481744',
                'email' => 'nahidkhan@gmail.com',
                'address' => 'mirpur',
            ],
            2=>[
                'name' => 'shorif khan',
                'mobile' => '07615481744',
                'email' => 'shorifkhan@gmail.com',
                'address' => 'dhaka',
            ],
            3=>[
                'name' => 'kaif khan',
                'mobile' => '01870481744',
                'email' => 'kaifkhan@gmail.com',
                'address' => 'dhanmondi',
            ],
            4=>[
                'name' => 'sreejon khan',
                'mobile' => '017680481744',
                'email' => 'srejonkhan@gmail.com',
                'address' => 'mohammadpur',
            ],
            5=>[
                'name' => 'shuvo khan',
                'mobile' => '015270481744',
                'email' => 'shuvonkhan@gmail.com',
                'address' => 'jamalpur',
            ],

        ];

    }
    public function getAllStudentBySearchText()
    {
        $this->students = $this->getAllStudent();
        foreach ($this->students as $student)
        {
            if ($this->text == $student['name'])
            {
                $this->result = $student;
                break;

            }
        }

        return $this->result;
    }

}