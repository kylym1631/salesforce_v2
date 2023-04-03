<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageDataController extends Controller
{
    public function frontend()
    {
        return view('pages.frontend.index',[
            'teams'=>[
                'ularbek'=>[
                    'name'=>'Ularbek Zaiirbekov',
                    'role'=>'Instructor',
                    'img'=>'ularbek.jpg',
                    'linkedin'=>'https://www.linkedin.com/in/ularbek-zairbekov-0b34b816b/',
                    'instagram'=>'https://www.instagram.com/zairbekovic/?igshid=ZjE2NGZiNDQ%3D'
                ],
                'kanykei'=>[
                    'name'=>'Kanykei Sadykova',
                    'role'=>'Targeting expert',
                    'img'=>'kanykei.jpeg',
                    'linkedin'=>'https://www.linkedin.com/in/askarosmonovdev/',
                    'instagram'=>'https://www.linkedin.com/in/kanykei-sadykova/'
                ],
                'kylym'=>[
                    'name'=>'Kylymbek Mazaripov',
                    'role'=>'Project Manager',
                    'img'=>'kylym.jpg',
                    'linkedin'=>'https://www.linkedin.com/in/kylymbek/',
                    'instagram'=>'https://www.instagram.com/skybridges.eu/'
                ],

                'tugolbai'=>[
                    'name'=>'Tugolbai Paiziliev',
                    'role'=>'Program Director',
                    'img'=>'tugolbai.jpg',
                    'linkedin'=>'https://www.linkedin.com/in/tugolbai-paiziliev-1a4940141/',
                    'instagram'=>'https://www.instagram.com/tugolbai36/'
                ],
                'asel'=>[
                    'name'=>'Asel Begabatova',
                    'role'=>'Social Media Marketing',
                    'img'=>'asel.jpeg',
                    'linkedin'=>'https://www.linkedin.com/company/sky-bridges/about/',
                    'instagram'=>'https://www.instagram.com/aselina_pq/'
                ],
                'davron'=>[
                    'name'=>'Davronbek Sattorov',
                    'role'=>'Career Coach',
                    'img'=>'davron.jpeg',
                    'linkedin'=>'https://www.linkedin.com/in/davronbek-sattorov-98119319b/',
                    'instagram'=>'https://www.instagram.com/sattorovvsdavronbek/'
                ],
            ],
            'advantages'=>[
                'group'=>[
                    'title'=>'Personalized attention',
                    'description'=>'With a maximum of 10 students per class, our instructors can provide personalized attention to help you succeed in your learning journey',
                    'icon'=>'
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg"
                             fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                        </svg>

                    ',
                    'icon-color'=>'sky',

                ],
                'pace'=>[
                    'title'=>'At your own pace',
                    'description'=>'Learn web development in 4-6 months at your own pace. Completion of the course depends on learning speed of your group',
                    'icon'=>'
                    <svg class="h-6 w-6"  xmlns="http://www.w3.org/2000/svg"
                         fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>

                    ',
                    'icon-color'=>'teal',
                ],
                'career'=>[
                    'title'=>'Career support',
                    'description'=>'We provide our graduates with referrals at top companies, career support, including job placement assistance, resume writing tips, and interview preparation.',
                    'icon'=>'
                    <svg class="h-6 w-6"  xmlns="http://www.w3.org/2000/svg"
                         fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                        <path
                            d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"></path>
                    </svg>

                    ',
                    'icon-color'=>'purple',

                ],
                'price'=>[
                    'title'=>'Flexible payment plans',
                    'description'=>'We offer flexible payment plans to suit your needs, including a low monthly payment option of 150 EUR and the ability to pay the rest later once you secure a job position',
                    'icon'=>'
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg"
                             fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>

                    ',
                    'icon-color'=>'indigo',

                ],

                'internship'=>[
                    'title'=>'Guaranteed internships & projects',
                    'description'=>'Build your skills and portfolio with real-world experience. Our program offers guaranteed internships and projects that will help you develop the skills you need to succeed in the workforce and build a portfolio that showcases your abilities.',
                    'icon'=>'
                    <svg class="h-6 w-6"  xmlns="http://www.w3.org/2000/svg"
                         fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>
                    </svg>

                    ',
                    'icon-color'=>'yellow',


                ],
                'hosting'=>[
                    'title'=>'Build your projects, we will host it for you!',
                    'description'=>'Showcase your web development skills to potential employers by building a personalized portfolio website under our guidance.We\'ll host your websites on our servers, ensuring that your site is secure and always accessible to visitors.',
                    'icon'=>'
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z"/>
                        </svg>

                    ',
                    'icon-color'=>'rose',

                ]

            ],
            'allPayment'=>[
                [
                    'name'=>'Pay only 250 EUR per month',
                    'emoji'=>'💶'
                ],
                [
                    'name'=>'Receive a bonus gift included in your package',
                    'emoji'=>'🎁'
                ],
                [
                    'name'=>'Focus on achieving your goals without worrying about future payments',
                    'emoji'=>'🎯'
                ],
                [
                    'name'=>'All Flexible Payment benefits',
                    'emoji'=>'✅'
                ]

            ],
            'flexiblePayment'=>[
                [
                    'name'=>'Pay 150 EUR/month during bootcamp, then the remaining 150 EUR/month after you secure a job',
                    'emoji'=>'💶'
                ],

                [
                    'name'=>'One-on-one mentorship',
                    'emoji'=>'🙋‍'
                ],
                [
                    'name'=>'Job placement assistance',
                    'emoji'=>'💼'
                ],
                [
                    'name'=>'Free snacks in the office',
                    'emoji'=>'☕️'
                ],
                [
                    'name'=>'Flexible payment plan to help you succeed on your journey to becoming a web developer',
                    'emoji'=>'‍👨🏻‍💻'
                ],
                [
                    'name'=>'Get access to regular meetups with experienced developers and job fairs',
                    'emoji'=>'🤝'
                ],
            ],
            'faqs'=>[
                [
                    'question'=>'Next bootcamp start and how to enroll?',
                    'answer'=>'The next bootcamp will start on May 1, 2023. To enroll, please leave your contact details on our website or reach out to us through any of our social media channels'
                ],
                [
                    'question'=>'Can I choose between online and offline classes?',
                    'answer'=>'Yes, you can. If you are in Warsaw, you have the option to attend the classes in our office. Otherwise, you can participate online through a camera that will capture the lessons. But we advise you to attend offline'
                ],
                [
                    'question'=>'Is there a limit to the group size?',
                    'answer'=>'Yes, we limit the number of students to a maximum of 10 per group. This allows for more personalized attention from our instructors and fosters a collaborative learning environment.'
                ],
                [
                    'question'=>'Will the classes be recorded for later access?',
                    'answer'=>'Yes, all classes will be recorded, and you will have access to all the materials covered during the course of the bootcamp.'
                ],
            ]
        ]);
    }
}
