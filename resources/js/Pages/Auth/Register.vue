<template>
  <breeze-authentication-card>
    <template #logo>
      <Link href="/">
        <breeze-application-logo class="w-20 h-20 fill-current text-gray-500" />
      </Link>
    </template>

    <breeze-validation-errors class="mb-4" />

    <form @submit.prevent="submit">
      <div>
        <breeze-label for="name" value="Name" />
        <breeze-input
          id="name"
          type="text"
          class="mt-1 block w-full"
          v-model="form.name"
          required
          autofocus
          autocomplete="name"
        />
      </div>

      <div class="mt-4">
        <breeze-label for="email" value="Email" />
        <breeze-input
          id="email"
          type="email"
          class="mt-1 block w-full"
          v-model="form.email"
          required
        />
      </div>

      <div class="mt-4">
        <breeze-label for="password" value="Password" />
        <breeze-input
          id="password"
          type="password"
          class="mt-1 block w-full"
          v-model="form.password"
          required
          autocomplete="new-password"
        />
      </div>

      <div class="mt-4">
        <breeze-label for="password_confirmation" value="Confirm Password" />
        <breeze-input
          id="password_confirmation"
          type="password"
          class="mt-1 block w-full"
          v-model="form.password_confirmation"
          required
          autocomplete="new-password"
        />
      </div>

      <div class="flex items-center justify-end mt-4">
        <Link :href="route('login')" class="underline text-sm text-gray-600 hover:text-gray-900">
          Already registered?
        </Link>

        <breeze-button
          class="ml-4"
          :class="{ 'opacity-25': form.processing }"
          :disabled="form.processing"
        >
          Register
        </breeze-button>
      </div>
    </form>
  </breeze-authentication-card>
</template>

<script>
import { Link } from '@inertiajs/inertia-vue3'
import BreezeApplicationLogo from '@/Components/ApplicationLogo'
import BreezeAuthenticationCard from '@/Components/AuthenticationCard'
import BreezeButton from '@/Components/Button'
import BreezeCheckbox from '@/Components/Checkbox'
import BreezeInput from '@/Components/Input'
import BreezeLabel from '@/Components/Label'
import BreezeValidationErrors from '@/Components/ValidationErrors'

export default {
  components: {
    Link,
    BreezeApplicationLogo,
    BreezeAuthenticationCard,
    BreezeButton,
    BreezeCheckbox,
    BreezeInput,
    BreezeLabel,
    BreezeValidationErrors
  },

  data() {
    return {
      form: this.$inertia.form({
        name: '',
        email: '',
        password: '',
        password_confirmation: '',
        terms: false
      })
    }
  },

  methods: {
    submit() {
      this.form.post(this.route('register'), {
        onFinish: () => this.form.reset('password', 'password_confirmation')
      })
    }
  }
}
</script>
