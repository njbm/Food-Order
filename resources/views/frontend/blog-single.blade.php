@extends('frontend.layouts.app')

@section('content')

<section>
   <div class="page-top-baner">
       <div class="banner-sec-bg custom-padding">
           <div class="row">
               <div class="page-head-ban">
                   <div class="page-text">
                       <h1>
                           Blog
                       </h1>
                       <P>Home - <span class="page-name">Blog</span></P>
                   </div>
               </div>
           </div>
       </div>
   </div>
</section>


<!-- ===================================CART PRODUCT START================== -->
<!--=====================================
       BLOG LIST PART START
=======================================-->
<section class="blog__list__sec">
   <div class="container">
       <div class="row content__rev">
           <div class="col-lg-4">
               <div class="row">
                   <div class="col-lg-12">
                       <form class="form__grid blog__search">
                           <input type="text" placeholder="Search...">
                           <button class="search-btn"><i class="fas fa-search"></i></button>
                       </form>
                   </div>
                   <div class="col-md-7 col-lg-12">
                       <div class="blog__sidebar suggest__list">
                           <h4>popular post</h4>
                           <div class="blog__related">
                               <div class="related__img">
                                   <a href="#"><img src="img/blog/insta_img2.jpg" alt="suggest-3"></a>
                               </div>
                               <div class="related__content">
                                   <div class="related__title">
                                       <h6><a href="#">Lorem Ipsum is simply dummy text of the printing.</a></h6>
                                   </div>
                                   <div class="related__date">
                                       <i class="fas fa-calendar-alt"></i>
                                       <p>02 feb 2020</p>
                                   </div>
                               </div>
                           </div>
                           <div class="blog__related">
                               <div class="related__img">
                                   <a href="#"><img src="img/blog/insta_img3.jpg" alt="suggest-3"></a>
                               </div>
                               <div class="related__content">
                                   <div class="related__title">
                                       <h6><a href="#">Lorem Ipsum is simply dummy text of the printing.</a></h6>
                                   </div>
                                   <div class="related__date">
                                       <i class="fas fa-calendar-alt"></i>
                                       <p>02 feb 2020</p>
                                   </div>
                               </div>
                           </div>
                           <div class="blog__related">
                               <div class="related__img">
                                   <a href="#"><img src="img/blog/insta_img4.jpg" alt="suggest-3"></a>
                               </div>
                               <div class="related__content">
                                   <div class="related__title">
                                       <h6><a href="#">Lorem Ipsum is simply dummy text of the printing.</a></h6>
                                   </div>
                                   <div class="related__date">
                                       <i class="fas fa-calendar-alt"></i>
                                       <p>02 feb 2020</p>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
                   <div class="col-md-5 col-lg-12">
                       <div class="blog__sidebar blog__category">
                           <h4>popular categories</h4>
                           <ul>
                               <li>
                                   <h6><a href="#">Technology</a></h6>
                                   <p>23</p>
                               </li>
                               <li>
                                   <h6><a href="#">Education</a></h6>
                                   <p>17</p>
                               </li>
                               <li>
                                   <h6><a href="#">Business</a></h6>
                                   <p>09</p>
                               </li>
                               <li>
                                   <h6><a href="#">Freelancing</a></h6>
                                   <p>12</p>
                               </li>
                               <li>
                                   <h6><a href="#">Programing</a></h6>
                                   <p>42</p>
                               </li>
                           </ul>
                       </div>
                   </div>
                   <div class="col-md-6 col-lg-12">
                       <div class="blog__sidebar blog__tag">
                           <h4>Popular tags</h4>
                           <ul>
                               <li><a href="#">domain</a></li>
                               <li><a href="#">cloud</a></li>
                               <li><a href="#">web</a></li>
                               <li><a href="#">payment</a></li>
                               <li><a href="#">E-commerce</a></li>
                               <li><a href="#">Sequerity</a></li>
                               <li><a href="#">solution</a></li>
                               <li><a href="#">offer</a></li>
                               <li><a href="#">support</a></li>
                               <li><a href="#">knowladge</a></li>
                           </ul>
                       </div>
                   </div>

               </div>
           </div>
           <div class="col-md-12 col-lg-8">
               <div class="contant__details">
                   <div class="title__blog">
                       <h2><a href="#">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</a></h2>
                   </div>
                   <ul class="blog__meta">
                       <li>
                           <i class="far fa-user"></i>
                           <p>Miron Hasan</p>
                       </li>
                       <li>
                           <i class="far fa-calendar-alt"></i>
                           <p>02 Feb 2020</p>
                       </li>
                       <li>
                           <i class="far fa-folder-open"></i>
                           <p>Technology</p>
                       </li>
                       <li>
                           <i class="far fa-comments"></i>
                           <p>37 Comment</p>
                       </li>
                       <li>
                           <i class="far fa-share-square"></i>
                           <p>21 Share</p>
                       </li>
                   </ul>
                   <div class="blog__details__img">
                       <img src="img/blog/1.jpg" alt="blog-1">
                   </div>
                   <div class="blog__description">
                       <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ducimus beatae veniam suscipit error unde voluptatibus pariatur eaque. Odit, ullam. Dolorum, dicta! Sunt molestias voluptates minima! <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore alias sapiente enim excepturi cumque impedit exercitationem similique eius iste soluta adipisci commodi quae, libero nulla necessitatibus harum accusantium temporibus ipsam, quidem molestiae atque repellat maxime et consectetur! Molestiae sapiente maiores inventore veritatis. Veritatis alias molestiae mollitia.</span></p>
                   </div>
                   <div class="blog__subtitle">
                       <h4>How to manage your problem?</h4>
                       <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur eos, sed eveniet dignissimos numquam provident nihil unde ullam quod molestiae nostrum! Totam iusto quibusdam, enim <a href="#">asperiores</a> neque
                           pariatur voluptatum eos eum fuga, sequi, hic odit aspernatur earum? Ratione, atque incidunt.</p>
                   </div>
                   <div class="blog__quote">
                       <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id distinctio nulla velit est quidem repellendus esse non saepe cumque sapiente.</p>
                       <span>jaurge anderson</span>
                   </div>
                   <ul class="blog__details__list">
                       <li>
                           <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus quaerat tenetur, <a href="#">aperiam</a> odit, ratione eligendi nulla quae praesentium quo, a reiciendis inventore facilis veniam voluptates.</p>
                       </li>
                       <li>
                           <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad ullam impedit, architecto porro voluptas sequi ab beatae saepe quo magnam</p>
                       </li>
                   </ul>
                   <div class="blog__sidebar blog__tag">
                       <h4>tags</h4>
                       <ul>
                           <li><a href="#">domain</a></li>
                           <li><a href="#">cloud</a></li>
                           <li><a href="#">web</a></li>
                           <li><a href="#">payment</a></li>
                           <li><a href="#">E-commerce</a></li>
                           <li><a href="#">Sequerity</a></li>
                           <li><a href="#">solution</a></li>
                           <li><a href="#">offer</a></li>
                           <li><a href="#">support</a></li>
                           <li><a href="#">knowladge</a></li>
                       </ul>
                   </div>

               </div>

           </div>
       </div>
   </div>
</section>
<!--=====================================
       BLOG LIST PART END
=======================================-->


<!-- ========================comment section start================ -->
<section class="blog__user">
   <div class="container">
       <div class="row">
           <div class="col-md-12 col-lg-6">
               <div class="user__comment">
                   <h4>Comments <span>(3)</span></h4>
               </div>
               <ul class="comment__list">
                   <li class="comment__item">
                       <div class="comment">
                           <a href="#"><img src="img/user/avatar-1.jpg" alt="comment-1"></a>
                           <div class="comment__text">
                               <ul class="comment__head">
                                   <li>
                                       <a href="#">
                                           <i class="far fa-user"></i> Miron hasan
                                       </a>
                                   </li>
                                   <li>
                                       <i class="far fa-calendar-alt"></i> 02 February 2020
                                   </li>
                               </ul>
                               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias eveniet quisquam vitae doloremque.</p>
                           </div>
                       </div>
                       <div class="reply__comment">
                           <a href="#">reply<i class="fas fa-long-arrow-alt-right"></i></a>
                       </div>
                   </li>
                   <li class="comment__item ml-5">
                       <div class="comment">
                           <a href="#"><img src="img/user/avatar-2.jpg" alt="comment-1"></a>
                           <div class="comment__text">
                               <ul class="comment__head">
                                   <li>
                                       <a href="#">
                                           <i class="far fa-user"></i> Miron hasan
                                       </a>
                                   </li>
                                   <li>
                                       <i class="far fa-calendar-alt"></i> 02 February 2020
                                   </li>
                               </ul>
                               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias eveniet quisquam vitae doloremque.</p>
                           </div>
                       </div>
                       <div class="reply__comment">
                           <a href="#">reply<i class="fas fa-long-arrow-alt-right"></i></a>
                       </div>
                   </li>
                   <li class="comment__item">
                       <div class="comment">
                           <a href="#"><img src="img/user/avatar-3.jpg" alt="comment-1"></a>
                           <div class="comment__text">
                               <ul class="comment__head">
                                   <li>
                                       <a href="#">
                                           <i class="far fa-user"></i> Miron hasan
                                       </a>
                                   </li>
                                   <li>
                                       <i class="far fa-calendar-alt"></i> 02 February 2020
                                   </li>
                               </ul>
                               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias eveniet quisquam vitae doloremque.</p>
                           </div>
                       </div>
                       <div class="reply__comment">
                           <a href="#">reply<i class="fas fa-long-arrow-alt-right"></i></a>
                       </div>
                   </li>
               </ul>
           </div>
           <div class="col-md-12 col-lg-6">
               <div class="comment__form">
                   <h4>Leave Your Qoute</h4>
                   <form class="form__input">
                       <input type="text" placeholder="Your name">
                       <input type="email" placeholder="Your email">
                       <textarea placeholder="Your quote"></textarea>
                       <button class="btn-main">
                       <i class="fas fa-paper-plane"></i>
                       <span>send quote</span>
                   </button>
                   </form>
               </div>
           </div>
       </div>
   </div>
</section>
   
@endsection