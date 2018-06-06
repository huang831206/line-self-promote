<template>
    <div id="myworks" class="ui vertical stripe segment">
        <top-triangle></top-triangle>

        <h1 class="ui center aligned icon header" style="margin-bottom: 2em">
            <i class="circular flag outline icon"></i>
            我的作品
        </h1>

        <div class="ui container">
            <div class="ui three stackable link special cards">
                <card v-for="(project, index) in infoData.projects" :project="project" :key="index"></card>
            </div>
        </div>
        <bottom-triangle></bottom-triangle>
    </div>
</template>

<script>
    export default {
        props: {
            fallbackImg: String,
            infoData : Object
        }
    }
</script>

<style lang="css">
</style>
