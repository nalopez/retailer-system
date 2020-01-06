
/**
 * First we will load all of this project's JavaScript dependencies which
 * include Vue and Vue Resource. This gives a great starting point for
 * building robust, powerful web applications using Vue and Laravel.
 */

//require('./bootstrap');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the body of the page. From here, you may begin adding components to
 * the application, or feel free to tweak this setup for your needs.
 */

/*Vue.component('example', require('./components/Example.vue'));

const app = new Vue({
    el: '#app'
});
*/

//import Vue from 'vue'

import axios from 'axios'

new Vue({
  	//this targets the div id app
  	el: '#app-login',
  	data: {
    	email: '',
    	password: '',
	    showSuccessMessage: false,
	    showFailureMessage: false,
  	},
  	methods: {
	    showLoginMessage: function () {
	    	axios.post('/api/verifyLogin', {
	    		'email': this.email, 'password': this.password
	    	}).then(({ data }) => {
		    	if (data === "OK") {
		    		this.showSuccessMessage = true
		    		this.showFailureMessage = false

		    		// redirect to homepage
		    		// TODO: redirect to page where user left
		    		window.location.href = '/home';
		    	} else {
		    		this.showSuccessMessage = false
		    		this.showFailureMessage = true
		    	}
    		});	    	  	
	    },
	}
})