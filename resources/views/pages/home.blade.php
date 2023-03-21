@extends('layouts.main')
@section('content')

<section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="section-title">
                        <h4>products</h4>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8">
                    <ul class="filter__controls">
                        <li class="active" data-filter="*">All</li>
                        <li data-filter=".bracelets">Bracelets</li>
                        <li data-filter=".durag">Durag</li>
                        <li data-filter=".earrings">Earrings</li>
                        <li data-filter=".hairsleeve">Hair Sleeve</li>
                        <li data-filter=".necklace_earring">Necklace & Earrings</li>
                        <li data-filter=".pendants"> Necklace & Pendant</li>
                        <li data-filter=".hair_bonnet"> Hair Bonnet </li>
                    </ul>
                </div>
            </div>
            <div class="row property__gallery" id="MixItUp4B4EF7">

                {{-- Bracelets Section --}}
                {{-- <div> --}}
                    <div class="col-lg-3 col-md-4 col-sm-6 mix bracelets">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="assets/images/305kreationz/bracelet_edt/IMG_3148_copy.jpg" style="background-image: url(&quot;assets/images/305kreationz/bracelet_edt/IMG_3148_copy&quot;);">
                                <div class="label new"></div>
                                <ul class="product__hover">
                                    <li><a href="assets/images/305kreationz/bracelet_edt/IMG_3148_copy.jpg" class="image_hover"><span class="arrow_expand"></span></a></li>
                                    <!-- <li><a href="https://preview.colorlib.com/theme/ashion/#"><span class="icon_heart_alt"></span></a></li>
                                    <li><a href="https://preview.colorlib.com/theme/ashion/#"><span class="icon_bag_alt"></span></a></li> -->
                                </ul>
                            </div>
                            <div class="product__item__text">
                                <h6><a href="https://square.link/u/vCMbTZJQ">Space Orange Bracelet</a></h6>
                                <div class="product__price">$ 59.0</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 mix bracelets">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="assets/images/305kreationz/bracelet_edt/IMG_3151.jpg" style="background-image: url(&quot;assets/images/305kreationz/bracelet_edt/IMG_3151.jpg&quot;);">
                                <ul class="product__hover">
                                    <li><a href="assets/images/305kreationz/bracelet_edt/IMG_3151.jpg" class="image-popup"><span class="arrow_expand"></span></a></li>
                                    
                                </ul>
                            </div>
                            <div class="product__item__text">
                                <h6><a href="https://square.link/u/vCMbTZJQ">Amaranthine Bracelet</a></h6>
                                
                                <div class="product__price">$ 49.0</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 mix bracelets">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="assets/images/305kreationz/bracelet_edt/IMG_3154.jpg" style="background-image: url(&quot;assets/images/305kreationz/bracelet_edt/IMG_3154.jpg&quot;);">
                                <ul class="product__hover">
                                    <li><a href="assets/images/305kreationz/bracelet_edt/IMG_3154.jpg" class="image-popup"><span class="arrow_expand"></span></a></li>
                                    
                                </ul>
                            </div>
                            <div class="product__item__text">
                                <h6><a href="https://square.link/u/vCMbTZJQ">Earth Brown</a></h6>
                                <div class="product__price">$ 49.0</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 mix bracelets">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="assets/images/305kreationz/bracelet_edt/IMG_3157.jpg" style="background-image: url(&quot;assets/images/305kreationz/bracelet_edt/IMG_3157.jpg&quot;);">
                                <ul class="product__hover">
                                    <li><a href="assets/images/305kreationz/bracelet_edt/IMG_3157.jpg" class="image-popup"><span class="arrow_expand"></span></a></li>
                                </ul>
                            </div>
                            <div class="product__item__text">
                                <h6><a href="https://square.link/u/vCMbTZJQ">Sizzle green</a></h6>
                                <div class="product__price">$ 49.0</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 mix bracelets">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="assets/images/305kreationz/bracelet_edt/IMG_3158.jpg" style="background-image: url(&quot;assets/images/305kreationz/bracelet_edt/IMG_3158.jpg&quot;);">
                                <ul class="product__hover">
                                    <li><a href="assets/images/305kreationz/bracelet_edt/IMG_3158.jpg" class="image-popup"><span class="arrow_expand"></span></a></li>
                                </ul>
                            </div>
                            <div class="product__item__text">
                                <h6><a href="https://square.link/u/vCMbTZJQ">Magnesite white</a></h6>
                                <div class="product__price">$ 49.0</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 mix bracelets">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="assets/images/305kreationz/bracelet_edt/IMG_3163.jpg" style="background-image: url(&quot;assets/images/305kreationz/bracelet_edt/IMG_3163.jpg&quot;);">
                                <ul class="product__hover">
                                    <li><a href="assets/images/305kreationz/bracelet_edt/IMG_3163.jpg" class="image-popup"><span class="arrow_expand"></span></a></li>
                                </ul>
                            </div>
                            <div class="product__item__text">
                                <h6><a href="https://square.link/u/vCMbTZJQ">Natural moss</a></h6>
                                <div class="product__price">$ 49.0</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 mix bracelets">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="assets/images/305kreationz/bracelet_edt/IMG_3165.jpg" style="background-image: url(&quot;assets/images/305kreationz/bracelet_edt/IMG_3165.jpg&quot;);">
                                <ul class="product__hover">
                                    <li><a href="assets/images/305kreationz/bracelet_edt/IMG_3165.jpg" class="image-popup"><span class="arrow_expand"></span></a></li>
                                </ul>
                            </div>
                            <div class="product__item__text">
                                <h6><a href="https://square.link/u/vCMbTZJQ">Cosmos green</a></h6>
                                <div class="product__price">$ 49.0</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 mix bracelets">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="assets/images/305kreationz/bracelet_edt/bracelet.png" style="background-image: url(&quot;assets/images/305kreationz/bracelet_edt/bracelet.png&quot;);">
                                <ul class="product__hover">
                                    <li><a href="assets/images/305kreationz/bracelet_edt/bracelet.png" class="image-popup"><span class="arrow_expand"></span></a></li>
                                </ul>
                            </div>
                            <div class="product__item__text">
                                <h6><a href="https://square.link/u/vCMbTZJQ">Sizzling Orange</a></h6>
                                <div class="product__price">$ 49.0</div>
                            </div>
                        </div>
                    </div>
                {{-- </div> --}}

                {{-- Durag Section --}}
                {{-- <div> --}}
                    <div class="col-lg-3 col-md-4 col-sm-6 mix durag">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="assets/images/305kreationz/duraq_edt/IMG_3066.jpg" style="background-image: url(&quot;assets/images/305kreationz/duraq_edt/IMG_3066.jpg&quot;);">
                                <ul class="product__hover">
                                    <li><a href="assets/images/305kreationz/duraq_edt/IMG_3066.jpg" class="image-popup"><span class="arrow_expand"></span></a></li>
                                </ul>
                            </div>
                            <div class="product__item__text">
                                <h6><a href="https://square.link/u/UJ7YTBYW">Dewy I</a></h6>
                                <div class="product__price">$ 49.0</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 mix durag">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="assets/images/305kreationz/duraq_edt/IMG_3065.jpg" style="background-image: url(&quot;assets/images/305kreationz/duraq_edt/IMG_3065.jpg&quot;);">
                                <ul class="product__hover">
                                    <li><a href="assets/images/305kreationz/duraq_edt/IMG_3065.jpg" class="image-popup"><span class="arrow_expand"></span></a></li>
                                </ul>
                            </div>
                            <div class="product__item__text">
                                <h6><a href="https://square.link/u/PDeyjMry">Dewy II</a></h6>
                                <div class="product__price">$ 49.0</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 mix durag">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="assets/images/305kreationz/duraq_edt/IMG_3064.jpg" style="background-image: url(&quot;assets/images/305kreationz/duraq_edt/IMG_3064.jpg&quot;);">
                                <ul class="product__hover">
                                    <li><a href="assets/images/305kreationz/duraq_edt/IMG_3064.jpg" class="image-popup"><span class="arrow_expand"></span></a></li>
                                </ul>
                            </div>
                            <div class="product__item__text">
                                <h6><a href="https://square.link/u/Vz05cLdN">Dewy III</a></h6>
                                <div class="product__price">$ 49.0</div>
                            </div>
                        </div>
                    </div>
                {{-- </div> --}}

                {{-- Earings Section --}}
                {{-- <div> --}}
                    <div class="col-lg-3 col-md-4 col-sm-6 mix earrings">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="assets/images/305kreationz/earring_edt/IMG_3090.jpg" style="background-image: url(&quot;assets/images/305kreationz/earring_edt/IMG_3090.jpg&quot;);">
                                <ul class="product__hover">
                                    <li><a href="assets/images/305kreationz/earring_edt/IMG_3090.jpg" class="image-popup"><span class="arrow_expand"></span></a></li>
                                </ul>
                            </div>
                            <div class="product__item__text">
                                <h6><a href="https://square.link/u/Vz05cLdN">Nature moss earings</a></h6>
                                <div class="product__price">$ 49.0</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 mix earrings">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="assets/images/305kreationz/earring_edt/IMG_3091.jpg" style="background-image: url(&quot;assets/images/305kreationz/earring_edt/IMG_3091.jpg&quot;);">
                                <ul class="product__hover">
                                    <li><a href="assets/images/305kreationz/earring_edt/IMG_3091.jpg" class="image-popup"><span class="arrow_expand"></span></a></li>
                                </ul>
                            </div>
                            <div class="product__item__text">
                                <h6><a href="https://square.link/u/ExPqiT6Q">Cosmos orange earings</a></h6>
                                <div class="product__price">$ 49.0</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 mix earrings">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="assets/images/305kreationz/earring_edt/IMG_3096.jpg" style="background-image: url(&quot;assets/images/305kreationz/earring_edt/IMG_3096.jpg&quot;);">
                                <ul class="product__hover">
                                    <li><a href="assets/images/305kreationz/earring_edt/IMG_3096.jpg" class="image-popup"><span class="arrow_expand"></span></a></li>
                                </ul>
                            </div>
                            <div class="product__item__text">
                                <h6><a href="https://square.link/u/ExPqiT6Q">Garnet brown earrings</a></h6>
                                <div class="product__price">$ 49.0</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 mix earrings">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="assets/images/305kreationz/earring_edt/IMG_3097.jpg" style="background-image: url(&quot;assets/images/305kreationz/earring_edt/IMG_3097.jpg&quot;);">
                                <ul class="product__hover">
                                    <li><a href="assets/images/305kreationz/earring_edt/IMG_3097.jpg" class="image-popup"><span class="arrow_expand"></span></a></li>
                                </ul>
                            </div>
                            <div class="product__item__text">
                                <h6><a href="https://square.link/u/ExPqiT6Q">Azure earrings</a></h6>
                                <div class="product__price">$ 49.0</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 mix earrings">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="assets/images/305kreationz/earring_edt/IMG_3103.jpg" style="background-image: url(&quot;assets/images/305kreationz/earring_edt/IMG_3103.jpg&quot;);">
                                <ul class="product__hover">
                                    <li><a href="assets/images/305kreationz/earring_edt/IMG_3103.jpg" class="image-popup"><span class="arrow_expand"></span></a></li>
                                </ul>
                            </div>
                            <div class="product__item__text">
                                <h6><a href="https://square.link/u/ExPqiT6Q">Amaranthine earrings</a></h6>
                                <div class="product__price">$ 49.0</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 mix earrings">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="assets/images/305kreationz/earring_edt/IMG_3110.jpg" style="background-image: url(&quot;assets/images/305kreationz/earring_edt/IMG_3110.jpg&quot;);">
                                <ul class="product__hover">
                                    <li><a href="assets/images/305kreationz/earring_edt/IMG_3110.jpg" class="image-popup"><span class="arrow_expand"></span></a></li>
                                </ul>
                            </div>
                            <div class="product__item__text">
                                <h6><a href="https://square.link/u/ExPqiT6Q">Marcasite Fusion earings</a></h6>
                                <div class="product__price">$ 49.0</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 mix earrings">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="assets/images/305kreationz/earring_edt/IMG_3111.jpg" style="background-image: url(&quot;assets/images/305kreationz/earring_edt/IMG_3111.jpg&quot;);">
                                <ul class="product__hover">
                                    <li><a href="assets/images/305kreationz/earring_edt/IMG_3111.jpg" class="image-popup"><span class="arrow_expand"></span></a></li>
                                </ul>
                            </div>
                            <div class="product__item__text">
                                <h6><a href="https://square.link/u/ExPqiT6Q">Sizzle black earrings</a></h6>
                                <div class="product__price">$ 49.0</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 mix earrings">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="assets/images/305kreationz/earring_edt/IMG_3114.jpg" style="background-image: url(&quot;assets/images/305kreationz/earring_edt/IMG_3114.jpg&quot;);">
                                <ul class="product__hover">
                                    <li><a href="assets/images/305kreationz/earring_edt/IMG_3114.jpg" class="image-popup"><span class="arrow_expand"></span></a></li>
                                </ul>
                            </div>
                            <div class="product__item__text">
                                <h6><a href="https://square.link/u/ExPqiT6Q">Sizzle green earrings</a></h6>
                                <div class="product__price">$ 49.0</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 mix earrings">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="assets/images/305kreationz/earring_edt/IMG_3115.jpg" style="background-image: url(&quot;assets/images/305kreationz/earring_edt/IMG_3115.jpg&quot;);">
                                <ul class="product__hover">
                                    <li><a href="assets/images/305kreationz/earring_edt/IMG_3115.jpg" class="image-popup"><span class="arrow_expand"></span></a></li>
                                </ul>
                            </div>
                            <div class="product__item__text">
                                <h6><a href="https://square.link/u/ExPqiT6Q">Afrique earrings</a></h6>
                                <div class="product__price">$ 49.0</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 mix earrings">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="assets/images/305kreationz/earring_edt/IMG_3121.jpg" style="background-image: url(&quot;assets/images/305kreationz/earring_edt/IMG_3121.jpg&quot;);">
                                <ul class="product__hover">
                                    <li><a href="assets/images/305kreationz/earring_edt/IMG_3121.jpg" class="image-popup"><span class="arrow_expand"></span></a></li>
                                </ul>
                            </div>
                            <div class="product__item__text">
                                <h6><a href="https://square.link/u/ExPqiT6Q">Sizzle orange earrings</a></h6>
                                <div class="product__price">$ 49.0</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 mix earrings">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="assets/images/305kreationz/earring_edt/IMG_3123.jpg" style="background-image: url(&quot;assets/images/305kreationz/earring_edt/IMG_3123.jpg&quot;);">
                                <ul class="product__hover">
                                    <li><a href="assets/images/305kreationz/earring_edt/IMG_3123.jpg" class="image-popup"><span class="arrow_expand"></span></a></li>
                                </ul>
                            </div>
                            <div class="product__item__text">
                                <h6><a href="https://square.link/u/ExPqiT6Q">Sizzle orange earrings</a></h6>
                                <div class="product__price">$ 49.0</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 mix earrings">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="assets/images/305kreationz/earring_edt/IMG_3125.jpg" style="background-image: url(&quot;assets/images/305kreationz/earring_edt/IMG_3125.jpg&quot;);">
                                <ul class="product__hover">
                                    <li><a href="assets/images/305kreationz/earring_edt/IMG_3125.jpg" class="image-popup"><span class="arrow_expand"></span></a></li>
                                </ul>
                            </div>
                            <div class="product__item__text">
                                <h6><a href="https://square.link/u/ExPqiT6Q">Orange moon earrings</a></h6>
                                <div class="product__price">$ 49.0</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 mix earrings">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="assets/images/305kreationz/earring_edt/IMG_3127.jpg" style="background-image: url(&quot;assets/images/305kreationz/earring_edt/IMG_3127.jpg&quot;);">
                                <ul class="product__hover">
                                    <li><a href="assets/images/305kreationz/earring_edt/IMG_3127.jpg" class="image-popup"><span class="arrow_expand"></span></a></li>
                                </ul>
                            </div>
                            <div class="product__item__text">
                                <h6><a href="https://square.link/u/GtCMmsTV">Ebony Shell I</a></h6>
                                <div class="product__price">$ 49.0</div>
                            </div>
                        </div>
                    </div>
                {{-- </div> --}}

                {{-- Hair Sleeve --}}
                {{-- <div class=""> --}}
                    <div class="col-lg-3 col-md-4 col-sm-6 mix hairsleeve">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="assets/images/305kreationz/hair-sleeve_edt/IMG_3051.jpg" style="background-image: url(&quot;assets/images/305kreationz/hair-sleeve_edt/IMG_3051.jpg&quot;);">
                                <ul class="product__hover">
                                    <li><a href="assets/images/305kreationz/hair-sleeve_edt/IMG_3051.jpg" class="image-popup"><span class="arrow_expand"></span></a></li>
                                </ul>
                            </div>
                            <div class="product__item__text">
                                <h6><a href="https://square.link/u/m5Ns26gf"> Navy blue crepe  </a></h6>
                                <div class="product__price">$ 49.0</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 mix hairsleeve">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="assets/images/305kreationz/hair-sleeve_edt/IMG_3057.jpg" style="background-image: url(&quot;assets/images/305kreationz/hair-sleeve_edt/IMG_3057.jpg&quot;);">
                                <ul class="product__hover">
                                    <li><a href="assets/images/305kreationz/hair-sleeve_edt/IMG_3057.jpg" class="image-popup"><span class="arrow_expand"></span></a></li>
                                </ul>
                            </div>
                            <div class="product__item__text">
                                <h6><a href="https://square.link/u/VdxN2qt5">Olive green crepe </a></h6>
                                <div class="product__price">$ --.0</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 mix hairsleeve">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="assets/images/305kreationz/hair-sleeve_edt/IMG_3058.jpg" style="background-image: url(&quot;assets/images/305kreationz/hair-sleeve_edt/IMG_3058.jpg&quot;);">
                                <ul class="product__hover">
                                    <li><a href="assets/images/305kreationz/hair-sleeve_edt/IMG_3058.jpg" class="image-popup"><span class="arrow_expand"></span></a></li>
                                </ul>
                            </div>
                            <div class="product__item__text">
                                <h6><a href="https://square.link/u/wCAAXCbV"> Black crepe  </a></h6>
                                <div class="product__price">$ --.0</div>
                            </div>
                        </div>
                    </div>
                {{-- </div> --}}

                {{-- Necklace Earrings --}}
                {{-- <div> --}}
                    <div class="col-lg-3 col-md-4 col-sm-6 mix necklace_earring">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="assets/images/305kreationz/necklace_earings_edt/Garnet_brown.jpg" style="background-image: url(&quot;assets/images/305kreationz/necklace_earings_edt/Garnet_brown.jpg&quot;);">
                                <ul class="product__hover">
                                    <li><a href="assets/images/305kreationz/necklace_earings_edt/Garnet_brown.jpg" class="image-popup"><span class="arrow_expand"></span></a></li>
                                </ul>
                            </div>
                            <div class="product__item__text">
                                <h6><a href="https://square.link/u/ssi02OKv"> Garnet brown set  </a></h6>
                                <div class="product__price">$ --.0</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 mix necklace_earring">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="assets/images/305kreationz/necklace_earings_edt/Azure.jpg" style="background-image: url(&quot;assets/images/305kreationz/necklace_earings_edt/Azure.jpg&quot;);">
                                <ul class="product__hover">
                                    <li><a href="assets/images/305kreationz/necklace_earings_edt/Azure.jpg" class="image-popup"><span class="arrow_expand"></span></a></li>
                                </ul>
                            </div>
                            <div class="product__item__text">
                                <h6><a href="https://square.link/u/ssi02OKv"> Azure set   </a></h6>
                                <div class="product__price">$ --.0</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 mix necklace_earring">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="assets/images/305kreationz/necklace_earings_edt/Amaranthine.jpg" style="background-image: url(&quot;assets/images/305kreationz/necklace_earings_edt/Amaranthine.jpg&quot;);">
                                <ul class="product__hover">
                                    <li><a href="assets/images/305kreationz/necklace_earings_edt/Amaranthine.jpg" class="image-popup"><span class="arrow_expand"></span></a></li>
                                </ul>
                            </div>
                            <div class="product__item__text">
                                <h6><a href="https://square.link/u/ssi02OKv"> Amaranthine set    </a></h6>
                                <div class="product__price">$ --.0</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 mix necklace_earring">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="assets/images/305kreationz/necklace_earings_edt/Earth_brown.jpg" style="background-image: url(&quot;assets/images/305kreationz/necklace_earings_edt/Earth_brown.jpg&quot;);">
                                <ul class="product__hover">
                                    <li><a href="assets/images/305kreationz/necklace_earings_edt/Earth_brown.jpg" class="image-popup"><span class="arrow_expand"></span></a></li>
                                </ul>
                            </div>
                            <div class="product__item__text">
                                <h6><a href="https://square.link/u/ssi02OKv"> Earth brown set     </a></h6>
                                <div class="product__price">$ --.0</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 mix necklace_earring">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="assets/images/305kreationz/necklace_earings_edt/Earth_brown.jpg" style="background-image: url(&quot;assets/images/305kreationz/necklace_earings_edt/Marcasite_Fusion.jpg&quot;);">
                                <ul class="product__hover">
                                    <li><a href="assets/images/305kreationz/necklace_earings_edt/Marcasite_Fusion.jpg" class="image-popup"><span class="arrow_expand"></span></a></li>
                                </ul>
                            </div>
                            <div class="product__item__text">
                                <h6><a href="https://square.link/u/ssi02OKv"> Marcasite fusion set      </a></h6>
                                <div class="product__price">$ --.0</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 mix necklace_earring">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="assets/images/305kreationz/necklace_earings_edt/Earth_brown2.jpg" style="background-image: url(&quot;assets/images/305kreationz/necklace_earings_edt/Earth_brown2.jpg&quot;);">
                                <ul class="product__hover">
                                    <li><a href="assets/images/305kreationz/necklace_earings_edt/Earth_brown2.jpg" class="image-popup"><span class="arrow_expand"></span></a></li>
                                </ul>
                            </div>
                            <div class="product__item__text">
                                <h6><a href="https://square.link/u/ssi02OKv"> Earth brown set II       </a></h6>
                                <div class="product__price">$ --.0</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 mix necklace_earring">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="assets/images/305kreationz/necklace_earings_edt/Sizzled_black.jpg" style="background-image: url(&quot;assets/images/305kreationz/necklace_earings_edt/Sizzled_black.jpg&quot;);">
                                <ul class="product__hover">
                                    <li><a href="assets/images/305kreationz/necklace_earings_edt/Sizzled_black.jpg" class="image-popup"><span class="arrow_expand"></span></a></li>
                                </ul>
                            </div>
                            <div class="product__item__text">
                                <h6><a href="https://square.link/u/ssi02OKv"> Sizzled black       </a></h6>
                                <div class="product__price">$ --.0</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 mix necklace_earring">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="assets/images/305kreationz/necklace_earings_edt/Sizzled_orange.jpg" style="background-image: url(&quot;assets/images/305kreationz/necklace_earings_edt/Sizzled_orange.jpg&quot;);">
                                <ul class="product__hover">
                                    <li><a href="assets/images/305kreationz/necklace_earings_edt/Sizzled_orange.jpg" class="image-popup"><span class="arrow_expand"></span></a></li>
                                </ul>
                            </div>
                            <div class="product__item__text">
                                <h6><a href="https://square.link/u/ssi02OKv"> Sizzled orange set        </a></h6>
                                <div class="product__price">$ --.0</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 mix necklace_earring">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="assets/images/305kreationz/necklace_earings_edt/Sizzled_orange2.jpg" style="background-image: url(&quot;assets/images/305kreationz/necklace_earings_edt/Sizzled_orange2.jpg&quot;);">
                                <ul class="product__hover">
                                    <li><a href="assets/images/305kreationz/necklace_earings_edt/Sizzled_orange2.jpg" class="image-popup"><span class="arrow_expand"></span></a></li>
                                </ul>
                            </div>
                            <div class="product__item__text">
                                <h6><a href="https://square.link/u/ssi02OKv"> Sizzled orange set II        </a></h6>
                                <div class="product__price">$ --.0</div>
                            </div>
                        </div>
                    </div>
                {{-- </div> --}}


                {{-- Necklace & Pendant --}}
                {{-- <div> --}}
                    <div class="col-lg-3 col-md-4 col-sm-6 mix pendants">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="assets/images/305kreationz/pendant_edt/Garnet_brown.jpg" style="background-image: url(&quot;assets/images/305kreationz/pendant_edt/Garnet_brown.jpg&quot;);">
                                <ul class="product__hover">
                                    <li><a href="assets/images/305kreationz/pendant_edt/Garnet_brown.jpg" class="image-popup"><span class="arrow_expand"></span></a></li>
                                </ul>
                            </div>
                            <div class="product__item__text">
                                <h6><a href="https://square.link/u/9ikmQ0aR"> Garnet Brown        </a></h6>
                                <div class="product__price">$ --.0</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 mix pendants">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="assets/images/305kreationz/pendant_edt/Nature_moss.jpg" style="background-image: url(&quot;assets/images/305kreationz/pendant_edt/Nature_moss.jpg&quot;);">
                                <ul class="product__hover">
                                    <li><a href="assets/images/305kreationz/pendant_edt/Nature_moss.jpg" class="image-popup"><span class="arrow_expand"></span></a></li>
                                </ul>
                            </div>
                            <div class="product__item__text">
                                <h6><a href="https://square.link/u/9ikmQ0aR"> Nature moss        </a></h6>
                                <div class="product__price">$ --.0</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 mix pendants">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="assets/images/305kreationz/pendant_edt/Azura.jpg" style="background-image: url(&quot;assets/images/305kreationz/pendant_edt/Azura.jpg&quot;);">
                                <ul class="product__hover">
                                    <li><a href="assets/images/305kreationz/pendant_edt/Azura.jpg" class="image-popup"><span class="arrow_expand"></span></a></li>
                                </ul>
                            </div>
                            <div class="product__item__text">
                                <h6><a href="https://square.link/u/9ikmQ0aR"> Azura         </a></h6>
                                <div class="product__price">$ --.0</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 mix pendants">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="assets/images/305kreationz/pendant_edt/Amaranthine.jpg" style="background-image: url(&quot;assets/images/305kreationz/pendant_edt/Amaranthine.jpg&quot;);">
                                <ul class="product__hover">
                                    <li><a href="assets/images/305kreationz/pendant_edt/Amaranthine.jpg" class="image-popup"><span class="arrow_expand"></span></a></li>
                                </ul>
                            </div>
                            <div class="product__item__text">
                                <h6><a href="https://square.link/u/9ikmQ0aR"> Amaranthine         </a></h6>
                                <div class="product__price">$ --.0</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 mix pendants">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="assets/images/305kreationz/pendant_edt/Cosmos_orange.jpg" style="background-image: url(&quot;assets/images/305kreationz/pendant_edt/Cosmos_orange.jpg&quot;);">
                                <ul class="product__hover">
                                    <li><a href="assets/images/305kreationz/pendant_edt/Cosmos_orange.jpg" class="image-popup"><span class="arrow_expand"></span></a></li>
                                </ul>
                            </div>
                            <div class="product__item__text">
                                <h6><a href="https://square.link/u/9ikmQ0aR"> Cosmos orange         </a></h6>
                                <div class="product__price">$ --.0</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 mix pendants">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="assets/images/305kreationz/pendant_edt/Sizzled_orange.jpg" style="background-image: url(&quot;assets/images/305kreationz/pendant_edt/Sizzled_orange.jpg&quot;);">
                                <ul class="product__hover">
                                    <li><a href="assets/images/305kreationz/pendant_edt/Sizzled_orange.jpg" class="image-popup"><span class="arrow_expand"></span></a></li>
                                </ul>
                            </div>
                            <div class="product__item__text">
                                <h6><a href="https://square.link/u/9ikmQ0aR"> Sizzled orange          </a></h6>
                                <div class="product__price">$ --.0</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 mix pendants">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="assets/images/305kreationz/pendant_edt/Sizzled_black.jpg" style="background-image: url(&quot;assets/images/305kreationz/pendant_edt/Sizzled_black.jpg&quot;);">
                                <ul class="product__hover">
                                    <li><a href="assets/images/305kreationz/pendant_edt/Sizzled_black.jpg" class="image-popup"><span class="arrow_expand"></span></a></li>
                                </ul>
                            </div>
                            <div class="product__item__text">
                                <h6><a href="https://square.link/u/9ikmQ0aR"> Sizzled black           </a></h6>
                                <div class="product__price">$ --.0</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 mix pendants">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="assets/images/305kreationz/pendant_edt/Cosmos_orange2.jpg" style="background-image: url(&quot;assets/images/305kreationz/pendant_edt/Cosmos_orange2.jpg&quot;);">
                                <ul class="product__hover">
                                    <li><a href="assets/images/305kreationz/pendant_edt/Cosmos_orange2.jpg" class="image-popup"><span class="arrow_expand"></span></a></li>
                                </ul>
                            </div>
                            <div class="product__item__text">
                                <h6><a href="https://square.link/u/9ikmQ0aR"> Cosmos orange            </a></h6>
                                <div class="product__price">$ --.0</div>
                            </div>
                        </div>
                    </div>
                {{-- </div> --}}

                {{-- Hair Bonnet --}}
                {{-- <div> --}}
                    <div class="col-lg-3 col-md-4 col-sm-6 mix hair_bonnet">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="assets/images/305kreationz/hair_bonnet_edt/kacha_mma2.jpg" style="background-image: url(&quot;assets/images/305kreationz/hair_bonnet_edt/kacha_mma2.jpg&quot;);">
                                <ul class="product__hover">
                                    <li><a href="assets/images/305kreationz/hair_bonnet_edt/kacha_mma2.jpg" class="image-popup"><span class="arrow_expand"></span></a></li>
                                </ul>
                            </div>
                            <div class="product__item__text">
                                <h6><a href="https://square.link/u/xCkFmkDh"> kacha mma II </a></h6>
                                <div class="product__price">$ --.0</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 mix hair_bonnet">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="assets/images/305kreationz/hair_bonnet_edt/julọ_lẹwa3.jpg" style="background-image: url(&quot;assets/images/305kreationz/hair_bonnet_edt/julọ_lẹwa3.jpg&quot;);">
                                <ul class="product__hover">
                                    <li><a href="assets/images/305kreationz/hair_bonnet_edt/julọ_lẹwa3.jpg" class="image-popup"><span class="arrow_expand"></span></a></li>
                                </ul>
                            </div>
                            <div class="product__item__text">
                                <h6><a href="https://square.link/u/NCb7J8Ja"> Julọ ​​lẹwa III  </a></h6>
                                <div class="product__price">$ --.0</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 mix hair_bonnet">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="assets/images/305kreationz/hair_bonnet_edt/julọ_lẹwa2.jpg" style="background-image: url(&quot;assets/images/305kreationz/hair_bonnet_edt/julọ_lẹwa2.jpg&quot;);">
                                <ul class="product__hover">
                                    <li><a href="assets/images/305kreationz/hair_bonnet_edt/julọ_lẹwa2.jpg" class="image-popup"><span class="arrow_expand"></span></a></li>
                                </ul>
                            </div>
                            <div class="product__item__text">
                                <h6><a href="https://square.link/u/NCb7J8Ja"> Julọ ​​lẹwa II </a></h6>
                                <div class="product__price">$ --.0</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 mix hair_bonnet">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="assets/images/305kreationz/hair_bonnet_edt/Kacha_mma1.jpg" style="background-image: url(&quot;assets/images/305kreationz/hair_bonnet_edt/Kacha_mma1.jpg&quot;);">
                                <ul class="product__hover">
                                    <li><a href="assets/images/305kreationz/hair_bonnet_edt/Kacha_mma1.jpg" class="image-popup"><span class="arrow_expand"></span></a></li>
                                </ul>
                            </div>
                            <div class="product__item__text">
                                <h6><a href="https://square.link/u/LX2Df83Y"> Kacha mma I  </a></h6>
                                <div class="product__price">$ --.0</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 mix hair_bonnet">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="assets/images/305kreationz/hair_bonnet_edt/julọ_​​lẹwa1.jpg" style="background-image: url(&quot;assets/images/305kreationz/hair_bonnet_edt/julọ_​​lẹwa1.jpg&quot;);">
                                <ul class="product__hover">
                                    <li><a href="assets/images/305kreationz/hair_bonnet_edt/julọ_​​lẹwa1.jpg" class="image-popup"><span class="arrow_expand"></span></a></li>
                                </ul>
                            </div>
                            <div class="product__item__text">
                                <h6><a href="https://square.link/u/8CuSlXuX"> Julọ ​​lẹwa I   </a></h6>
                                <div class="product__price">$ --.0</div>
                            </div>
                        </div>
                    </div>
                {{-- </div> --}}
            </div>

            
        </div>

@endsection