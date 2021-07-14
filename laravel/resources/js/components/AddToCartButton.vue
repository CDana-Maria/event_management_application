<template>
    <button type="button" class="btn btn-primary" @click="addToCart">
      Add To Cart
  </button>
</template>

<script>
export default {
    name: "AddToCartButton",

    methods: {
        addToCart() {
            alert ('addToCart')
        }
    }
    
}
</script>

<style scoped>

</style>