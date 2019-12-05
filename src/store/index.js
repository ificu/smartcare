import Vue from 'vue'
import Vuex from 'vuex'

Vue.use(Vuex)

export default new Vuex.Store({
  state: {
    UserInfo: {UserName: "", CarNo: ""},
    DrvInfo: {SafDrvIdx:"", MovTm:""},
    CarInfo: {AccDist:""}
  },
  getters: {
    UserInfo(state) { return state.UserInfo },
    DrvInfo(state) { return state.DrvInfo },
    CarInfo(state) { return state.CarInfo },
  },
  mutations: {
    SetUserInfo(state, userInfo) {
        state.UserInfo = userInfo
    },
    SetDrvInfo(state, drvInfo) {
        state.DrvInfo = drvInfo
    },
    SetCarInfo(state, carInfo) {
      state.CarInfo = carInfo
  },
  },
  actions: {
    UpdateUserInfo({ commit }, userInfo) {
        commit('SetUserInfo', { userInfo })
    },
    UpdateDrvInfo({ commit }, drvInfo) {
        commit('SetDrvInfo', { drvInfo })
    },
    UpdateCarInfo({ commit }, carInfo) {
      commit('SetCarInfo', { carInfo })
  },
  }
})