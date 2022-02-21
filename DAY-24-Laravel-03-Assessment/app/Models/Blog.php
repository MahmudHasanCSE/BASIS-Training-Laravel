<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    public static function getAllBlog()
    {
        return [
            0 => [
                'id'          => 1,
                'title'       => 'The Lost History',
                'author'      => 'Tom Black',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci deserunt, distinctio dolore ducimus iure maiores minima nam nemo numquam quasi quibusdam quos ratione rem rerum sapiente similique temporibus vel veritatis. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci deserunt, distinctio dolore ducimus iure maiores minima nam nemo numquam quasi quibusdam quos ratione rem rerum sapiente similique temporibus vel veritatis.',
                'image'       => asset('/img/a1.jpg'),
            ],
            1 => [
                'id'          => 2,
                'title'       => 'The Forgotten Weapons',
                'author'      => 'Bob White',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci deserunt, distinctio dolore ducimus iure maiores minima nam nemo numquam quasi quibusdam quos ratione rem rerum sapiente similique temporibus vel veritatis. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci deserunt, distinctio dolore ducimus iure maiores minima nam nemo numquam quasi quibusdam quos ratione rem rerum sapiente similique temporibus vel veritatis.',
                'image'       => asset('/img/a2.jpg'),
            ],
            2 => [
                'id'          => 3,
                'title'       => 'The Golden City',
                'author'      => 'Max Green',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci deserunt, distinctio dolore ducimus iure maiores minima nam nemo numquam quasi quibusdam quos ratione rem rerum sapiente similique temporibus vel veritatis. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci deserunt, distinctio dolore ducimus iure maiores minima nam nemo numquam quasi quibusdam quos ratione rem rerum sapiente similique temporibus vel veritatis.',
                'image'       => asset('/img/a3.jpg'),
            ],
            3 => [
                'id'          => 4,
                'title'       => 'The Lost History',
                'author'      => 'Tom Black',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci deserunt, distinctio dolore ducimus iure maiores minima nam nemo numquam quasi quibusdam quos ratione rem rerum sapiente similique temporibus vel veritatis. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci deserunt, distinctio dolore ducimus iure maiores minima nam nemo numquam quasi quibusdam quos ratione rem rerum sapiente similique temporibus vel veritatis.',
                'image'       => asset('/img/a1.jpg'),
            ],
            4 => [
                'id'          => 5,
                'title'       => 'The Forgotten Weapons',
                'author'      => 'Bob White',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci deserunt, distinctio dolore ducimus iure maiores minima nam nemo numquam quasi quibusdam quos ratione rem rerum sapiente similique temporibus vel veritatis. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci deserunt, distinctio dolore ducimus iure maiores minima nam nemo numquam quasi quibusdam quos ratione rem rerum sapiente similique temporibus vel veritatis.',
                'image'       => asset('/img/a2.jpg'),
            ],
            5 => [
                'id'          => 6,
                'title'       => 'The Golden City',
                'author'      => 'Max Green',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci deserunt, distinctio dolore ducimus iure maiores minima nam nemo numquam quasi quibusdam quos ratione rem rerum sapiente similique temporibus vel veritatis. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci deserunt, distinctio dolore ducimus iure maiores minima nam nemo numquam quasi quibusdam quos ratione rem rerum sapiente similique temporibus vel veritatis.',
                'image'       => asset('/img/a3.jpg'),
            ],
            6 => [
                'id'          => 7,
                'title'       => 'The Lost History',
                'author'      => 'Tom Black',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci deserunt, distinctio dolore ducimus iure maiores minima nam nemo numquam quasi quibusdam quos ratione rem rerum sapiente similique temporibus vel veritatis. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci deserunt, distinctio dolore ducimus iure maiores minima nam nemo numquam quasi quibusdam quos ratione rem rerum sapiente similique temporibus vel veritatis.',
                'image'       => asset('/img/a1.jpg'),
            ],
            7 => [
                'id'          => 8,
                'title'       => 'The Forgotten Weapons',
                'author'      => 'Bob White',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci deserunt, distinctio dolore ducimus iure maiores minima nam nemo numquam quasi quibusdam quos ratione rem rerum sapiente similique temporibus vel veritatis. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci deserunt, distinctio dolore ducimus iure maiores minima nam nemo numquam quasi quibusdam quos ratione rem rerum sapiente similique temporibus vel veritatis.',
                'image'       => asset('/img/a2.jpg'),
            ],
            8 => [
                'id'          => 9,
                'title'       => 'The Golden City',
                'author'      => 'Max Green',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci deserunt, distinctio dolore ducimus iure maiores minima nam nemo numquam quasi quibusdam quos ratione rem rerum sapiente similique temporibus vel veritatis. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci deserunt, distinctio dolore ducimus iure maiores minima nam nemo numquam quasi quibusdam quos ratione rem rerum sapiente similique temporibus vel veritatis.',
                'image'       => asset('/img/a3.jpg'),
            ],
            9 => [
                'id'          => 10,
                'title'       => 'The Lost History',
                'author'      => 'Tom Black',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci deserunt, distinctio dolore ducimus iure maiores minima nam nemo numquam quasi quibusdam quos ratione rem rerum sapiente similique temporibus vel veritatis. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci deserunt, distinctio dolore ducimus iure maiores minima nam nemo numquam quasi quibusdam quos ratione rem rerum sapiente similique temporibus vel veritatis.',
                'image'       => asset('/img/a1.jpg'),
            ],
            10 => [
                'id'          => 11,
                'title'       => 'The Forgotten Weapons',
                'author'      => 'Bob White',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci deserunt, distinctio dolore ducimus iure maiores minima nam nemo numquam quasi quibusdam quos ratione rem rerum sapiente similique temporibus vel veritatis. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci deserunt, distinctio dolore ducimus iure maiores minima nam nemo numquam quasi quibusdam quos ratione rem rerum sapiente similique temporibus vel veritatis.',
                'image'       => asset('/img/a2.jpg'),
            ],
            11 => [
                'id'          => 12,
                'title'       => 'The Golden City',
                'author'      => 'Max Green',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci deserunt, distinctio dolore ducimus iure maiores minima nam nemo numquam quasi quibusdam quos ratione rem rerum sapiente similique temporibus vel veritatis. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci deserunt, distinctio dolore ducimus iure maiores minima nam nemo numquam quasi quibusdam quos ratione rem rerum sapiente similique temporibus vel veritatis.',
                'image'       => asset('/img/a3.jpg'),
            ],
        ];
    }
}
