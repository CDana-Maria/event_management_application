import Vue from "vue";
import Alert from "./components/Alert.vue";
import AddToCartButton from "./components/AddToCartButton.vue";

require('./bootstrap');

Vue.component('alert', Alert);
Vue.component('add-to-cart-button', AddToCartButton);

const app = new Vue({
    el: '#app',
    data() {
        return {
            cart: []
        }
    }
    });