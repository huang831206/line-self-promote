<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class InformationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('information')->truncate();

        $name_ch = '黃琮閔';
        $name_en = 'Ben';
        $school = '國立中央大學 (NCU)';
        $degree =  '資訊管理所';
        $self_intro = 'An enthusiastic pursuer of Full-Stack development';

        $about = [
            [
                'title' => 'Who am I',
                'content' => '我是個追求全端開發的開發者，我相信開發的價值不僅只軟體本身，更多是來自背後的理念、細節及開發流程。'
            ],
            [
                'title' => 'What am I now',
                'content' => '目前就讀國立中央大學資管所，論文方向在於應用Deep learning於醫療影像，亦涉略CNN及相關演算法。'
            ],
            [
                'title' => 'What do I want in the future',
                'content' => 'Solution building is the value of programmers and codes. 我希望未來能將機器學習、深度學習結合應用，讓資料本身的價值體現在使用者有感的地方。'
            ]
        ];

        $projects = [
            [
                'name' => '1on1',
                'time' => 'Jul.2017 — May.2018',
                'desc' => '1on1是全球性質的技能共享平台，您可以在這裡找到您需要的技能、家教，協助完成您的目標、任務等等。
                我在該專案中負責後端以及在AWS上管理AWS EC2 instance, RDS, S3 Bucket',
                'link' => 'https://1on1.today/',
                'img_src' => asset('images/1on1.jpg'),
                'stack' => ['Laravel','Vue.js', 'SA', 'EC2']
            ],
            [
                'name' => 'urAD product classifier',
                'time' => 'Jul.2017 — Sep.2017',
                'desc' => '一個專門為電商廣告圖片所做的工具，可以根據不同的廣告商(Facebook, Google AdWords, Line等)以及不同的廣告版面所需的圖片尺寸打包上傳的圖片，並供下載。
                是我在urAD實習時的專案，實作了NLP等相關技術。',
                'link' => '',
                'img_src' => asset('images/urad.jpg'),
                'stack' => ['Python', 'NLP', 'word2vec']
            ],
            [
                'name' => 'Besides Magazine',
                'time' => 'Sep.2016 — Sep.2017',
                'desc' => '《除了》雜誌為中央大學學生創辦之獨立刊物，宗旨為推動校園的人文氛圍及文藝復興，建立校園發聲之重要平台。我在該專案中負責需求規劃、前後端程式設計。',
                'link' => 'http://besidesmagazine.com/',
                'img_src' => asset('images/besides.jpg'),
                'stack' => ['Laravel', 'jQuery']
            ],
            [
                'name' => 'Help Bell',
                'time' => 'Jan.2018 — Apr.2018',
                'desc' => '參加2018 UnaStar的作品，是一個提供登山救助的平台，並有供救難單位監控的儀表板。我在該專案中負責前後端，同時也參與設計其商業模式。',
                'link' => 'https://una.benhuang.info/dashboard',
                'img_src' => asset('images/helpbell.jpg'),
                'stack' => ['Sigfox', 'Laravel', 'Vue.js', 'Socket.io']
            ],
            [
                'name' => 'Priority',
                'time' => 'Nov.2017 — Jan.2018',
                'desc' => '2017 T-challenge 第三名作品，一個以trello為延伸的個人任務管理工具，供使用者以個人角度管理來自不同小組的任務卡片並規劃其順序。我在該專案中負責前後端。',
                'link' => '',
                'img_src' => asset('images/priority.jpg'),
                'stack' => ['Laravel', 'sortable.js']
            ],
            [
                'name' => 'My blog',
                'time' => 'Apr.2018',
                'desc' => '我的部落格，記錄一些開發筆記、隨筆',
                'link' => 'https://benhuang.info/',
                'img_src' => asset('images/mysite.jpg'),
                'stack' => ['PHP', 'Wordpress']
            ],
        ];

        $skills = [
            [
                'name' => 'JavaScript',
                'pct' => 70
            ],
            [
                'name' => 'Laravel',
                'pct' => 75
            ],
            [
                'name' => 'Python',
                'pct' => 60
            ],
            [
                'name' => 'Keras',
                'pct' => 30
            ]
        ];

        $contact_info = [
            'email' => 'huang831206@gmail.com',
            'phone' => '0981241328'
        ];

        DB::table('information')->insert([
            [
                'name_ch' => $name_ch,
                'name_en' => $name_en,
                'school' => $school,
                'degree' => $degree,
                'self_intro' => $self_intro,
                'about' => json_encode($about),
                'projects' => json_encode($projects),
                'skills' => json_encode($skills),
                'contact_info' => json_encode($contact_info),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        ]);
    }
}
