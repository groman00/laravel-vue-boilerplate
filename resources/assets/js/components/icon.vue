<style>
    .icon{
        vertical-align: middle;
        font-size: inherit;
        height: 100%;
        width: 100%;
    }
</style>
<template>
    <svg v-bind:class="classObject"><use v-bind:xlink:href="iconHref"></use></svg>
</template>
<script>
    /**
     * Icon
     * @module components/icon
     * @param {string} name Icon name
     * @param {string} position Optional class name for positioning
     */
    export default {
        props: ['name', 'position'],
        computed: {
            classObject() {
                return `icon icon-${this.name} ${(this.position || 'centered')}`;
            },
            iconHref() {
                return `#icon-${this.name}`;
            }
        }
    };
</script>
