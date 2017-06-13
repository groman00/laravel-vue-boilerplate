<style lang="scss">
    @import "../../sass/helpers/variables";
    $item-size: 40px;
    .app-bar {
        display: flex;
        flex-flow: row nowrap;
        align-items: stretch;
        height: $app-bar-height;
        line-height: $app-bar-height;
        padding-left: $gutter-small;
        padding-right: $gutter-small;
    }

    .app-bar-item-left,
    .app-bar-item-right {
        flex-shrink: 1;
        height: $item-size;
        width: $item-size;
        line-height: $item-size;
        margin-top: ($app-bar-height - $item-size) / 2;

        > a {
            display: block;
            height: 100%;
            width: 100%;
            cursor: pointer;
        }

        .icon {
            padding: 8px;
        }
    }

    .app-bar-item-left {}

    .app-bar-title {
        flex-grow: 1;
    }

    .app-bar-item-right {}

    /*
    .app-bar-theme-dark {
        background-color: $gray-dark;
        color: $white;
    }
    */

    .app-bar-theme-transparent {

    }
</style>
<template>
    <div class="app-bar" :class="'bg-' + theme">
        <div class="app-bar-item-left">
            <a v-if="itemLeft === 'back'" @click.prevent="backButtonClicked">
                <icon name="arrow-left"></icon>
            </a>
            <a v-if="itemLeft === 'cancel'" @click.prevent="cancelButtonClicked">cancel</a>
        </div>
        <div class="app-bar-title text-uppercase text-center text-italic">{{ title }}</div>
        <div class="app-bar-item-right"></div>
    </div>
</template>
<script>
    export default {
        props: {
            title: {
                type: String,
                default: '',
                required: false
            },
            theme: {
                type: String,
                default: 'dark',
                required: false
            },
            itemLeft: {
                type: String,
                default: '',
                required: false
            }
        },
        methods: {
            backButtonClicked() {
                this.$emit('back');
            },
            cancelButtonClicked() {
                this.$emit('cancel');
            }
        }
    };
</script>
