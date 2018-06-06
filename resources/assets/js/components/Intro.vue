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

                    <div v-for="item in infoData.about" class="item">
                        <h2 class="ui header">
                            <i class="tiny caret right icon"></i>{{item.title}}
                        </h2>
                        <p v-text="item.content"></p>
                        <div class="ui hidden divider"></div>
                    </div>

                </div>
            </div>
            <!-- <div class="row">
                <div class="center aligned column">
                    <a class="ui huge button">More Details</a>
                </div>
            </div> -->
        </div>
        <bottom-triangle></bottom-triangle>
    </div>
</template>

<script>
    export default {
        props: {
            imgSrc : String,
            infoData : Object
        }
    }
</script>

<style lang="scss">

</style>
