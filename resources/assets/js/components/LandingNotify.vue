<template>
  <div class="box box-notify">
    <div class="field is-grouped">
      <p class="control is-expanded">
        <input class="input" type="email" placeholder="Enter your email" v-model="email">
      </p>
      <p class="control">
        <button class="button is-info" :disabled="inValid(email)" v-on:click="subscribe(email)">Notify Me</button>
      </p>
    </div>
    <div class="modal" v-bind:class="{ 'is-active': openModal }">
      <div class="modal-background"></div>
      <div class="modal-content content">
        <h3>Thanks for subscribing</h3>
        <p>We're working very hard. We'll let you know when things are ready for you as soon as possible.</p>
        <p><button class="button is-primary" v-on:click="triggerModal">Close</button></p>
      </div>
    </div>
  </div>
</template>

<script>
  export default {
    data: () => {
      return {
        email: '',
        openModal: false
      }
    },
    methods: {
      inValid: function(input) {
        return input.trim() === '' || !this.isEmail(input);
      },
      isEmail: function(string) {
        return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
          .test(string);
      },
      subscribe: function(email) {
        console.log(email);
        this.triggerModal();
        this.email = '';
      },
      triggerModal: function() {
        this.openModal = !this.openModal;
      }
    }
  }
</script>
