<template>
    <div class="svg-top-container">
        <svg xmlns="http://www.w3.org/2000/svg" width="0" version="1.1" viewBox="0 0 100 100" preserveAspectRatio="none">
            <path d="M0 100 L100 100 L100 2 L0 100 Z" stroke-width="0"></path>
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
