<?php

namespace Tests\Feature;

use Tests\TestCase;

class HomeTest extends TestCase
{
    public function testHomePage()
    {
        $response = $this->get('/');

        $response->assertSeeText('3WDEV');
    }
    // public function testStoreInfluenceur()
    // {
    //     $data=[
    //         'nom'=>'abdo2',
    //         'prenom'=>'abdo1',
    //         'photo'=>'test',
    //         'ville'=>'rabat',
    //         'date'=>'2012/03/22'
    //     ];

    //     $this->post('api/personne',$data)
    //         // ->assertJson(['message'=>'Ajout bien faite']);
    //         ->assertStatus(200);
    //     // $this->assertDatabaseMissing('personnes',['nom'=>'charki2']); //ne contient pas
    // }
}
