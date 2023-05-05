<script setup lang="ts">
import TextInput from "@/Components/TextInput.vue"
import InputLabel from "@/Components/InputLabel.vue"
import { Head, useForm } from "@inertiajs/vue3";
import PrimaryButton from "@/Components/PrimaryButton.vue";
const form = useForm({


    rfid: '',

});



const submit = () => {

    form.post(route('rfid'), {
        onFinish: () => form.reset('rfid'),
    });

};



</script>



<template>
    <Head title="RFID Login" />
    <form @submit.prevent="submit" method="post">


        <div class="mt-4">
            <InputLabel for="rfid" value="RFID String" />

            <TextInput id="rfid" type="password" class="mt-1 block w-full" v-model="form.rfid" required />
        </div>

        <!-- <PrimaryButton class="ml-4" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
            Log in
        </PrimaryButton> -->
        <button type="submit">Submit</button>




    </form>
</template>