<?php

use App\Article;
use Illuminate\Database\Seeder;

class ArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Article::truncate();

        Article::create([
        	'title' => 'Example Article For Laravel Commentable Package',
        	'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora neque dignissimos numquam facilis, autem esse rem dicta nesciunt vel rerum distinctio culpa magnam odio architecto similique ex quas earum? Vero incidunt dolorem velit quos explicabo minima reiciendis vel autem magni, inventore laborum aperiam nam, repellendus quod quo maiores nihil tempore consequuntur voluptates vitae voluptate ducimus pariatur omnis enim. Necessitatibus iste inventore dicta impedit temporibus reiciendis placeat consequuntur error mollitia deleniti a nihil, officia dignissimos voluptatibus, ea magnam dolore iure commodi laudantium ex quidem sit dolorum cupiditate sunt neque! Numquam accusamus, aut, laboriosam asperiores doloribus sit soluta amet! Optio dolores vel provident omnis porro deleniti. Mollitia blanditiis sequi similique, delectus nesciunt dolores hic, facilis expedita corrupti, deserunt eligendi omnis. Voluptatum omnis fugiat corrupti nihil quisquam dolore blanditiis obcaecati expedita ipsam fugit, officiis earum praesentium dolores nobis totam provident, ad nam saepe quidem, aut dolorem adipisci sequi explicabo? Officiis soluta suscipit est veniam similique, et enim perferendis quas quaerat, quisquam nostrum error, tempore consequuntur eveniet dolorum a ipsa ut, unde rem distinctio! Ex ipsa possimus nisi suscipit vero maiores harum incidunt sint, minima veritatis, fugit reprehenderit explicabo perspiciatis laudantium dolor perferendis aspernatur enim sapiente temporibus, soluta velit vitae rem inventore! Veniam illum illo mollitia et, eum ea quaerat, sequi rerum laboriosam nihil iure aliquam officiis libero, laudantium architecto ab maxime. Fugit quas autem perspiciatis veniam ipsam error, culpa voluptate consequuntur, eveniet dolorem, recusandae laborum dolorum vitae iusto, aliquam alias cum vero quia id quaerat ipsum officiis. Numquam dolor alias provident, debitis hic quam veniam ratione quaerat nobis similique quae molestiae laboriosam eum tempora fugiat distinctio aliquid dignissimos dolore eos adipisci blanditiis fugit nisi. Dicta voluptatibus culpa velit suscipit repellendus esse possimus porro vitae, laboriosam, accusamus impedit rem, illum reiciendis. Impedit, ratione, consectetur! Nisi ex et cupiditate non, molestiae, unde eum nam inventore. Dignissimos nihil, necessitatibus officia accusantium aliquam sint quae hic libero corporis debitis ea omnis suscipit, est quasi sed! Voluptatibus reiciendis sint, laudantium laboriosam praesentium, fugit nemo libero officiis unde neque, delectus quibusdam molestias ipsa debitis voluptatum impedit. Ipsa ea illo atque voluptatum consequuntur. Illum vitae et voluptas dolorem sint, quam eos, corporis. Maiores est, delectus quae aliquid quas voluptas doloribus cumque quod aliquam. Delectus reprehenderit quae possimus nihil neque explicabo, voluptatum rerum atque? Quo, quae omnis dolor saepe ipsum non itaque nostrum, cupiditate numquam, eius quos doloribus exercitationem ipsa soluta tenetur vitae voluptatibus dolorum eos necessitatibus aspernatur porro, doloremque! Quidem animi neque possimus atque porro voluptatem fugit debitis sunt veritatis esse nesciunt consequuntur ea reprehenderit, quibusdam quas officiis minima ipsum facere commodi eum architecto suscipit et excepturi. Illum quod culpa, perspiciatis perferendis numquam unde magnam voluptate eveniet et porro incidunt velit, molestiae, laboriosam! Temporibus quam ad numquam optio, accusamus fugit expedita officiis cupiditate, autem similique aliquam dicta. Debitis dolorem officia assumenda, consequatur nostrum numquam voluptates labore aspernatur quo quod error rerum, nesciunt dolore totam, saepe dolorum voluptate nemo voluptatibus est dolores dolor quibusdam ullam officiis culpa reprehenderit. Ab, voluptas ex accusantium sed consectetur, sit. Distinctio soluta laborum vel ipsum, libero!',
        ]);
    }
}
