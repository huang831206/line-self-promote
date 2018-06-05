<template>
    <div class="svg-bottom-container">
        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 100 100" preserveAspectRatio="none">
            <path d="M0 0 L100 0 L100 2 L0 100 Z"></path>
        </svg>
    </div>
</template>

<script>
export default {
}
</script>

<style lang="scss">
    svg {
        height: 100%;
        width: 100%;
    }

    .svg-bottom-container{
        fill: white;
        height: 100px;
        width: 100%;
        position: absolute;
        z-index: 9999;
        margin-top: 8em;
    }

    @media screen and (-webkit-min-device-pixel-ratio: 0){
        .svg-bottom-container {
            margin-top: 8em !important;
            margin-bottom: 0px !important;
            height: 100px;
            width: 100%;
            position: absolute;
            z-index: 9999;
        }
    }
</style>
