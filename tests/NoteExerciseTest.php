<?php
use \App\Note;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class NoteExerciseTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_notes_sumary_and_notes_details()
    {
      $text = 'Begin of the note. Est vel omnis incidunt voluptatibus assumenda libero beatae. Maxime voluptatem tempora repudiandae. Et assumenda velit ea.';
      $text .= 'End of the note';

      $note = Note::create(['note' => $text]);


        $this->visit('notes')
              ->see('Begin of the note')
              ->dontSee('End of the note')
              ->seeLink('View note')
              ->click('View note')
              ->see($text)
              ->seeLink('View all notes', 'notes');

    }
}
