<?php

namespace Tests\Feature;

use App\Personne;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class InfluenceurTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testSaveInfluenceur()
    {
        $infl =new Personne();
        $infl->nom="charki23";
        $infl->prenom="abdo";
        $infl->ville="sale";
        $infl->save();
        $this->assertDatabaseHas('personnes',['nom'=>'charki2']);
        // $this->assertDatabaseMissing('personnes',['nom'=>'charki2']); //ne contient pas
    }
    public function testStoreInfluenceur()
    {
        $data=[
            'name'=>'abdo2',// via le formilaire
            'prenom'=>'abdo1',
            'photo'=>'test',
            'ville'=>'rabat',
            'daten'=>'2012/03/22'
        ];

        $this->post('api/personne',$data)
            ->assertExactJson(['message'=>'Ajout bien fait']);
            // ->assertStatus(200);
        // $this->assertDatabaseMissing('personnes',['nom'=>'charki2']); //ne contient pas
    }
    // public function testStoreInfluenceurFail()
    // {
    //     $data=[
    //         'name'=>'',
    //         'prenom'=>'',
    //         'photo'=>'',
    //         'ville'=>'',
    //         'daten'=>''
    //     ];

    //     $this->post('api/personne',$data)
    //         ->assertJsonValidationErrors(['message'=>'Ajout bien fait']);
    //         // ->assertStatus(200);
    //     // $this->assertDatabaseMissing('personnes',['nom'=>'charki2']); //ne contient pas
    // }
}
