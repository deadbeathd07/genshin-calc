<template>
  <v-form @submit.prevent="emits['onSubmit']">
    <div class="mb-5">
      <h2 class="text-center mb-2">{{ props.title.title }}</h2>
      <div class="d-flex align-center">
        <p class="mr-2">{{ props.title.question }}</p>
        <v-btn
          :to="props.title.link"
          :text="props.title.btn_text"
          variant="text"
          color="cyan-darken-2"
        />
      </div>
    </div>
    <v-text-field v-model="props.form.name" label="Name" class="w-100" />
    <v-text-field
      v-model="props.form.email"
      label="E-mail"
      class="w-100"
      type="email"
    />
    <v-text-field
      v-model="props.form.password"
      label="Password"
      class="w-100"
      type="password"
    />
    <v-btn type="submit" text="Submit" class="w-100" color="cyan-darken-1" />
  </v-form>
</template>

<script setup>
const props = defineProps({
  title: Object,
  form: Object,
});
const emits = defineEmits(["onSubmit"]);
</script>

<style></style>
