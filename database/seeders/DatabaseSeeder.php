<?php

namespace Database\Seeders;
use App\Models\Product;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $content = [
            [
                'id' => 1,
                'title' => 'Software Engineer',
                'tags' => 'PHP, MySQL, Laravel, React',
                'company' => 'ABC Corporation',
                'location' => 'Manila',
                'email' => 'careers@abccorp.com',
                'website' => 'abccorp.com',
                'description' => 'We are seeking a talented software engineer to join our team. You should have experience with PHP, MySQL, Laravel, and React, as well as strong problem-solving skills and the ability to work collaboratively with others.'
            ],
            [
                'id' => 2,
                'title' => 'UX Designer',
                'tags' => 'User experience, Wireframing, Prototyping',
                'company' => 'XYZ Company',
                'location' => 'Quezon City',
                'email' => 'jobs@xyz.com',
                'website' => 'xyz.com',
                'description' => 'We are looking for a UX designer to help us create intuitive and user-friendly interfaces for our web and mobile applications. You should have experience with wireframing and prototyping tools, as well as a strong understanding of user-centered design principles.'
            ],
            [
                'id' => 3,
                'title' => 'Marketing Manager',
                'tags' => 'Digital marketing, Content marketing, SEO',
                'company' => '123 Enterprises',
                'location' => 'Makati',
                'email' => 'careers@123ent.com',
                'website' => '123ent.com',
                'description' => 'We are seeking an experienced marketing manager to lead our digital marketing efforts. You should have experience with content marketing, SEO, and other digital marketing strategies, as well as strong analytical and leadership skills.'
            ],
            [
                'id' => 4,
                'title' => 'Data Analyst',
                'tags' => 'Data analysis, SQL, Excel',
                'company' => 'Acme Inc.',
                'location' => 'Taguig',
                'email' => 'jobs@acmeinc.com',
                'website' => 'acmeinc.com',
                'description' => 'We are looking for a data analyst to help us make data-driven decisions. You should have experience with data analysis tools such as SQL and Excel, as well as strong problem-solving and communication skills.'
            ],
            [
                'id' => 5,
                'title' => 'Full Stack Web Developer',
                'tags' => 'Node.js, Express, React, MongoDB',
                'company' => 'Tech Startup',
                'location' => 'BGC',
                'email' => 'jobs@techstartup.com',
                'website' => 'techstartup.com',
                'description' => 'We are seeking a full stack web developer to help us build our web and mobile applications. You should have experience with Node.js, Express, React, MongoDB, and other modern web technologies, as well as a strong passion for creating innovative software products.'
            ]
        ];

        Product::insert($content);
    }
}
