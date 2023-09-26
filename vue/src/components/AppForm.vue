<template>
  <v-form @submit.prevent="emits['onSubmit']" validate-on="input">
    <div class="mb-5">
      <h2 class="text-center mb-2">
        {{ props.isEntry ? "Sign In" : "Sign Up" }}
      </h2>
      <div class="d-flex align-center">
        <p class="mr-2">
          {{
            props.isEntry
              ? "Don't have an account yet?"
              : "Already have an account?"
          }}
        </p>
        <v-btn
          :to="{ name: props.isEntry ? 'Register' : 'Entry' }"
          :text="props.isEntry ? 'Sign Up' : 'Sign In'"
          variant="text"
          color="cyan-darken-2"
        />
      </div>
    </div>
    <v-text-field
      v-if="!isEntry"
      v-model="form.name"
      required
      :error-messages="v$.name.$errors.map((e) => e.$message)"
      @input="v$.name.$touch"
      label="Name"
      class="w-100"
    />
    <v-text-field
      v-model="form.email"
      required
      :error-messages="v$.email.$errors.map((e) => e.$message)"
      @input="v$.email.$touch"
      label="E-mail"
      class="w-100"
      type="email"
    />
    <v-text-field
      v-model="form.password"
      required
      :error-messages="v$.password.$errors.map((e) => e.$message)"
      @input="v$.password.$touch"
      label="Password"
      class="w-100"
      type="password"
    />
    <v-btn type="submit" text="Submit" class="w-100" color="cyan-darken-1" />
  </v-form>
</template>

<script setup>
import { ref } from "vue";
import { useVuelidate } from "@vuelidate/core";
import { required, email } from "@vuelidate/validators";

const props = defineProps({
  isEntry: Boolean,
  initialForm: Object,
});
const emits = defineEmits(["onSubmit"]);

const rules = {
  name: { required },
  email: { required, email },
  password: { required },
};

const form = ref(props.initialForm);

const v$ = useVuelidate(rules, form);
</script>

<style></style>
