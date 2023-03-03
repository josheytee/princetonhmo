<template>
    <section class="pricing-area pt-120 pb-120 bg-2">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 text-center">
                    <div class="section-heading mb-70">
                        <h4 class="sub-title">pricing</h4>
                        <h2 class="section-title">Price & Plans<span>.</span></h2>
                    </div>
                </div>
            </div>
            <div class="row mt-none-30 align-items-center no-gutters">
                <div class="col-xl-4 col-lg-6 col-md-6 mt-30" @mouseover="hover('blue')">
                    <div class="single-pricing-box " ref="blue">
                        <div class="pricing-head">
                            <h4 class="title">Blue</h4>
                            <h2 class="price"><span>₦</span>30,000</h2>
                            <h6 class="duration">Yearly</h6>
                        </div>
                        <div class="pricing-list">
                            <ul>
                                <li>CONSULTATION<i class="fal fa-check"></i></li>
                                <li>PSYSIOTHERAPY SERVICES<i class="fal fa-check"></i></li>
                                <li>OBSTETRICS AND GYNAECOLOGICAL SERVICES<i class="fal fa-check"></i></li>
                                <li>NEONATAL/PEDIATRIC SERVICES<i class="fal fa-check"></i></li>
                                <li>ACCIDENTS AND EMERGENCIES<i class="fal fa-check"></i></li>
                                <li>DENTAL SERVICES<i class="fal fa-check"></i></li>
                                <li>OPHTHALMOLOGICAL SERVICES<i class="fal fa-check"></i></li>
                                <li>OTOLARYNGOLOGICAL (ENT) SERVICES<i class="fal fa-check"></i></li>
                                <li>SURGICAL SERVICES<i class="fal fa-check"></i></li>
                                <li>ADMISSION SERVICES<i class="fal fa-check"></i></li>
                                <li>OTHER SERVICES/BENEFITS<i class="fal fa-check"></i></li>
                            </ul>
                        </div>
                        <a :href="route('pages.cart', { 'plan': 'individual', 'type': 'blue' })"
                            class="site-btn transparent">Buy Now</a>
                        <div class="shape">
                            <img src="assets/images/icons/pricing-icon.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 mt-30" @mouseover="hover('royal')">
                    <div class="single-pricing-box bg_img active" ref="royal" data-overlay="94">
                        <div class="pricing-head">
                            <h4 class="title">Royal</h4>
                            <h2 class="price"><span>₦</span>52,000</h2>
                            <h6 class="duration">Monthly</h6>
                        </div>
                        <div class="pricing-list">
                            <ul>
                                <li>CONSULTATION<i class="fal fa-check"></i></li>
                                <li>PSYSIOTHERAPY SERVICES<i class="fal fa-check"></i></li>
                                <li>OBSTETRICS AND GYNAECOLOGICAL SERVICES<i class="fal fa-check"></i></li>
                                <li>NEONATAL/PEDIATRIC SERVICES<i class="fal fa-check"></i></li>
                                <li>ACCIDENTS AND EMERGENCIES<i class="fal fa-check"></i></li>
                                <li>DENTAL SERVICES<i class="fal fa-check"></i></li>
                                <li>OPHTHALMOLOGICAL SERVICES<i class="fal fa-check"></i></li>
                                <li>OTOLARYNGOLOGICAL (ENT) SERVICES<i class="fal fa-check"></i></li>
                                <li>SURGICAL SERVICES<i class="fal fa-check"></i></li>
                                <li>ADMISSION SERVICES<i class="fal fa-check"></i></li>
                                <li>OTHER SERVICES/BENEFITS<i class="fal fa-check"></i></li>
                            </ul>
                        </div>
                        <a :href="route('pages.cart', { 'plan': 'individual', 'type': 'royal' })"
                            class="site-btn transparent">Buy Now</a>
                        <div class="shape">
                            <img src="assets/images/icons/pricing-icon.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 mt-30" @mouseover="hover('platinum')">
                    <div class="single-pricing-box" ref="platinum">
                        <div class="pricing-head">
                            <h4 class="title">Platinum</h4>
                            <h2 class="price"><span>₦</span>90,000</h2>
                            <h6 class="duration">Monthly</h6>
                        </div>
                        <div class="pricing-list">
                            <ul>
                                <li>CONSULTATION<i class="fal fa-check"></i></li>
                                <li>PSYSIOTHERAPY SERVICES<i class="fal fa-check"></i></li>
                                <li>OBSTETRICS AND GYNAECOLOGICAL SERVICES<i class="fal fa-check"></i></li>
                                <li>NEONATAL/PEDIATRIC SERVICES<i class="fal fa-check"></i></li>
                                <li>ACCIDENTS AND EMERGENCIES<i class="fal fa-check"></i></li>
                                <li>DENTAL SERVICES<i class="fal fa-check"></i></li>
                                <li>OPHTHALMOLOGICAL SERVICES<i class="fal fa-check"></i></li>
                                <li>OTOLARYNGOLOGICAL (ENT) SERVICES<i class="fal fa-check"></i></li>
                                <li>SURGICAL SERVICES<i class="fal fa-check"></i></li>
                                <li>ADMISSION SERVICES<i class="fal fa-check"></i></li>
                                <li>OTHER SERVICES/BENEFITS<i class="fal fa-check"></i></li>
                            </ul>
                        </div>
                        <a :href="route('pages.cart', { 'plan': 'individual', 'type': 'platinum' })"
                            class="site-btn transparent">Buy Now</a>
                        <div class="shape">
                            <img src="assets/images/icons/pricing-icon.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>
<script>

export default {
    methods: {
        hover(e) {
            if (e == 'blue') {
                this.$refs.blue.classList.add('active')
                this.$refs.blue.setAttribute('data-overlay', '94')
                // this.$refs.blue.setAttribute('data-background', 'assets/images/bg/pricing-bg-01.jpeg')
                this.$refs.royal.classList.remove('active')
                this.$refs.royal.removeAttribute('data-overlay')
                // this.$refs.royal.removeAttribute('data-background')
                this.$refs.platinum.removeAttribute('data-overlay')
                // this.$refs.platinum.removeAttribute('data-background')

                this.$refs.platinum.classList.remove('active')
            } else if (e == 'royal') {
                this.$refs.blue.classList.remove('active')
                this.$refs.royal.classList.add('active')
                this.$refs.platinum.classList.remove('active')
                this.$refs.royal.setAttribute('data-overlay', '94')
                // this.$refs.royal.setAttribute('data-background', 'assets/images/bg/pricing-bg-01.jpeg')
                this.$refs.blue.removeAttribute('data-overlay')
                // this.$refs.blue.removeAttribute('data-background')
                this.$refs.platinum.removeAttribute('data-overlay')
                // this.$refs.platinum.removeAttribute('data-background')
            } else if (e == 'platinum') {
                this.$refs.blue.classList.remove('active')
                this.$refs.royal.classList.remove('active')
                this.$refs.platinum.classList.add('active')
                this.$refs.platinum.setAttribute('data-overlay', '94')
                // this.$refs.platinum.setAttribute('data-background', 'assets/images/bg/pricing-bg-01.jpeg')
                this.$refs.blue.removeAttribute('data-overlay')
                // this.$refs.blue.removeAttribute('data-background')
                this.$refs.royal.removeAttribute('data-overlay')
                // this.$refs.royal.removeAttribute('data-background')
            }
        }
    }
}
</script>
