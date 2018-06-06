<template>

    <div class="column">
        <div :class="['c100', pct, 'dark', 'medium', 'center', c]">
            <span v-text="skill.pct"></span>
            <div class="slice"><div class="bar"></div><div class="fill"></div></div>
        </div>

        <h1 class="ui header name-lbl" v-text="skill.name"></h1>
        <p>
        </p>
        <!-- <div class="ui basic button">View details »</div> -->
    </div>


</template>

<script>
    export default {
        props : {
            skill : Object,
            color : String
        },

        computed: {
            c() {
                // computed color class
                return this.color;
            },

            pct() {
                // computed percentage class
                return 'p' + this.skill.pct;
            }
        }
    }
</script>

<style lang="css">
    pct-circle{
        width:30%;
    }
</style>
