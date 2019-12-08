import Vue from 'vue'

Vue.filter('localeNum', function(value) {
  if(!value) return ''
  return value.toLocaleString()
})

Vue.filter('currencyNum', function(value) {
  if(!value) return '0'
  return value.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
})
