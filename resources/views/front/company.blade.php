@extends('layouts.app')

@section('content')
      <!-- 1-section  -->

      <section class="mt-[86px] lg:mt-[214px]">
        <div class="container">
          <!-- Breadcrumb -->
          <div
            class="text-[16px] sm:text-[18px] lg:text-[22px] text-black flex items-center breadcrumb gap-3 pt-[50px] mb-[33px]"
          >
            <a href="/" class="hover:text-[#77B75F] transition">Главная</a>
            <span class="bg-[#77B75F] w-[2px] h-[30px]"></span>
            <a class="text-[#77B75F]">О компании</a>
          </div>

          <!-- Title -->
          <h1
            class="text-[25px] sm:text-[40px] lg:text-[60px] font-extrabold text-[#474747] mb-[22px] text-center lg:text-start leading-none"
          >
           Категории продукции
          </h1>

          <div class="w-[60px] h-[8px] bg-[#77B75F] rounded-[20px] mb-[12px] mx-auto lg:mr-auto lg:ml-0"></div>
          <p class="text-[#939393] font-[600] text-[20px] uppercase mb-5 text-center lg:text-start">
            О компании
          </p>

          <!-- Top Text -->
          <p class="text-[#474747] leading-relaxed font-[500] text-[18px] mb-4 text-center lg:text-start">
            Несмотря на то, что компания появилась на рынке средств защиты
            растений нашей республики сравнительно недавно, она уже становится
            известна широкому кругу покупателей благодаря разнообразному
            ассортименту высокоэффективной продукции.
          </p>

          <p class="text-[#474747] leading-relaxed mb-8 font-[500] text-[18px] text-center lg:text-start">
            Специалисты нашей компании работают над тем, чтобы наша продукция
            была высокоэффективной и доступной для покупателей по цене.
            Благодаря этому предлагаемая нами продукция в короткие сроки находит
            своего покупателя и укрепляет свои позиции на рынке.
          </p>

          <!-- Images -->
          <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
            <img
              src="./img/mainThumb.jpg"
              class="w-full h-[260px] lg:h-[460px] object-cover rounded-[20px] hover:scale-[1.02] hover:-translate-y-1 transition-all duration-300 ease"
              alt=""
            />
            <img
              src="/img/partnerBg.jpg"
              class="w-full h-[260px] lg:h-[460px] object-cover rounded-[20px] hover:scale-[1.02] hover:-translate-y-1 transition-all duration-300 ease"
              alt=""
            />
          </div>

          <!-- Bottom Paragraphs -->
          <div class="mb-8">
            <p
              class="text-[#474747] leading-relaxed mb-6 font-[500] text-[18px] text-center lg:text-start"
            >
              Sed ut perspiciatis, unde omnis iste natus error sit voluptatem
              accusantium doloremque laudantium, totam rem aperiam eaque ipsa,
              quae ab illo inventore veritatis et quasi architecto beatae vitae
              dicta sunt, explicabo. Nemo enim ipsam voluptatem, quia voluptas
              sit, aspernatur aut odit aut fugit, sed quia consequuntur magni
              dolores eos, qui ratione voluptatem sequi nesciunt, neque porro
              quisquam est, qui dolorem ipsum, quia dolor sit, amet,
              consectetur, adipisci velit, sed quia non numquam eius
              modi tempora incidunt, ut labore et dolore magnam aliquam quaerat
              voluptatem. Ut enim ad minima veniam, quis
              nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut
              aliquid ex ea commodi consequatur? Quis autem vel eum iure
              reprehenderit, qui in ea voluptate velit esse, quam nihil
              molestiae consequatur, vel illum, qui dolorem eum fugiat, quo
              voluptas nulla pariatur.
            </p>

            <p class="text-[#474747] leading-relaxed font-[500] text-[18px] text-center lg:text-start">
              At vero eos et accusamus et iusto odio dignissimos ducimus, qui
              blanditiis praesentium voluptatum deleniti atque corrupti, quos
              dolores et quas molestias excepturi sint, obcaecati cupiditate non
              provident, similique sunt in culpa, qui officia deserunt
              mollitia animi, id est laborum et dolorum fuga. Et harum quidem
              rerum facilis est et expedita distinctio. Nam libero tempore, cum
              soluta nobis est eligendi optio, cumque nihil impedit, quo minus
              id, quod maxime placeat, facere possimus, omnis voluptas assumenda
              est, omnis dolor repellendus. Temporibus autem quibusdam et aut
              officiis debitis aut rerum necessitatibus saepe eveniet, ut et
              voluptates repudiandae sint et molestiae non recusandae. Itaque
              earum rerum hic tenetur a sapiente delectus, ut aut reiciendis
              voluptatibus maiores alias consequatur aut perferendis doloribus
              asperiores repellat.
            </p>
          </div>
        </div>
      </section>

      @endsection