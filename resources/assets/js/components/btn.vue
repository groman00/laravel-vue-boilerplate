<style lang="scss">
    @import "../../sass/helpers/variables";

    .btn {
        display: inline-block;
        font-weight: $font-weight-medium;
        text-align: center;
        white-space: nowrap;
        vertical-align: middle;
        user-select: none;
        border: none;
        border-radius: $border-radius-lg;
        padding: .5rem 1rem;
        line-height: 1.25;
        background-color: transparent;
        transition: $transition-base;
        cursor: pointer;
        -webkit-tap-highlight-color: rgba(255, 255, 255, 0);

        &,
        &:visited {
            color: $white;
        }

        &:hover,
        &:focus {
            text-decoration: none;
            background-color: $gray-dark;
        }

        &:focus,
        &.focus {
            outline: 0;
        }

        &.disabled,
        &:disabled {
            opacity: .65;
        }

        &:active,
        &.active {
            background-image: none;
        }
    }

    .btn-primary {
        background-color: $brand-primary;

        &,
        &:visited {
            color: $white;
        }

        &:hover,
        &:focus {
            background-color: darken($brand-primary, 10%);;
        }
    }

    .btn-light {
        background-color: $white;

        &,
        &:visited {
            color: $brand-primary;
        }

        &:hover,
        &:focus {
            background-color: darken($white, 10%);;
        }
    }


    .btn-dark {
        background-color: $gray-dark;

        &,
        &:visited {
            color: $white;
        }

        &:hover,
        &:focus {
            background-color: darken($gray-dark, 5%);;
        }
    }

    .btn-square {
        display:block;
        height: 0;
        padding-bottom: 100%;
    }

    .btn-block {
        display: block;
        width: 100%;
        padding-left: 0;
        padding-right: 0;
    }

    .btn-block + .btn-block {
      margin-top: $spacer;
    }
</style>
<template>
    <router-link v-if="route" :to="route" :class="classList">{{ text }}</router-link>
    <button v-else :class="classList" @click="emitClick">{{ text }}</button>
</template>
<script>
    export default {
        props: {
            text: {
                type: String,
                required: true
            },
            route: {
                type: Object,
                default: null,
                required: false
            },
            button: {
                type: Array,
                default() {
                    return [];
                },
                required: false
            }
        },
        computed: {
            classList() {
                return this.button.reduce((accumulator, className) => `${accumulator} btn-${className}`, 'btn');
            }
        },
        methods: {
            emitClick() {
                this.$emit('click');
            }
        }
    };
</script>
