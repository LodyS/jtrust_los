<?php
use App\Models\ComponentNilaiScore;
use Illuminate\Database\Seeder;

class ComponentNilaiScoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('component_nilai_score')->truncate();
        $this->command->line('Hapus data table Component Nilai Score');

        ComponentNilaiScore::insert([
            [
                'score_min'=>0,
                'score_max'=>70,
                'description'=>'Reject'
            ],
            [
                'score_min'=>'70.01',
                'score_max'=>80,
                'description'=>'Marginal'
            ],
            [
                'score_min'=>'80.01',
                'score_max'=>90,
                'description'=>'Good'
            ],
            [
                'score_min'=>'90.01',
                'score_max'=>100,
                'description'=>'Excellent'
            ],

        ]);
    }
}
