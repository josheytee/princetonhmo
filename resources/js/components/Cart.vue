<template>
    <section class="cart-area pt-120 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <form action="#">
                        <div class="table-content table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="cart-product-name">Health Plan</th>
                                        <th class="product-price">Unit Price</th>
                                        <th class="product-quantity">Quantity</th>
                                        <th class="product-subtotal">Total</th>
                                        <th class="product-remove">Remove</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for="item in items">
                                        <td class="product-name">
                                            <a :href="route('pages.' + item.name)">{{ item.name }}</a>
                                            <p>{{ item.type }}</p>
                                        </td>
                                        <td class="product-price"><span class="amount">₦{{ item.price }}</span></td>
                                        <td class="product-quantity">
                                            <div class="cart-plus-minus">
                                                <input type="number" v-model="quantity" value="1" />
                                            </div>
                                        </td>
                                        <td class="product-subtotal"><span class="amount">₦{{ item.price * quantity
                                        }}</span></td>
                                        <td class="product-remove"><a href="#"><i class="fa fa-times"></i></a></td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>

                        <div class="row">
                            <div class="col-md-5 ml-auto">
                                <div class="cart-page-total">
                                    <h2>Cart totals</h2>
                                    <ul class="mb-20">
                                        <!-- <li>Subtotal <span>$250.00</span></li> -->
                                        <li>Total <span>₦{{ getTotaal }}.00</span></li>
                                    </ul>
                                    <a class="site-btn red" :href="route('pages.checkout')">
                                        Proceed to checkout
                                    </a>
                                    <!-- <a class="site-btn red" href="#" @click.prevent="makePayment()">
                                        Proceed to checkout
                                    </a> -->
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
export default {
    props: ['items'],
    data() {
        return {
            //
            quantity: 1,
        }
    },
    computed: {
        //
        getTotaal() {
            return this.items.reduce((total, item) => {
                return total + item.price * this.quantity
            }, 0)
        }
    },
    methods: {
        makePayment() {
            FlutterwaveCheckout({
                public_key: "FLWPUBK_TEST-da8a7db5ca9da809b2d4298da06aa5ba-X",
                tx_ref: "titanic-48981487343MDI0NzMx",
                amount: this.getTotaal,
                currency: "NGN",
                payment_options: "card, banktransfer, ussd",
                redirect_url: "https://flutterwave-blog-test.netlify.app/",
                meta: {
                    consumer_id: 23,
                    consumer_mac: "92a3-912ba-1192a",
                },
                customer: {
                    email: "rose@unsinkableship.com",
                    phone_number: "08102909304",
                    name: "Rose DeWitt Bukater",
                },
                customizations: {
                    title: "Princetonhmo",
                    description: "Payment for an HMO ",
                    logo: "https://princetonhmo.net/wp-content/uploads/2019/08/logo_princeon.png",
                },
            });
        },
    },
    mounted() {
        console.log('Component mounted.')
    }
}
</script>
