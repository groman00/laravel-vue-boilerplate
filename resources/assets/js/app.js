import Vue from 'vue';
import router from './routers/app';
import transitions from './helpers/transitions';

require('./bootstrap');
require('./components');

/**
 * Initialize Vue app
 */
(new Vue({
    router,
    data() {
        return {
            transitionName: transitions.push.name,
            transitionMode: transitions.push.mode
        };
    },
    watch: {
        '$route'(to, from) {
            const transition = transitions[to.params.transition || 'push'];
            this.transitionMode = transition.mode;
            this.transitionName = transition.name;
        }
    }
}).$mount('#app'));
