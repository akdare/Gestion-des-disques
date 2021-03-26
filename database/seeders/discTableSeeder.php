<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use \App\Models\Discs;
class discTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $disc=new Discs();
        $disc->titre="versus";
        $disc->artistes="Sulliman et Vitaa";
        $disc->dateSortie="23-08-2019";
        $disc->auteur="Vitaa, Slimane";
        $disc->compositeur="Yaacov Salah, Meir Salah, Renaud Rebillaud, John Mamann";
        $disc->producteur="Yaacov Salah, Meir Salah, Renaud Rebillaud";
        $disc->genre="RnB, pop";
        $disc->photo="img1";
        $disc->rayon="Rayon A";
        $disc->etagere="Etagère 1";
        $disc->save();

        $disc=new Discs();
        $disc->titre="subliminal";
        $disc->artistes="Gims";
        $disc->dateSortie="20-05-2013";
        $disc->auteur="Vitaa, Slimane";
        $disc->compositeur="Maître Gims, Renaud Rebillaud, Stan-E Music";
        $disc->producteur="Gims";
        $disc->genre="RnB, pop";
        $disc->photo="img2";
        $disc->rayon="Rayon B";
        $disc->etagere="Etagère 2";
        $disc->save();

        $disc=new Discs();
        $disc->titre="Phœnix";
        $disc->artistes="Soprano";
        $disc->dateSortie="09-11-2018";
        $disc->auteur="Soprano";
        $disc->compositeur="Maître Gims, Renaud Rebillaud, Stan-E Music";
        $disc->producteur=" Rec. 118";
        $disc->genre="Hip-hop/Rap";
        $disc->photo="img3";
        $disc->rayon="Rayon C";
        $disc->etagere="Etagère 2";
        $disc->save();

    }
}
