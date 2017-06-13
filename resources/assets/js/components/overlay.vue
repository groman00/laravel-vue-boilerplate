<style lang="scss">
    @import "../../sass/helpers/variables";
    @import "../../sass/helpers/mixins";

    .overlay {
        @include cover-parent(fixed);
        background: rgba(0, 0, 0, .9);
        z-index: 100;
        overflow-y: auto;
        transform: translate3d(0, 100%, 0);
        opacity: 0;
        transition: $transition-transform, $transition-fade;

        &.open {
            transform: translate3d(0, 0, 0);
            opacity: 1;
        }

        .overlay-content {
            padding: $spacer $gutter;
        }
    }
</style>
<template>
    <div class="overlay" v-bind:class="{ 'open': isOpen }">
        <btn text="close" :button="['light']" @click="close"></btn>
        <div class="overlay-content">
            <slot name="overlay-content"></slot>
        </div>
    </div>
</template>
<script>
    export default {
        props: ['open'],
        data() {
            return {
                isOpen: false
            };
        },
        watch: {
            open(bool) {
                this.isOpen = bool;
            }
        },
        methods: {
            close() {
                this.$emit('close');
            }
        }
    };
</script>
