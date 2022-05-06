@extends('layouts.website')
@section('head')
<style>
    label {
        color: white;
    }

    h4 {
        color: white;
    }
</style>
@endsection
@section('content')
<section class="uni-banner">
    <div class="container">
        <div class="uni-banner-text-area mt-4">
            <h1>Effect of Bullying on Mental Health</h1>
        </div>
    </div>
</section>
<section class="details-text-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="blog-details-text-area">
                    <img class="details-main-img" src="{{asset('assets/website/assets/images/article/mental.JPEG')}}"
                        style="height:368px" alt="image">
                    <div class="bdt-text">

                        <h3 class="details-page-title">Effect of Bullying on Mental Health</h3>
                        <p>Bullying occurs when one youngster has a physical or social edge over another and uses that
                            advantage to bully the other.
                            Bullying may have a reputation for being a schoolyard issue, but its mental health
                            consequences extend far beyond that. Bullied children are more likely to experience social
                            and emotional issues in the short and long term, even as adults.
                        </p>

                        <h4>Short-Term Consequenses</h4>
                        <p>Bullying can have the following consequences in the near term:
                        </p>
                        <div class="support-list">
                            <ul>
                                <li><i class="fas fa-check"></i>Anxiety \Depression
                                </li>
                                <li><i class="fas fa-check"></i>Low self-confidence
                                </li>
                                <li><i class="fas fa-check"></i>Sleeping difficulties
                                </li>
                                <li><i class="fas fa-check"></i>Suicidal ideation or self-harm
                                </li>
                                <p>These events may appear to fade with time, but it does not mean the child has "moved
                                    on." Children who are bullied as children are more likely to develop mental health
                                    problems as adults, according to research.
                                </p>
                                <h4>Long-Term Consequenses
                                </h4>
                                <p>Bullying's consequences do not fade as a youngster grows older. Young adults who were
                                    bullied as children have a greater risk of mental health issues, according to
                                    research.
                                </p>
                                <li><i class="fas fa-check"></i> Anxiety in general</li>
                                <li><i class="fas fa-check"></i> Anxiety disorder</li>
                                <li><i class="fas fa-check"></i> ‌Agoraphobia
                                </li>
                                <li><i class="fas fa-check"></i> ‌Depression</li>
                                <li><i class="fas fa-check"></i> ‌Loneliness</li>
                                <li><i class="fas fa-check"></i> Avoidance of school</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection