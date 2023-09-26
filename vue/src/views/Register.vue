<template>
  <v-sheet class="pa-3 d-flex justify-center align-center" color="transparent">
    <v-form @submit.prevent="onSubmit">
      <div class="mb-5">
        <h2 class="text-center mb-2">Sign Up</h2>
        <div class="d-flex align-center">
          <p class="mr-2">Already have an account?</p>
          <v-btn
            :to="{ name: 'Entry' }"
            text="Log In"
            variant="text"
            color="cyan-darken-2"
          />
        </div>
      </div>
      <v-text-field
        v-model="formRegistration.name"
        label="Name"
        class="w-100"
      />
      <v-text-field
        v-model="formRegistration.email"
        label="E-mail"
        class="w-100"
        type="email"
      />
      <v-text-field
        v-model="formRegistration.password"
        label="Password"
        class="w-100"
        type="password"
      />
      <v-btn type="submit" text="Submit" class="w-100" color="cyan-darken-1" />
    </v-form>
  </v-sheet>
</template>
<script setup>
import { ref } from "vue";
import { useStore } from "vuex";

const store = useStore();

const formRegistration = ref(store.state.formRegistration);

function onSubmit() {
  store.dispatch("setFormRegistration", JSON.stringify(formRegistration.value));
}
</script>
<style></style>
