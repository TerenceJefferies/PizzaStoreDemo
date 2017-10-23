<template>
    <div class="pizza-slider">
        <div class="pizza-slider__pizza"> 
            <div class="pizza__name">
                {{ name }}
            </div>
            <div class="pizza__price">
                {{ price }}
            </div>
        </div>
    </div>
</template>

<script>
    var Pizza = require('./../pizza/Pizza.js');
    
    export default {
        mounted() {
            console.log('Started');
            // var pizzas = Pizza.getAll();
            // console.log(pizzas);
        }
    }
</script>
