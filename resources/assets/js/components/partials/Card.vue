<template>
    <div class="card">
        <!-- dimmable card image -->
        <div class="blurring dimmable image" v-if="project.link">
            <div class="ui dimmer">
                <div class="content">
                    <div class="center">
                        <a :href="project.link" class="ui inverted button" rel="noreferrer" target="_blank">visit</a>
                    </div>
                </div>
            </div>
            <img :src="project.img_src" alt="img">
        </div>
         <div v-else="project.link" class="image">
             <img :src="project.img_src" alt="img">
        </div>
        <!-- card content -->
        <div class="center aligned content">
            <div class="header" v-text="project.name"></div>
            <div class="meta">
                <a>{{ project.time }}</a>
            </div>
            <div class="description" v-text="project.desc">
            </div>
        </div>
        <!-- card footer -->
        <div class="extra content">
            <span class="card-bottom-menu-item" data-tooltip="like" data-position="top right">
                <i class="like icon"></i>
            </span>
            <span class="right floated" :data-tooltip="joinedStack" data-position="top right">
                <i class="bars icon"></i>
            </span>
            <span class="right floated card-bottom-menu-item">
                <i v-if="project.link" class="share square icon"></i>
                <i v-else="project.link" class="image icon"></i>
            </span>
        </div>
    </div>
</template>

<script>
    export default {

        props : {
            project : Object
        },

        computed : {
            joinedStack() {
                return this.project.stack.join(' + ');
            }
        },

        mounted() {
            this.$nextTick(  function() {
                $(this.$el).find('.dimmable.image').dimmer({
                    on: 'hover'
                });
            });
        }
    }
</script>

<style lang="css">
    .card-bottom-menu-item{
        padding-right: 1em;
        color: rgba(0, 0, 0, .55);
    }
</style>
