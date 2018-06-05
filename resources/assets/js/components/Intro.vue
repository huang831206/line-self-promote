<template>
    <div id="about" class="ui vertical stripe segment">

        <top-triangle></top-triangle>

        <h1 class="ui center aligned icon header">
            <i class="circular user icon"></i>
            About Me
        </h1>

        <div class="ui middle aligned stackable grid container">

            <div class="row">

            </div>

            <div class="row">

                <div class="six wide right floated column">
                    <img :src="imgSrc" class="ui large bordered rounded image" alt="me">
                </div>
                <div class="eight wide column">
                    <h2 class="ui header">We Help Single Boys and Girls</h2>
                    <p>Find someone to talk to. If you're lucky enough, maybe you will have a nice dage!</p>
                    <h2 class="ui header">We Make Bananas That Can Dance</h2>
                    <p>Yes that's right, you thought it was the stuff of dreams, but even bananas can be bioengineered.</p>
                </div>

            </div>
            <div class="row">
                <div class="center aligned column">
                    <a class="ui huge button">Check Them Out</a>
                </div>
            </div>
        </div>
        <bottom-triangle></bottom-triangle>
    </div>
</template>

<script>
    export default {
        props: {
            imgSrc: String
        },

        data() {
            return {};
        },

        computed: {

        },

        methods:{
            foo(){

            }
        },

        filters: {

        },

        created() {

        },

        mounted() {
            console.log('intro mounted');
            // window.EventBus.listen()

            Information.reload()
                .then((data) => {
                    window.EventBus.trigger('info fetched', data)
                })
                .catch((error) => {
                    console.log(error);
                })

        }
    }
</script>

<style lang="scss">
    svg {
        height: 100%;
        width: 100%;
    }

    .svg-top-container{
        fill: white;
        top: 0px;
        height: 100px;
        width: 100%;
        position: absolute;
        z-index: 9999;
    }

    @media screen and (-webkit-min-device-pixel-ratio: 0){
        .svg-top-container {
            margin-top: -100px !important;
            margin-bottom: 0px !important;
            height: 100px;
            width: 100%;
            position: absolute;
            z-index: 4;
        }
    }
</style>
