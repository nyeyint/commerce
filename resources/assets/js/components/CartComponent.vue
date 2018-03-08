<template>
    <li class="cart">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-shopping-cart"></i>&nbsp;&nbsp;Cart <div class="badge badge-pill bg-blue">9</div></a>
        <div class="cart-list hidden-xs">
            <div class="bg-secondary pad-1em">YOUR SHOPPING CART <span>(2 items)</span></div>
            <div class="pad-1em" v-if="noItems">
                <div class="cart-item">
                    <div class="cart-item-image">
                        <img class="img-responsive" src="assets/images/product/product_applesc_v.jpg">
                    </div>
                    <div class="product-info pad-0">
                        <h5>Applesc&reg;</h5>
                        <div class="color-80 pad-t-1em"><del>Rp1.473.000</del></div>
                        <div class="pad-b-1em"><span class="color-blue">Rp943.000</span>&nbsp;<span class="badge badge-danger">20% OFF</span></div>
                        <button class="btn btn-danger border-none fs-10"><i class="fa fa-close"></i></button>
                    </div>
                </div>
                <div class="cart-item">
                    <div class="cart-item-image">
                        <img class="img-responsive" src="assets/images/product/product_applesc_v.jpg">
                    </div>
                    <div class="product-info pad-0">
                        <h5>Applesc&reg;</h5>
                        <div class="color-80 pad-t-1em"><del>Rp1.473.000</del></div>
                        <div class="pad-b-1em"><span class="color-blue">Rp943.000</span>&nbsp;<span class="badge badge-danger">20% OFF</span></div>
                        <button class="btn btn-danger border-none fs-10"><i class="fa fa-close"></i></button>
                    </div>
                </div>
                <div class="border-1px-ca width-100"></div>
                <div class="pad-t-1em pad-b-2em">
                    <span class="color-80 display-IB float-left">Order Total</span><br>
                    <span class="color-blue fs-16 float-left"><b>Rp943.000</b></span>
                    <button class="btn btn-danger fs-12 float-right border-none" style="margin-top: -1em;">Checkout</button>
                </div>
            </div>
        </div>
    </li>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }

        computed: {
            
            noItems() {
                return false;
            }

        }
    }
</script>
