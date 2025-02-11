<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ChannelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('channels')->insert([
            ['title' => 'Channel 1', 'subscribers_count' => 2872421, 'average_views' => 83378, 'engagement_rate' => 3.88, 'category' => 10, 'language' => 52, 'region' => 15, 'last_video_period' => '2024-10-20', 'created_at' => now()],
            ['title' => 'Channel 100', 'subscribers_count' => 4772304, 'average_views' => 1239814 , 'engagement_rate' => 8.38 , 'category' => 10 , 'language' => 46 , 'region' => 1, 'last_video_period' => '2024-08-27', 'created_at' => now()],
            ['title' => 'Channel 15', 'subscribers_count' =>792655 , 'average_views' => 1447933 , 'engagement_rate' => 2.75 , 'category' => 10 , 'language' => 46 , 'region' => 2, 'last_video_period' => '2024-07-12', 'created_at' => now()],
            ['title' => 'Channel 17', 'subscribers_count' =>4776401 , 'average_views' => 1616555 , 'engagement_rate' => 3.84 , 'category' => 10 , 'language' => 16 , 'region' => 1, 'last_video_period' => '2024-06-19', 'created_at' => now()],
            ['title' => 'Channel 26', 'subscribers_count' =>3265719 , 'average_views' => 550849 , 'engagement_rate' => 3.88 , 'category' => 10 , 'language' => 28 , 'region' => 2, 'last_video_period' => '2024-12-22', 'created_at' => now()],
            ['title' => 'Channel 4', 'subscribers_count' => 536753, 'average_views' => 265788, 'engagement_rate' => 2.8 , 'category' => 10 , 'language' => 46 , 'region' => 6, 'last_video_period' => '2024-01-14', 'created_at' => now()],
            ['title' => 'Channel 57', 'subscribers_count' =>841185 , 'average_views' => 796994 , 'engagement_rate' => 5.98 , 'category' => 10 , 'language' => 52 , 'region' => 2, 'last_video_period' => '2024-08-07', 'created_at' => now()],
            ['title' => 'Channel 6', 'subscribers_count' => 1786671, 'average_views' => 1414948 , 'engagement_rate' => 2.78 , 'category' => 10 , 'language' => 46 , 'region' => 1, 'last_video_period' => '2024-07-07', 'created_at' => now()],
            ['title' => 'Channel 62', 'subscribers_count' =>4741639 , 'average_views' => 345566 , 'engagement_rate' => 8.54 , 'category' => 10 , 'language' => 23 , 'region' => 5, 'last_video_period' => '2024-01-07', 'created_at' => now()],
            ['title' => 'Channel 66', 'subscribers_count' =>4654720 , 'average_views' => 742974 , 'engagement_rate' => 5.27 , 'category' => 10 , 'language' => 11 , 'region' => 7, 'last_video_period' => '2024-12-14', 'created_at' => now()],
            ['title' => 'Channel 85', 'subscribers_count' =>1320121 , 'average_views' => 45392 , 'engagement_rate' => 2.34 , 'category' => 10 , 'language' => 20 , 'region' => 7, 'last_video_period' => '2024-09-10', 'created_at' => now()],
            ['title' => 'Channel 86', 'subscribers_count' =>3160110 , 'average_views' => 1992237 , 'engagement_rate' => 8.29 , 'category' => 10 , 'language' => 48 , 'region' => 4, 'last_video_period' => '2024-06-18', 'created_at' => now()],
            ['title' => 'Channel 93', 'subscribers_count' =>3177575 , 'average_views' => 1820009, 'engagement_rate' => 9.8 , 'category' => 10 , 'language' => 23 , 'region' => 6, 'last_video_period' => '2024-11-27', 'created_at' => now()],
            ['title' => 'Channel 18', 'subscribers_count' =>2367687 , 'average_views' => 356116 , 'engagement_rate' => 6.55 , 'category' => 17 , 'language' => 16 , 'region' => 4, 'last_video_period' => '2024-05-22', 'created_at' => now()],
            ['title' => 'Channel 23', 'subscribers_count' =>3143700 , 'average_views' => 1721437 , 'engagement_rate' => 7.89 , 'category' => 17 , 'language' => 28 , 'region' => 2, 'last_video_period' => '2024-06-04', 'created_at' => now()],
            ['title' => 'Channel 28', 'subscribers_count' =>449485 , 'average_views' => 1404039 , 'engagement_rate' => 4.56 , 'category' => 17 , 'language' => 11 , 'region' => 9, 'last_video_period' => '2024-01-21', 'created_at' => now()],
            ['title' => 'Channel 30', 'subscribers_count' =>863642 , 'average_views' => 1649576 , 'engagement_rate' => 9.39 , 'category' => 17 , 'language' => 23 , 'region' => 9, 'last_video_period' => '2024-04-16', 'created_at' => now()],
            ['title' => 'Channel 42', 'subscribers_count' =>3786693 , 'average_views' => 1160908, 'engagement_rate' => 7.61, 'category' => 17, 'language' => 23, 'region' => 10, 'last_video_period' => '2024-02-22', 'created_at' => now()],
            ['title' => 'Channel 47', 'subscribers_count' =>2536352 , 'average_views' => 898165, 'engagement_rate' => 7.97, 'category' => 17, 'language' => 48, 'region' => 10, 'last_video_period' => '2024-03-22', 'created_at' => now()],
            ['title' => 'Channel 53', 'subscribers_count' =>912758 , 'average_views' => 1633809 , 'engagement_rate' => 8.78 , 'category' => 17 , 'language' => 46 , 'region' => 6, 'last_video_period' => '2024-01-01', 'created_at' => now()],
            ['title' => 'Channel 63', 'subscribers_count' =>2972310 , 'average_views' => 1455347 , 'engagement_rate' => 7.12 , 'category' => 17 , 'language' => 16 , 'region' => 3, 'last_video_period' => '2024-03-25', 'created_at' => now()],
            ['title' => 'Channel 79', 'subscribers_count' =>2842235 , 'average_views' => 1599406, 'engagement_rate' => 7.61, 'category' => 17, 'language' => 46, 'region' => 10, 'last_video_period' => '2024-12-05', 'created_at' => now()],
            ['title' => 'Channel 89', 'subscribers_count' =>1350258 , 'average_views' => 109624 , 'engagement_rate' => 3.22 , 'category' => 17 , 'language' => 20 , 'region' => 6, 'last_video_period' => '2024-05-03', 'created_at' => now()],
            ['title' => 'Channel 9', 'subscribers_count' => 3750511, 'average_views' => 796834 , 'engagement_rate' => 3.48 , 'category' => 17 , 'language' => 46 , 'region' => 5, 'last_video_period' => '2024-09-03', 'created_at' => now()],
            ['title' => 'Channel 24', 'subscribers_count' =>2990382 , 'average_views' => 997813 , 'engagement_rate' => 9.45 , 'category' => 19 , 'language' => 52 , 'region' => 5, 'last_video_period' => '2024-11-10', 'created_at' => now()],
            ['title' => 'Channel 46', 'subscribers_count' =>3409685 , 'average_views' => 1879371 , 'engagement_rate' => 4.93 , 'category' => 19 , 'language' => 52 , 'region' => 2, 'last_video_period' => '2024-02-24', 'created_at' => now()],
            ['title' => 'Channel 54', 'subscribers_count' =>1523822 , 'average_views' => 276439, 'engagement_rate' => 4.87, 'category' => 19, 'language' => 20, 'region' => 10, 'last_video_period' => '2024-10-06', 'created_at' => now()],
            ['title' => 'Channel 67', 'subscribers_count' =>51521 , 'average_views' => 1569414 , 'engagement_rate' => 5.98 , 'category' => 19 , 'language' => 48 , 'region' => 6, 'last_video_period' => '2024-05-23', 'created_at' => now()],
            ['title' => 'Channel 72', 'subscribers_count' =>1074934 , 'average_views' => 1849877 , 'engagement_rate' => 2.97 , 'category' => 19 , 'language' => 52 , 'region' => 4, 'last_video_period' => '2024-07-17', 'created_at' => now()],
            ['title' => 'Channel 91', 'subscribers_count' =>4782974 , 'average_views' => 1839501, 'engagement_rate' => 5.7 , 'category' => 19 , 'language' => 16 , 'region' => 9, 'last_video_period' => '2024-03-18', 'created_at' => now()],
            ['title' => 'Channel 96', 'subscribers_count' =>1024592 , 'average_views' => 1513363, 'engagement_rate' => 8.53, 'category' => 19, 'language' => 11, 'region' => 15, 'last_video_period' => '2024-12-21', 'created_at' => now()],
            ['title' => 'Channel 16', 'subscribers_count' =>1178353 , 'average_views' => 734921 , 'engagement_rate' => 5.65 , 'category' => 20 , 'language' => 16 , 'region' => 6, 'last_video_period' => '2024-02-26', 'created_at' => now()],
            ['title' => 'Channel 37', 'subscribers_count' =>2355044 , 'average_views' => 1466351 , 'engagement_rate' => 2.22 , 'category' => 20 , 'language' => 16 , 'region' => 4, 'last_video_period' => '2024-01-20', 'created_at' => now()],
            ['title' => 'Channel 49', 'subscribers_count' =>3265735 , 'average_views' => 1896974 , 'engagement_rate' => 7.61 , 'category' => 20 , 'language' => 20 , 'region' => 4, 'last_video_period' => '2024-07-01', 'created_at' => now()],
            ['title' => 'Channel 58', 'subscribers_count' =>3322870 , 'average_views' => 1488218, 'engagement_rate' => 2.7 , 'category' => 20 , 'language' => 23 , 'region' => 1, 'last_video_period' => '2024-11-12', 'created_at' => now()],
            ['title' => 'Channel 61', 'subscribers_count' =>54295 , 'average_views' => 785963, 'engagement_rate' => 3.6 , 'category' => 20 , 'language' => 48 , 'region' => 7, 'last_video_period' => '2024-09-02', 'created_at' => now()],
            ['title' => 'Channel 65', 'subscribers_count' =>2573571 , 'average_views' => 1480467 , 'engagement_rate' => 8.75 , 'category' => 20 , 'language' => 46 , 'region' => 3, 'last_video_period' => '2024-10-04', 'created_at' => now()],
            ['title' => 'Channel 36', 'subscribers_count' =>4953029 , 'average_views' => 1599122 , 'engagement_rate' => 3.73 , 'category' => 24 , 'language' => 23 , 'region' => 9, 'last_video_period' => '2024-08-14', 'created_at' => now()],
            ['title' => 'Channel 41', 'subscribers_count' =>3674253 , 'average_views' => 1607080, 'engagement_rate' => 4.51, 'category' => 24, 'language' => 52, 'region' => 15, 'last_video_period' => '2024-11-06', 'created_at' => now()],
            ['title' => 'Channel 5', 'subscribers_count' => 3226330, 'average_views' => 495709 , 'engagement_rate' => 4.76 , 'category' => 24 , 'language' => 52 , 'region' => 3, 'last_video_period' => '2024-05-17', 'created_at' => now()],
            ['title' => 'Channel 51', 'subscribers_count' =>2006870 , 'average_views' => 1517854, 'engagement_rate' => 7.5 , 'category' => 24 , 'language' => 52 , 'region' => 9, 'last_video_period' => '2024-04-01', 'created_at' => now()],
            ['title' => 'Channel 56', 'subscribers_count' =>1379456 , 'average_views' => 141006 , 'engagement_rate' => 3.38 , 'category' => 24 , 'language' => 48 , 'region' => 1, 'last_video_period' => '2024-12-22', 'created_at' => now()],
            ['title' => 'Channel 74', 'subscribers_count' =>4557065 , 'average_views' => 1949689 , 'engagement_rate' => 6.75 , 'category' => 24 , 'language' => 46 , 'region' => 4, 'last_video_period' => '2024-06-21', 'created_at' => now()],
            ['title' => 'Channel 77', 'subscribers_count' =>2378408 , 'average_views' => 1968336 , 'engagement_rate' => 5.51 , 'category' => 24 , 'language' => 52 , 'region' => 7, 'last_video_period' => '2024-11-02', 'created_at' => now()],
            ['title' => 'Channel 87', 'subscribers_count' =>1884713 , 'average_views' => 1064603 , 'engagement_rate' => 9.61 , 'category' => 24 , 'language' => 20 , 'region' => 5, 'last_video_period' => '2024-03-09', 'created_at' => now()],
            ['title' => 'Channel 95', 'subscribers_count' =>4947180 , 'average_views' => 1768503 , 'engagement_rate' => 6.48 , 'category' => 24 , 'language' => 23 , 'region' => 4, 'last_video_period' => '2024-10-07', 'created_at' => now()],
            ['title' => 'Channel 97', 'subscribers_count' =>4958311 , 'average_views' => 470727 , 'engagement_rate' => 4.71 , 'category' => 24 , 'language' => 20 , 'region' => 5, 'last_video_period' => '2024-05-16', 'created_at' => now()],
            ['title' => 'Channel 19', 'subscribers_count' =>2869859 , 'average_views' => 1262868 , 'engagement_rate' => 7.18 , 'category' => 26 , 'language' => 23 , 'region' => 5, 'last_video_period' => '2024-08-25', 'created_at' => now()],
            ['title' => 'Channel 22', 'subscribers_count' =>3974082 , 'average_views' => 199597 , 'engagement_rate' => 3.32 , 'category' => 26 , 'language' => 46 , 'region' => 7, 'last_video_period' => '2024-12-15', 'created_at' => now()],
            ['title' => 'Channel 3', 'subscribers_count' => 3739981, 'average_views' => 850259 , 'engagement_rate' => 4.21 , 'category' => 26 , 'language' => 52 , 'region' => 7, 'last_video_period' => '2024-01-08', 'created_at' => now()],
            ['title' => 'Channel 31', 'subscribers_count' =>2357593 , 'average_views' => 217562 , 'engagement_rate' => 6.77 , 'category' => 26 , 'language' => 48 , 'region' => 3, 'last_video_period' => '2024-04-12', 'created_at' => now()],
            ['title' => 'Channel 44', 'subscribers_count' =>3355352 , 'average_views' => 123285 , 'engagement_rate' => 8.78 , 'category' => 26 , 'language' => 11 , 'region' => 4, 'last_video_period' => '2024-03-27', 'created_at' => now()],
            ['title' => 'Channel 48', 'subscribers_count' =>1491757 , 'average_views' => 1587457, 'engagement_rate' => 2.7 , 'category' => 26 , 'language' => 11 , 'region' => 7, 'last_video_period' => '2024-07-01', 'created_at' => now()],
            ['title' => 'Channel 50', 'subscribers_count' =>3472129 , 'average_views' => 1944082, 'engagement_rate' => 3.21, 'category' => 26, 'language' => 20, 'region' => 15, 'last_video_period' => '2024-12-26', 'created_at' => now()],
            ['title' => 'Channel 52', 'subscribers_count' =>3463896 , 'average_views' => 1706416 , 'engagement_rate' => 3.18 , 'category' => 26 , 'language' => 46 , 'region' => 4, 'last_video_period' => '2024-05-26', 'created_at' => now()],
            ['title' => 'Channel 60', 'subscribers_count' =>3297055 , 'average_views' => 1109848 , 'engagement_rate' => 2.73 , 'category' => 26 , 'language' => 52 , 'region' => 3, 'last_video_period' => '2024-03-03', 'created_at' => now()],
            ['title' => 'Channel 73', 'subscribers_count' =>4354382 , 'average_views' => 233251, 'engagement_rate' => 6.11, 'category' => 26, 'language' => 52, 'region' => 10, 'last_video_period' => '2024-10-07', 'created_at' => now()],
            ['title' => 'Channel 8', 'subscribers_count' => 3810737, 'average_views' => 594336 , 'engagement_rate' => 5.02 , 'category' => 26 , 'language' => 52 , 'region' => 5, 'last_video_period' => '2024-10-19', 'created_at' => now()],
            ['title' => 'Channel 80', 'subscribers_count' =>2797939 , 'average_views' => 1963873 , 'engagement_rate' => 4.67 , 'category' => 26 , 'language' => 48 , 'region' => 1, 'last_video_period' => '2024-06-13', 'created_at' => now()],
            ['title' => 'Channel 82', 'subscribers_count' =>671031 , 'average_views' => 235699, 'engagement_rate' => 6.29, 'category' => 26, 'language' => 28, 'region' => 15, 'last_video_period' => '2024-12-12', 'created_at' => now()],
            ['title' => 'Channel 88', 'subscribers_count' =>3260604 , 'average_views' => 1745866 , 'engagement_rate' => 4.67 , 'category' => 26 , 'language' => 52 , 'region' => 1, 'last_video_period' => '2024-12-16', 'created_at' => now()],
            ['title' => 'Channel 92', 'subscribers_count' =>620971 , 'average_views' => 1799295 , 'engagement_rate' => 7.77 , 'category' => 26 , 'language' => 28 , 'region' => 6, 'last_video_period' => '2024-09-09', 'created_at' => now()],
            ['title' => 'Channel 12', 'subscribers_count' =>592377 , 'average_views' => 1821191 , 'engagement_rate' => 2.75 , 'category' => 34 , 'language' => 23 , 'region' => 1, 'last_video_period' => '2024-06-24', 'created_at' => now()],
            ['title' => 'Channel 20', 'subscribers_count' =>1836513 , 'average_views' => 161528 , 'engagement_rate' => 8.72 , 'category' => 34 , 'language' => 16 , 'region' => 1, 'last_video_period' => '2024-01-26', 'created_at' => now()],
            ['title' => 'Channel 35', 'subscribers_count' =>2103367 , 'average_views' => 263708 , 'engagement_rate' => 6.57 , 'category' => 34 , 'language' => 48 , 'region' => 2, 'last_video_period' => '2024-01-19', 'created_at' => now()],
            ['title' => 'Channel 55', 'subscribers_count' =>4079681 , 'average_views' => 282351 , 'engagement_rate' => 7.32 , 'category' => 34 , 'language' => 52 , 'region' => 3, 'last_video_period' => '2024-03-14', 'created_at' => now()],
            ['title' => 'Channel 64', 'subscribers_count' =>2766082 , 'average_views' => 21483 , 'engagement_rate' => 7.72 , 'category' => 34 , 'language' => 28 , 'region' => 4, 'last_video_period' => '2024-12-19', 'created_at' => now()],
            ['title' => 'Channel 69', 'subscribers_count' =>3962389 , 'average_views' => 831543 , 'engagement_rate' => 4.56 , 'category' => 34 , 'language' => 46 , 'region' => 9, 'last_video_period' => '2024-06-07', 'created_at' => now()],
            ['title' => 'Channel 75', 'subscribers_count' =>1443420 , 'average_views' => 344440 , 'engagement_rate' => 5.72 , 'category' => 34 , 'language' => 46 , 'region' => 1, 'last_video_period' => '2024-02-07', 'created_at' => now()],
            ['title' => 'Channel 81', 'subscribers_count' =>1857813 , 'average_views' => 930832 , 'engagement_rate' => 6.42 , 'category' => 34 , 'language' => 23 , 'region' => 5, 'last_video_period' => '2024-12-07', 'created_at' => now()],
            ['title' => 'Channel 90', 'subscribers_count' =>871696 , 'average_views' => 396683 , 'engagement_rate' => 3.53 , 'category' => 34 , 'language' => 46 , 'region' => 1, 'last_video_period' => '2024-04-19', 'created_at' => now()],
            ['title' => 'Channel 98', 'subscribers_count' =>3008693 , 'average_views' => 1374060 , 'engagement_rate' => 2.82 , 'category' => 34 , 'language' => 28 , 'region' => 1, 'last_video_period' => '2024-01-18', 'created_at' => now()],
            ['title' => 'Channel 25', 'subscribers_count' =>1718226 , 'average_views' => 780736, 'engagement_rate' => 6.71, 'category' => 35, 'language' => 52, 'region' => 10, 'last_video_period' => '2024-08-20', 'created_at' => now()],
            ['title' => 'Channel 27', 'subscribers_count' =>4986146 , 'average_views' => 425069 , 'engagement_rate' => 6.14 , 'category' => 35 , 'language' => 46 , 'region' => 2, 'last_video_period' => '2024-12-04', 'created_at' => now()],
            ['title' => 'Channel 29', 'subscribers_count' =>3164679 , 'average_views' => 1085787, 'engagement_rate' => 5.3 , 'category' => 35 , 'language' => 11 , 'region' => 6, 'last_video_period' => '2024-06-26', 'created_at' => now()],
            ['title' => 'Channel 32', 'subscribers_count' =>3072257 , 'average_views' => 708256, 'engagement_rate' => 7.45, 'category' => 35, 'language' => 52, 'region' => 15, 'last_video_period' => '2024-02-25', 'created_at' => now()],
            ['title' => 'Channel 40', 'subscribers_count' =>2545350 , 'average_views' => 1554916 , 'engagement_rate' => 8.08 , 'category' => 35 , 'language' => 52 , 'region' => 5, 'last_video_period' => '2024-04-05', 'created_at' => now()],
            ['title' => 'Channel 43', 'subscribers_count' =>4441947 , 'average_views' => 1445451 , 'engagement_rate' => 2.67 , 'category' => 35 , 'language' => 16 , 'region' => 6, 'last_video_period' => '2024-06-20', 'created_at' => now()],
            ['title' => 'Channel 45', 'subscribers_count' =>4639489 , 'average_views' => 77999, 'engagement_rate' => 3.15, 'category' => 35, 'language' => 20, 'region' => 15, 'last_video_period' => '2024-11-10', 'created_at' => now()],
            ['title' => 'Channel 59', 'subscribers_count' =>3320646 , 'average_views' => 418795, 'engagement_rate' => 7.25, 'category' => 35, 'language' => 16, 'region' => 15, 'last_video_period' => '2024-09-02', 'created_at' => now()],
            ['title' => 'Channel 83', 'subscribers_count' =>2354092 , 'average_views' => 1230891 , 'engagement_rate' => 6.44 , 'category' => 35 , 'language' => 46 , 'region' => 1, 'last_video_period' => '2024-05-27', 'created_at' => now()],
            ['title' => 'Channel 94', 'subscribers_count' =>3500058 , 'average_views' => 1397586 , 'engagement_rate' => 8.53 , 'category' => 35 , 'language' => 11 , 'region' => 9, 'last_video_period' => '2024-06-17', 'created_at' => now()],
            ['title' => 'Channel 99', 'subscribers_count' =>774989 , 'average_views' => 942609 , 'engagement_rate' => 7.81 , 'category' => 35 , 'language' => 20 , 'region' => 6, 'last_video_period' => '2024-12-01', 'created_at' => now()],
            ['title' => 'Channel 10', 'subscribers_count' =>4471081 , 'average_views' => 397975 , 'engagement_rate' => 3.66 , 'category' => 36 , 'language' => 16 , 'region' => 9, 'last_video_period' => '2024-10-07', 'created_at' => now()],
            ['title' => 'Channel 13', 'subscribers_count' =>4288062 , 'average_views' => 1536685 , 'engagement_rate' => 6.73 , 'category' => 36 , 'language' => 52 , 'region' => 5, 'last_video_period' => '2024-08-24', 'created_at' => now()],
            ['title' => 'Channel 2', 'subscribers_count' => 290878, 'average_views' => 1512221 , 'engagement_rate' => 7.01 , 'category' => 36 , 'language' => 52 , 'region' => 2, 'last_video_period' => '2024-11-11', 'created_at' => now()],
            ['title' => 'Channel 21', 'subscribers_count' =>394291 , 'average_views' => 1575623 , 'engagement_rate' => 4.46 , 'category' => 36 , 'language' => 46 , 'region' => 6, 'last_video_period' => '2024-10-25', 'created_at' => now()],
            ['title' => 'Channel 33', 'subscribers_count' =>578878 , 'average_views' => 792031 , 'engagement_rate' => 5.72 , 'category' => 36 , 'language' => 23 , 'region' => 1, 'last_video_period' => '2024-10-24', 'created_at' => now()],
            ['title' => 'Channel 7', 'subscribers_count' => 2054201, 'average_views' => 69159 , 'engagement_rate' => 9.69 , 'category' => 36 , 'language' => 23 , 'region' => 1, 'last_video_period' => '2024-10-24', 'created_at' => now()],
            ['title' => 'Channel 70', 'subscribers_count' =>2411953 , 'average_views' => 754962, 'engagement_rate' => 8.33, 'category' => 36, 'language' => 16, 'region' => 15, 'last_video_period' => '2024-03-23', 'created_at' => now()],
            ['title' => 'Channel 78', 'subscribers_count' =>3510611 , 'average_views' => 1835904 , 'engagement_rate' => 2.31 , 'category' => 36 , 'language' => 52 , 'region' => 9, 'last_video_period' => '2024-03-02', 'created_at' => now()],
            ['title' => 'Channel 84', 'subscribers_count' =>4568571 , 'average_views' => 742499 , 'engagement_rate' => 7.69 , 'category' => 36 , 'language' => 23 , 'region' => 1, 'last_video_period' => '2024-09-11', 'created_at' => now()],
            ['title' => 'Channel 11', 'subscribers_count' =>1162692 , 'average_views' => 1081036 , 'engagement_rate' => 5.77 , 'category' => 45 , 'language' => 16 , 'region' => 4, 'last_video_period' => '2024-06-14', 'created_at' => now()],
            ['title' => 'Channel 14', 'subscribers_count' =>3557358 , 'average_views' => 883358 , 'engagement_rate' => 7.14 , 'category' => 45 , 'language' => 16 , 'region' => 5, 'last_video_period' => '2024-02-26', 'created_at' => now()],
            ['title' => 'Channel 34', 'subscribers_count' =>228380 , 'average_views' => 1674901 , 'engagement_rate' => 2.65 , 'category' => 45 , 'language' => 28 , 'region' => 4, 'last_video_period' => '2024-09-11', 'created_at' => now()],
            ['title' => 'Channel 38', 'subscribers_count' =>2667911 , 'average_views' => 274925 , 'engagement_rate' => 2.52 , 'category' => 45 , 'language' => 20 , 'region' => 9, 'last_video_period' => '2024-11-27', 'created_at' => now()],
            ['title' => 'Channel 39', 'subscribers_count' =>1726267 , 'average_views' => 1636319 , 'engagement_rate' => 3.75 , 'category' => 45 , 'language' => 52 , 'region' => 2, 'last_video_period' => '2024-11-16', 'created_at' => now()],
            ['title' => 'Channel 68', 'subscribers_count' =>1799272 , 'average_views' => 687165 , 'engagement_rate' => 4.8, 'category' => 45, 'language' => 16, 'region' => 15, 'last_video_period' => '2024-08-23', 'created_at' => now()],
            ['title' => 'Channel 71', 'subscribers_count' =>2427181 , 'average_views' => 183522 , 'engagement_rate' => 7.68 , 'category' => 45 , 'language' => 52 , 'region' => 4, 'last_video_period' => '2024-07-09', 'created_at' => now()],
            ['title' => 'Channel 76', 'subscribers_count' =>2069613 , 'average_views' => 225720 , 'engagement_rate' => 9.6, 'category' => 45, 'language' => 52, 'region' => 15, 'last_video_period' => '2024-01-04', 'created_at' => now()],
        ]);
    }
}
