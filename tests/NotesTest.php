<?php


use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Note;

class NotesTest extends TestCase
{
  use DatabaseTransactions;
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
    public function test_create_note()
    {
      $this->visit('notes')
           ->click('Add a note')
           ->seePageIs('notes/create')
           ->see('Create a note')
           ->type('A new note', 'note')
           ->press('Create note')
           ->seePageIs('notes')
           ->see('A new note')
           ->seeInDatabase('notes', [
             'note' => 'A new note'
           ]);
    }
}
