import Vue from 'vue'
import Vuex from 'vuex'

Vue.use(Vuex)

export default new Vuex.Store({
  state: {

    UserInfo: {UserName: "", CarNo: "", UserLoginId: ""},
    DrvInfo: {SafDrvIdx:"", MovTm:""},
    CarInfo: {AccDist:""},
    ContractInfo: {CarModel:"",ProductYear:"",CarAMT:"",Option:"",Name:"",ContStart:"",ContEnd:"",ContPeriod:"",RentAMT:""}
  },
  getters: {
    UserInfo(state) { return state.UserInfo },
    DrvInfo(state) { return state.DrvInfo },
    CarInfo(state) { return state.CarInfo },
    ContractInfo(state) { return state.ContractInfo },
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
    SetContractInfo(state, contractInfo) {
      state.ContractInfo = contractInfo
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
    UpdateContractInfo({ commit }, contractInfo) {
      commit('SetContractInfo', { contractInfo })
    },
  }
})