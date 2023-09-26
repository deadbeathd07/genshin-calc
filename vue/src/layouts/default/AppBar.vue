<template>
  <v-app-bar color="blue-grey-darken-2">
    <template v-slot:prepend>
      <v-btn size="x-large" type="text" @click="toPage('Home')">
        <template v-slot:default>
          <v-img :width="48" :height="48" src="logo.png"></v-img>
        </template>
      </v-btn>
    </template>
    <template v-slot:append>
      <v-btn size="large" type="text" @click="toPage('Register')">
        Sign Up
      </v-btn>
      <v-tooltip text="Sign In">
        <template v-slot:activator="{ props }">
          <v-btn
            size="large"
            v-bind="props"
            icon="mdi-account-circle-outline"
            @click="toPage('Entry')"
          />
        </template>
      </v-tooltip>
    </template>
  </v-app-bar>
</template>
<script setup>
import { useRouter } from "vue-router";

const router = useRouter();

function toPage(name) {
  router.push({ name: name });
}
</script>

<style></style>
