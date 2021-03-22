<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class moviesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('movies')->insert([
            //drama
            [
                'genre_id' => 1,
                'title' => 'Hotel Del Luna',
                'photo' => 'Drama/hdl.jpg',
                'description' => 'Hotel del Luna (Korean: 호텔 델루나; RR: Hotel del luna) is a 2019 South Korean television series, starring Lee Ji-eun and Yeo Jin-goo as the owner and manager, respectively, of the eponymous hotel that caters only to ghosts.',
                'rating' => '5'
            ],
            [
                'genre_id' => 1,
                'title' => 'Vagabond',
                'photo' => 'Drama/v.jpg',
                'description' => 'This is a pre-produced drama. A mysterious plane crash kills over 200 civilians, including Cha Dal Gun\'s (Lee Seung Ki) nephew. Determined to find out the truth behind the accident, Cha Dal Gun embarks on an investigation that leads him to a tangled web of corruption.',
                'rating' => '4'
            ],
            [
                'genre_id' => 1,
                'title' => 'Itaewon Class',
                'photo' => 'Drama/ic.jpg',
                'description' => 'Itaewon Class follows Park Sae-ro-yi (Park Seo-joon), a kind-hearted boy who dreams of becoming a police officer. His teachers describe Park as socially inept because he doesn\'t interact much with other people, much less have friends.',
                'rating' => '5'
            ],
            [
                'genre_id' => 1,
                'title' => 'Crash Landing On You',
                'photo' => 'Drama/cloy.jpg',
                'description' => 'It is about a South Korean chaebol heiress who, while paragliding in Seoul, South Korea, is swept up in a sudden storm and crash-lands in the North Korean portion of the DMZ.',
                'rating' => '5'
            ],
            //kids
            [
                'genre_id' => 2,
                'title' => 'Boboboy',
                'photo' => 'Kids/bbb.jpg',
                'description' => 'BoBoiBoy is a Malaysian animated series and franchise produced by Animonsta Studios. In this story, a teenage boy has superpowers that is based on elementals. He has the ability to separate into three. With his friends, Ying, Hannah/Yaya, Gopal and Fang, they form a team and fight to protect the Earth from alien threats who aim to conquer the Earth.',
                'rating' => '3'
            ],
            [
                'genre_id' => 2,
                'title' => 'Dora The Explorer',
                'photo' => 'Kids/d.jpg',
                'description' => 'Dora the Explorer is a 7 year old, Latino girl. Dora uses her knowledge of the Spanish language to communicate with her friends, overcome obstacles and reach her goals. In each episode, Dora teaches the viewers a Spanish word or phrase and then asks them to use it to help solve a problem.',
                'rating' => '4'
            ],
            [
                'genre_id' => 2,
                'title' => 'Phineas and Ferb',
                'photo' => 'Kids/pnf.jpg',
                'description' => 'The show follows the adventures of stepbrothers Phineas Flynn (Vincent Martella) and Ferb Fletcher (Thomas Sangster), who live in the fictional city of Danville, in a (never specified) tri-state area, as they seek ways to occupy their time during their summer vacation.',
                'rating' => '5'
            ],
            [
                'genre_id' => 2,
                'title' => 'Spongebob SquerePants',
                'photo' => 'Kids/s.jpg',
                'description' => 'SpongeBob SquarePants is an American animated comedy television series created by marine science educator and animator Stephen Hillenburg for Nickelodeon. The series chronicles the adventures and endeavors of the title character and his aquatic friends in the fictional underwater city of Bikini Bottom.',
                'rating' => '5'
            ],
            //tvshow
            [
                'genre_id' => 3,
                'title' => 'Hell\'s Litchen',
                'photo' => 'TVShow/hk.jpg',
                'description' => 'Hell\'s Kitchen is a reality television show that uses a progressive elimination format to narrow down a field of 12 to 20 aspiring chefs to one single winner over the course of one season.',
                'rating' => '4'
            ],
            [
                'genre_id' => 3,
                'title' => 'Ini Talk Show',
                'photo' => 'TVShow/its.jpg',
                'description' => 'Ini Talkshow is an Indonesian talk show. This program is running on NET. TV channel. This talk show program was first aired on 24 March 2014. During Ramadan, this show was also available during Sahur under the name of Ini Sahur.',
                'rating' => '4'
            ],
            [
                'genre_id' => 3,
                'title' => 'Master Cheff America',
                'photo' => 'TVShow/mc.jpg',
                'description' => 'MasterChef is an American competitive cooking reality TV show based on the British series of the same name, open to amateur and home chefs. Produced by Shine America and One Potato Two Potato, it debuted on July 27, 2010 on the Fox network, following the professional cooking competition series Hell\'s Kitchen.',
                'rating' => '5'
            ],
            [
                'genre_id' => 3,
                'title' => 'America Got Talent',
                'photo' => 'TVShow/agt.jpg',
                'description' => 'America\'s Got Talent (abbreviated AGT) is an American reality television series on the NBC television network. It is a talent show that features singers, dancers, magicians, comedians, and other performers of all ages competing for the advertised top prize of US$1 million.',
                'rating' => '5'
            ]
        ]);
    }
}
