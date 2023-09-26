<template>
  <v-sheet class="pa-3 d-flex justify-center align-center" color="transparent">
    <default-form
      @on-submit="onSubmit"
      :form="formRegistration"
      :title="formTitle"
    />
  </v-sheet>
</template>
<script setup>
import DefaultForm from "@/components/AppForm.vue";
import { ref } from "vue";
import { useStore } from "vuex";

const store = useStore();

const formRegistration = ref(store.state.formRegistration);

const formTitle = {
  title: "Sign Up",
  question: "Already have an account?",
  link: { name: "Entry" },
  btn_text: "Log In",
};

function onSubmit() {
  store.dispatch("setFormRegistration", JSON.stringify(formRegistration.value));
}
</script>
<style></style>
