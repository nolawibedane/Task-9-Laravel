<?php

// Import necessary classes
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// Define the migration class for creating the 'blog_posts' table.
class CreateBlogPostsTable extends Migration
{
    // 'up' method contains the database operations to be executed when the migration is run.
    public function up()
    {
        // Create a new table 'blog_posts' using the Laravel Schema builder.
        Schema::create('blog_posts', function (Blueprint $table) {
            // Creates an 'id' column that will be used as the primary key and auto-increments.
            $table->id();
            
            // Creates a 'title' column that will store the title of the blog post as a string.
            $table->string('title');
            
            // Creates a 'content' column that will store the blog post content as text.
            $table->text('content');
            
            // Creates 'created_at' and 'updated_at' columns to track when blog posts are created and updated.
            $table->timestamps();
        });
    }

    // 'down' method contains the database operations to revert the changes made in the 'up' method.
    public function down()
    {
        // Drops the 'blog_posts' table if it exists.
        Schema::dropIfExists('blog_posts');
    }
}
