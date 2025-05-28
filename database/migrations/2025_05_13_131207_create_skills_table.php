<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('skills', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->timestamps();
        });

        // Insert default skills
        DB::table('skills')->insert([
            ['name' => 'HTML', 'description' => 'I use HTML to create well-structured and accessible web pages, ensuring a solid foundation for any web project.'],
            ['name' => 'CSS/SCSS', 'description' => 'With CSS/SCSS, I craft visually appealing and responsive designs, enhancing user experience and brand identity.'],
            ['name' => 'JS', 'description' => 'JavaScript helps me develop dynamic and interactive web applications, improving user engagement and functionality.'],
            ['name' => 'SQL', 'description' => 'I manage and optimize databases with SQL, ensuring efficient data storage and retrieval for business operations.'],
            ['name' => 'PHP', 'description' => 'Using PHP, I create robust and scalable server-side solutions, powering dynamic websites and applications.'],
            ['name' => 'TypeScript', 'description' => 'TypeScript allows me to write maintainable and scalable code in large projects, reducing bugs and enhancing development efficiency.'],
            ['name' => 'React', 'description' => 'I rely on React to build modern, high-performance user interfaces, delivering seamless user experiences.'],
            ['name' => 'Tailwind CSS', 'description' => 'Tailwind CSS helps me streamline the design process with utility-first CSS, enabling rapid prototyping and consistent styling across applications.'],
            ['name' => 'Bootstrap', 'description' => 'I accelerate front-end development with Bootstrap, using its pre-designed components to ensure responsive and mobile-first designs.'],
            ['name' => 'Vue.js', 'description' => 'Vue.js enables me to create interactive and dynamic user interfaces, enhancing user engagement and application performance.'],
            ['name' => 'Node', 'description' => 'With Node.js, I build fast and scalable backend services, ideal for real-time applications and APIs.'],
            ['name' => 'Express', 'description' => 'Express simplifies my work by allowing me to create efficient and lightweight web servers, accelerating backend development.'],
            ['name' => 'Laravel', 'description' => 'Laravel helps me streamline the development of feature-rich web applications, reducing time-to-market and ensuring maintainability.'],
            ['name' => 'Docker', 'description' => 'I use Docker to create consistent and portable development environments, improving deployment efficiency and scalability.'],
            ['name' => 'Postman', 'description' => 'Postman enhances my API development and testing workflows, ensuring reliable and well-documented integrations.'],
            ['name' => 'Git', 'description' => 'Git enables me to manage version control efficiently and collaborate smoothly with teams on projects.'],
            ['name' => 'Trello', 'description' => 'I organize tasks and track projects effectively with Trello, improving team productivity and communication.'],
            ['name' => 'Asana', 'description' => 'Asana helps me streamline task management and collaboration, ensuring timely project delivery and goal alignment.'],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('skills');
    }
};
