@extends('layouts.main')

@section('content')
    <!-- our mission area start -->
    <section class="our-mission-area pt-120 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading mb-60 mt-75">
                        <h4 class="sub-title">FAQS</h4>
                        <h2 class="section-title">Frequently Asked Question</h2>
                    </div>
                    <div class="faq-widget">
                        <div class="accordion faqs" id="accordionFaq">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h5 class="mb-0 subtitle">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            WHAT IS NATIONAL HEALTH INSURANCE SCHEME (NHIS)?
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                    data-parent="#accordionFaq">
                                    <div class="card-body">
                                        <div class="content">
                                            <p>
                                                National Health Insurance Scheme (NHIS) is a corporate body established
                                                under Act 35 of 1999, the Federal Government of Nigeria to ensure access to
                                                health care by all Nigerians at an affordable cost.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingTwo">
                                    <h5 class="mb-0 subtitle">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            WHAT PLANS ARE AVAILABLE?
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                    data-parent="#accordionFaq">
                                    <div class="card-body">
                                        <div class="content">
                                            <p>The following plans are available:</p>
                                            <ul>
                                                <li>Individual Plan</li>
                                                <li>Couples Plan</li>
                                                <li>Family Plan</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingThree">
                                    <h5 class="mb-0 subtitle">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapseThree" aria-expanded="false"
                                            aria-controls="collapseThree">
                                            Is pre-authorization required for all services covered by my plan?
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                    data-parent="#accordionFaq">
                                    <div class="card-body">
                                        <div class="content">
                                            <p>No, It is only for some services that we pay the provider on a fee for
                                                service basis.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingFour">
                                    <h5 class="mb-0 subtitle">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                            What is a group/employer plan?
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                                    data-parent="#accordionFaq">
                                    <div class="card-body">
                                        <div class="content">
                                            <p>These are health plans available to you through your place of employment.
                                                Please contact your HR for further clarifications.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingFive">
                                    <h5 class="mb-0 subtitle">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                            What is a HMO Premium?
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseFive" class="collapse" aria-labelledby="headingFive"
                                    data-parent="#accordionFaq">
                                    <div class="card-body">
                                        <div class="content">
                                            <p>This is the amount paid annually in exchange for access to an agreed set of
                                                benefits on the health plan chosen.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingSix">
                                    <h5 class="mb-0 subtitle">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                            How do I enroll on the Princeton HMO Scheme?
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseSix" class="collapse" aria-labelledby="headingSix"
                                    data-parent="#accordionFaq">
                                    <div class="card-body">
                                        <div class="content">
                                            <p>The organization sends a list of staff to be enrolled, as well as choose
                                                their selected plan type(s) for these staff. Each staff would read through
                                                and complete the registration form and select one primary care provider.
                                                Staff would attach adequately labeled passport photograph for him/her self
                                                and dependants where applicable. Names of each member registered are written
                                                at the back of each passport photograph. </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingSeven">
                                    <h5 class="mb-0 subtitle">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapseSeven" aria-expanded="false"
                                            aria-controls="collapseSeven">
                                            What if my circumstance changes or I need to add other member of my family to my
                                            health insurance membership?
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven"
                                    data-parent="#accordionFaq">
                                    <div class="card-body">
                                        <div class="content">
                                            <p>You can apply via your company’s HR department to add your partner or your
                                                children (including newborn children) as dependants on your membership as
                                                indicated by the policy agreement. To do this you will need to complete an
                                                application to alter your registration form. Please contact your HR for
                                                details.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingEight">
                                    <h5 class="mb-0 subtitle">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapseEight" aria-expanded="false"
                                            aria-controls="collapseEight">
                                            Can I upgrade my plan whenever it's suitable for me?
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseEight" class="collapse" aria-labelledby="headingEight"
                                    data-parent="#accordionFaq">
                                    <div class="card-body">
                                        <div class="content">
                                            <p>You can only upgrade or change your plan at renewal. </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingNine">
                                    <h5 class="mb-0 subtitle">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapseNine" aria-expanded="false"
                                            aria-controls="collapseNine">
                                            How do I select a Health Care Provider?
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseNine" class="collapse" aria-labelledby="headingNine"
                                    data-parent="#accordionFaq">
                                    <div class="card-body">
                                        <div class="content">
                                            <p>Before joining our scheme, a list of over 370 Primary care providers
                                                (Hospitals) would be provided to you to select one provider from. This
                                                choice can be made based on proximity to place of work, or place of
                                                residence or any other personal choice where applicable. </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingTen">
                                    <h5 class="mb-0 subtitle">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                            What is pre-authorization?
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseTen" class="collapse" aria-labelledby="headingTen"
                                    data-parent="#accordionFaq">
                                    <div class="card-body">
                                        <div class="content">
                                            <p>Pre-authorization means that we make sure all aspects of your treatment are
                                                eligible under the terms of the scheme you have. The hospital is to ask for
                                                this authorization either by phoning our call center or sending an email.
                                                The process of obtaining this authorization should take less than 10
                                                minutes. </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingEleven">
                                    <h5 class="mb-0 subtitle">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapseEleven" aria-expanded="false"
                                            aria-controls="collapseEleven">
                                            Can I change my provider at any time I desire?
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseEleven" class="collapse" aria-labelledby="headingEleven"
                                    data-parent="#accordionFaq">
                                    <div class="card-body">
                                        <div class="content">
                                            <p>Yes. We would require you to fill out our change of hospital forms from you
                                                requesting the change. All requests that we receive before the 15th of the
                                                month would be effected by the 1st day of the subsequent month. </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingTweleve">
                                    <h5 class="mb-0 subtitle">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapseTwelve" aria-expanded="false"
                                            aria-controls="collapseTwelve">
                                            Can I reach Princeton HMO on holidays and weekends?
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseTwelve" class="collapse" aria-labelledby="headingTweleve"
                                    data-parent="#accordionFaq">
                                    <div class="card-body">
                                        <div class="content">
                                            <p>Yes. Our call centre numbers can be reached 24 hours a day, 7 days a week.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingThirteen">
                                    <h5 class="mb-0 subtitle">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapseThirteen" aria-expanded="false"
                                            aria-controls="collapseThirteen">
                                            Do I require any form of identification before obtaining care from the provider?
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseThirteen" class="collapse" aria-labelledby="headingThirteen"
                                    data-parent="#accordionFaq">
                                    <div class="card-body">
                                        <div class="content">
                                            <p>Yes. You would need to carry your Princeton Health identification card before
                                                obtaining care at the health care provider facility. </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingFourteen">
                                    <h5 class="mb-0 subtitle">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapseFourteen" aria-expanded="false"
                                            aria-controls="collapseFourteen">
                                            If I am a traveler, can I access care anywhere in the country apart from my
                                            chosen provider?
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseFourteen" class="collapse" aria-labelledby="headingFourteen"
                                    data-parent="#accordionFaq">
                                    <div class="card-body">
                                        <div class="content">
                                            <p>Yes. Call the Care Call Centre and they will pre-authorize you for access.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingFiveteen">
                                    <h5 class="mb-0 subtitle">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapseFiveteen" aria-expanded="false"
                                            aria-controls="collapseFiveteen">
                                            What are Princeton call center numbers and other contact details?
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseFiveteen" class="collapse" aria-labelledby="headingFiveteen"
                                    data-parent="#accordionFaq">
                                    <div class="card-body">
                                        <div class="content">
                                            <p>070 0400 4000. You can also send us an email on info@princetohmo.net</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- our mission area end -->
@endsection
