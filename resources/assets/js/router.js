import VueRouter    from 'vue-router'

const Hello = (resolve) => require(['./components/Hello.vue'], resolve)
const Numbers = (resolve) => require(['./components/Number.vue'], resolve)
const Card = (resolve) => require(['./components/Card.vue'], resolve)

export default new VueRouter({
    mode: 'history',
    base: __dirname,
      routes: [
        { path: '/hello', component: Hello },
        { path: '/number', component: Numbers },
        { path: '/card', component: Card }
      ]
});