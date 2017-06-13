import Vue from 'vue';
import axios from 'axios';

/**
 * Set up axios
 */
axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
// axios.defaults.headers.common['X-CSRF-TOKEN'] = document.head.querySelector('meta[name="csrf-token"]').content;
Vue.prototype.$http = axios;

/**
 * Create a new instance of Vue to use as an event hub.
 */
Vue.prototype.eventHub = new Vue();
