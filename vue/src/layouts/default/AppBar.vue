<template>
  <v-app-bar title="Calculator">
    <template v-slot:append>
      <v-btn type="text">Sign Up</v-btn>
      <v-tooltip text="Sign In">
        <template v-slot:activator="{ props }">
          <v-btn v-bind="props" icon="mdi-account-circle" />
        </template>
      </v-tooltip>
    </template>
  </v-app-bar>
</template>
<script></script>

<style></style>
