<template>
  <v-sheet class="pa-3 d-flex justify-center align-center" color="transparent">
    <default-form
      @on-submit="onSubmit"
      :initial-form="formRegistration"
      :is-entry="false"
    />
  </v-sheet>
</template>
<script setup>
import DefaultForm from "@/components/AppForm.vue";
import { computed } from "vue";
import { useStore } from "vuex";

const store = useStore();

const formRegistration = computed(() => store.state.formRegistration);

function onSubmit() {
  store.dispatch("setFormRegistration", JSON.stringify(formRegistration.value));
}
</script>
<style></style>
