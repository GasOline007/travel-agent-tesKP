<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HeroSlider extends Model
{
    public static function allHeroSlider()
    {
        return [
            [
                'id' => 1,
                'image' => 'https://images.unsplash.com/photo-1537996194471-e657df975ab4?q=80&w=1920',
                'label' => 'Destinasi Terpopuler',
                'text' => 'Bali — Pulau Dewata yang Selalu Memukau',
                'subtext' => 'Rasakan ketenangan alam, budaya yang kaya, dan keindahan pantai yang tak tertandingi.',
                'button' => true,
                'link' => '/destinasi'
            ],
            [
                'id' => 2,
                'image' => 'https://images.unsplash.com/photo-1544644181-1484b3fdfc62?q=80&w=1920',
                'label' => 'Petualangan Alam',
                'text' => 'Jelajahi Keajaiban Alam Nusantara',
                'subtext' => 'Dari pegunungan hijau hingga lautan biru jernih — liburan impian Anda dimulai di sini.',
                'button' => true,
                'link' => '/destinasi'
            ],
            [
                'id' => 3,
                'image' => 'https://images.unsplash.com/photo-1518509562904-e7ef99cdcc86?q=80&w=1920',
                'label' => 'Paket Eksklusif',
                'text' => 'Perjalanan Mewah, Harga Transparan',
                'subtext' => 'Semua sudah termasuk: transportasi, hotel, dan tiket wisata. Tinggal berangkat.',
                'button' => false
            ]
        ];
    }
}
