<template>
    <section class="cart-area pt-120 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <form :action="route('pages.collector')" method="post">
                        <input type="hidden" name="_token" :value="csrf">
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
                                    <tr v-for="item, key in items">
                                        <td class="product-name">
                                            <input type="hidden" :name="'items[' + key + '][name]'" :value="item.name">
                                            <input type="hidden" :name="'items[' + key + '][type]'" :value="item.type">
                                            <a :href="route('pages.' + item.name)">{{ item.name }}</a>
                                            <p>{{ item.type }}</p>
                                        </td>
                                        <td class="product-price"><span class="amount">₦{{ item.price }}</span></td>
                                        <td class="product-quantity">
                                            <div class="cart-plus-minus">
                                                <input type="number" :name="'items[' + key + '][quantity]'"
                                                    v-model="quantity" />
                                            </div>
                                        </td>
                                        <td class="product-subtotal">
                                            <input type="hidden" :name="'items[' + key + '][subtotal]'"
                                                :value="item.price * quantity">
                                            <span class="amount">₦{{ item.price * quantity }}</span>
                                        </td>
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
                                        <li>
                                            Total <span>₦{{ getTotal }}.00</span>
                                            <input type="hidden" name="total" :value="getTotal">
                                        </li>
                                    </ul>
                                    <button class="site-btn red">
                                        Proceed to checkout
                                    </button>
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
            csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
            quantity: 1,
        }
    },
    computed: {
        //
        getTotal() {
            return this.items.reduce((total, item) => {
                return total + item.price * this.quantity
            }, 0)
        }
    }
}
</script>
