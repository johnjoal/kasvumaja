<?php

class PageTableSeeder extends Seeder {

    public function run()
    {
        DB::table('pages')->delete();

        Page::create(array(
            'type' => 5,
            'lang' => 'ru',
            'h1' => 'Добро пожаловать на наш сайт!<br>Здесь Вы найдете всю полезную информацию о предлагаемом фирмой товаре.',
            'title' => 'Добро пожаловать на наш сайт!<br>Здесь Вы найдете всю полезную информацию о предлагаемом фирмой товаре.',
            'content' => '<h3 style="text-align: left;">Смотри также:</h3><p style="text-align: left;"><a href="/uploads/info3.pdf" target="_blank">Описание и цены остальных теплиц из поликарбоната</a></p><p style="text-align: left;"><a href="/uploads/info1.pdf" target="_blank">Описание и цены пленочных парников</a></p><p style="text-align: left;"><a href="/uploads/info5.pdf" target="_blank">Дополнительное обородувание</a></p><h1 style=" text-align: center;">16 ПРИЧИН КУПИТЬ НАШУ ТЕПЛИЦУ</h1><div style="text-align: center;"><br><img src="/uploads/16_prichin_ru.jpg"></div>',
            'description' => '',
            'show_on_cover' => false,
        ));
        
        Page::create(array(
            'type' => 6,
            'lang' => 'ru',
            'h1' => '',
            'title' => '',
            'content' => 'Katusepapi 14<br>11412 Tallinn, <br>Eesti Vabariik<br><br>Rus: (+372) 5688 1406<br>Est: (+372) 5915 1801<br>Rus/Est: (+372) 5191 3832<br>Koduleht: www.kasvumaja.ee<br>E-Post: info@kasvumaja.ee<br><br>Prime Line OÜ<br>Reg nr.:12430378<br>KMKR nr.:EE10169921<br>Arve nr.: SEB PANK EE311010220218076227<br>Jur. adress: Avar tn. 5-3,Maardu, Harjumaa 74112<br><br><iframe marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&source=s_q&hl=et&geocode=&q=Katusepapi+14,+Tallinn,+Tallinna+linn,+Eesti+Vabariik&aq=0&oq=Katusepapi+14,+Tallinn,+Tallinna+linn,+Eesti+Vabariik&sll=59.426915,24.785587&sspn=0.011536,0.031693&ie=UTF8&hq=&hnear=Katusepapi+14,+11412+Tallinn,+Eesti+Vabariik&t=m&ll=59.430891,24.792366&spn=0.015278,0.060081&z=14&iwloc=A&output=embed" frameborder="0" height="350" scrolling="no" width="950"></iframe>',
            'description' => '',
            'show_on_cover' => false,
        ));
        
        Page::create(array(
            'type' => 1,
            'lang' => 'ru',
            'h1' => 'Теплица «Дачная­Трёшка»',
            'title' => 'Теплица «Дачная­Трёшка»',
            'content' => '',
            'description' => '<img src="/uploads/treshka_03.thumb.jpg"><h3>ЦЕНА <span style="color: rgb(255, 0, 0);">490</span> €</h3>',
            'show_on_cover' => true,
        ));
        
        Page::create(array(
            'type' => 1,
            'lang' => 'ru',
            'h1' => 'Теплица «Дачная­Двушка»',
            'title' => 'Теплица «Дачная­Двушка»',
            'content' => '',
            'description' => '<img src="/uploads/dvushka_02.thumb.jpg"><h3>ЦЕНА <span style="color: rgb(255, 0, 0);">455</span> €</h3>',
            'show_on_cover' => true,
        ));
        
        Page::create(array(
            'type' => 1,
            'lang' => 'ru',
            'h1' => 'Теплица «Дачная Стрелка 3.0»',
            'title' => 'Теплица «Дачная Стрелка 3.0»',
            'content' => '',
            'description' => '<img src="/uploads/strelka3.0_01.thumb.jpg"><h3>ЦЕНА <span style="color: rgb(255, 0, 0);">455</span> €</h3>',
            'show_on_cover' => true,
        ));
        
        Page::create(array(
            'type' => 1,
            'lang' => 'ru',
            'h1' => 'Теплица «Дачная Стрелка 2.6»',
            'title' => 'Теплица «Дачная Стрелка 2.6»',
            'content' => '',
            'description' => '<img src="/uploads/strelka2.6_01.thumb.jpg"><h3>ЦЕНА <span style="color: rgb(255, 0, 0);">455</span> €</h3>',
            'show_on_cover' => true,
        ));
    }
}