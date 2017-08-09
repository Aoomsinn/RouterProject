import VueRouter    from 'vue-router'

const Hello = (resolve) => require(['./components/hello.vue'], resolve)
const Numbers = (resolve) => require(['./components/number.vue'], resolve)
const Card = (resolve) => require(['./components/card.vue'], resolve)

export default new VueRouter({
    mode: 'history',
    base: __dirname,
      routes: [
        { path: '/hello', component: Hello },
        { path: '/number', component: Numbers },
        { path: '/card', component: Card }
      ]
});
