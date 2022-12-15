import { createApp } from 'vue'
import { createPinia } from 'pinia'
import App from './App.vue'
const pinia = createPinia()
const app = createApp(App)
console.info('hello world')
app.use(pinia)
app.mount('#adminka')
