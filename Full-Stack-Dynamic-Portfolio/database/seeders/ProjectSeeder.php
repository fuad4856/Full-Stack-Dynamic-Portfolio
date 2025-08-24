<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Project::create([
            'user_id' => 1,
            'name' => 'E-commerce Platform',
            'description' => 'Full-stack e-commerce solution with modern UI/UX',
            'github_url' => 'https://github.com/fuad4856/ecommerce',
            'demo_url' => 'https://ecommerce.example.com',
            'images' => json_encode(['ecommerce1.png','ecommerce2.png']),
            'type' => 'personal',
            'reference' => null,
            'tools' => json_encode(['Laravel','Vue.js','MySQL']),
            'keywords' => json_encode(['shop','cart','payment']),
            'status' => 'active',
        ]);

        \App\Models\Project::create([
            'user_id' => 1,
            'name' => 'Portfolio Website',
            'description' => 'Responsive portfolio website with modern design',
            'github_url' => 'https://github.com/fuad4856/portfolio',
            'demo_url' => 'https://portfolio.example.com',
            'images' => json_encode(['portfolio1.png']),
            'type' => 'personal',
            'reference' => null,
            'tools' => json_encode(['Laravel','CSS']),
            'keywords' => json_encode(['portfolio','developer']),
            'status' => 'active',
        ]);
    }
}
