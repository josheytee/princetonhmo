<template>
    <section>
        <!-- coupon-area start -->
        <section class="coupon-area pt-100 pb-30">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="coupon-accordion">
                            <!-- ACCORDION START -->
                            <h3>Returning customer? <span id="showlogin">Click here to login</span></h3>
                            <div id="checkout-login" class="coupon-content">
                                <div class="coupon-info">
                                    <p class="coupon-text">Quisque gravida turpis sit amet nulla posuere lacinia. Cras sed
                                        est
                                        sit amet ipsum luctus.</p>
                                    <form action="#">
                                        <p class="form-row-first">
                                            <label>Username or email <span class="required">*</span></label>
                                            <input type="text" />
                                        </p>
                                        <p class="form-row-last">
                                            <label>Password <span class="required">*</span></label>
                                            <input type="text" />
                                        </p>
                                        <p class="form-row">
                                            <button class="site-btn" type="submit">Login</button>
                                            <label>
                                                <input type="checkbox" />
                                                Remember me
                                            </label>
                                        </p>
                                        <p class="lost-password">
                                            <a href="#">Lost your password?</a>
                                        </p>
                                    </form>
                                </div>
                            </div>
                            <!-- ACCORDION END -->
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="coupon-accordion">
                            <!-- ACCORDION START -->
                            <h3>Have a coupon? <span id="showcoupon">Click here to enter your code</span></h3>
                            <div id="checkout_coupon" class="coupon-checkout-content">
                                <div class="coupon-info">
                                    <form action="#">
                                        <p class="checkout-coupon">
                                            <input type="text" placeholder="Coupon Code" />
                                            <button class="site-btn" type="submit">Apply Coupon</button>
                                        </p>
                                    </form>
                                </div>
                            </div>
                            <!-- ACCORDION END -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- coupon-area end -->
        <!-- checkout-area start -->
        <section class="checkout-area pb-70">
            <form @submit.prevent="makePayment">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="checkbox-form">
                                <h3>Billing Details</h3>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="country-select">
                                            <label>Country <span class="required">*</span></label>
                                            <select v-model="user.country" required>
                                                <option value="volvo">Nigeria</option>
                                                <option value="saab">Algeria</option>
                                                <option value="mercedes">Afghanistan</option>
                                                <option value="audi">Ghana</option>
                                                <option value="audi2">Albania</option>
                                                <option value="audi3">Bahrain</option>
                                                <option value="audi4">Colombia</option>
                                                <option value="audi5">Dominican Republic</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="checkout-form-list">
                                            <label>First Name <span class="required">*</span></label>
                                            <input type="text" v-model="user.first_name" placeholder="" required />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="checkout-form-list">
                                            <label>Last Name <span class="required">*</span></label>
                                            <input type="text" v-model="user.last_name" placeholder="" required />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="checkout-form-list">
                                            <label>Email Address <span class="required">*</span></label>
                                            <input type="email" v-model="user.email" placeholder="" required />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="checkout-form-list">
                                            <label>Phone <span class="required">*</span></label>
                                            <input type="tel" v-model="user.phone" placeholder="" required />
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="checkout-form-list">
                                            <label>Company Name</label>
                                            <input type="text" v-model="user.company" placeholder="" />
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="checkout-form-list">
                                            <label>Address <span class="required">*</span></label>
                                            <input type="text" v-model="user.address" placeholder="Street address"
                                                required />
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="checkout-form-list">
                                            <label>Town / City <span class="required">*</span></label>
                                            <input type="text" v-model="user.city" placeholder="Town / City" required />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="checkout-form-list">
                                            <label>State / County <span class="required">*</span></label>
                                            <input type="text" v-model="user.state" placeholder="" required />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="checkout-form-list">
                                            <label>Postcode / Zip <span class="required">*</span></label>
                                            <input type="text" v-model="user.zip" placeholder="Postcode / Zip" required />
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="checkout-form-list create-acc">
                                            <label>
                                                <input id="cbox" v-model="create_account" type="checkbox" />
                                                Create an account?
                                            </label>
                                        </div>
                                        <transition name="main-nav" @enter="transitionStep1" @after-enter="transitionStep2"
                                            @before-leave="transitionStep3" @after-leave="transitionStep4">
                                            <div id="cbox_info" class=" main-nav checkout-form-list"
                                                v-show="create_account">
                                                <p>Create an account by entering the information below. If you are a
                                                    returning
                                                    customer please login at the top of the page.</p>
                                                <label>Account password <span class="required">*</span></label>
                                                <input type="password" v-model="user.password" placeholder="" />
                                            </div>
                                        </transition>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="your-order mb-30 ">
                                <h3>Your order</h3>
                                <div class="your-order-table table-responsive">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th class="product-name">Product</th>
                                                <th class="product-total">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="cart_item" v-for="item in cart.items">
                                                <td class="product-name">
                                                    {{ item.name }}
                                                    ({{ item.type }})
                                                    <strong class="product-quantity">
                                                        * {{ item.quantity }}
                                                    </strong>
                                                </td>
                                                <td class="product-total">
                                                    <span class="amount">₦ {{ item.subtotal }}</span>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <tfoot>

                                            <tr class="order-total">
                                                <th>Order Total</th>
                                                <td><strong><span class="amount">₦{{
                                                    cart.total }}.00</span></strong>
                                                </td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>

                                <div class="payment-method">
                                    <div class="accordion" id="accordionExample">
                                        <div class="card">
                                            <div class="card-header" id="headingOne">
                                                <h5 class="mb-0">
                                                    <button class="btn-link" type="button" data-toggle="collapse"
                                                        data-target="#collapseOne" aria-expanded="true"
                                                        aria-controls="collapseOne">
                                                        Direct Bank Transfer
                                                    </button>
                                                </h5>
                                            </div>

                                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                                data-parent="#accordionExample">
                                                <div class="card-body">
                                                    Make your payment directly into our bank account. Please use your Order
                                                    ID
                                                    as the payment
                                                    reference. Your order won’t be
                                                    shipped until the funds have cleared in our account.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="headingThree">
                                                <h5 class="mb-0">
                                                    <button class="btn-link collapsed" type="button" data-toggle="collapse"
                                                        data-target="#collapseThree" aria-expanded="false"
                                                        aria-controls="collapseThree">
                                                        Pay with Flutterwave
                                                    </button>
                                                </h5>
                                            </div>
                                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                                data-parent="#accordionExample">
                                                <div class="card-body">
                                                    Seamless payment with Card, Online Banking, Transfer, Mobile Money, USSD
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="order-button-payment mt-20">
                                        <button type="submit" class="site-btn">Place order</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </section>
        <!-- checkout-area end -->
    </section>
</template>

<script>
export default {
    props: ['cart'],
    data() {
        return {
            user: {
                first_name: '',
                last_name: '',
                company: '',
                email: '',
                password: '',
                phone: '',
                address: '',
                city: '',
                state: '',
                zip: '',
                country: '',
            },
            create_account: false,
            paymentMethod: 'bank',
        }
    },
    methods: {
        makePayment() {
            FlutterwaveCheckout({
                public_key: "FLWPUBK_TEST-da8a7db5ca9da809b2d4298da06aa5ba-X",
                tx_ref: "titanic-48981487343MDI0NzMx" + Math.floor(Math.random() * 1000000000),
                amount: this.cart.total,
                currency: "NGN",
                payment_options: "card, banktransfer, ussd",
                // redirect_url: "https://flutterwave-blog-test.netlify.app/",
                meta: {
                    consumer_id: 23,
                    consumer_mac: "92a3-912ba-1192a",
                },
                customer: {
                    email: this.user.email,
                    phone_number: this.user.phone,
                    name: this.user.first_name + " " + this.user.last_name,
                },
                customizations: {
                    title: "Princetonhmo",
                    description: "Payment for an HMO ",
                    logo: "https://princetonhmo.net/wp-content/uploads/2019/08/logo_princeon.png",
                },
                callback: function (data) {
                    // console.log(data, "Payment for an HMO callback");
                    axios.post(route('payment.flw.callback'), data)
                        .then(function (response) {

                            currentObj.output = response.data;
                        })
                        .catch(function (error) {
                            currentObj.output = error;
                        });
                },
            });
        },
        transitionStep1(el) {
            // set the block height at the moment of its appearance
            el.style.height = el.scrollHeight + 'px'
        },

        transitionStep2(el) {
            // remove inline styles from the block after animation of its appearance
            el.style.height = ''
        },

        transitionStep3(el) {
            // set the height of the block at the beginning of its disappearance animation
            el.style.height = el.scrollHeight + 'px'
        },

        transitionStep4(el) {
            // remove inline styles from the block after the animation of its disappearance
            el.style.height = ''
        },
    }
}
</script>
<style>
.main-nav {
    overflow: hidden;
    -webkit-transition: height 0.3s ease;
    transition: height 0.3s ease;
}

.main-nav-enter {
    height: 0;
}

.main-nav-leave-to {
    height: 0 !important;
}
</style>
