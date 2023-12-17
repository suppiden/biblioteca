import './bootstrap';
import { createApp } from 'vue';
import BookList from './components/BookList.vue'
// import HelloWolrd from './components/HelloWorld.vue'

import router from './router'


createApp(BookList).use(router).mount('#app');