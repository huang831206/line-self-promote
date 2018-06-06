<template>

    <div id="skills" class="ui inverted vertical stripe segment">
        <h1 class="ui horizontal divider header">
            <i class="wrench icon"></i>
            My Skills
        </h1>
        <div class="ui five column center aligned stackable grid container">
            <skill v-for="(skill, index) in infoData.skills" :skill="skill" :key="index" :color="colors[index+1]"></skill>
        </div>
    </div>

</template>

<script>
    export default {

        props: {
            infoData : Object
        },

        data() {
            return {
                colors: ['red', 'orange', 'yellow', 'olive', 'green', 'teal', 'blue']
            };
        }
    }
</script>

<style lang="css">

</style>
