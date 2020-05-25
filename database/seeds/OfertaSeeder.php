<?php

use Carbon\Carbon;
use App\Oferta;
use Illuminate\Database\Seeder;

class OfertaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Oferta::create([
            'nombre' => 'Hamburguesa',
            'fecha_inicio' => new DateTime,
            'fecha_termino' => new DateTime,
            'descripcion' => 'Nuestra Cuarto de kilo® tradicional, con carne de res, asada al Gira-Grill®, jitomate, cebolla y lechuga. Aderezada con mayonesa casera, cátsup y mostaza.',
            'precio' => '80.00',
            'ubicacion' => 'https://g.page/cuartodekilolc?share',
            'referencias' => 'Eiusmod adipisicing aliqua ex aliqua duis nostrud irure reprehenderit dolore velit sit amet. Sint sint exercitation aute mollit elit exercitation aute fugiat magna aliqua nisi. Laborum ad nostrud tempor in sit adipisicing nostrud culpa cillum anim est adipisicing. Id sit ipsum enim et ullamco.',
            'imagen'=>'https://images.pexels.com/photos/708587/pexels-photo-708587.jpeg?cs=srgb&dl=sliced-pepperoni-pizza-on-white-ceramic-plate-708587.jpg&fm=jpg',
            'categoria_id'=>1,
            ]);
        Oferta::create([
            'nombre' => 'Mercedes-Benz',
            'fecha_inicio' => new DateTime,
            'fecha_termino' => new DateTime,
            'descripcion' => 'Mercedes-Benz GLC Coupé, un vehículo que conjuga como ningún otro las mejores propiedades de una SUV y de un Coupé',
            'precio' => '1026000.00',
            'ubicacion' => 'https://goo.gl/maps/xTrHjXw7M3LmyVrf9',
            'referencias' => 'Eiusmod adipisicing aliqua ex aliqua duis nostrud irure reprehenderit dolore velit sit amet. Sint sint exercitation aute mollit elit exercitation aute fugiat magna aliqua nisi. Laborum ad nostrud tempor in sit adipisicing nostrud culpa cillum anim est adipisicing. Id sit ipsum enim et ullamco.',
            'imagen'=>'https://www.mercedes-benz.com.mx/content/dam/mb-nafta/us/myco/my19/gla/class-page/non-amg/2018-GLA-SUV-CATEGORY-HERO-1-1-DR.jpg',
            'categoria_id'=>2,
            ]);
        Oferta::create([
            'nombre' => 'Futbol',
            'fecha_inicio' => new DateTime,
            'fecha_termino' => new DateTime,
            'descripcion' => 'La calidad y el rendimiento se combinan en el balón de fútbol Chelsea FC Skills, por lo que resulta ideal para el entrenamiento y el juego recreativo. Cuenta con estampados del club para facilitar el seguimiento del balón, a la vez que demuestra tu espíritu de equipo.',
            'precio' => '299.00',
            'ubicacion' => 'https://goo.gl/maps/LbqQNnR6noDwrfpXA',
            'referencias' => 'Eiusmod adipisicing aliqua ex aliqua duis nostrud irure reprehenderit dolore velit sit amet. Sint sint exercitation aute mollit elit exercitation aute fugiat magna aliqua nisi. Laborum ad nostrud tempor in sit adipisicing nostrud culpa cillum anim est adipisicing. Id sit ipsum enim et ullamco.',
            'imagen'=>'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,b_rgb:f5f5f5/a0afa365-48b2-4ebb-afc3-c8c668cf6517/bal%C3%B3n-de-f%C3%BAtbol-chelsea-fc-skills-NpJM8h.jpg',
            'categoria_id'=>3,
            ]);
        Oferta::create([
            'nombre' => 'Television Samsung 4k',
            'fecha_inicio' => new DateTime,
            'fecha_termino' => new DateTime,
            'descripcion' => 'Vive la máxima experiencia visual con su formato 4K Ultra HD',
            'precio' => '6999.00',
            'ubicacion' => 'https://g.page/samsung-store-centro-comercial?share',
            'referencias' => 'Eiusmod adipisicing aliqua ex aliqua duis nostrud irure reprehenderit dolore velit sit amet. Sint sint exercitation aute mollit elit exercitation aute fugiat magna aliqua nisi. Laborum ad nostrud tempor in sit adipisicing nostrud culpa cillum anim est adipisicing. Id sit ipsum enim et ullamco.',
            'imagen'=>'https://images.samsung.com/is/image/samsung/latin-ru7300-un55ru7300pxpa-frontblack-155437909?$PD_GALLERY_L_JPG$',
            'categoria_id'=>4,
            ]);
        Oferta::create([
            'nombre' => 'Pañales Huggies UltraConfort etapa 6 niño 60 pzas',
            'fecha_inicio' => new DateTime,
            'fecha_termino' => new DateTime,
            'descripcion' => 'Huggies UltraConfort es el único pañal que brinda total libertad de movimiento para un mejor desarrollo psicomotriz de tu bebé. Su cubierta interna Ultra Suave le permite a tu bebé moverse sin irritaciones y sin fricción. ',
            'precio' => '299.00',
            'ubicacion' => 'https://goo.gl/maps/E3oDv3aD7qJkboG47',
            'referencias' => 'Eiusmod adipisicing aliqua ex aliqua duis nostrud irure reprehenderit dolore velit sit amet. Sint sint exercitation aute mollit elit exercitation aute fugiat magna aliqua nisi. Laborum ad nostrud tempor in sit adipisicing nostrud culpa cillum anim est adipisicing. Id sit ipsum enim et ullamco.',
            'imagen'=>'https://res.cloudinary.com/walmart-labs/image/upload/w_960,dpr_auto,f_auto,q_auto:best/gr/images/product-images/img_large/00750194341712L.jpg',
            'categoria_id'=>5,
            ]);
        Oferta::create([
            'nombre' => 'Colchon Matrimonila ',
            'fecha_inicio' => new DateTime,
            'fecha_termino' => new DateTime,
            'descripcion' => '¡Verdadero descanso! Ahora tus noches son mucho más relajadas al momento de descansar este colchón matrimonial Restonic modelo Andrómeda BL.',
            'precio' => '3499.00',
            'ubicacion' => 'https://goo.gl/maps/bWjK1CxLxRx85Egu8',
            'referencias' => 'Eiusmod adipisicing aliqua ex aliqua duis nostrud irure reprehenderit dolore velit sit amet. Sint sint exercitation aute mollit elit exercitation aute fugiat magna aliqua nisi. Laborum ad nostrud tempor in sit adipisicing nostrud culpa cillum anim est adipisicing. Id sit ipsum enim et ullamco.',
            'imagen'=>'https://cdn1.coppel.com/images/catalog/pm/3535073-1.jpg',
            'categoria_id'=>6,
            ]);
        Oferta::create([
            'nombre' => 'Cortadora de cesped',
            'fecha_inicio' => new DateTime,
            'fecha_termino' => new DateTime,
            'descripcion' => 'Mantén tu jardín perfectamente podado con la precisión impresionante de la desbrozadora marca Maxtool.',
            'precio' => '599.00',
            'ubicacion' => 'https://goo.gl/maps/bWjK1CxLxRx85Egu8',
            'referencias' => 'Eiusmod adipisicing aliqua ex aliqua duis nostrud irure reprehenderit dolore velit sit amet. Sint sint exercitation aute mollit elit exercitation aute fugiat magna aliqua nisi. Laborum ad nostrud tempor in sit adipisicing nostrud culpa cillum anim est adipisicing. Id sit ipsum enim et ullamco.',
            'imagen'=>'https://cdn1.coppel.com/images/catalog/pm/5504263-1.jpg',
            'categoria_id'=>7,
            ]);
        Oferta::create([
            'nombre' => 'tenis Ultraboost x Game Of Thrones',
            'fecha_inicio' => new DateTime,
            'fecha_termino' => new DateTime,
            'descripcion' => 'Tenis Ultraboost x Game Of Thrones de adidas con cierre con agujetas en la parte delantera y detalle de tres rayas características de la marca. Estos estilos son suministrados por un marketplace de Tenis premium, el cual ofrece el calzado más codiciado y difícil de encontrar de todo el mundo.',
            'precio' => '12265.00',
            'ubicacion' => 'https://goo.gl/maps/ytuo3PuDZYEYGRu2A',
            'referencias' => 'Eiusmod adipisicing aliqua ex aliqua duis nostrud irure reprehenderit dolore velit sit amet. Sint sint exercitation aute mollit elit exercitation aute fugiat magna aliqua nisi. Laborum ad nostrud tempor in sit adipisicing nostrud culpa cillum anim est adipisicing. Id sit ipsum enim et ullamco.',
            'imagen'=>'https://cdn-images.farfetch-contents.com/14/04/22/43/14042243_18310432_1000.jpg',
            'categoria_id'=>8,
            ]);
        Oferta::create([
            'nombre' => 'ALL DAY LUMINOUS WEIGHTLESS LIQUID FOUNDATION',
            'fecha_inicio' => new DateTime,
            'fecha_termino' => new DateTime,
            'descripcion' => 'Una base de maquillaje oil-free que brinda una cobertura completa, ligera y natural, una sola gota dura hasta 16 horas. Para que sirve:Logra una cobertura total con esta base de maquillaje ligera con la que conseguirás un terminado natural.',
            'precio' => '960.00',
            'ubicacion' => 'https://goo.gl/maps/BQ2UqWdnBDCU4RQs6',
            'referencias' => 'Eiusmod adipisicing aliqua ex aliqua duis nostrud irure reprehenderit dolore velit sit amet. Sint sint exercitation aute mollit elit exercitation aute fugiat magna aliqua nisi. Laborum ad nostrud tempor in sit adipisicing nostrud culpa cillum anim est adipisicing. Id sit ipsum enim et ullamco.',
            'imagen'=>'https://sephora-mx-assets.s3.amazonaws.com/images/pictures/5965/closeup_2adfe1bcaee2a48e60cf814191d05d3668713f5d_1491429475_s1677970-main-Lhero.jpg',
            'categoria_id'=>9,
            ]);
        Oferta::create([
            'nombre' => 'Netflix',
            'fecha_inicio' => new DateTime,
            'fecha_termino' => new DateTime,
            'descripcion' => 'es una empresa de entretenimiento estadounidense, que opera a nivel mundial, cuyo servicio principal es la distribución de contenidos audiovisuales a través de una plataforma en línea o servicio de VOD por streaming.',
            'precio' => '129.00',
            'ubicacion' => 'https://www.netflix.com/',
            'referencias' => 'Eiusmod adipisicing aliqua ex aliqua duis nostrud irure reprehenderit dolore velit sit amet. Sint sint exercitation aute mollit elit exercitation aute fugiat magna aliqua nisi. Laborum ad nostrud tempor in sit adipisicing nostrud culpa cillum anim est adipisicing. Id sit ipsum enim et ullamco.',
            'imagen'=>'https://tentulogo.com/wp-content/uploads/netflix.jpg',
            'categoria_id'=>10,
            ]);
        Oferta::create([
            'nombre' => 'Laptop HP 15-DY1751 Intel Core i5',
            'fecha_inicio' => new DateTime,
            'fecha_termino' => new DateTime,
            'descripcion' => 'Desempeño óptimo gracias a su procesador de décima generación',
            'precio' => '10999.00',
            'ubicacion' => 'https://goo.gl/maps/K8kYxNZoJhkoz5NC6',
            'referencias' => 'Eiusmod adipisicing aliqua ex aliqua duis nostrud irure reprehenderit dolore velit sit amet. Sint sint exercitation aute mollit elit exercitation aute fugiat magna aliqua nisi. Laborum ad nostrud tempor in sit adipisicing nostrud culpa cillum anim est adipisicing. Id sit ipsum enim et ullamco.',
            'imagen'=>'https://resources.sears.com.mx/medios-plazavip/fotos/productos_sears1/original/2951156.jpg',
            'categoria_id'=>11,
            ]);
        Oferta::create([
            'nombre' => 'London',
            'fecha_inicio' => new DateTime,
            'fecha_termino' => new DateTime,
            'descripcion' => 'Best flight deals from Guadalajara to London (GDL - LHR)',
            'precio' => '25178.00',
            'ubicacion' => 'https://www.expedia.mx/Londres.d178279.Guia-de-vacaciones',
            'referencias' => 'Eiusmod adipisicing aliqua ex aliqua duis nostrud irure reprehenderit dolore velit sit amet. Sint sint exercitation aute mollit elit exercitation aute fugiat magna aliqua nisi. Laborum ad nostrud tempor in sit adipisicing nostrud culpa cillum anim est adipisicing. Id sit ipsum enim et ullamco.',
            'imagen'=>'https://content-images.amlab7.com/airtrfx/ciudades/londres.jpg',
            'categoria_id'=>12,
            ]);
        Oferta::create([
            'nombre' => 'PlayStation',
            'fecha_inicio' => new DateTime,
            'fecha_termino' => new DateTime,
            'descripcion' => 'La consola PlayStation 4, ahora más liviana y más delgada, tiene un disco duro de 1TB para que disfrutes los mejores juegos, tu música favorita y mucho más. Disfruta de juegos increíbles, conectados y dinámicos para un entretenimiento sin fin, con poderosos gráficos y alta velocidad, personalización inteligente, capacidades sociales sumamente integradas e innovadoras funciones de pantalla secundaria.',
            'precio' => '7999.00',
            'ubicacion' => 'https://goo.gl/maps/gxCNycjKMYRAMryz6',
            'referencias' => 'Eiusmod adipisicing aliqua ex aliqua duis nostrud irure reprehenderit dolore velit sit amet. Sint sint exercitation aute mollit elit exercitation aute fugiat magna aliqua nisi. Laborum ad nostrud tempor in sit adipisicing nostrud culpa cillum anim est adipisicing. Id sit ipsum enim et ullamco.',
            'imagen'=>'https://pisces.bbystatic.com/image2/BestBuy_MX/images/products/1000/1000223509_sd.jpg',
            'categoria_id'=>13,
            ]);
    }
}
