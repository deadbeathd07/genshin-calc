<template>
  <v-sheet class="pa-3 d-flex justify-center align-center" color="transparent">
    <default-form
      @on-submit="onSubmit"
      :initial-form="formEntry"
      :is-entry="true"
    />
  </v-sheet>
</template>
<script setup>
import DefaultForm from "@/components/AppForm.vue";
import { computed } from "vue";
import { useStore } from "vuex";

const store = useStore();

const formEntry = computed(() => store.state.formEntry);

function onSubmit() {
  store.dispatch("setFormEntry", JSON.stringify(formEntry.value));
}
</script>
<style></style>
