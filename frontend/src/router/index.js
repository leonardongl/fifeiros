import Vue from 'vue'
import Router from 'vue-router'
import Home from '@/components/home/Home'
import RankingGeral from '@/components/ranking/RankingGeral'
import Clubs from '@/components/clubs/Clubs'

Vue.use(Router)

export default new Router({
  routes: [
    {
      path: '/',
      name: 'Home',
      component: Home
    },
    {
      path: '/ranking',
      name: 'RankingGeral',
      component: RankingGeral
    },
    {
      path: '/clubs',
      name: 'Clubs',
      component: Clubs
    }
  ]
})
