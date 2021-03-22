<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class episodesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('episodes')->insert([
            //1
            [
                'movie_id'=> '1',
                'episode'=>'1',
                'title'=>'Permulaan'
            ],
            [
                'movie_id'=> '1',
                'episode'=>'2',
                'title'=>'Perjanjian Hotel'
            ],
            [
                'movie_id'=> '1',
                'episode'=>'3',
                'title'=>'Hotel Berhantu'
            ],
            [
                'movie_id'=> '1',
                'episode'=>'4',
                'title'=>'Pengejaran Hantu'
            ],
            [
                'movie_id'=> '1',
                'episode'=>'5',
                'title'=>'Penangkapan Hantu'
            ],
            [
                'movie_id'=> '1',
                'episode'=>'6',
                'title'=>'Terluka parah'
            ],
            [
                'movie_id'=> '1',
                'episode'=>'7',
                'title'=>'Pelarian :Tamat'
            ],
            //2
            [
                'movie_id'=> '2',
                'episode'=>'1',
                'title'=>'Pemulaan'
            ],
            [
                'movie_id'=> '2',
                'episode'=>'2',
                'title'=>'Stuntman'
            ],
            [
                'movie_id'=> '2',
                'episode'=>'3',
                'title'=>'Perjalan keponakan'
            ],
            [
                'movie_id'=> '2',
                'episode'=>'4',
                'title'=>'Penerbangan Maroko'
            ],
            [
                'movie_id'=> '2',
                'episode'=>'5',
                'title'=>'Pengerjaran Teroris'
            ],
            //3
            [
                'movie_id'=> '3',
                'episode'=>'1',
                'title'=>'Masa masa Sekolah'
            ],
            [
                'movie_id'=> '3',
                'episode'=>'2',
                'title'=>'Perdebatan Bisnis'
            ],
            [
                'movie_id'=> '3',
                'episode'=>'3',
                'title'=>'Penjara'
            ],
            [
                'movie_id'=> '3',
                'episode'=>'4',
                'title'=>'Come Back'
            ],
            [
                'movie_id'=> '3',
                'episode'=>'5',
                'title'=>'Bisnis Wara Laba'
            ],
            [
                'movie_id'=> '3',
                'episode'=>'6',
                'title'=>'Balas Dendam'
            ],
            [
                'movie_id'=> '3',
                'episode'=>'7',
                'title'=>'Pertarunagn I'
            ],
            [
                'movie_id'=> '3',
                'episode'=>'8',
                'title'=>'Pertarunan II'
            ],
            [
                'movie_id'=> '3',
                'episode'=>'9',
                'title'=>'Kemenangan Bisnis'
            ],
            [
                'movie_id'=> '3',
                'episode'=>'10',
                'title'=>'CEO IC'
            ],
            //4
            [
                'movie_id'=> '4',
                'episode'=>'1',
                'title'=>'Paralayang'
            ],
            [
                'movie_id'=> '4',
                'episode'=>'2',
                'title'=>'Tersesat dihutan'
            ],
            [
                'movie_id'=> '4',
                'episode'=>'3',
                'title'=>'Pencarian Orang'
            ],
            [
                'movie_id'=> '4',
                'episode'=>'4',
                'title'=>'Terdampar di Korea Utara'
            ],
            //5
            [
                'movie_id'=> '5',
                'episode'=>'1',
                'title'=>'Bertemu teman teman'
            ],
            [
                'movie_id'=> '5',
                'episode'=>'2',
                'title'=>'Menemukan kekuatan'
            ],
            [
                'movie_id'=> '5',
                'episode'=>'3',
                'title'=>'Adudu'
            ],
            [
                'movie_id'=> '5',
                'episode'=>'4',
                'title'=>'Perang dimulai'
            ],
            //6
            [
                'movie_id'=> '6',
                'episode'=>'1',
                'title'=>'Perjalanan Gua Hantu'
            ],
            [
                'movie_id'=> '6',
                'episode'=>'2',
                'title'=>'Perjalanan Pantai Ayah'
            ],
            [
                'movie_id'=> '6',
                'episode'=>'3',
                'title'=>'Perjalanan Taman Safari'
            ],
            [
                'movie_id'=> '6',
                'episode'=>'4',
                'title'=>'Perjalanan Pohon Ajaib'
            ],
            //7
            [
                'movie_id'=> '7',
                'episode'=>'1',
                'title'=>'Roller Coaster'
            ],
            [
                'movie_id'=> '7',
                'episode'=>'2',
                'title'=>'Roket'
            ],
            [
                'movie_id'=> '7',
                'episode'=>'3',
                'title'=>'Pengatur Cuaca'
            ],
            [
                'movie_id'=> '7',
                'episode'=>'4',
                'title'=>'Perang Salju'
            ],
            [
                'movie_id'=> '7',
                'episode'=>'5',
                'title'=>'Taman Dinoaurus'
            ],
            [
                'movie_id'=> '7',
                'episode'=>'6',
                'title'=>'Sejaranh Inggris'
            ],
            [
                'movie_id'=> '7',
                'episode'=>'7',
                'title'=>'Pesawat'
            ],
            //8
            [
                'movie_id'=> '8',
                'episode'=>'1',
                'title'=>'Bikini Bottom'
            ],
            [
                'movie_id'=> '8',
                'episode'=>'2',
                'title'=>'Garry si siput'
            ],
            [
                'movie_id'=> '8',
                'episode'=>'3',
                'title'=>'Downtown'
            ],
            [
                'movie_id'=> '8',
                'episode'=>'4',
                'title'=>'Mesin Waktu'
            ],
            [
                'movie_id'=> '8',
                'episode'=>'5',
                'title'=>'Pencurian Resep'
            ],
            //9
            [
                'movie_id'=> '9',
                'episode'=>'1',
                'title'=>'Kitchen 1'
            ],
            [
                'movie_id'=> '9',
                'episode'=>'2',
                'title'=>'Eliminasi Peserta'
            ],
            [
                'movie_id'=> '9',
                'episode'=>'3',
                'title'=>'New Challange'
            ],
            [
                'movie_id'=> '9',
                'episode'=>'4',
                'title'=>'Bintang Tamu'
            ],
            [
                'movie_id'=> '9',
                'episode'=>'5',
                'title'=>'Mukbang'
            ],
            //10
            [
                'movie_id'=> '10',
                'episode'=>'1',
                'title'=>'Sule Andre'
            ],
            [
                'movie_id'=> '10',
                'episode'=>'2',
                'title'=>'Andre Taulany'
            ],
            [
                'movie_id'=> '10',
                'episode'=>'3',
                'title'=>'Sule'
            ],
            [
                'movie_id'=> '10',
                'episode'=>'4',
                'title'=>'Kehidupan bintang tamu'
            ],
            [
                'movie_id'=> '10',
                'episode'=>'5',
                'title'=>'Sule Menikah'
            ],
            //11
            [
                'movie_id'=> '11',
                'episode'=>'1',
                'title'=>'Top 32 Participants'
            ],
            [
                'movie_id'=> '11',
                'episode'=>'2',
                'title'=>'Top 27 Participants'
            ],
            [
                'movie_id'=> '11',
                'episode'=>'3',
                'title'=>'Top 22 Participants'
            ],
            [
                'movie_id'=> '11',
                'episode'=>'4',
                'title'=>'Top 17 Participants'
            ],
            [
                'movie_id'=> '11',
                'episode'=>'5',
                'title'=>'Top 12 Participants'
            ],
            //12
            [
                'movie_id'=> '12',
                'episode'=>'1',
                'title'=>'AGT Session 1 Eps 1'
            ],
            [
                'movie_id'=> '12',
                'episode'=>'2',
                'title'=>'AGT Session 1 Eps 2'
            ],
            [
                'movie_id'=> '12',
                'episode'=>'3',
                'title'=>'AGT Session 1 Eps 3'
            ],
            [
                'movie_id'=> '12',
                'episode'=>'4',
                'title'=>'AGT Session 1 Eps 4'
            ],
            [
                'movie_id'=> '12',
                'episode'=>'5',
                'title'=>'AGT Session 1 Eps 5'
            ]
        ]);
    }
}
