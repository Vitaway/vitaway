@extends('Layouts.main')

@section('title') Home @stop

@section('metas')
    <meta name="description" content="Free Web tutorials">
    <meta name="keywords" content="HTML, CSS, JavaScript">
@stop

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/components/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/FAQs.css') }}">
    <link rel="stylesheet" href="{{ asset('css/components/footer.css') }}">
@stop

@section('content')
    <x-navbar />

    <!-- BANNER -->
    <section class="hero-wrap degree-right" style="background-image: url(https://images.unsplash.com/photo-1633613286848-e6f43bbafb8d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80)">
        <div class="container">
            <div class="row slider-text">
                <div class="col-md-6">
                    <div class="hero-heading">
                        <span class="subheading">Welcome to Vitaway Library</span>
                        <h1 class="mb-4">Most Frenquent
                            Asked Questions
                            </h1>
                        <p class="mb-4" style="font-size: 16.5px">
                            Far far away, behind the word mountains, far from the countries
                            Vokalia and Consonantia, there live the blind texts
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- *************** QUESTIONS LIST **************** -->
    <section class="blog_part section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5">
                    <div class="section_tittle text-center">
                        <h2>Frequent Asked Questions</h2>
                    </div>
                </div>
            </div>
            <div class="row mt-5 justify-content-center">

                <div class="faq-col">
                    <div class="single-home-blog">
                        <div class="card">
                            <div class="card-media h-40">
                                <div class="card-media-overly"></div>
                                <img class="Image" src="https://images.unsplash.com/photo-1664230388413-5e90d32b8d68?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1469&q=80" alt="">
                            </div>
                            <div class="card-body">
                                <a href="Healthy_Pregnancy_for_Women_With_Diabetes.php" class="btn_4 Link">12 Questions</a>
                                <div class="blog-tittle">
                                    <h5 class="card-title card-data-title">A Healthy Pregnancy for Women With Diabetes </h5>
                                </div>
                                <p class="Card-Description">Diabetes mellitus also called “diabetes” is caused by a problem
                                    with insulin</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="faq-col">
                    <div class="single-home-blog">
                        <div class="card">
                            <div class="card-media h-40">
                                <div class="card-media-overly"></div>
                                <img class="Image" src="https://images.unsplash.com/photo-1664230388413-5e90d32b8d68?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1469&q=80" alt="">
                            </div>
                            <div class="card-body">
                                <a href="Barrier_Methods_of_Birth_Control.php" class="btn_4 Link">12 Questions</a>
                                <div class="blog-tittle">
                                    <h5 class="card-title card-data-title">Barrier Methods of Birth Control and Cervical Cap
                                    </h5>
                                    <p class="Card-Description">barriers to keep the man’s sperm from reaching the woman’s
                                        egg</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="faq-col">
                    <div class="single-home-blog">
                        <div class="card">
                            <div class="card-media h-40">
                                <div class="card-media-overly"></div>
                                <img class="Image" src="https://images.unsplash.com/photo-1664230388413-5e90d32b8d68?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1469&q=80" alt="">
                            </div>
                            <div class="card-body">
                                <a href="Birth_Control.php" class="btn_4 Link">20 Questions</a>
                                <div class="blog-tittle">
                                    <h5 class="card-title card-data-title">Birth Control </h5>
                                </div>
                                <p class="Card-Description">There are many types, A health care professional can help you
                                    choose the right one for you.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="faq-col">
                    <div class="single-home-blog">
                        <div class="card">
                            <div class="card-media h-40">
                                <div class="card-media-overly"></div>
                                <img class="Image" src="https://images.unsplash.com/photo-1664230388413-5e90d32b8d68?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1469&q=80" alt="">
                            </div>
                            <div class="card-body">
                                <a href="Breastfeeding_Your_Baby.php" class="btn_4 Link">14 questions</a>
                                <div class="blog-tittle">
                                    <h5 class="card-title card-data-title">Breastfeeding Your Baby</h5>
                                </div>
                                <p class="Card-Description">recommended for the first 6 months of a baby’s life.
                                    Breastfeeding should continue up to the...
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="faq-col">
                    <div class="single-home-blog">
                        <div class="card">
                            <div class="card-media h-40">
                                <div class="card-media-overly"></div>
                                <img class="Image" src="https://images.unsplash.com/photo-1664230388413-5e90d32b8d68?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1469&q=80" alt="">
                            </div>
                            <div class="card-body">
                                <a href="Depression.php" class="btn_4 Link">13 Questions</a>
                                <div class="blog-tittle">
                                    <h5 class="card-title card-data-title">Depression</h5>
                                </div>
                                <p class="Card-Description">Depression changes your thoughts, feelings, behavior, and
                                    physical...
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="faq-col">
                    <div class="single-home-blog">
                        <div class="card">
                            <div class="card-media h-40">
                                <div class="card-media-overly"></div>
                                <img class="Image" src="https://images.unsplash.com/photo-1664230388413-5e90d32b8d68?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1469&q=80" alt="">
                            </div>
                            <div class="card-body">
                                <a href="Depression_During_Pregnancy.php" class="btn_4 Link">12 Questions</a>
                                <div class="blog-tittle">
                                    <h5 class="card-title card-data-title">Depression During Pregnancy</h5>
                                </div>
                                <p class="Card-Description">It is more than feeling sad or upset for a short time...
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="faq-col">
                    <div class="single-home-blog">
                        <div class="card">
                            <div class="card-media h-40">
                                <div class="card-media-overly"></div>
                                <img class="Image" src="https://images.unsplash.com/photo-1664230388413-5e90d32b8d68?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1469&q=80" alt="">
                            </div>
                            <div class="card-body">
                                <a href="Diabetes_and_Women.php" class="btn_4 Link">10 questions</a>
                                <div class="blog-tittle">
                                    <h5 class="card-title card-data-title">Diabetes and Women</h5>
                                </div>
                                <p class="Card-Description">Glucose is then carried to the body’s cells with the help of
                                    insulin
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="faq-col">
                    <div class="single-home-blog">
                        <div class="card">
                            <div class="card-media h-40">
                                <div class="card-media-overly"></div>
                                <img class="Image" src="https://images.unsplash.com/photo-1664230388413-5e90d32b8d68?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1469&q=80" alt="">
                            </div>
                            <div class="card-body">
                                <a href="Eating_Disorders.php" class="btn_4 Link">13 questions</a>
                                <div class="blog-tittle">
                                    <h5 class="card-title card-data-title">Eating Disorders</h5>
                                </div>
                                <p class="Card-Description"> person with an eating disorder can become so concerned with
                                    food
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="faq-col">
                    <div class="single-home-blog">
                        <div class="card">
                            <div class="card-media h-40">
                                <div class="card-media-overly"></div>
                                <img class="Image" src="https://images.unsplash.com/photo-1664230388413-5e90d32b8d68?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1469&q=80" alt="">
                            </div>
                            <div class="card-body">
                                <a href="Emergency_Contraception.php" class="btn_4 Link">13 questions</a>
                                <div class="blog-tittle">
                                    <h5 class="card-title card-data-title">Emergency Contraception</h5>
                                </div>
                                <p class="Card-Description">Common situations in which EC could be used...
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="faq-col">
                    <div class="single-home-blog">
                        <div class="card">
                            <div class="card-media h-40">
                                <div class="card-media-overly"></div>
                                <img class="Image" src="https://images.unsplash.com/photo-1664230388413-5e90d32b8d68?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1469&q=80" class="Image" alt="">
                            </div>
                            <div class="card-body">
                                <a href="Evaluating_Infertility.php" class="btn_4 Link">18 questions</a>
                                <div class="blog-tittle">
                                    <h5 class="card-title card-data-title">Evaluating Infertility</h5>
                                </div>
                                <p class="Card-Description">tests to try to find the reason why you and your partner have
                                    not gotten...
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="faq-col">
                    <div class="single-home-blog">
                        <div class="card">
                            <div class="card-media h-40">
                                <div class="card-media-overly"></div>
                                <img class="Image" src="https://images.unsplash.com/photo-1664230388413-5e90d32b8d68?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1469&q=80" alt="">
                            </div>
                            <div class="card-body">
                                <a href="Exercise_After_Pregnancy.php" class="btn_4 Link">13 questions</a>
                                <div class="blog-tittle">
                                    <h5 class="card-title card-data-title">Exercise After Pregnancy</h5>
                                </div>
                                <p class="Card-Description">
                                    you should get at least 150 minutes of moderate-intensity aerobic activity...
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="faq-col">
                    <div class="single-home-blog">
                        <div class="card">
                            <div class="card-media h-40">
                                <div class="card-media-overly"></div>
                                <img class="Image" src="https://images.unsplash.com/photo-1664230388413-5e90d32b8d68?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1469&q=80" alt="">
                            </div>
                            <div class="card-body">
                                <a href="Exercise_During_Pregnancy.php" class="btn_4 Link">13 questions</a>
                                <div class="blog-tittle">
                                    <h5 class="card-title card-data-title">Exercise During Pregnancy</h5>
                                </div>
                                <p class="Card-Description">
                                    Physical activity does not increase your risk of ...
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="faq-col">
                    <div class="single-home-blog">
                        <div class="card">
                            <div class="card-media h-40">
                                <div class="card-media-overly"></div>
                                <img class="Image" src="https://images.unsplash.com/photo-1664230388413-5e90d32b8d68?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1469&q=80" alt="">
                            </div>
                            <div class="card-body">
                                <a href="Fertility_Awareness_Based_Methods.php" class="btn_4 Link">15 questions</a>
                                <div class="blog-tittle">
                                    <h5 class="card-title card-data-title">Based Methods of Family Planning</h5>
                                </div>
                                <p class="Card-Description">if you are practicing fertility awareness as...</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="faq-col">
                    <div class="single-home-blog">
                        <div class="card">
                            <div class="card-media h-40">
                                <div class="card-media-overly"></div>
                                <img class="Image" src="https://images.unsplash.com/photo-1664230388413-5e90d32b8d68?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1469&q=80" alt="">
                            </div>
                            <div class="card-body">
                                <a href="Gestational_Diabetes.php" class="btn_4 Link">19 questions</a>
                                <div class="blog-tittle">
                                    <h5 class="card-title card-data-title">Gestational Diabetes</h5>
                                </div>
                                <p class="Card-Description">Some women develop diabetes for the first time during pregnancy
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="faq-col">
                    <div class="single-home-blog">
                        <div class="card">
                            <div class="card-media h-40">
                                <div class="card-media-overly"></div>
                                <img class="Image" src="https://images.unsplash.com/photo-1664230388413-5e90d32b8d68?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1469&q=80" alt="">
                            </div>
                            <div class="card-body">
                                <a href="Good_Health_Before_Pregnancy.php" class="btn_4 Link">32 questions</a>
                                <div class="blog-tittle">
                                    <h5 class="card-title card-data-title">Good Health Before Pregnancy</h5>
                                </div>
                                <p class="Card-Description">
                                    Identifying these things is important because the...
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="faq-col">
                    <div class="single-home-blog">
                        <div class="card">
                            <div class="card-media h-40">
                                <div class="card-media-overly"></div>
                                <img class="Image" src="https://images.unsplash.com/photo-1664230388413-5e90d32b8d68?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1469&q=80" alt="">
                            </div>
                            <div class="card-body">
                                <a href="Having_A_Baby.php" class="btn_4 Link">16 questions</a>
                                <div class="blog-tittle">
                                    <h5 class="card-title card-data-title">Having A Baby</h5>
                                </div>
                                <p class="Card-Description">The earlier you get prenatal care, the better your chances are
                                    for a healthy...</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="faq-col">
                    <div class="single-home-blog">
                        <div class="card">
                            <div class="card-media h-40">
                                <div class="card-media-overly"></div>
                                <img class="Image" src="https://images.unsplash.com/photo-1664230388413-5e90d32b8d68?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1469&q=80" alt="">
                            </div>
                            <div class="card-body">
                                <a href="Healthy_Eating.php" class="btn_4 Link">29 questions</a>
                                <div class="blog-tittle">
                                    <h5 class="card-title card-data-title">Healthy Eating</h5>
                                </div>
                                <p class="Card-Description">Not getting enough of these important nutrients can affect your
                                    health</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="faq-col">
                    <div class="single-home-blog">
                        <div class="card">
                            <div class="card-media h-40">
                                <div class="card-media-overly"></div>
                                <img class="Image" src="https://images.unsplash.com/photo-1664230388413-5e90d32b8d68?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1469&q=80" alt="">
                            </div>
                            <div class="card-body">
                                <a href="Healthy_Relationships.php" class="btn_4 Link">11 questions</a>
                                <div class="blog-tittle">
                                    <h5 class="card-title card-data-title">Healthy Relationships</h5>
                                </div>
                                <p class="Card-Description">healthy relationships do not have to include sex, especially...
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="faq-col">
                    <div class="single-home-blog">
                        <div class="card">
                            <div class="card-media h-40">
                                <div class="card-media-overly"></div>
                                <img class="Image" src="https://images.unsplash.com/photo-1664230388413-5e90d32b8d68?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1469&q=80" alt="">
                            </div>
                            <div class="card-body">
                                <a href="STIs.php" class="btn_4 Link">22 questions</a>
                                <div class="blog-tittle">
                                    <h5 class="card-title card-data-title">How to Prevent Sexually Transmitted Infections
                                    </h5>
                                </div>
                                <p class="Card-Description">Some STIs can be treated and cured, but others...</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <x-footer />
@stop

@section('scripts') @stop
