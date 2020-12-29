import Vue from 'vue'
import Router from 'vue-router'
import Home from '@/components/home/Home'
import RankingGeral from '@/components/ranking/RankingGeral'
import Clubs from '@/components/clubs/Clubs'
import ClubShow from '@/components/clubs/ClubShow'
import PlayerShow from "@/components/players/PlayerShow";
import Matches from "@/components/matches/Matches";
import MatchForm from "@/components/matches/MatchForm";

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
    },
    {
      path: '/clubs/:id',
      name: 'ClubShow',
      component: ClubShow
    },
    {
      path: '/players/:id',
      name: 'PlayerShow',
      component: PlayerShow
    },
    {
      path: '/matches',
      name: 'Matches',
      component: Matches
    },
    {
      path: '/matches/create',
      name: 'MatchForm',
      component: MatchForm
    }
  ]
})
