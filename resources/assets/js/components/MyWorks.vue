<template>
    <div class="ui vertical stripe segment">
        <top-triangle></top-triangle>
        <div class="ui container">
            <div class="ui three stackable link cards">
                <div class="card" v-for="work in works">
                    <div class="image">
                        <!-- <img :src="work.img"> -->
                        <img :src="fallbackImg" alt="img">
                    </div>
                    <div class="center aligned content">
                        <div class="header" v-text="work.title"></div>
                        <div class="meta">
                            <a>{{ work.created_at }}</a>
                        </div>
                        <div class="description" v-text="work.desc">
                        </div>
                    </div>
                    <div class="extra content">
                        <span class="card-bottom-menu-item">
                            <i class="thumbs up outline icon"></i>
                            999 likes
                        </span>
                        <span class="card-bottom-menu-item">
                            <i class="tags icon"></i>
                        </span>
                        <span class="right floated">
                            <i class="bars icon"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <bottom-triangle></bottom-triangle>
    </div>
</template>

<script>
    export default {
        props: {
            // works: Array
            fallbackImg: String
        },

        data() {
            return {
                works: []
            };
        },

        computed: {

        },

        methods:{

            foo(){

            }
        },

        filters: {

        },

        mounted() {
            console.log('my works mounted');
            this.works = [
                {
                    'img': '/images/background.jpg',
                    'title': 'title',
                    'desc': 'desc',
                    'created_at': '1234/56/78'
                },
                {
                    'img': '/images/background.jpg',
                    'title': 'title',
                    'desc': 'desc',
                    'created_at': '1234/56/78'
                },
                {
                    'img': '/images/background.jpg',
                    'title': 'title',
                    'desc': 'desc',
                    'created_at': '1234/56/78'
                },
                {
                    'img': '/images/background.jpg',
                    'title': 'title',
                    'desc': 'desc',
                    'created_at': '1234/56/78'
                }
            ]
        }
    }
</script>

<style lang="css">
    .card-bottom-menu-item{
        padding-right: 1em;
        color: rgba(0, 0, 0, .55);
    }
</style>
