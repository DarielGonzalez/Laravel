<?php


use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Note;

class NotesTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_notes_list()
    {

      Note::create(['note' => 'My firs note']);
      Note::create(['note' => 'Second note']);

      $this->visit('notes')
      ->see('My firs note')
      ->see('Second note');
    }
}
