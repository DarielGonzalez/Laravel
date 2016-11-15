<?php
use App\Note;
use App\Category;
use Illuminate\Database\Seeder;

class NoteTableSeeder extends Seeder
{
  /**
  * Run the database seeds.
  *
  * @return void
  */
  public function run()
  {
    $categories = Category::all();
    $notes = factory(Note::class)->times(100)->create();
    foreach ($notes as $note) {
        $category = $categories->random();

        $category->notes()->save($note);
    }
  }
}
