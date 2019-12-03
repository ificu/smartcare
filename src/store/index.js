import Vue from 'vue'
import Vuex from 'vuex'

Vue.use(Vuex)

export default new Vuex.Store({
  state: {
    UserInfo: {UserName: "", CarNo: ""}
  },
  getters: {
    UserInfo(state) { return state.UserInfo },
  },
  mutations: {
    SetUserInfo(state, userInfo) {
        state.UserInfo = userInfo
    },
  },
  actions: {
    UpdateUserInfo({ commit }, userInfo) {
        commit('SetUserInfo', { userInfo })
    },
  }
})
